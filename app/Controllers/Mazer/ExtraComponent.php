<?php

namespace App\Controllers\Mazer;

use App\Controllers\BaseController;

class ExtraComponent extends BaseController
{
    public function avatar()
    {
        return view('mazer/components/extras/avatar');
    }

    public function divider()
    {
        return view('mazer/components/extras/divider');
    }

    public function rating()
    {
        return view('mazer/components/extras/rating');
    }
    
    public function sweetalert()
    {
        return view('mazer/components/extras/sweetalert');
    }

    public function toastify()
    {
        return view('mazer/components/extras/toastify');
    }
}
