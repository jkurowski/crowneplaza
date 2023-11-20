<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class CrowneplazaController extends Controller
{
    public function index()
    {
        $page = Page::find(1);
        return view('front.crowneplaza.index', compact('page'));
    }
}
