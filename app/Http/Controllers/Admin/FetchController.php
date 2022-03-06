<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Domain;

class FetchController extends Controller
{
    public function font($value){
        return view('admin.fetch.font' , compact(['value'  ]));
    }

    public function timeexpire($id , $value){
        $order=Domain::find($id);
        return view('custome.fetch.expire_time' , compact(['value' , 'order'  ]));
    }
    
    public function payment( $id , $value ){
        $order=Domain::find($id);
        return view('custome.fetch.payment' , compact(['value' , 'order'  ]));
    }
}
