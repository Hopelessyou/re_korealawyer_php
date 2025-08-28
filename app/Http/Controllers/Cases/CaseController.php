<?php

namespace App\Http\Controllers\Cases;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function index()
    {
        return view('cases.index');
    }

    public function list()
    {
        return view('cases.list');
    }

    public function show($id)
    {
        return view('cases.show', compact('id'));
    }

    public function store(Request $request)
    {
        // 빈 메서드
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        // 빈 메서드
        return redirect()->back();
    }

    public function publish($id)
    {
        // 빈 메서드
        return redirect()->back();
    }
}
