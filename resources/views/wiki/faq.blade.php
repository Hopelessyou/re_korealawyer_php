@extends('layouts.app')

@section('title', '위키 - FAQ')

@section('content')
<!-- 상단 네비게이션 탭 -->
<nav class="nav-tabs" role="tablist" aria-label="위키 카테고리">
  <a href="{{ route('wiki.index') }}" class="nav-tab" role="tab" aria-selected="false">
    홈
  </a>
  <a href="{{ route('wiki.field') }}" class="nav-tab" role="tab" aria-selected="false">
    분야
  </a>
  <a href="{{ route('wiki.precedent') }}" class="nav-tab" role="tab" aria-selected="false">
    판례
  </a>
  <a href="{{ route('wiki.form') }}" class="nav-tab" role="tab" aria-selected="false">
    서식
  </a>
  <a href="{{ route('wiki.faq') }}" class="nav-tab active" role="tab" aria-selected="true">
    FAQ
  </a>
  <a href="{{ route('wiki.terms') }}" class="nav-tab" role="tab" aria-selected="false">
    용어
  </a>
</nav>

<div class="faq-page">
  <!-- FAQ 헤더 -->
  @include('components.faq-header')
  
  <!-- 메인 콘텐츠 영역 -->
  <div class="faq-main">
    <!-- 사이드바 -->
    @include('components.faq-sidebar')
    
    <!-- 콘텐츠 영역 -->
    <div class="faq-content">
      <!-- 결과 헤더 -->
      <div class="results-header">
        <div class="results-count">
          질문 <strong>120</strong>건
        </div>
        <div class="sort-options">
          <button type="button" class="sort-button active">최신</button>
          <button type="button" class="sort-button">조회수</button>
          <button type="button" class="sort-button">추천</button>
        </div>
      </div>
      
      <!-- FAQ 질문 카드들 -->
      <div class="faq-cards">
        <!-- FAQ 카드 1 -->
        <a href="{{ route('wiki.faq-detail') }}" class="faq-card">
          <div class="faq-category">형사</div>
          <h3 class="faq-question">음주운전 초범, 선처 가능할까요?</h3>
        </a>
        
        <!-- FAQ 카드 2 -->
        <div class="faq-card">
          <div class="faq-category">민사</div>
          <h3 class="faq-question">전세금반환소송, 무엇부터 하나요?</h3>
        </div>
        
        <!-- FAQ 카드 3 -->
        <div class="faq-card">
          <div class="faq-category">형사</div>
          <h3 class="faq-question">보이스피싱에서 단순 전달도 처벌되나요?</h3>
        </div>
      </div>
      
      <!-- 더 보기 버튼 -->
      <div class="load-more">
        <button type="button" class="load-more-button">더 보기</button>
      </div>
    </div>
  </div>
  
  <!-- 면책 공지 -->
  @include('components.wiki-disclaimer')
</div>
@endsection
