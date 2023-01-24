<?php

if(!function_exists('asset')) {
    function asset(string $name) {
        return base_url("assets/{$name}");
    }
}

if(!function_exists('sidebar')) {
    function sidebar(): \App\Services\View\SidebarService {
        return new \App\Services\View\SidebarService;
    }
}

if(!function_exists('has_sub')) {
    function has_sub(array $subItems) {
        return empty($subItems) ? '' : 'has-sub';
    }
}

if(!function_exists('active')) {
    function active(string $param, string $value = 'active') {
        $url = \CodeIgniter\Config\Services::uri()->getPath();
        $param = str_replace('/', '\/', trim(trim($param, '/')));

        return preg_match("/$param/", $url) ? $value : '';
    }
}
