<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

// CMS
use App\Models\Floor;
use App\Models\Gallery;
use App\Models\Investment;
use App\Models\Map;
use App\Models\RodoRules;

class IndexController extends Controller
{
    public function index()
    {
        return view('front.homepage.index');
    }

}
