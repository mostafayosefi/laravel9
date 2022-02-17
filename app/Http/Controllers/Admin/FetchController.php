<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FetchController extends Controller
{
    public function font($value){


        return view('admin.fetch.font' , compact(['value'  ]));
 


    }
}
