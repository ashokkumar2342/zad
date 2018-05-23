<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Career;
use App\Mail\CareerMail;
use Mail;

class CareerController extends Controller
{
     public function index()
    {
     
        return view('front.career');
    
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
        'applied' => 'required',
        


        'name' => 'required|max:25',
        'bob' => 'max:25',

        'name' => 'required|max:25',

        'email' => 'max:30|required',
        'address' => 'required|max:255',
        'city' => 'max:25',
        'workexperience' => 'max:25',
        'resume' => 'mimes:pdf,docx|between:2,500',

        ]);
    	  
   

   		 $file = $request->file('resume');
    		$file->store('public/file');

    	$careers = new Career;
        $careers->applied = $request->applied;
        $careers->other = $request->other;
        $careers->name = $request->name;
        $careers->dob = $request->dob;
        $careers->city = $request->city;
        $careers->workexperience = $request->workexperience;
        $careers->email = $request->email;        
        $careers->mobile = $request->mobile;
        $careers->address = $request->address;          
        $careers->resume = $file->hashName();


        if($careers->save()){ 
            Mail::to('zgsrtk1@gmail.com')->queue(new CareerMail($careers));
             return redirect()->route('front.career')->with(['message'=>'Send Contact us Successfully ','class'=>'success']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);

        
    }
}
