@extends('layouts.app')

@section('title', '위키 - 판례')

@section('content')
<!-- 상단 네비게이션 탭 -->
<nav class="nav-tabs" role="tablist" aria-label="위키 카테고리">
  <a href="{{ route('wiki.index') }}" class="nav-tab" role="tab" aria-selected="false">
    홈
  </a>
  <a href="{{ route('wiki.field') }}" class="nav-tab" role="tab" aria-selected="false">
    분야
  </a>
  <a href="{{ route('wiki.precedent') }}" class="nav-tab active" role="tab" aria-selected="true">
    판례
  </a>
  <a href="{{ route('wiki.form') }}" class="nav-tab" role="tab" aria-selected="false">
    서식
  </a>
  <a href="{{ route('wiki.faq') }}" class="nav-tab" role="tab" aria-selected="false">
    FAQ
  </a>
  <a href="{{ route('wiki.terms') }}" class="nav-tab" role="tab" aria-selected="false">
    용어
  </a>
</nav>

<!-- 판례 헤더 -->
@include('components.precedent-header')

<!-- 메인 콘텐츠 영역 -->
<div class="precedent-main">
  <!-- 좌측 사이드바 (필터) -->
  @include('components.precedent-sidebar')

  <!-- 우측 콘텐츠 영역 -->
  <main class="precedent-content">
    <!-- 검색 결과 헤더 -->
    <div class="results-header">
      <div class="results-count">
        <span>검색 결과 </span>
        <strong>128</strong>
        <span>건</span>
      </div>
      <div class="sort-options">
        <button type="button" class="sort-button active">최신 선고</button>
        <button type="button" class="sort-button">중요도</button>
        <button type="button" class="sort-button">조회수</button>
      </div>
    </div>

    <!-- 판례 카드 목록 -->
    <div class="precedent-cards">
      <!-- 판례 카드 1 -->
      <article class="precedent-card">
        <div class="precedent-meta">
          <span class="court-name">대법원</span>
          <span class="judgment-date">20XX.XX.XX.</span>
          <span class="case-number">20XX도XXXX</span>
        </div>
        <h3 class="precedent-title">대법원 20XX도XXXX — 음주측정거부</h3>
        <div class="precedent-tags">
          <span class="tag">형사</span>
          <span class="tag">음주운전</span>
          <span class="tag">측정거부</span>
        </div>
        <p class="precedent-summary">측정 요구의 적법성과 고지 내용, 거부 범위 및 채혈 절차의 적법성에 관해 판시.</p>
        <div class="precedent-actions">
          <a href="{{ route('wiki.precedent-detail') }}" class="action-button primary">해설 보기</a>
          <button type="button" class="action-button secondary">원문 보기</button>
          <button type="button" class="action-button secondary">허브로 이동</button>
        </div>
      </article>

      <!-- 판례 카드 2 -->
      <article class="precedent-card">
        <div class="precedent-meta">
          <span class="court-name">대법원</span>
          <span class="judgment-date">20XX.XX.XX.</span>
          <span class="case-number">20XX도XXXX</span>
        </div>
        <h3 class="precedent-title">대법원 20XX도XXXX — 채혈 적법성</h3>
        <div class="precedent-tags">
          <span class="tag">형사</span>
          <span class="tag">음주운전</span>
          <span class="tag">채혈</span>
        </div>
        <p class="precedent-summary">채혈 측정의 동의·의료기관·보관 절차 요건을 충족하지 못한 경우 증거능력 부정.</p>
        <div class="precedent-actions">
          <button type="button" class="action-button primary">해설 보기</button>
          <button type="button" class="action-button secondary">원문 보기</button>
          <button type="button" class="action-button secondary">허브로 이동</button>
        </div>
      </article>

      <!-- 판례 카드 3 -->
      <article class="precedent-card">
        <div class="precedent-meta">
          <span class="court-name">대법원</span>
          <span class="judgment-date">20XX.XX.XX.</span>
          <span class="case-number">20XX두XXXX</span>
        </div>
        <h3 class="precedent-title">대법원 20XX두XXXX — 면허 취소</h3>
        <div class="precedent-tags">
          <span class="tag">행정</span>
          <span class="tag">면허</span>
          <span class="tag">취소</span>
        </div>
        <p class="precedent-summary">형사와 별개로 진행되는 면허 행정처분의 적법성 기준을 정리.</p>
        <div class="precedent-actions">
          <button type="button" class="action-button primary">해설 보기</button>
          <button type="button" class="action-button secondary">원문 보기</button>
          <button type="button" class="action-button secondary">허브로 이동</button>
        </div>
      </article>
    </div>

    <!-- 더 보기 버튼 -->
    <div class="load-more">
      <button type="button" class="load-more-button">더 보기</button>
    </div>
  </main>
</div>

<!-- 면책 공지 -->
@include('components.wiki-disclaimer')

@endsection
