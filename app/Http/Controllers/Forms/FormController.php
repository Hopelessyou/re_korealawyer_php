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
    
    public function show(string $slug)
    {
        return view('forms.show', compact('slug'));
    }
    
    public function requestReview(Request $request)
    {
        // 문서 검토 의뢰 처리
        return back()->with('success', '문서 검토가 요청되었습니다.');
    }
}
