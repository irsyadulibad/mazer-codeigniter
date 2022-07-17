<?php

namespace App\Controllers\Mazer;

use App\Controllers\BaseController;

class Component extends BaseController
{
    public function alert()
    {
        return view('mazer/components/alert');
    }

    public function badge()
    {
        return view('mazer/components/badge');
    }

    public function breadcrumb()
    {
        return view('mazer/components/breadcrumb');
    }

    public function button()
    {
        return view('mazer/components/button');
    }

    public function card()
    {
        return view('mazer/components/card');
    }

    public function carousel()
    {
        return view('mazer/components/carousel');
    }

    public function collapse()
    {
        return view('mazer/components/collapse');
    }

    public function dropdown()
    {
        return view('mazer/components/dropdown');
    }

    public function list_group()
    {
        return view('mazer/components/list-group');
    }

    public function modal()
    {
        return view('mazer/components/modal');
    }

    public function navs()
    {
        return view('mazer/components/navs');
    }

    public function pagination()
    {
        return view('mazer/components/pagination');
    }

    public function progress()
    {
        return view('mazer/components/progress');
    }

    public function spinner()
    {
        return view('mazer/components/spinner');
    }

    public function tooltip()
    {
        return view('mazer/components/tooltip');
    }
}
