<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use App\ClassType;
use App\PaymentType;
use App\SessionDate;
use App\Center;
class DashboardController extends Controller
{
    public function index(){
        
        // $students= Student::all();

        // $centers = Centers::all();     

        // return view('admin.dashboard',compact('centers'));
         $huddaStudents= Student::where('center_id',1)->count();
         $jindStudents= Student::where('center_id',2)->count();
         $birthday_students= Student::whereMonth('dob','=',\Carbon\Carbon::today()->month)->whereDay('dob','=',\Carbon\Carbon::today()->day)->count();

         return view('admin.dashboard',compact('jindStudents','huddaStudents','birthday_students'));       

    }
     public function birthday(){        
        $students= Student::all();         
         $students= Student::whereMonth('dob','=',\Carbon\Carbon::today()->month)->whereDay('dob','=',\Carbon\Carbon::today()->day)->get();           
         return view('admin.birthday.list',compact('students'));       

    }

}
