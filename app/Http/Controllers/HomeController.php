<?php

namespace App\Http\Controllers;

use App\Models\aniversariantes;
use App\Models\User;
use App\Models\userministerios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        if(Auth::id())
        {
              $usertype=Auth()->user( )->usertype;

              if($usertype=='user')
              {
                return view('dashboard');
              }
              else if ($usertype=='admin')
              {
                return view('admin.adminHome');

              }
              else 
              {
                return redirect()->back();
              }
        }
    }


    public function post(){
      return view('post');
    }   
}
