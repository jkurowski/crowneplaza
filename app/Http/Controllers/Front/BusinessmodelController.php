<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class BusinessmodelController extends Controller
{
    public function index()
    {
        $page = Page::find(1);
        return view('front.business.index', compact('page'));
    }
}
