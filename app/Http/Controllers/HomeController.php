<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        print_r(\Yaconf::get("default"));
    }
}
