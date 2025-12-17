<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\course;
use Illuminate\Http\Request;

class courseController extends Controller
{
    function insert(){
        return view('Admin.insertcourse');
    }
    function insertcourse(Request $req){
        $data=$req->validate([
           "name"=>"required",
           "desc"=>"required",
           "amount"=>"required",
           "pic"=>"required|image|mimes:jpg,jpeg,png,gif",
        ]);

        $file=$req->file('pic')->store("course", "public");
        $main=basename($file);
        $course=new course();
        $course->name=$data['name'];
        $course->amount=$data['amount'];
        $course->desc=$data['desc'];
        $course->picture=$main;
        $course->save();
        if($course){
            return "Data Inserted";
        }
        else{
            return "Data Not Inserted";
        }
    }
}
