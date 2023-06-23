<?php

namespace App\Http\Controllers;
use App\Models\abouts;
use Illuminate\Http\Request;

class portfolioController extends Controller
{
    function getPortfolio(){
        return view('pages.home');
    }

    function getUser(){
        return view('pages.profile');
    }

    function getBlogPage(){
        $showData = abouts::all();
        return view('pages.blog', compact('showData')); 
    }
    
    function getBlog(Request $request){
        $crud = new abouts();             //cruds model set under $crud variable
        $crud -> head_line = $request -> head_line;         //$crud->name(database field name) & $request->name(form field name)
        $crud -> discription = $request -> discription;        //$crud->email(database field email) & $request->email(form field email)
        $crud -> save();
        return redirect('/blogPage');
    }
}
