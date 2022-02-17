<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Models\Comid;
use App\Models\Iconfont;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ComidController extends Controller
{

    public function index(  $status)
    {

        if($status=='first'){
            $comids = Comid::wherestatus()->get();
            $iconfonts= Iconfont::all();
            return view('admin.comid.first' , compact(['comids' , 'iconfonts'  ]));
        }
        if($status=='second'){
            $comids = Comid::where('status' , 'second')->get();
            return view('admin.comid.second' , compact(['comids'   ]));
        }
        if($status=='coment'){
            $comids = Comid::where('status' , 'coment')->get();
            return view('admin.comid.coment' , compact(['comids'   ]));
        }
    }







    public function store(Request $request,  $status   )
    {

if($status=='first'){
    Comid::create(['title' => $request->title  ,'text' => $request->text ,
    'icon' => $request->icon , 'btn' => $request->btn  , 'link' => $request->link  , 'status' => $status     ]);

}


if($status=='second'){

$request->validate([
    'title' => 'required',
    'image'  => 'required'

]);

$data = $request->all();
$data['image']  =  uploadFile($request->file('image'),'images/setting','');


Comid::create(['title' => $request->title  , 'status' => $status   ,'image' =>$data['image']   ]);

}



if($status=='coment'){
    Comid::create(['title' => $request->title  ,'text' => $request->text   ,
     'role' => $request->role  , 'status' => $status     ]);

}

Alert::success('با موفقیت ثبت شد', 'اطلاعات با موفقیت ثبت شد');
return redirect()->back();


    }


    public function edit(  $status , $id)
    {

        $comid = Comid::where([
            ['status' , '=' , $status],
            ['id' , '=' , $id]
        ])->first();
        $iconfonts= Iconfont::all();
        return view('admin.comid.edit' , compact(['comid' , 'iconfonts'  ]));

    }




    public function update(Request $request,  $status  , $id)
    {
        $comid=  Comid::where([
            ['status' , '=' , $status],
            ['id' , '=' , $id]
        ])->first();
$data = $request->all();
$data['image']  =  uploadFile($request->file('image'),'images/setting',$comid->image);
$comid->update($data);


Alert::info('با موفقیت ویرایش شد', 'اطلاعات با ویرایش  شد');
return back();


    }


    public function destroy($status , $id , Request $request)
    {


            Comid::destroy($request->id);
            Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
            return back();

    }





}
