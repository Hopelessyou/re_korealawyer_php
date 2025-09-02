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

    public function field()
    {
        return view('wiki.field');
    }

    public function precedent()
    {
        return view('wiki.precedent');
    }

    public function form()
    {
        return view('wiki.form');
    }

    public function faq()
    {
        return view('wiki.faq');
    }

    public function terms()
    {
        return view('wiki.terms');
    }

    public function show($slug)
    {
        return view('wiki.show', compact('slug'));
    }
}
