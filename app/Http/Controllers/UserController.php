<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    function login(Request $request){
        $user= User::where(['email'=>$request->email])->first();
        if($user|| Hash::check($request->password,$user->password))
        {
            $request->session()->put('user',$user);
            return redirect('/product');
        }
        else{
            return "username or password not matched";
          
        }
     
    }
}
