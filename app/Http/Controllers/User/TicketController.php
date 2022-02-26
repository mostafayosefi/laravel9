<?php

namespace App\Http\Controllers\User;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class TicketController extends Controller
{


    public function index(){
        $tickets= Ticket::all();
        return view('user.ticket.index' , compact(['tickets'  ]));
    }


    public function create(){
        return view('user.ticket.create' );
    }

    public function edit($id){
        $ticket=Ticket::find($id);
        return view('user.ticket.edit' , compact(['value'  ]));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $data['image']  =  uploadFile($request->file('image'),'images/tickets','');

       Ticket::create($data);
       Alert::success('با موفقیت ثبت شد', 'تیکت جدید با موفقیت ثبت شد');
        return redirect()->route('user.ticket.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , Ticket $ticket){
        $request->validate([
            'name' => 'required',
            'text' => 'required',
        ]);
        $ticket=Ticket::find($id);
        $data = $request->all();
        $data['image']= $ticket->image;
        $data['image']  =  uploadFile($request->file('image'),'images/tickets',$ticket->image);
        $ticket->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Ticket::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'tickets');
        return back();
    }




}
