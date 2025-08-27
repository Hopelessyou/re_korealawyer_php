@extends('layouts.app')

@section('title', '무료 Q&A')

@section('content')
<div class="page-header" style="margin-bottom: 2rem;">
    <h1 style="font-size: 2rem; color: #1f2937;">무료 Q&A</h1>
    <p style="color: #6b7280;">법률 문제에 대한 전문적인 조언을 받아보세요</p>
</div>

<form class="search-form" method="get">
    <input name="query" placeholder="검색어를 입력하세요" value="{{ request('query') }}">
    <button type="submit">검색</button>
</form>

@auth
<div style="margin-bottom: 2rem;">
    <a href="#" class="btn" onclick="showQuestionForm()">새 질문하기</a>
</div>
@endauth

<div class="questions-list">
    @forelse($items as $q)
        <div class="card question-item">
            <a href="{{ route('qna.show', $q->id) }}" style="text-decoration: none; color: inherit;">
                <h3 style="color: #3b82f6; margin-bottom: 0.5rem;">{{ $q->title }}</h3>
                <div style="color: #6b7280; font-size: 0.875rem;">
                    답변 {{ $q->answers_count }}개 · {{ $q->created_at->diffForHumans() }}
                    @if($q->author)
                        · {{ $q->author->name }}
                    @endif
                </div>
            </a>
        </div>
    @empty
        <div class="card" style="text-align: center; color: #6b7280;">
            <p>등록된 질문이 없습니다.</p>
            @guest
                <p>첫 번째 질문을 등록해보세요!</p>
            @endguest
        </div>
    @endforelse
</div>

<div style="margin-top: 2rem;">
    {{ $items->links() }}
</div>

@auth
<div id="questionForm" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 2rem; border-radius: 0.5rem; width: 90%; max-width: 600px;">
        <h3>새 질문 등록</h3>
        <form method="post" action="{{ route('qna.store') }}">
            @csrf
            <div style="margin-bottom: 1rem;">
                <label style="display: block; margin-bottom: 0.5rem;">제목</label>
                <input type="text" name="title" required style="width: 100%; padding: 0.5rem; border: 1px solid #d1d5db; border-radius: 0.375rem;">
            </div>
            <div style="margin-bottom: 1rem;">
                <label style="display: block; margin-bottom: 0.5rem;">내용</label>
                <textarea name="body" required rows="5" style="width: 100%; padding: 0.5rem; border: 1px solid #d1d5db; border-radius: 0.375rem;"></textarea>
            </div>
            <div style="display: flex; gap: 1rem; justify-content: flex-end;">
                <button type="button" onclick="hideQuestionForm()" class="btn btn-secondary">취소</button>
                <button type="submit" class="btn">등록</button>
            </div>
        </form>
    </div>
</div>

<script>
function showQuestionForm() {
    document.getElementById('questionForm').style.display = 'block';
}
function hideQuestionForm() {
    document.getElementById('questionForm').style.display = 'none';
}
</script>
@endauth
@endsection
