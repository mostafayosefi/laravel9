<?php

namespace App\Http\Controllers\User;


use App\Models\User;
use GuzzleHttp\Psr7;
// use GuzzleHttp\Psr7\Request;

use App\Models\Domain;

use GuzzleHttp\Client;

use App\Models\Setting;
use App\Models\Webservice;
use App\Models\Checkdomain;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ContentDomain;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use GuzzleHttp\Exception\RequestException;
use App\Http\Controllers\Service\DomainController;

class MyDomainController extends Controller
{

    public function __construct()
    {
     }


    public function index(){
        $user = Auth::guard('user')->user();
        return view('user.domain.index', compact(['user' ]));


    }

    public function CheckDomain($name='all'){

        $user = Auth::guard('user')->user();

        $contentdomains= ContentDomain::where('status' , 'active')->get();
        $query=Checkdomain::query()->where([
            ['webservice_id' , '=' ,Session::get('webservice_id')],
            ['domain' , '=' ,Session::get('domain')],
            ]);
            $result=$query->first();
            $resultdomain=$query->get();
        $checkdomains=Checkdomain::where([
            ['webservice_id' , '=' ,Session::get('webservice_id')],
            ['domain' , '<>' ,Session::get('domain')],
            ])->get();


        return view('user.domain.search', compact(['user' , 'contentdomains' , 'result'  , 'checkdomains' ,'name'  ,'resultdomain' ]));
    }




    public function CheckDomainPost(Request $request){
  $data=all_request_domain($request);
  $tasks_controller = new DomainController('web');
  return  $tasks_controller->CheckAvailability(  $data );


    }




    public function BuyPost(Request $request){

        $request->validate([
            'domain' => 'required',
        ]);

        $data = $request->all();
        $data['status']  =  'rezerve';
        $data['user_id']  = Auth::guard('user')->user()->id;
   $defaultcontact=ValidateContact($data['user_id']);
  if($defaultcontact=='0'){
Alert::success('لطفا اکانت خود را ثبت نمایید       ', '     لطفا نسبت به ثبت اکانت جدید لطفا اقدام نمایید');
return redirect()->route('user.contact.index');  }

$data['contact_id']  =  $defaultcontact;
    Domain::create($data);

    // $domain=Domain::find(1);
    // dd($domain->contact);


Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
return redirect()->route('user.order.index');

    }









}
