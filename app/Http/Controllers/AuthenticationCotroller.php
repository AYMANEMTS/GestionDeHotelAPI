<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
class AuthenticationCotroller extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|max:500',
            'c_password' => 'required|same:password'
        ]);
        if($validator->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
                'message' => 'Please validate errors'
            ]);
        }
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $token = $user->createToken('hassanGonzalles')->accessToken;
        return response()->json([
            'success' => true,
            'data' => $user,
            'token' => $token,
            'message' => 'User created successfuly'
        ]);

    }

    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
                'message' => 'Please validate errors'
            ]);
        }
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $user = Auth::user();
            $token = $user->createToken('hassanGonzalles')->accessToken;
            return response()->json([
                'success' => true,
                'data' => $user,
                'token' => $token,
                'message' => 'User login successfuly'
            ]);
        }
    }

    public function logout()
    {
        $user = Auth::user();
        $user->tokens->each(function ($token, $key) {
            $token->delete();
        });

        return response()->json([
            'message' => 'Logout successfully'
        ]);
    }


}
