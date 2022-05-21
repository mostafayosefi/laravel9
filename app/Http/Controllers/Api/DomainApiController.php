<?php

namespace App\Http\Controllers\Api;

use App\Rules\ValidateLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Service\DomainController;

class DomainApiController extends Controller
{

    public function checkdomain(Request $request){

        $trace['operator']='checkdomain';

        $domain=validate_domain( $request);
        if($domain=='invalid'){

            $trace['status']='inactive';
            $data=my_trace_api($trace);
            return response()->json(['error' => 'Invalide Format Domain Example yahoo.com'], 400);
        }else{

            $data=my_trace_api($trace);
$request['searchdomain']=$request->domain;
            $data=all_request_domain($request);
            $data['muldomain']=$request->muldomain;
            $tasks_controller = new DomainController('api');
            return  $tasks_controller->CheckAvailability(  $data );
        }
    }


    public function buy(Request $request){
        $domain=validate_domain( $request);
        if($domain=='invalid'){
            return response()->json(['error' => 'Invalide Format Domain Example yahoo.com'], 400);
        }else{
            return response()->json([
                'detials' => 'error' ,
                'message' => 'The amount of charge is not enough to buy'], 200);
        }
    }



    public function countdomain(Request $request){

            return response()->json([
                'detials' => 'success' ,
                'count' => '0'  ], 200);

    }





}
