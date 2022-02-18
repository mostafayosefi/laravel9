<?php

namespace App\Http\Controllers\User;

use App\Models\Domain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{


    public function index(){
        $user_id = Auth::guard('user')->user()->id;
        $orders= Domain::where([ ['user_id' , $user_id ] , ])->orderby('id','desc')->get();
        return view('user.order.index' , compact(['orders'  ]));
    }



    public function show($id)
    {
         $order=Domain::find($id);
        return view('user.order.show' , compact(['order'    ]));    }



    public function payment(Request $request , $id , Domain $domain){
        $domain=Domain::find($id);
        $data = $request->all();
        $data['user_id']  = Auth::guard('user')->user()->id;
        dd($data);

    }




    public function update(Request $request, $id , Value $value){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $value=Value::find($id);
        $data = $request->all();
        $data['image']= $value->image;
        $data['image']  =  uploadFile($request->file('image'),'images/values',$value->image);
        $value->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
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

    public function status(Request $request , $id){
        $status=Change_status($id,'values');
        return back();
    }




}
