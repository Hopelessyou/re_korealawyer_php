<?php

namespace App\Http\Controllers\Cases;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseStoreRequest;
use App\Models\LegalCase;
use Illuminate\Support\Str;

class CaseController extends Controller
{
    public function index()
    {
        return view('cases.index');
    }
    
    public function list()
    {
        $items = LegalCase::where('status', 'published')
            ->latest('published_at')
            ->paginate(20);
        return view('cases.list', compact('items'));
    }
    
    public function show(string $id)
    {
        $case = LegalCase::with(['lawyers', 'lawfirm'])->findOrFail($id);
        return view('cases.show', compact('case'));
    }
    
    public function store(CaseStoreRequest $r)
    {
        $case = LegalCase::create([
            'id' => Str::uuid(),
            'title' => $r->title,
            'summary' => $r->summary,
            'body' => $r->body,
            'org_id' => $r->user()->memberships()
                ->whereHas('org', fn($q) => $q->where('type', 'lawfirm'))
                ->value('org_id'),
            'status' => 'review',
            'created_by' => $r->user()->id
        ]);
        return redirect()->route('cases.show', $case->id);
    }
    
    public function update(CaseStoreRequest $r, string $id)
    {
        $case = LegalCase::findOrFail($id);
        $this->authorize('update', $case);
        
        $case->update([
            'title' => $r->title,
            'summary' => $r->summary,
            'body' => $r->body,
        ]);
        
        return redirect()->route('cases.show', $case->id);
    }
    
    public function publish(string $id)
    {
        $case = LegalCase::findOrFail($id);
        $this->authorize('publish', $case);
        $case->status = 'published';
        $case->published_at = now();
        $case->save();
        return back();
    }
}
