@extends('layouts.app')

@section('content')
<!-- 네비게이션 탭 -->
<nav class="nav-tabs" role="tablist" aria-label="위키 카테고리">
  <a href="{{ route('wiki.index') }}" class="nav-tab" role="tab" aria-selected="false">홈</a>
  <a href="{{ route('wiki.field') }}" class="nav-tab" role="tab" aria-selected="false">분야</a>
  <a href="{{ route('wiki.precedent') }}" class="nav-tab" role="tab" aria-selected="false">판례</a>
  <a href="{{ route('wiki.form') }}" class="nav-tab" role="tab" aria-selected="false">서식</a>
  <a href="{{ route('wiki.faq') }}" class="nav-tab" role="tab" aria-selected="false">FAQ</a>
  <a href="{{ route('wiki.terms') }}" class="nav-tab" role="tab" aria-selected="false">용어</a>
</nav>

<!-- 특수폭행 허브 페이지 -->
<div class="special-assault-hub-page">
  <!-- 헤더 배너 -->
  <div class="special-assault-header-banner">
    <h1 class="special-assault-title">형사 · 특수폭행 허브</h1>
    
    <!-- 상태 태그 -->
    <div class="status-tags">
      <span class="status-tag completed">법률감수 완료</span>
      <span class="status-tag">최종 수정: 2025-08-18</span>
      <span class="status-tag">버전: v1.0.0</span>
    </div>
    
    <!-- 네비게이션 탭 -->
    <div class="hub-navigation-tabs">
      <button type="button" class="hub-nav-tab active">전체</button>
      <button type="button" class="hub-nav-tab">처벌·양형</button>
      <button type="button" class="hub-nav-tab">절차·진술</button>
      <button type="button" class="hub-nav-tab">증거·기록</button>
      <button type="button" class="hub-nav-tab">합의·피해회복</button>
    </div>
  </div>

  <!-- 메인 컨텐츠 영역 -->
  <div class="special-assault-main-content">
    <!-- 왼쪽 컨텐츠 -->
    <div class="special-assault-content-left">
      <!-- 쟁점 지도 섹션 -->
      <div class="special-assault-section-card">
        <div class="special-assault-section-header">
          <h2 class="special-assault-section-title">쟁점 지도</h2>
          <span class="special-assault-section-subtitle">핵심 쟁점</span>
        </div>
        
        <div class="issue-map-grid">
          <!-- 양형 요소·선처 포인트 -->
          <div class="issue-map-card">
            <a href="{{ route('wiki.sentencing-factors') }}" class="issue-map-link">
              <h3 class="issue-map-title">양형 요소·선처 포인트</h3>
              <p class="issue-map-description">수단 위험성·상해·주도성·<br/>전력·피해회복 등<br/><span class="issue-map-link">세부 가이드</span></p>
            </a>
          </div>

          <!-- 초기 진술·피의자신문 -->
          <div class="issue-map-card">
            <h3 class="issue-map-title">초기 진술·피의자신문</h3>
            <p class="issue-map-description">변호인 참여·질문 리스트·<br/>금기 표현<br/><span class="issue-map-link">세부 가이드</span></p>
          </div>

          <!-- CCTV·통신·목격자·의무기록 -->
          <div class="issue-map-card">
            <h3 class="issue-map-title">CCTV·통신·목격자·의<br/>무기록</h3>
            <p class="issue-map-description">확보·보존·제출 타이밍<br/><span class="issue-map-link">증거 모음</span></p>
          </div>

          <!-- 합의/공탁·재범방지 -->
          <div class="issue-map-card">
            <h3 class="issue-map-title">합의/공탁·재범방지</h3>
            <p class="issue-map-description">처벌불원·봉사/치료·서약<br/>서<br/><span class="issue-map-link">회복 전략</span></p>
          </div>
        </div>
      </div>

      <!-- 절차 플로우 섹션 -->
      <div class="special-assault-section-card">
        <div class="special-assault-section-header">
          <h2 class="special-assault-section-title">절차 플로우</h2>
          <span class="special-assault-section-subtitle">예상 소요 & 주의</span>
        </div>
        
        <div class="procedure-flow">
          <div class="procedure-step">
            <span class="step-number">1) 수사</span>
            <span class="step-description"> — 사실관계 정리, CCTV/통신/진술 확보</span>
          </div>
          <div class="procedure-step">
            <span class="step-number">2) 기소 전</span>
            <span class="step-description"> — 반성문·교육 이수, 합의/공탁</span>
          </div>
          <div class="procedure-step">
            <span class="step-number">3) 재판</span>
            <span class="step-description"> — 양형자료(합의서/탄원/치료·봉사)</span>
          </div>
        </div>
      </div>

      <!-- 준비서류 체크리스트 섹션 -->
      <div class="special-assault-section-card">
        <div class="special-assault-section-header">
          <h2 class="special-assault-section-title">준비서류 체크리스트</h2>
        </div>
        
        <div class="document-checklist">
          <div class="document-checklist-item">
            <span class="document-name">사건 경위·시간·장소·참여자 메모</span>
            <span class="document-category">사실관계</span>
          </div>
          <div class="document-checklist-item">
            <span class="document-name">CCTV/휴대폰/통신기록·목격자</span>
            <span class="document-category">증거</span>
          </div>
          <div class="document-checklist-item">
            <span class="document-name">치료비·손해명세·합의서/공탁서</span>
            <span class="document-category">피해회복</span>
          </div>
          <div class="document-checklist-item">
            <span class="document-name">반성문·교육 이수증</span>
            <span class="document-category">양형자료</span>
          </div>
        </div>
      </div>

      <!-- 핵심 서식 섹션 -->
      <div class="special-assault-section-card">
        <div class="special-assault-section-header">
          <h2 class="special-assault-section-title">핵심 서식</h2>
          <span class="special-assault-section-subtitle">미리보기/다운로드</span>
        </div>
        
        <div class="key-forms">
          <div class="key-form-item">
            <span class="form-name">형사 합의서 표준안</span>
            <span class="form-type">DOCX/HWPX</span>
          </div>
          <div class="key-form-item">
            <span class="form-name">반성문 템플릿</span>
            <span class="form-type">PDF</span>
          </div>
          <div class="key-form-item">
            <span class="form-name">수사단계 의견서</span>
            <span class="form-type">DOCX</span>
          </div>
        </div>
      </div>

      <!-- 대표 판례 섹션 -->
      <div class="special-assault-section-card">
        <div class="special-assault-section-header">
          <h2 class="special-assault-section-title">대표 판례</h2>
          <button type="button" class="more-button">더보기</button>
        </div>
        
        <div class="representative-precedents">
          <div class="precedent-item">
            <span class="precedent-name">대법원 20XX도XXXX — 특수폭행</span>
            <span class="precedent-aspects">위험물·주도성</span>
          </div>
          <div class="precedent-item">
            <span class="precedent-name">대법원 20XX도XXXX — 주거침입</span>
            <span class="precedent-aspects">구성요건</span>
          </div>
        </div>
      </div>

      <!-- FAQ & 용어 섹션 -->
      <div class="special-assault-section-card">
        <div class="special-assault-section-header">
          <h2 class="special-assault-section-title">FAQ & 용어</h2>
        </div>
        
        <div class="faq-terms">
          <div class="faq-term-item">
            <span class="faq-term-name">특수폭행에서 합의 효과는?</span>
            <span class="faq-term-type">FAQ</span>
          </div>
          <div class="faq-term-item">
            <span class="faq-term-name">집행유예</span>
            <span class="faq-term-type">용어</span>
          </div>
        </div>
      </div>
    </div>

    <!-- 오른쪽 사이드바 -->
    <div class="special-assault-sidebar">
      <!-- 형사 사건 상담 -->
      <div class="special-assault-sidebar-card">
        <div class="sidebar-card-header">
          <h3 class="sidebar-card-title">형사 사건 상담</h3>
        </div>
        <p class="sidebar-card-description">사건 요지·증거 현황을 보내주시면 전<br/>담 변호사가 검토합니다.</p>
        <div class="sidebar-card-actions">
          <button type="button" class="consultation-button">상담 시작</button>
          <button type="button" class="checklist-button">체크리스트</button>
        </div>
      </div>

      <!-- 문서 상태 -->
      <div class="special-assault-sidebar-card">
        <div class="sidebar-card-header">
          <h3 class="sidebar-card-title">문서 상태</h3>
        </div>
        <div class="document-status">
          <div class="status-item">
            <span class="status-label">감수자</span>
            <span class="status-value">홍길동 변호사</span>
          </div>
          <div class="status-item">
            <span class="status-label">최근 수정</span>
            <span class="status-value">2025-08-21 10:10</span>
          </div>
          <div class="status-item">
            <span class="status-label">버전</span>
            <span class="status-value">v1.0.0</span>
          </div>
        </div>
      </div>

      <!-- 스폰서 광고 -->
      <div class="special-assault-sponsor-ad">
        <span class="sponsor-text">스폰서 300×250</span>
      </div>
    </div>
  </div>
</div>

<!-- 면책 공지 -->
@include('components.wiki-disclaimer')
@endsection
