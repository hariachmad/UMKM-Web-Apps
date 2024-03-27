<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    function menuUtama()
    {
        return view('main_menu_baru');
    }

    function login()
    {
        return view('login');
    }
}
