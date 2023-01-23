<?php

if(!function_exists('asset')) {
    function asset(string $name) {
        return base_url("assets/{$name}");
    }
}
