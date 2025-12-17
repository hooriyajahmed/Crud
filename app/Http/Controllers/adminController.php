<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
   function index(){
        return view('Admin.index');
   }

   function alluser(){

      $user=User::all();

      return view('Admin.alluser',['alluser'=>$user]);
   }

   function deleteuser($id){
      $result=User::destroy($id);
      if($result){
         return redirect()->route('alluser')->with("success","User Data is Deleted");
      }
      else{
         return redirect()->route('alluser');
      }
   }
   function edituser($id){
      $user=user::find($id);
      return view('Admin.edit',compact('user'));
   }
   function updateuser(Request $req , $id){
     $final=user::find($id);
     $final->name=$req->name;
    $final->email=$req->email;
    $final->password=$req->password;

    if($final->save()){
      return redirect()->route('alluser');
    }
    else{
      return redirect()->route('alluser');
    }
   }

}
