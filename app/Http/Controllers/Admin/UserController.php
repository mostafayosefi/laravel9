<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Rules\Uniqemail;
use Illuminate\Http\Request;
use App\Models\Loginhistorie;
use Illuminate\Validation\Rule;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

  /*       User::create([
            'name' => 'Name34',
            'email' => 'nnn33@gmail.com',
            'password' => Hash::make('123456') ,
        ]); */

        $users=User::all();



return view('admin.user.index' , compact(['users'  ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create' );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,$request->username',
            'email' => 'required|unique:users,email,$request->email',
            'password' => 'required| min:4 |confirmed',
            'password_confirmation' => 'required| min:4'
        ]);


        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password) ,
        ]);

        Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = User::find($id);
        $subreferal = User::where('referal' , $id )->get();
        $inviteds = User::find($admin->referal);
        $loginhistories=Loginhistorie::where('user_id',$id)->get();

        return view('admin.user.edit' , compact([ 'admin' , 'subreferal', 'inviteds' , 'loginhistories' ]) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

/*
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'emails' => [new Uniqemail],
            'tell' => 'required',
        ]); */
/*
        $request->validate([
            'username' => Rule::unique('users')->where(function ($query) {
                return $query->where('id', 3) ;
            }),
        ]); */


        $request->validate([
            'name' => 'required',
            'username' => ['required',new Uniqemail('users','username',$id)] ,
            'email' => ['required' , 'email',new Uniqemail('users','email',$id)] ,
            'tell' => ['required', 'regex:/^09[0-9]{9}$/' ,new Uniqemail('users','tell',$id)] ,
        ]);


        $user=User::find($id);
        $data = $request->all();
        $data['image']= $user->image;
        $data['image']  =  uploadFile($request->file('image'),'images/users',$user->image);
 $user->update($data);
 Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
 return back();


    }




    public function secret(Request $request, $id)
    {

        session(['err' => '1']);
        $request->validate([
            'password' => 'required| min:4 |confirmed',
            'password_confirmation' => 'required| min:4'
        ]);
$user= User::find($id);
$user->update([ 'password' => Hash::make($request->password) ]);

$request->session()->forget('err');

 Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
 return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




    public function status(Request $request , $id){

$status=Change_status($id,'users');
return back();

    }
}
