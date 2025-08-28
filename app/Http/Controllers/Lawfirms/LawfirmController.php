<?php

namespace App\Http\Controllers\Lawfirms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LawfirmController extends Controller
{
    public function index()
    {
        return view('lawfirms.index');
    }

    public function show($slug)
    {
        return view('lawfirms.show', compact('slug'));
    }

    public function members($slug)
    {
        return view('lawfirms.members', compact('slug'));
    }

    public function cases($slug)
    {
        return view('lawfirms.cases', compact('slug'));
    }
}
