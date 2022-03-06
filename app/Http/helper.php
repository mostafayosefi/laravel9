<?php

use App\Models\User;
use App\Models\Wallet;
use App\Models\Contact;
use App\Models\Setting;

use App\Rules\Uniqemail;

use App\Models\Webservice;
use App\Models\Checkdomain;
use App\Rules\ValidateLink;
use App\Rules\ValidateRule;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use App\Models\ContentDomain;
use App\Models\Loginhistorie;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;



if(!function_exists('isActive'))
{
    function isActive($key , $activeClassName = 'active')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $activeClassName : '';
        }
        return Route::currentRouteName() == $key ? $activeClassName : '';
    }
}


if(!function_exists('isShow'))
{
    function isShow($key , $showClassName = 'show')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $showClassName : '';
        }
        return Route::currentRouteName() == $key ? $showClassName : '';
    }
}







//get Status EmployerPackage
if(! function_exists('getStatusEmployerPackage') ) {

    function getStatusEmployerPackage($status)
    {
        if($status == 'active')
        {
            echo '<span class="badge badge-primary">فعال</span>';
        }
        elseif($status == 'inactive')
        {
            echo '<span class="badge badge-danger">غیرفعال</span>';
        }
        else
        {
            echo '<span class="badge badge-info">بررسی شده</span>';
        }
    }

}





if(! function_exists('getstatusdefault') ) {

    function getstatusdefault($status)
    {



/*
        if($status == 'active')
        {
            echo '<i class="fas fa-toggle-on"  ></i> Default';

        }
        elseif($status == 'inactive')
        {
            echo '';
        }
 */

        if($status == 'active')
        {
            echo '<div class="form-check form-check-inline">
            <label class="form-check-label"><input type="radio"   disabled checked class="form-check-input"> پیش فرض </label>
             </div>  ';

        }
        elseif($status == 'inactive')
        {
            echo '<div class="form-check form-check-inline">
            <label class="form-check-label"><input type="radio"   disabled   class="form-check-input">   </label>
             </div> ';
        }



    }

}



if(! function_exists('uploadFile') ) {

    function uploadFile($file,$path,$defaultfile)
    {





 if($file){
        $current_timestamp = \Carbon\Carbon::now()->timestamp;
        $imagePath = "/upload/$path/";
        $filename = $current_timestamp . $file->getClientOriginalName();
        $file = $file->move(public_path($imagePath) , $filename);
        return $imagePath.$filename;

 }else{
     return $defaultfile;
 }
    }

}



//get date_frmat
if(! function_exists('date_frmat') ) {
    function date_frmat($date)
    {
        $date = Jalalian::forge($date)->format('Y/m/d ساعت H:i a');
        return $date;
        // return Verta($date)->format('Y/m/d ساعت H:i a');

    }

}


 if(! function_exists('date_frmat_ymd') ) {
    function date_frmat_ymd($date)
    {
        $date = Jalalian::forge($date)->format('Y/m/d');
        return $date;

    }

}



if(! function_exists('urllink') ) {

    function urllink($urllink)
    {

$mystring = $urllink; $findme   = 'http'; $pos = strpos($mystring, $findme);
  if ($pos !== false) {  $mystring = $urllink; }else{ $mystring = 'http://'.$urllink; }
return  $mystring;

  }
}



if(! function_exists('Mywallet') ) {
    function Mywallet($user_id,$operator)
    {


        $query=Wallet::query()->where([
            ['user_id' , '=' ,$user_id],
            ['status' , '=' ,'active'],
        ]);
        $my_inc=$query->where([
            ['flag' , '=' ,'inc'],
            ])->sum('price');

            $my_dec=$query->where([
                ['flag' , '=' ,'dec'],
                ])->sum('price');


                $mycharge= $my_inc - $my_dec;

                if($operator=='inc'){  return $my_inc;}
                if($operator=='dec'){  return $my_dec;}
                if($operator=='mycharge'){  return $mycharge;}




    }
}

if(! function_exists('linkdomain') ) {
    function linkdomain($domain,$suffix)
    {

 $countDot=0;
         foreach (count_chars($domain, 1) as $char => $count) {
            if(chr($char) =='.'){   $countDot=$count; }
         }
 if($countDot=='0') {
    return $domain.'.'.$suffix;
  }else{
      return $domain;
    $headers = explode('.', $domain);
    $headers['0'];
  }

  }
}

if(! function_exists('ValidateContact') ) {
    function ValidateContact($user_id)
    {

        $query=Contact::query()->where([
            ['user_id' , '=' ,$user_id],
            ]);
            $mycontact=$query->first();


        $query=Contact::query()->where([
            ['user_id' , '=' ,$user_id],
            ['default' , '=' , 'active'],
            ]);
            $default=$query->first();


            if($mycontact){

        if($default){return $default->id; }else{
            Contact::where('id', $mycontact->id)
            ->update(['default' => 'active']);
            return $mycontact->id;  }

        }else{
           return '0';
        }
    }
}






