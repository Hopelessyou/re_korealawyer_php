<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('forms.index');
    }

    public function show($slug)
    {
        return view('forms.show', compact('slug'));
    }

    public function requestReview(Request $request)
    {
        // 빈 메서드
        return redirect()->back();
    }
}
