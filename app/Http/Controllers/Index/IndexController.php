<?php

namespace App\Http\Controllers\Index;


use App\Models\Page;

use App\Models\User;
use App\Models\Comid;
use App\Models\Support;
use App\Models\Txtdese;
use App\Models\Spotlite;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class IndexController extends Controller
{



    public function __construct()
    {
        // $this->middleware('guest:web');
    }


    public function index(){

   /*      User::create([
            'username' => 'Name34ujkkk',
            'name' => 'Name34',
            'email' => 'mustafa1390@gmail.com',
            'password' => Hash::make('123456') ,
        ]); */
        $spotlites = Spotlite::all();
        $comidsfirst  = Comid::where([ ['status' , 'first'], ])->get();
        $comidssec  = Comid::where([ ['status' , 'second'], ])->get();
        $coment  = Comid::where([ ['status' , 'coment'], ])->get();
        $mysetting=Setting::find(1);

//test
        return view('index.home.index' , compact([ 'spotlites' , 'comidsfirst' , 'comidssec'  , 'coment'  , 'mysetting' ]));
        // return view('indexhost.home.index' , compact([ 'spotlites' , 'comidsfirst' , 'comidssec'  , 'coment'  , 'mysetting' ]));
    }


    public function panel(){
        return view('user.panel.index');
    }

    public function dashboard(){
        $dash_id  = Auth::guard('user')->user()->id;

        return view('custome.dashboard.index' , compact(['dash_id']));
    }

    public function page($title  ){
        $mypage=Page::where('title' , $title)->first();
        return view('index.page.mypage' , compact(['mypage']));
        // return view('indexhost.page.mypage' , compact(['mypage']));
    }

    public function support(){
        $txtdese=Txtdese::where('id' , '4')->first();
        return view('index.support.index' , compact(['txtdese']));
        // return view('indexhost.support.index' , compact(['txtdese']));
    }


    public function supportPost(Request $request){

        $input = $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'tell' => 'required| min:4',
            'text' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);



    Support::create($request->all());
Alert::success('با موفقیت ارسال شد', 'پیام شما با موفقیت ارسال شد');

return back();

    }




    public function faqs(){
        $faqs=Faq::all();
        $txtdese=Txtdese::where('id' , '5')->first();
        $setting=Setting::find(1);

        return view('index.faqs.index' , compact(['faqs' , 'txtdese' , 'setting']));
        // return view('indexhost.faqs.index' , compact(['faqs' , 'txtdese' , 'setting']));
    }


}
