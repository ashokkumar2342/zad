<?php

namespace App\Http\Controllers\Admin;

use App\Center;
use App\ClassType;
use App\Http\Controllers\Controller;
use App\PaymentType;
use App\Remark;
use App\SessionDate;
use App\Student;
use App\StudentAttendance;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class DashboardController extends Controller
{
    public function index(){
        
        // $students= Student::all();

        // $centers = Centers::all();     

        // return view('admin.dashboard',compact('centers'));
         $huddaStudents= Student::where('center_id',1)->where('session_id',2)->where('deleted_at',null)
         ->count();
         $jindStudents= Student::where('center_id',2)->where('session_id',2)->where('deleted_at',null)
         ->count();
         $omaxeStudents= Student::where('center_id',3)->where('session_id',2)->where('deleted_at',null)
         ->count();
         $birthday_students= Student::whereMonth('dob','=',\Carbon\Carbon::today()->month)->whereDay('dob','=',\Carbon\Carbon::today()->day)->count();

         $dayRemarks= Remark::whereMonth('created_at','=',\Carbon\Carbon::today()->month)->whereDay('created_at','=',\Carbon\Carbon::today()->day)->count(); 
         $monthRemarks= Remark::whereMonth('created_at',\Carbon\Carbon::today()->month)->count();
         $allRemarks= Remark::count();

         $omaxeAbsent = StudentAttendance::whereYear('created_at','=',\Carbon\Carbon::today()->year)->where('attendance_type_id',2)->whereMonth('created_at','=',\Carbon\Carbon::today()->month)->whereDay('created_at','=',\Carbon\Carbon::today()->day)->count();
        
          

         return view('admin.dashboard',compact('jindStudents','huddaStudents','omaxeStudents','birthday_students','dayRemarks','monthRemarks','allRemarks','omaxeAbsent'));       

    }
     public function birthday(){        
        $students= Student::all();         
         $students= Student::whereMonth('dob','=',\Carbon\Carbon::today()->month)->whereDay('dob','=',\Carbon\Carbon::today()->day)->get();           
         return view('admin.birthday.list',compact('students'));       

    }

}
