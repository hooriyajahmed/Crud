<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    function userindex(){
        return view('User.index');
   }
}
