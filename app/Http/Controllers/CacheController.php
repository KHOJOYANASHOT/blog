<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function put()
    {
        Cache::put('cachekey', 'I am in the cache!', 60);
    }
    public function get()
    {
        return Cache::get('cachekey', 'default value');
    }
}
