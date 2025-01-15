<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDataValidationRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $title="home";
        return view('home.index',[
            'title'=>$title,
        ]);
    }

    public function storeuserdata(UserDataValidationRequest $request){
        //dd($request->terms);
       $request->validated();
  
         Feedback::create([
           'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'feedback'=>$request->feedback,
            'terms'=>$request->terms
         ]);


       return redirect()->route('home')->with('success', 'Feedback submitted successfully!');
    }




}
