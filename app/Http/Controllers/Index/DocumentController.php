<?php

namespace App\Http\Controllers\Index;

use App\Models\Txtdese;
use App\Models\Categoryapi;
use Illuminate\Http\Request;
use App\Models\Textwebservice;
use App\Http\Controllers\Controller;
use App\Models\Document;
use RealRashid\SweetAlert\Facades\Alert;

class DocumentController extends Controller
{


    public function index($myurl='all'){
        $documents= Document::all();
        $categoryapis= Categoryapi::all();
        $txtdese=Txtdese::where('id' , '6')->first();

        if($myurl=='all'){
            $textwebservices= Textwebservice::all();
        }else{
            $textwebservices= Textwebservice::where('url' , $myurl)->first();
        }



        return view('index.document.index' , compact(['documents' , 'textwebservices' , 'categoryapis' , 'txtdese'  , 'myurl' ]));
        // return view('indexhost.document.index' , compact(['documents' , 'textwebservices' , 'categoryapis' , 'txtdese'  , 'myurl' ]));

        }


}
