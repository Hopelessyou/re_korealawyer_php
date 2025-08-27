<?php

namespace App\Http\Controllers\Consult;

use App\Http\Controllers\Controller;
use App\Http\Requests\QnaStoreRequest;
use App\Models\QnaQuestion;
use App\Models\QnaAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QnaController extends Controller
{
    public function index(Request $req)
    {
        $q = QnaQuestion::query()->withCount('answers')->latest();
        if ($req->filled('query')) {
            $q->where('title', 'ilike', '%' . $req->query('query') . '%');
        }
        return view('qna.index', ['items' => $q->paginate(20)]);
    }
    
    public function show(string $id)
    {
        $q = QnaQuestion::with('answers')->findOrFail($id);
        return view('qna.show', compact('q'));
    }
    
    public function store(QnaStoreRequest $r)
    {
        $q = QnaQuestion::create([
            'id' => Str::uuid(),
            'author_user_id' => $r->user()->id,
            'title' => $r->title,
            'body' => $r->body
        ]);
        return redirect()->route('qna.show', $q->id);
    }
    
    public function answer(string $id, Request $r)
    {
        $q = QnaQuestion::findOrFail($id);
        QnaAnswer::create([
            'id' => Str::uuid(),
            'question_id' => $q->id,
            'author_user_id' => $r->user()?->id,
            'body' => $r->input('body')
        ]);
        return back();
    }
    
    public function accept(string $id, string $answerId)
    {
        $q = QnaQuestion::findOrFail($id);
        $this->authorize('accept', $q);
        $q->accepted_answer_id = $answerId;
        $q->status = 'answered';
        $q->save();
        QnaAnswer::where('id', $answerId)->update(['is_solution' => true]);
        return back();
    }
}
