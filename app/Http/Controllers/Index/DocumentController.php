<?php

namespace App\Http\Controllers\Index;

use App\Models\Setting;
use App\Models\Txtdese;
use App\Models\Document;
use App\Models\Categoryapi;
use Illuminate\Http\Request;
use App\Models\Textwebservice;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class DocumentController extends Controller
{


    public function __construct()
    {
        // $this->middleware('guest:web');

        $setting=Setting::where('id' , '1')->first();
        $this->template = $setting->template;
    }

    public function index($myurl='all'){
        $documents= Document::all();
        $categoryapis= Categoryapi::all();
        $txtdese=Txtdese::where('id' , '6')->first();

        if($myurl=='all'){
            $textwebservices= Textwebservice::all();
        }else{
            $textwebservices= Textwebservice::where('url' , $myurl)->first();
        }



        return view($this->template.'.document.index' , compact(['documents' , 'textwebservices' , 'categoryapis' , 'txtdese'  , 'myurl' ]));

        }


}
