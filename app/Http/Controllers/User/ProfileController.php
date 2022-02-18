<?php

namespace App\Http\Controllers\User;

use App\Rules\Uniqemail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function index(){
        return view('user.profile.index');
    }
    public function show(){
        $user = Auth::guard('user')->user();
        return view('user.profile.show', compact(['user'  ]));
    }
    public function edit(){
        $user = Auth::guard('user')->user();
        return view('user.profile.edit', compact(['user'  ]));
    }
    public function update(Request $request ){

        $id = Auth::guard('user')->user()->id;

        $request->validate([
            'name' => 'required',
            'username' => ['required',new Uniqemail('users','username',$id)] ,
            'email' => ['required' , 'email',new Uniqemail('users','email',$id)] ,
            'tell' => ['required', 'regex:/^09[0-9]{9}$/' ,new Uniqemail('users','tell',$id)] ,
        ]);


        $user = Auth::guard('user')->user();
        $data = $request->all();
        $data['image']= $user->image;
        $data['image']  =  uploadFile($request->file('image'),'images/profiles',$user->image);


 $user->update($data);
Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
return back();

    }
    public function secret(){
        return view('user.profile.index');
    }
}
