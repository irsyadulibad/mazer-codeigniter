<?php

use CodeIgniter\Config\Services;

if(!function_exists('active')) {
    function active(string $param, string $value = 'active') {
        $url = Services::uri()->getPath();
        $param = str_replace('/', '\/', trim($param));

        return preg_match("/$param/", $url) ? $value : '';
    }
}
