<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index()
    {

        //dd('Message from WelcomeController@index')
        //dump('Message from Welcomecontroller@index')
        return view('welcome');
    }
}