if(! function_exists('query_resource') ) {
    function query_resource($data,$table)
    {

if($table=='checkdomain'){

        $query=Checkdomain::query()->where([
            ['webservice_id' , $data['webservice_id']],
            ]);

        $myquery=Checkdomain::query()->where([
                ['webservice_id' , $data['webservice_id']],
                ])->orderBy('type' ,'asc')->get();

if($data['muldomain']=='1'){
    $myquery=$query->orderBy('type' ,'asc')->get();
} else{
            $myquery=$query->where([
                ['type' , 'search'],
                ])->orderBy('type' ,'asc')->get();

        }


    }



    return $myquery;


    }
}

        if(! function_exists('SelectDefault') ) {
            function SelectDefault($user_id,$contact)
            {
        Contact::where('user_id', $user_id)
        ->update(['default' => 'inactive']);

if($contact!='0'){
    Contact::where('id', $contact)
    ->update(['default' => 'active']);
}else{
    $mycontact = Contact::where('user_id', $user_id)
    ->orderByDesc('id')->first();

    if($mycontact){
        Contact::where('id', $mycontact->id)
        ->update(['default' => 'active']);
    }

}

    }
}





if(! function_exists('linkdomainOrigin') ) {
    function linkdomainOrigin($domain,$suffix)
    {

 $countDot=0;
         foreach (count_chars($domain, 1) as $char => $count) {
            if(chr($char) =='.'){   $countDot=$count; }
         }
 if($countDot=='0') {
    return $domain;
  }else{
    //   return $domain;
    $headers = explode('.', $domain);
    return $headers['0'];
  }

  }
}





if(! function_exists('multidomain') ) {
    function multidomain($domain,$orginaldomain)
    {
$origin=$orginaldomain.',';
$net=$domain.'.net,';
$org=$domain.'.org,';
// $co=$domain.'.co,';
$com=$domain.'.com,';
// $biz=$domain.'.biz';

$multi=$origin;

if($origin==$com){}else{$multi.=$com;}
if($origin==$org){}else{$multi.=$org;}
if($origin==$net){}else{$multi.=$net;}


 $multi .= '';

if($origin==$net||$origin==$org||$origin==$com){$count='3';}else{$count='4';}

 $mul=array();
 $mul['AllDomain']= $multi;
 $mul['CountWhile']= $count;

 return $mul;
    }
}

//get Status EmployerPackage
if(! function_exists('getStatusEmployerPackage') ) {

    function getStatusEmployerPackage($status)
    {
        if($status == 'active')
        {
            echo '<span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp; فعال </span>';
        }
        elseif($status == 'inactive')
        {
            echo '
            <span class="badge badge-warning"><i data-feather="x-circle"></i> &nbsp; غیرفعال </span> ';
        }
        else
        {
            echo '<span class="badge badge-info">بررسی شده</span>';
        }
    }

}




if(! function_exists('update_lastlogin') ) {
    function update_lastlogin($id, $key)
    {




        if($key=='login'){
            $myuser =  User::addSelect(['last_login' => Loginhistorie::select('created_at')
            ->whereColumn('user_id', 'users.id')
            ->where('users.id' , $id)
            ->orderByDesc('created_at')
            ->limit(1)
        ])->first();
        return $myuser->last_login;}


        if($key=='ip'){
            $myuser =  User::addSelect(['last_ip' => Loginhistorie::select('ip')
            ->whereColumn('user_id', 'users.id')
            ->where('users.id' , $id)
            ->orderByDesc('created_at')
            ->limit(1)
        ])->first();
        return $myuser->last_ip;}

    }

}



