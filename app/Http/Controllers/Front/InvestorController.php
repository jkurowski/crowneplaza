<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class InvestorController extends Controller
{
    public function index()
    {
        $page = Page::find(1);
        return view('front.investor.index', compact('page'));
    }
}
