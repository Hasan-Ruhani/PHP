<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolioController extends Controller
{
    function getPortfolio(){
        return view('pages.home');
    }

    function getUser(){
        return view('pages.profile');
    }
}
