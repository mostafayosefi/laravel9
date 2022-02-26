<?php

namespace App\Http\Controllers\Admin;

use App\Models\Domain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{



    public function index(){
        $orders= Domain::all();
        return view('admin.order.index' , compact(['orders'  ]));
    }

    public function show(Domain  $order){
 
        return view('admin.order.show' , compact(['order'  ]));
    }


}
