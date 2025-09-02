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

<div class="form-page">
  <!-- 서식 헤더 -->
  @include('components.form-header')
  
  <!-- 메인 콘텐츠 영역 -->
  <div class="form-main">
    <!-- 사이드바 -->
    @include('components.form-sidebar')
    
    <!-- 콘텐츠 영역 -->
    <div class="form-content">
      <!-- 결과 헤더 -->
      <div class="results-header">
        <div class="results-count">
          검색 결과 <strong>86</strong>건
        </div>
        <div class="sort-options">
          <button type="button" class="sort-button active">최신 업데이트</button>
          <button type="button" class="sort-button">다운로드순</button>
          <button type="button" class="sort-button">인기</button>
        </div>
      </div>
      
      <!-- 서식 카드들 -->
      <div class="form-cards">
        <!-- 서식 카드 1 -->
        <div class="form-card">
          <div class="form-meta">
            <span class="form-category">형사</span>
            <span class="form-document-type">문서유형: 합의서</span>
          </div>
          <h3 class="form-title">형사 합의서(표준)</h3>
          <div class="form-tags">
            <span class="tag">DOCX</span>
            <span class="tag">HWPX</span>
            <span class="tag">가이드 포함</span>
          </div>
          <div class="form-info">
            <span class="form-version">버전 v2.1</span>
            <span class="form-modified">수정: 2025-08-18</span>
            <span class="form-downloads">다운로드 12.3K</span>
          </div>
          <div class="form-actions">
            <button type="button" class="action-button primary">미리보기</button>
            <button type="button" class="action-button secondary">DOCX 다운로드</button>
            <button type="button" class="action-button secondary">작성 가이드</button>
          </div>
        </div>
        
        <!-- 서식 카드 2 -->
        <div class="form-card">
          <div class="form-meta">
            <span class="form-category">형사</span>
            <span class="form-document-type">문서유형: 증거보존요청서</span>
          </div>
          <h3 class="form-title">증거 보존 요청서</h3>
          <div class="form-tags">
            <span class="tag">DOCX</span>
            <span class="tag">PDF</span>
          </div>
          <div class="form-info">
            <span class="form-version">버전 v1.1</span>
            <span class="form-modified">수정: 2025-08-12</span>
            <span class="form-downloads">다운로드 7.9K</span>
          </div>
          <div class="form-actions">
            <button type="button" class="action-button primary">미리보기</button>
            <button type="button" class="action-button secondary">DOCX 다운로드</button>
            <button type="button" class="action-button secondary">관련 허브</button>
          </div>
        </div>
        
        <!-- 서식 카드 3 -->
        <div class="form-card">
          <div class="form-meta">
            <span class="form-category">형사</span>
            <span class="form-document-type">문서유형: 반성문</span>
          </div>
          <h3 class="form-title">반성문(가이드)</h3>
          <div class="form-tags">
            <span class="tag">PDF</span>
            <span class="tag">가이드 포함</span>
          </div>
          <div class="form-info">
            <span class="form-version">버전 v1.4</span>
            <span class="form-modified">수정: 2025-08-10</span>
            <span class="form-downloads">다운로드 15.4K</span>
          </div>
          <div class="form-actions">
            <button type="button" class="action-button primary">미리보기</button>
            <button type="button" class="action-button secondary">PDF 다운로드</button>
            <button type="button" class="action-button secondary">작성 가이드</button>
          </div>
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
