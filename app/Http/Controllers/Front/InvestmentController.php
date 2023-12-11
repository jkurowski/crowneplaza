<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class InvestmentController extends Controller
{
    public function index()
    {
        $page = Page::find(1);
        return view('front.investment.index', compact('page'));
    }

    public function show()
    {
        $page = Page::find(1);
        return view('front.investment.show', compact('page'));
    }
}
