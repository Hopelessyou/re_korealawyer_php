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

    public function category($slug)
    {
        return view('lawyers.category', compact('slug'));
    }

    public function profile($id)
    {
        return view('lawyers.profile', compact('id'));
    }

    public function profileServices($id)
    {
        return view('lawyers.profile-services', compact('id'));
    }

    public function profileReviews($id)
    {
        return view('lawyers.profile-reviews', compact('id'));
    }

    public function profileActivities($id)
    {
        return view('lawyers.profile-activities', compact('id'));
    }
}
