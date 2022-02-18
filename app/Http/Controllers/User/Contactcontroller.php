<?php

namespace App\Http\Controllers\User;

use App\Models\Contact;
use App\Models\Countrie;
use App\Rules\ValidateLink;
use App\Rules\ValidateRule;
use App\Rules\Uniqemail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Service\MyContactController;
use Illuminate\Support\Arr;

class Contactcontroller extends Controller
{








    public function index(){



// $array = [ 'languages' => ['PHP', 'Ruby']];

// $flattened = Arr::flatten($array);
// return $flattened;

        $user_id=Auth::guard('user')->user()->id;
        $contacts= Contact::where('user_id' , $user_id)->get()->all();
        $contact = Contact::where('user_id' , $user_id)->first();
        return view('user.contact.index' , compact(['contacts' , 'contact'   ]));
    }


    public function create(){
        $contacts= Contact::where('user_id' , auth()->guard('user')->user()->id)->get()->all();
        $countries= Countrie::all();
        return view('user.contact.create' , compact(['contacts' , 'countries'   ]));
    }

    public function edit($id)
    {
        $user_id=Auth::guard('user')->user()->id;
        $contacts= Contact::where('user_id' , $user_id)->get()->all();
        $contact = Contact::where([ ['user_id' , $user_id] ,   ['id' , $id] ,  ])->first();
        $countries= Countrie::all();
        return view('user.contact.edit' , compact(['contact' ,'contacts'  ,'countries'  ]));
    }


    public function store(Request $request)
    {
        $user = Auth::guard('user')->user();
        $rulle=rulecontact($request);
        $data = $request->all();
        $data['user_id']  = Auth::guard('user')->user()->id;
        $data['operator']= 'contactAdd';
       $tasks_controller = new MyContactController('web');
       return  $tasks_controller->ContactAdd(  $data );
       Contact::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('user.contact.index');
    }

    public function show($id)
    {

        $user_id=Auth::guard('user')->user()->id;
        $contacts= Contact::where('user_id' , $user_id)->get()->all();
        $contact = Contact::where([ ['user_id' , $user_id] ,   ['id' , $id] ,  ])->first();
        return view('user.contact.show' , compact(['contact' ,'contacts'   ]));

       }



    public function update(Request $request , $id , Contact $contact){

        $contact=Contact::find($id);

        $request->validate([
            'nikname' => ['required',new Uniqemail('contacts','nikname',$id)] ,
        ]);
        $rulle=rulecontact($request);
        $data = $request->all();
        $data['user_id']  = Auth::guard('user')->user()->id;
        $data['contact_id']= $contact->contact_id;
        $data['id']= $contact->id;
        $data['operator']= 'contactUpdate';
       $tasks_controller = new MyContactController('web');
       return  $tasks_controller->ContactUpdate(  $data );
    }


    public function destroy($id , Request $request ){

        $contact=Contact::find($request->id);
        $data = $request->all();
        $data['id']=$request->id;
        $data['contact_id']=$contact->contact_id;
        $data['operator']= 'contactDelete';

      /*   if($contact->contact_id!= Null){
            $tasks_controller = new MyContactController('web');
            return  $tasks_controller->ContactDelete(  $data );
        }else{
            Contact::destroy($request->id);
            $user_id=Auth::guard('user')->user()->id;
            $status=SelectDefault($user_id,'0');
            Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
            return redirect()->route('user.contact.index');
        } */



        Contact::destroy($request->id); 
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return redirect()->route('user.contact.index');


  }

    public function default( $id){

        $user_id=Auth::guard('user')->user()->id;
        $status=SelectDefault($user_id,$id);
        Alert::info('با موفقیت انتخاب شد', 'اکانت دیفالت باموفقیت تغییر پیدا کرد');
        return back();
    }


    public function status(Request $request , $id){
        $status=Change_status($id,'contacts');
        return back();
    }




}
