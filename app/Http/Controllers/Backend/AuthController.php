<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
class AuthController extends Controller
{
   public function login()
   {
    return view('Auth.v_login');
   }
   public function proccess_login(Request $req)
   {
      $error = Validator::make($req->all(),[
         'name' => 'required',
         'password' => 'required',
      ]);
      if($error->fails()){
         return response()->json(['error' => $error->errors()->all()]);
      }else if( Auth::attempt(['name' => $req->name, 'password' => $req->password])){
        
        return redirect()->route('admin')
      }else{
         return response()->json(['error' => 'Username atau Password anda Salah']);
      }
   } 
   public function logout()
   {
      if(Auth::user()){
         Auth::logout();
         return redirect('/login');
      }
   } 
}
