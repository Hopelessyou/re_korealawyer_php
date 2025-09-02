@extends('layouts.app')

@section('title', '위키 - 서식')

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
  <a href="{{ route('wiki.form') }}" class="nav-tab active" role="tab" aria-selected="true">
    서식
  </a>
  <a href="{{ route('wiki.faq') }}" class="nav-tab" role="tab" aria-selected="false">
    FAQ
  </a>
  <a href="{{ route('wiki.terms') }}" class="nav-tab" role="tab" aria-selected="false">
    용어
  </a>
</nav>

<!-- 서식 콘텐츠 -->
<div class="wiki-content-area">
  <h1>법률 서식 위키</h1>
  <p>다양한 법률 서식과 템플릿을 제공합니다.</p>
  
  <!-- 서식 카테고리별 -->
  <div class="form-sections">
    <section class="form-section">
      <h2>소장 서식</h2>
      <div class="form-list">
        <article class="form-item">
          <h3>손해배상 소장</h3>
          <p>교통사고, 의료사고 등 손해배상 소송용 소장</p>
        </article>
        <article class="form-item">
          <h3>전세금반환 소장</h3>
          <p>전세금 반환 소송용 소장</p>
        </article>
      </div>
    </section>
    
    <section class="form-section">
      <h2>계약서 서식</h2>
      <div class="form-list">
        <article class="form-item">
          <h3>임대차계약서</h3>
          <p>부동산 임대차 계약서</p>
        </article>
        <article class="form-item">
          <h3>용역계약서</h3>
          <p>서비스 용역 계약서</p>
        </article>
      </div>
    </section>
  </div>
</div>

<!-- 면책 공지 -->
@include('components.wiki-disclaimer')

@endsection
