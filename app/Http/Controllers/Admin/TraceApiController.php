<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TraceApi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TraceApiController extends Controller
{


    public function index(){
        $trace_apis= TraceApi::orderBy('id', 'DESC')->get();
        return view('admin.trace.index' , compact(['trace_apis'  ]));
    }
 


}
