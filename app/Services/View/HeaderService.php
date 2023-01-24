<?php

namespace App\Services\View;

class HeaderService
{
    private $mainRoute;

    public function __construct()
    {
        $this->mainRoute = (object)[
            'name' => 'Dashboard',
            'url' => '/'
        ];
    }

    public function getNavigations()
    {
        $url = base_url();
        $segments = service('uri')->getSegments();

        // Remove the beginning of segments
        if($segments > 1) {
            $url .= "/{$segments[0]}";
            array_shift($segments);
        }

        $navs = array_map(function($nav) use(&$url) {
            return (object) [
                'name' => ucwords(str_replace('-', ' ', $nav)),
                'url' => $url .= "/{$nav}"
            ];
        }, $segments);

        array_unshift($navs, $this->mainRoute);
        return $navs;
    }
}
