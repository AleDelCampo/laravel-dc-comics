<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() 
    {
        $icons = config('mylinks.icons');
        $linkss = config('mylinks.linkss');
        $links = config('mylinks.links');
        
        return view('homepage', compact('icons', 'links', 'linkss'));
        
    }
}
