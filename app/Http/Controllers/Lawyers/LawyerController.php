<?php

namespace App\Http\Controllers\Lawyers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index()
    {
        $lawyers = User::whereHas('lawyerProfile')
            ->with('lawyerProfile')
            ->paginate(24);
        return view('lawyers.index', compact('lawyers'));
    }
    
    public function search(Request $request)
    {
        $query = User::whereHas('lawyerProfile');
        
        if ($request->filled('field')) {
            $query->whereHas('lawyerProfile', function($q) use ($request) {
                $q->whereJsonContains('meta->specialties', $request->field);
            });
        }
        
        $lawyers = $query->with('lawyerProfile')->paginate(24);
        return view('lawyers.index', compact('lawyers'));
    }
    
    public function show(string $id)
    {
        $lawyer = User::whereHas('lawyerProfile')
            ->with(['lawyerProfile', 'memberships.org'])
            ->findOrFail($id);
        return view('lawyers.show', compact('lawyer'));
    }
}
