<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use Exception;

class Component extends BaseController
{
    public function view($view)
    {
        $subtitles = [
            'alert' => 'A pretty helpful component to show emphasized information to the user.',
            'badge' => 'Examples for badges, our small count and labeling component.',
            'breadcrumb' => 'Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.'
        ];

        try {
            return view("pages/components/{$view}", [
                'subtitle' => $subtitles[$view]
            ]);
        } catch(Exception $e) {
            throw new PageNotFoundException("Not Found");
        }
    }
}
