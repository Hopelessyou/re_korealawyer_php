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
        // 데이터베이스 연결 오류를 방지하기 위해 더미 데이터 사용
        $items = collect([
            (object)[
                'id' => 1,
                'title' => '사기죄 형사소송 후 민사소송 진행 절차',
                'body' => 'A, B, C… 본문 미리보기 두 줄. 상황 설명과 핵심 포인트를 간략하게 적어 주는 형태.',
                'created_at' => now()->subDays(1),
                'answers_count' => 12,
                'category' => '사기죄 · 계약/채권 · 소송/서류'
            ],
            (object)[
                'id' => 2,
                'title' => '이혼 소송 진행 절차와 필요한 서류',
                'body' => '이혼 소송을 진행하려면 어떤 절차를 거쳐야 하고, 어떤 서류가 필요한지 궁금합니다.',
                'created_at' => now()->subDays(2),
                'answers_count' => 8,
                'category' => '이혼·가정'
            ],
            (object)[
                'id' => 3,
                'title' => '부동산 계약 분쟁 해결 방법',
                'body' => '부동산 계약에서 발생한 분쟁을 해결하는 방법과 주의사항에 대해 문의드립니다.',
                'created_at' => now()->subDays(3),
                'answers_count' => 5,
                'category' => '부동산·임대차'
            ]
        ]);

        // 검색 기능
        if ($req->filled('query')) {
            $query = $req->query('query');
            $items = $items->filter(function($item) use ($query) {
                return stripos($item->title, $query) !== false || 
                       stripos($item->body, $query) !== false ||
                       stripos($item->category, $query) !== false;
            });
        }

        return view('qna.index', ['items' => $items]);
    }
    
    public function show(string $id)
    {
        // 데이터베이스 연결 오류를 방지하기 위해 더미 데이터 사용
        $q = (object)[
            'id' => $id,
            'title' => '사기죄 형사소송 후 민사소송 진행 절차',
            'body' => '이것은 상세한 질문 내용입니다. 사기죄 형사소송 후 민사소송을 진행하려면 어떤 절차를 거쳐야 하는지 궁금합니다.',
            'created_at' => now()->subDays(1),
            'answers' => collect([
                (object)[
                    'id' => 1,
                    'body' => '형사소송이 끝난 후 민사소송을 진행할 수 있습니다. 먼저 변호사와 상담하시는 것을 권장합니다.',
                    'created_at' => now()->subHours(2),
                    'author' => (object)['name' => '김변호사']
                ],
                (object)[
                    'id' => 2,
                    'body' => '민사소송은 별도의 절차이므로 형사소송 결과와 관계없이 진행 가능합니다.',
                    'created_at' => now()->subHours(1),
                    'author' => (object)['name' => '이변호사']
                ]
            ])
        ];
        
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
