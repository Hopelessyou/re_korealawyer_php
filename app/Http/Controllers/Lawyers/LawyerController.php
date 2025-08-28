<?php

namespace App\Http\Controllers\Lawyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index()
    {
        return view('lawyers.index');
    }

    public function search(Request $request)
    {
        return view('lawyers.search');
    }

    public function show($id)
    {
        return view('lawyers.show', compact('id'));
    }
}
