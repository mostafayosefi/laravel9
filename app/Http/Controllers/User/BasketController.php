<?php

namespace App\Http\Controllers\User;

use App\Models\Domain;
use App\Models\Contact;
use App\Models\Countrie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Service\DomainController;

class BasketController extends Controller
{

    public function index()
    {
        $user_id = Auth::guard('user')->user()->id;
        $orders= Domain::where([
            ['user_id' , $user_id ] ,
            ['status' , '<>' ,'active' ] ,
        ])->orderby('id','desc')->get();
         $user_id=Auth::guard('user')->user()->id;
         $contacts= Contact::where('user_id' , $user_id)->orderby('id' , 'desc')->get()->all();
        return view('custome.basket.index' , compact(['orders' , 'contacts'   ]));    }

    public function show($id)
    {
        $user_id = Auth::guard('user')->user()->id;
        $order= Domain::where([
            ['user_id' , $user_id ] ,
            ['status' , '<>' ,'active' ] ,
            ['id' , $id ] ,
        ])->orderby('id','desc')->first();
         $countries= Countrie::all();
         $user_id=Auth::guard('user')->user()->id;
         $contacts= Contact::where('user_id' , $user_id)->orderby('id' , 'desc')->get()->all();
        return view('custome.basket.show' , compact(['order' , 'countries' , 'contacts'   ]));    }



        public function store(Request $request , $id , Domain $domain){
 
        $data=rule_buy_domain($request);



            $domain=Domain::find($id);
            $data = $request->all();
            $data['user_id']  = Auth::guard('user')->user()->id;
            $data['domain_id']  = $id;

            $order = Order::updateOrCreate([
            'domain_id' => $domain->id
        ], [
            'user_id' => $data['user_id'],
            'contact_id' => $data['contact_id'],
            'private' => $data['private'],
        ]);

        $payment = Payment::updateOrCreate([
            'order_id' => $order->id
        ], [
            'type' => $data['type'],
            'textUser' => $data['textUser'],
        ]);



        $domain->update(['dns1' => $data['dns1'] , 'dns2' => $data['dns2'] ,'dns3' => $data['dns3'] , 'dns4' => $data['dns4'] ,
        'private' => $data['private'], 'renew' => $data['renew'], 'years' => $data['years'], ]);
        Alert::success('با موفقیت ارسال شد', 'پیام شما با موفقیت ارسال شد');
        return back();








// checkdomain

//   $data=all_request_domain($request);
//   $tasks_controller = new DomainController('web');
//   return  $tasks_controller->CheckAvailability(  $data );






//   addcontact
/*
$user = Auth::guard('user')->user();
$rulle=rulecontact($request);
$data = $request->all();
$data['user_id']  = Auth::guard('user')->user()->id;
$data['operator']= 'contactAdd';
$tasks_controller = new MyContactController('web');
return  $tasks_controller->ContactAdd(  $data );
Contact::create($data);
Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
return back(); */













        }






        public function destroy($id , Request $request){
            $user_id = Auth::guard('user')->user()->id;
            $delete=Domain::where([ ['id' , $id ] ,  ['user_id' , $user_id ] ,  ['status' , 'rezerve' ] ,  ])->delete();
            // Domain::destroy($id);
            if($delete){
                Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
            }else{
                Alert::error('عملیات حذف متاسفانه بامشکل مواجه شد!', 'توجه نمایید فقط سفارشات پرداخت نشده قابل حذف می باشند');
            }
            return redirect()->route('user.order.index');
        }






}
