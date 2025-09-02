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

    public function criminal()
    {
        return view('wiki.criminal');
    }

    public function specialAssault()
    {
        return view('wiki.special-assault');
    }

    public function sentencingFactors()
    {
        return view('wiki.sentencing-factors');
    }

    public function precedentDetail()
    {
        return view('wiki.precedent-detail');
    }

    public function faqDetail()
    {
        return view('wiki.faq-detail');
    }

    public function termsDetail()
    {
        return view('wiki.terms-detail');
    }

    public function show($slug)
    {
        return view('wiki.show', compact('slug'));
    }
}
