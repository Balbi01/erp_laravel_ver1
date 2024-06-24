<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getMainDashboard()
    {
        return view('welcome');
    }
    //
    public function index()
    {
        return view('home.home');
    }

    public function extraSidebar()
    {
        return view('extra-sidebar');
    }
}
