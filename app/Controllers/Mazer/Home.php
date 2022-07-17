<?php

namespace App\Controllers\Mazer;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('mazer/dashboard');
    }
}
