<?php

namespace App\Http\Controllers\Wiki;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WikiController extends Controller
{
    public function index()
    {
        return view('wiki.index');
    }

    public function show($slug)
    {
        return view('wiki.show', compact('slug'));
    }
}
