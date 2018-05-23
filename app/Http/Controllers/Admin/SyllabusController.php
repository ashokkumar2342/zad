<?php

namespace App\Http\Controllers\Admin;

use App\Syllabus;
use App\StudentDetails;
use App\ClassType;
use App\SessionDate;
use App\Center;  
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;


class SyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $syllabuses =  Syllabus::orderBy('id','desc')->get();
         
        $centers = Center::where('status',1)->get();
        $sessions = array_pluck(SessionDate::get(['id','date'])->toArray(),'date', 'id');



        return view('admin.syllabus.list',compact('classes','sessions','centers','syllabuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'center' => 'required|numeric',
            'session' => 'required|numeric',
            'class' => 'required|numeric',                        
            'syllabus' => 'required|image|mimes:jpeg,png,jpg|max:3000', 
            'title' => 'required|max:255',
             
      
        ]);

         $file = $request->file('syllabus');
        $imageName = uniqid().$file->getClientOriginalName();
        $file->move(public_path('uploads/holidayhomework'),$imageName);

        $syllabus= new Syllabus();
        $syllabus->center_id= $request->center;        
        $syllabus->session_id= $request->session;
        $syllabus->class_id= $request->class;
        
        $syllabus->syllabus = $imageName;
        $syllabus->title= $request->title;
        if($syllabus->save()){   
            return redirect()->route('admin.syllabus.list',$syllabus->id)->with(['class'=>'success','message'=>' file Upload success ...']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function show(Syllabus $syllabus)
    {
        return view('admin.syllabus.show',compact('syllabus'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function edit(Syllabus $syllabus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Syllabus $syllabus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Syllabus $syllabus)
    {
        //
    }
}
