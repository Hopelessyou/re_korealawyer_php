@extends('layouts.app')

@section('title', '위키 상세 - 변호사닷컴')

@section('content')
<div class="wiki-detail-container">
  <div class="wiki-detail-header">
    <nav class="breadcrumb-nav" aria-label="위키 경로">
      <a href="{{ route('wiki.index') }}" class="breadcrumb-link">위키</a>
      <span class="breadcrumb-separator">/</span>
      <span class="breadcrumb-current">{{ $slug }}</span>
    </nav>
    
    <div class="wiki-detail-title">
      <h1>{{ $slug }}</h1>
      <div class="wiki-meta">
        <span class="wiki-version">v1.0</span>
        <span class="wiki-last-updated">최종 수정: 2025-08-26</span>
        <span class="wiki-review-status review-status--completed">감수 완료</span>
      </div>
    </div>
  </div>

  <div class="wiki-detail-content">
    <main class="wiki-main-content">
      <article class="wiki-article">
        <div class="wiki-content">
          <p>위키 상세 페이지입니다. 개발 예정입니다.</p>
          
          <h2>개발 계획</h2>
          <ul>
            <li>마크다운 지원</li>
            <li>코드 하이라이팅</li>
            <li>이미지 및 파일 첨부</li>
            <li>버전 관리</li>
            <li>편집 히스토리</li>
          </ul>
        </div>
      </article>
    </main>

    <aside class="wiki-sidebar">
      <div class="wiki-toc">
        <h3>목차</h3>
        <nav class="toc-nav">
          <ul class="toc-list">
            <li><a href="#overview" class="toc-link">개요</a></li>
            <li><a href="#development" class="toc-link">개발 계획</a></li>
          </ul>
        </nav>
      </div>

      <div class="wiki-info-card">
        <h3>문서 정보</h3>
        <div class="wiki-info-item">
          <span class="info-label">작성자:</span>
          <span class="info-value">시스템</span>
        </div>
        <div class="wiki-info-item">
          <span class="info-label">감수자:</span>
          <span class="info-value">-</span>
        </div>
        <div class="wiki-info-item">
          <span class="info-label">카테고리:</span>
          <span class="info-value">개발</span>
        </div>
      </div>
    </aside>
  </div>
</div>

<style>
.wiki-detail-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.wiki-detail-header {
  margin-bottom: 30px;
}

.breadcrumb-nav {
  margin-bottom: 20px;
}

.breadcrumb-link {
  color: #11835E;
  text-decoration: none;
}

.breadcrumb-link:hover {
  text-decoration: underline;
}

.breadcrumb-separator {
  margin: 0 10px;
  color: #5A6B7B;
}

.breadcrumb-current {
  color: #5A6B7B;
  font-weight: 600;
}

.wiki-detail-title h1 {
  font-size: 32px;
  font-weight: 700;
  color: #0B0F14;
  margin: 0 0 15px 0;
}

.wiki-meta {
  display: flex;
  gap: 20px;
  align-items: center;
  flex-wrap: wrap;
}

.wiki-version {
  background: #E9F8F0;
  color: #11835E;
  padding: 4px 12px;
  border-radius: 20px;
  font-size: 14px;
  font-weight: 600;
}

.wiki-last-updated {
  color: #5A6B7B;
  font-size: 14px;
}

.review-status--completed {
  background: #E9F8F0;
  color: #22A06B;
  padding: 4px 12px;
  border-radius: 20px;
  font-size: 14px;
  font-weight: 600;
}

.wiki-detail-content {
  display: flex;
  gap: 30px;
}

.wiki-main-content {
  flex: 1;
}

.wiki-article {
  background: white;
  border: 1px solid #E6ECE8;
  border-radius: 12px;
  padding: 30px;
  box-shadow: 0px 2px 4px rgba(16, 24, 40, 0.05);
}

.wiki-content h2 {
  font-size: 24px;
  font-weight: 700;
  color: #0B0F14;
  margin: 30px 0 15px 0;
}

.wiki-content p {
  font-size: 16px;
  line-height: 1.6;
  color: #0B0F14;
  margin-bottom: 15px;
}

.wiki-content ul {
  margin: 15px 0;
  padding-left: 20px;
}

.wiki-content li {
  font-size: 16px;
  line-height: 1.6;
  color: #0B0F14;
  margin-bottom: 8px;
}

.wiki-sidebar {
  width: 300px;
  flex-shrink: 0;
}

.wiki-toc,
.wiki-info-card {
  background: white;
  border: 1px solid #E6ECE8;
  border-radius: 12px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0px 2px 4px rgba(16, 24, 40, 0.05);
}

.wiki-toc h3,
.wiki-info-card h3 {
  font-size: 18px;
  font-weight: 700;
  color: #0B0F14;
  margin: 0 0 15px 0;
}

.toc-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.toc-list li {
  margin-bottom: 8px;
}

.toc-link {
  color: #11835E;
  text-decoration: none;
  font-size: 14px;
  line-height: 1.4;
}

.toc-link:hover {
  text-decoration: underline;
}

.wiki-info-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 8px 0;
  border-bottom: 1px solid #F2F7F3;
}

.wiki-info-item:last-child {
  border-bottom: none;
}

.info-label {
  font-size: 14px;
  color: #5A6B7B;
  font-weight: 500;
}

.info-value {
  font-size: 14px;
  color: #0B0F14;
  font-weight: 600;
}

@media (max-width: 768px) {
  .wiki-detail-content {
    flex-direction: column;
  }
  
  .wiki-sidebar {
    width: 100%;
  }
  
  .wiki-meta {
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
  }
}
</style>

<!-- 면책 공지 -->
@include('components.wiki-disclaimer')

@endsection
