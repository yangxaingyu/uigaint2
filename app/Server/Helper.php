<?php

namespace App\Server;

class Helper
{
    public static function assets($path){
        $prefix = env('ASSETS_URL_PREFIX');
        return sprintf("/%s/%s", trim($prefix, '/'), ltrim( $path, '/'));
    }
}
