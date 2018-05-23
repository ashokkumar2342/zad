<?php

namespace App\Http\Controllers\Admin;

use App\Circular;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CircularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $circulars = Circular::orderBy('id','desc')->paginate(10);
        return view('admin.circular.list',compact('circulars'));
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
            'title' => 'required|max:199',
            'body' => 'required'
            ]);

        $circulars = new Circular();

        $circulars->title = $request->title;
        $circulars->body = $request->body;
        if ($circulars->save()) {           
         
            return redirect()->route('admin.circular.list')->with(['class'=>'success','message'=>'Circular Add  successfully ...']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
            
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\circular  $circular
     * @return \Illuminate\Http\Response
     */
    public function show(circular $circular)
    {
       return view('admin.circular.addForm');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\circular  $circular
     * @return \Illuminate\Http\Response
     */
    public function edit(circular $circular)
    {
        return view('admin.circular.edit',compact('circular'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\circular  $circular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, circular $circular)
    {
        $this->validate($request,[
            'title' => 'required|max:199',
            'body' => 'required'
            ]);
        $circular->title = $request->title;
        $circular->body = $request->body;
        if ($circular->save()) {           
         
            return redirect()->route('admin.circular.list')->with(['class'=>'success','message'=>'Circular Update  successfully ...']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\circular  $circular
     * @return \Illuminate\Http\Response
     */
    public function destroy(circular $circular)
    {
       if ($circular->delete()) {
           
           return redirect()->route('admin.circular.list')->with(['class'=>'success','message'=>'Circular Delete successfully']);
       }else {
           return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
       }
    }
}
