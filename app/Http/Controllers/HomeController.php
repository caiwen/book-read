<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        var_dump(\Yaconf::get("default"));
        phpinfo();
    }
}
