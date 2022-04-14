<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorycontentdomain;
use RealRashid\SweetAlert\Facades\Alert;

class CategorycontentdomainController extends Controller
{



    public function create(){
        $categorycontentdomains= Categorycontentdomain::all();
        return view('admin.categorycontentdomain.create' , compact(['categorycontentdomains'  ]));    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $data = $request->all();
       Categorycontentdomain::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
       return back();
    }

    public function show($id)
    {
        //
    }


    public function edit($id){
        $categorycontentdomain=Categorycontentdomain::find($id);
        return view('admin.categorycontentdomain.edit' , compact(['categorycontentdomain'  ]));
    }


    public function update(Request $request, $id , Categorycontentdomain $categorycontentdomain){
        $request->validate([
            'name' => 'required', 
        ]);
        $categorycontentdomain=Categorycontentdomain::find($id);
        $data = $request->all();
        $categorycontentdomain->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Categorycontentdomain::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'categorycontentdomains');
        return back();
    }




}
