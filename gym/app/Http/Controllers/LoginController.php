<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
   public function index(){
       return view('login');
   }

   public function loginAction(){
      $email = request()->email;
      $password = request()->password;

      if(Auth::attempt(['email' => $email, 'password' => $password]))
         return "Logou";
      else
         return "Sai daqui haqui";
   }
}
