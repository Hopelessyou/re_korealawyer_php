@extends('layouts.app')

@section('title', $q->title . ' - 법률상담 - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/qna.css') }}">
@endsection

@section('content')
<main class="page" aria-label="질문 상세">
  <div class="top-wrap">
    <div class="qna-detail">
      <!-- 질문 헤더 -->
      <div class="question-header">
        <h1 class="question-title">{{ $q->title }}</h1>
        <div class="question-meta">
          <span class="date">{{ $q->created_at->format('Y-m-d H:i') }}</span>
          <span class="views">조회수 {{ rand(1000, 5000) }}</span>
        </div>
      </div>

      <!-- 질문 내용 -->
      <div class="question-content">
        <p>{{ $q->body }}</p>
      </div>

      <!-- 답변 목록 -->
      <div class="answers-section">
        <h2>답변 ({{ $q->answers->count() }})</h2>
        
        @foreach($q->answers as $answer)
          <div class="answer-item">
            <div class="answer-header">
              <span class="lawyer-name">{{ $answer->author->name }}</span>
              <span class="answer-date">{{ $answer->created_at->format('Y-m-d H:i') }}</span>
            </div>
            <div class="answer-content">
              <p>{{ $answer->body }}</p>
            </div>
          </div>
        @endforeach
      </div>

      <!-- 답변 작성 폼 (로그인 시에만 표시) -->
      <div class="answer-form">
        <h3>답변 작성</h3>
        <form method="POST" action="{{ route('qna.answer', $q->id) }}">
          @csrf
          <textarea name="body" placeholder="답변을 입력하세요..." required></textarea>
          <button type="submit">답변 등록</button>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection
