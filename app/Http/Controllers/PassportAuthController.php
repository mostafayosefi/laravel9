<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PassportAuthController extends Controller
{
    /**
     * Registration
     *
     */
    public function unauthentication(){
        return response()->json(['error' => 'unauthentication'], 400);


    }
    public function register(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users,email,email,id',
            'password' => 'required|min:8',
        ]);


        $trace['operator']='register';

        if ($validator->fails()) {
            $trace['status']='inactive';
            $data=my_trace_api($trace);
            return response()->json(['error' => $validator->messages()], 400);
        }else{

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $data=my_trace_api($trace);
            $token = $user->createToken('LaravelAuthApp')->accessToken;
            return response()->json(
                ['message' => 'success' ,
                'token' => $token ],  200);
        }


    }

    /**
     * Login
     */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];


        $trace['operator']='login';

        if (auth()->attempt($data)) {
            $data=my_trace_api($trace);
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            $trace['status']='inactive';
            $data=my_trace_api($trace);
            return response()->json(['error' => 'unknown'], 401);
        }
    }
}
