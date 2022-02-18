<?php

namespace App\Http\Controllers\User;

use App\Models\Domain;
use App\Models\Setting;
use App\Rules\Uniqemail;
use App\Models\Nameserver;
use App\Rules\ValidateRule;
use Illuminate\Http\Request;
use App\Rules\NameserverRule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class NameserverController extends Controller
{


    public function index(){
        $namesevers= Nameserver::all();
        return view('user.nameserver.index' , compact(['namesevers'  ]));
    }


    public function create(){
        $user_id = Auth::guard('user')->user()->id;
        $domains=Domain::where([ ['user_id' , $user_id ], ])->get();
        return view('user.nameserver.create'  , compact(['domains'  ]));
    }

    public function edit($id){
        $user_id = Auth::guard('user')->user()->id;
        $domains=Domain::where([ ['user_id' , $user_id ], ])->get();
        $nameserver=Nameserver::find($id);
        return view('user.nameserver.edit' , compact(['nameserver' , 'domains'  ]));
    }


    public function store(Request $request)
    {


        $request->validate([
            'newhost' => ['required',new ValidateRule('regec_eng'),new NameserverRule('check_newhost')] ,
            'ip1' => 'required|ipv4' ,
            'ip2' => 'required|ipv4' ,
            'domain_id' => 'required|unique:nameservers,domain_id' ,
        ],[
            'domain_id.unique' => 'Nameserver این دامنه قبلا ثبت شده است لطفا از ویرایش جهت ثبت Nameserver جدید اقدام نمایید',

        ]);



        $data = $request->all();

       Nameserver::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('user.nameserver.index');
    }

    public function show($id)
    {
        $nameserver=Nameserver::find($id);
        return view('user.nameserver.show' , compact(['nameserver'  ]));

    }



    public function update(Request $request, $id  ){


        $request->validate([
            'newhost' => ['required',new ValidateRule('regec_eng') ,new NameserverRule('check_newhost')] ,
            'ip1' => 'required|ipv4' ,
            'ip2' => 'required|ipv4' ,
            'domain_id' => ['required',new Uniqemail('nameservers','domain_id' ,$id)] ,

        ]);

        $nameserver=Nameserver::find($id);
        $data = $request->all();
        $nameserver->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Nameserver::destroy($id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return redirect()->route('user.nameserver.index');
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'namesevers');
        return back();
    }




}
