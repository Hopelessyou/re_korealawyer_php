@extends('layouts.app')

@section('title', '위키 - 용어')

@section('content')
<!-- 네비게이션 탭 -->
<nav class="nav-tabs" role="tablist" aria-label="위키 카테고리">
  <a href="{{ route('wiki.index') }}" class="nav-tab" role="tab" aria-selected="false">홈</a>
  <a href="{{ route('wiki.field') }}" class="nav-tab" role="tab" aria-selected="false">분야</a>
  <a href="{{ route('wiki.precedent') }}" class="nav-tab" role="tab" aria-selected="false">판례</a>
  <a href="{{ route('wiki.form') }}" class="nav-tab" role="tab" aria-selected="false">서식</a>
  <a href="{{ route('wiki.faq') }}" class="nav-tab" role="tab" aria-selected="false">FAQ</a>
  <a href="{{ route('wiki.terms') }}" class="nav-tab active" role="tab" aria-selected="true">용어</a>
</nav>

<!-- 용어 페이지 메인 컨텐츠 -->
<main class="terms-page">
  <!-- 헤더 섹션 -->
  @include('components.terms-header')
  
  <div class="terms-main">
    <!-- 사이드바 -->
    @include('components.terms-sidebar')
    
    <!-- 메인 컨텐츠 -->
    <div class="terms-content">
      <!-- 용어 카드 그리드 -->
      <div class="terms-cards">
        <!-- 특수폭행 -->
        <article class="terms-card">
          <div class="terms-meta">
            <span class="terms-category">형사</span>
            <span class="terms-difficulty">기초</span>
          </div>
          <h3 class="terms-term">특수폭행</h3>
          <p class="terms-definition">단순폭행과 달리 특별한 정황이나 수단, 방법으로 행하는 폭행행위</p>
          <div class="terms-tags">
            <span class="terms-tag"># 폭행</span>
            <span class="terms-tag"># 형사</span>
          </div>
          <div class="terms-actions">
            <a href="{{ route('wiki.terms-detail') }}" class="action-button">자세히 보기</a>
            <button type="button" class="action-button">관련 판례</button>
          </div>
        </article>

        <!-- 주거침입 -->
        <article class="terms-card">
          <div class="terms-meta">
            <span class="terms-category">형사</span>
            <span class="terms-difficulty">기초</span>
          </div>
          <h3 class="terms-term">주거침입</h3>
          <p class="terms-definition">주거, 관리하는 건조물, 선박, 항공기 또는 점유하는 방에 침입하는 행위</p>
          <div class="terms-tags">
            <span class="terms-tag"># 침입</span>
            <span class="terms-tag"># 형사</span>
          </div>
          <div class="terms-actions">
            <button type="button" class="action-button">자세히 보기</button>
            <button type="button" class="action-button">관련 판례</button>
          </div>
        </article>

        <!-- 전세금반환 -->
        <article class="terms-card">
          <div class="terms-meta">
            <span class="terms-category">민사</span>
            <span class="terms-difficulty">중급</span>
          </div>
          <h3 class="terms-term">전세금반환</h3>
          <p class="terms-definition">전세계약이 종료되었을 때 임대인이 전세금을 반환해야 하는 의무</p>
          <div class="terms-tags">
            <span class="terms-tag"># 전세</span>
            <span class="terms-tag"># 민사</span>
          </div>
          <div class="terms-actions">
            <button type="button" class="action-button">자세히 보기</button>
            <button type="button" class="action-button">관련 판례</button>
          </div>
        </article>

        <!-- 음주운전 -->
        <article class="terms-card">
          <div class="terms-meta">
            <span class="terms-category">형사</span>
            <span class="terms-difficulty">기초</span>
          </div>
          <h3 class="terms-term">음주운전</h3>
          <p class="terms-definition">술에 취한 상태에서 자동차를 운전하는 행위</p>
          <div class="terms-tags">
            <span class="terms-tag"># 교통</span>
            <span class="terms-tag"># 형사</span>
          </div>
          <div class="terms-actions">
            <button type="button" class="action-button">자세히 보기</button>
            <button type="button" class="action-button">관련 판례</button>
          </div>
        </article>

        <!-- 보이스피싱 -->
        <article class="terms-card">
          <div class="terms-meta">
            <span class="terms-category">형사</span>
            <span class="terms-difficulty">중급</span>
          </div>
          <h3 class="terms-term">보이스피싱</h3>
          <p class="terms-definition">전화를 통해 개인정보를 빼내거나 금전을 갈취하는 사기 행위</p>
          <div class="terms-tags">
            <span class="terms-tag"># 사기</span>
            <span class="terms-tag"># 형사</span>
          </div>
          <div class="terms-actions">
            <button type="button" class="action-button">자세히 보기</button>
            <button type="button" class="action-button">관련 판례</button>
          </div>
        </article>

        <!-- 계약해제 -->
        <article class="terms-card">
          <div class="terms-meta">
            <span class="terms-category">민사</span>
            <span class="terms-difficulty">중급</span>
          </div>
          <h3 class="terms-term">계약해제</h3>
          <p class="terms-definition">계약의 효력을 소급적으로 소멸시키는 일방적 의사표시</p>
          <div class="terms-tags">
            <span class="terms-tag"># 계약</span>
            <span class="terms-tag"># 민사</span>
          </div>
          <div class="terms-actions">
            <button type="button" class="action-button">자세히 보기</button>
            <button type="button" class="action-button">관련 판례</button>
          </div>
        </article>
      </div>

      <!-- 더보기 버튼 -->
      <div class="load-more">
        <button type="button" class="load-more-button">더 많은 용어 보기</button>
      </div>
    </div>
  </div>
</main>

<!-- 면책 공지 -->
@include('components.wiki-disclaimer')
@endsection
