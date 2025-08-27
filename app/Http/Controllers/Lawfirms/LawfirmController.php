<?php

namespace App\Http\Controllers\Lawfirms;

use App\Http\Controllers\Controller;

use App\Models\Org;
use App\Models\Membership;
use App\Models\LegalCase;

class LawfirmController extends Controller
{
    public function index()
    {
        $firms = Org::where('type', 'lawfirm')
            ->with('lawfirmProfile')
            ->paginate(24);
        return view('lawfirms.index', compact('firms'));
    }
    
    public function show(string $slug)
    {
        $firm = Org::where(['type' => 'lawfirm', 'slug' => $slug])
            ->with('lawfirmProfile')
            ->firstOrFail();
        return view('lawfirms.show', compact('firm'));
    }
    
    public function members(string $slug)
    {
        $firm = Org::where(['type' => 'lawfirm', 'slug' => $slug])->firstOrFail();
        $members = $firm->members()->with('user')->paginate(48);
        return view('lawfirms.members', compact('firm', 'members'));
    }
    
    public function cases(string $slug)
    {
        $firm = Org::where(['type' => 'lawfirm', 'slug' => $slug])->firstOrFail();
        $cases = LegalCase::where('org_id', $firm->id)
            ->where('status', 'published')
            ->with('lawyers')
            ->latest('published_at')
            ->paginate(20);
        return view('lawfirms.cases', compact('firm', 'cases'));
    }
}