if(! function_exists('Change_status') ) {
    function Change_status($id, $table)
    {
        if($table=='users'){
            $table= User::find($id);
            Alert::success('تغییر وضعیت اکانت با موفقیت انجام شد', 'تغییرات وضعیت اکانت با موفقیت انجام شد');
        }
        if($table=='contentdomains'){
            $table= ContentDomain::find($id);
            Alert::success('تغییر وضعیت پسوند دامنه با موفقیت انجام شد', 'تغییرات وضعیت پسوند دامنه با موفقیت انجام شد');
        }




        if($table->status=='active'){$status='inactive';}
        elseif($table->status=='inactive'){$status='active';}
        $flag = $table->update([ 'status' => $status ]);
        return $flag;


    }






    if(! function_exists('secret_user') ) {
        function secret_user(Request $request , $user , $oper)
        {


            if($oper=='secret'){

                session(['err' => '1']);
                $request->validate([
                    'password' => 'required| min:4 |confirmed',
                    'password_confirmation' => 'required| min:4'
                ]);
        $user->update([ 'password' => Hash::make($request->password) ]);
        Alert::success('با موفقیت ویرایش شد', 'رمزعبور با موفقیت تغییر پیدا کرد ');
            }


            if($oper=='update'){
                $request->session()->forget('err');

                $request->validate([
                    'name' => 'required',
                    'username' => ['required',new Uniqemail('users','username',$user->id)] ,
                    'email' => ['required' , 'email',new Uniqemail('users','email',$user->id)] ,
                    'tell' => ['required', 'regex:/^09[0-9]{9}$/' ,new Uniqemail('users','tell',$user->id)] ,
                ]);


                 $data = $request->all();
                $data['image']= $user->image;
                $data['image']  =  uploadFile($request->file('image'),'images/users',$user->image);


       $m =  $user->update($data);
         Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');


            }


     return back();



        }
    }







    if(! function_exists('ruledns') ) {
        function ruledns(Request $request)
        {

            $request->validate([
                'domain' => ['required',new ValidateLink('UrlNamesilo','www')] ,
            ]);
            $request->validate([
                'domain' => [new ValidateLink('UrlNamesilo','http')] ,
            ]);
            $request->validate([
                'domain' => [new ValidateLink('UrlNamesilo','https')] ,
            ]);

            $request->validate([
                'domain' => [new ValidateLink('UrlNamesilo','regec_pers')] ,
            ]);

            $request->validate([
                'domain' => [new ValidateLink('UrlNamesilo','regec_eng')] ,
            ]);
        }

    }





    if(! function_exists('ruledomain') ) {
        function ruledomain(Request $request)
        {

            $request->validate([
                'domain' => ['required',new ValidateLink('UrlNamesilo','www')] ,
            ]);
            $request->validate([
                'domain' => [new ValidateLink('UrlNamesilo','http')] ,
            ]);
            $request->validate([
                'domain' => [new ValidateLink('UrlNamesilo','https')] ,
            ]);

            $request->validate([
                'domain' => [new ValidateLink('UrlNamesilo','regec_pers')] ,
            ]);

            $request->validate([
                'domain' => [new ValidateLink('UrlNamesilo','regec_eng')] ,
            ]);
        }

    }




    if(! function_exists('Error_Namesilo') ) {
        function Error_Namesilo($operator , $error)
        {

            if($operator == 'checkRegisterAvailability'){
                if($error=='unavailable'){
return $personJSON = response()->json([
    'result' => 'unavailable' ,
]);
                }
                if($error=='unavailable_foreign'){
return $personJSON = response()->json([
    'result' => 'This account has already created an order and it is not possible to delete it' ,
]);
                }
            }

        }
    }


    if(! function_exists('data_build_query') ) {
        function data_build_query($pathapi,$data)
        {

            $setting=Setting::find(1);
            $key = $setting->api;


            // 'key' => 'a7a96a32f40c7044242796' ,  yosefi
            // 'key' => 'bbdf45d2c0d8be4cc6f1' ,   ghochani

            $base_uri='https://www.namesilo.com/'.$pathapi;
            $base = array(
                'version' => '1' ,
                'type' => 'xml' ,
                'key' => $key ,
            );

 $myurl = $base_uri.$data['operator'].'?'.http_build_query($base);
 return $myurl;




        }
    }





    if(! function_exists('data_build_query_array') ) {
        function data_build_query_array( $oper  , $data)
        {


            if($oper=='contact'){

                if($data['operator']=='contactAdd'){
                    $base = array(
                        'fn' => $data['firstname'] ,
                        'ln' => $data['lastname'] ,
                        'ad' => $data['adress'] ,
                        'cy' => $data['city'] ,
                        'st' => $data['state'] ,
                        'zp' => $data['zip'] ,
                        'ct' => $data['country'] ,
                        'em' => $data['email'] ,
                        'ph' => $data['phone'] ,
                        'nn' => $data['nikname'] ,
                        'cp' => $data['company'] ,
                        'ad2' => $data['adres2'] ,
                    );
            }
                if($data['operator']=='contactUpdate'){
                            $base = array(
                                'contact_id' => $data['contact_id'] ,
                                'fn' => $data['firstname'] ,
                                'ln' => $data['lastname'] ,
                                'ad' => $data['adress'] ,
                                'cy' => $data['city'] ,
                                'st' => $data['state'] ,
                                'zp' => $data['zip'] ,
                                'ct' => $data['country'] ,
                                'em' => $data['email'] ,
                                'ph' => $data['phone'] ,
                                'nn' => $data['nikname'] ,
                                'cp' => $data['company'] ,
                                'ad2' => $data['adres2'] ,
                            );
                    }



            if($data['operator']=='contactDelete'){
                $base = array(
                    'contact_id' => $data['contact_id'] ,
                );
        }

            }


 $myurl = http_build_query($base);
 return $myurl;




        }
    }






    if(! function_exists('rule_buy_domain') ) {
        function rule_buy_domain(Request $request)
        {

            $request->validate([
                'dns1' => ['required',new ValidateRule('validate_dns') ,new ValidateLink('UrlNamesilo','www'  ),new ValidateLink('UrlNamesilo','http'  ),new ValidateLink('UrlNamesilo','regec_pers'),new ValidateLink('UrlNamesilo','regec_eng')] ,
                'dns2' => ['required',new ValidateRule('validate_dns') ,new ValidateLink('UrlNamesilo','www'  ),new ValidateLink('UrlNamesilo','http'  ),new ValidateLink('UrlNamesilo','regec_pers'),new ValidateLink('UrlNamesilo','regec_eng')] ,
                'dns3' => [new ValidateRule('validate_dns') ,new ValidateLink('UrlNamesilo','www'  ),new ValidateLink('UrlNamesilo','http'  ),new ValidateLink('UrlNamesilo','regec_pers'),new ValidateLink('UrlNamesilo','regec_eng')] ,
                'dns4' => [new ValidateRule('validate_dns') ,new ValidateLink('UrlNamesilo','www'  ),new ValidateLink('UrlNamesilo','http'  ),new ValidateLink('UrlNamesilo','regec_pers'),new ValidateLink('UrlNamesilo','regec_eng')] ,
            ]);




        }
    }





    if(! function_exists('rulecontact') ) {
        function rulecontact(Request $request)
        {

            $request->validate([
                'firstname' => ['required',new ValidateRule('regec_eng')] ,
                'lastname' => ['required',new ValidateRule('regec_eng')] ,
                'nikname' => ['required', new ValidateRule('regec_eng')] ,
                'phone' => ['required','numeric',new ValidateRule('regec_eng')] ,
                'email' => ['required'] ,
                'zip' => ['required',new ValidateRule('regec_eng')] ,
                'state' => ['required',new ValidateRule('regec_eng')] ,
                'city' => ['required',new ValidateRule('regec_eng')] ,
                'country' => ['required'] ,
                'company' => [new ValidateRule('regec_eng')] ,
                'adres2' => [new ValidateRule('regec_eng')] ,
            ]);


        }
    }





    if(! function_exists('all_request_domain') ) {
        function all_request_domain(Request $request)
        {

            $rulle=ruledomain($request);
            $orginaldomain=linkdomain($request->domain , $request->suffix  );
            $domain=linkdomainOrigin($request->domain , $request->suffix  );
            $multidomain=multidomain($domain , $orginaldomain  );

            $data = $request->all();
            $data['operator']= 'checkRegisterAvailability';
            $data['origindomain']= $orginaldomain;
            $data['withperfix']= $domain;
            $data['multidomain']= $multidomain['AllDomain'];
            $data['CountWhile']= $multidomain['CountWhile'];
            $data['code']= Str::random(40);
            if(Auth::guard('user')->user()){ $data['user_id']= Auth::guard('user')->user()->id;}
            $data['name']= $orginaldomain;
            $data['link']= $orginaldomain;
            $data['status']= 'checkRegisterAvailability';
        Webservice::create($data);


        $webservice=Webservice::where('code' , $data['code'])->first();
        $data['webservice_id']=$webservice->id;
        // $data['multidomain']=$request->multidomain;

        return $data;


        }
    }






if(! function_exists('validate_domain') ) {
    function validate_domain(Request $request)
    {


        $regec_pers = Validator::make($request->all(), [
            'domain' => ['required',new ValidateLink('UrlNamesilo','regec_pers')] ,
        ]);

        $www = Validator::make($request->all(), [
            'domain' => ['required',new ValidateLink('UrlNamesilo','www')] ,
        ]);

        $http = Validator::make($request->all(), [
            'domain' => ['required',new ValidateLink('UrlNamesilo','http')] ,
        ]);

        $https = Validator::make($request->all(), [
            'domain' => ['required',new ValidateLink('UrlNamesilo','https')] ,
        ]);

        $regec_eng = Validator::make($request->all(), [
            'domain' => ['required',new ValidateLink('UrlNamesilo','regec_eng')] ,
        ]);



        if (($regec_pers->fails())||($www->fails())||($http->fails())||($https->fails())||($regec_eng->fails())) {
            return 'invalid';
        }else{   return 'ok';  }

    }
}


}
