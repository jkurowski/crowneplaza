<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class GalleryController extends Controller
{
    public function index()
    {
        $page = Page::find(1);
        return view('front.gallery.index', compact('page'));
    }
}
