<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class usersController extends Controller
{
    public function main(){
       $users = DB::table('users')->get();
       return view('settings.users.main')
              ->with('users',$users);
    }//main
}
