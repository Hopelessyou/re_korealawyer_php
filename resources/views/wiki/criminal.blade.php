@extends('layouts.app')

@section('content')
<!-- 네비게이션 탭 -->
<nav class="nav-tabs" role="tablist" aria-label="위키 카테고리">
  <a href="{{ route('wiki.index') }}" class="nav-tab" role="tab" aria-selected="false">홈</a>
  <a href="{{ route('wiki.field') }}" class="nav-tab active" role="tab" aria-selected="true">분야</a>
  <a href="{{ route('wiki.precedent') }}" class="nav-tab" role="tab" aria-selected="false">판례</a>
  <a href="{{ route('wiki.form') }}" class="nav-tab" role="tab" aria-selected="false">서식</a>
  <a href="{{ route('wiki.faq') }}" class="nav-tab" role="tab" aria-selected="false">FAQ</a>
  <a href="{{ route('wiki.terms') }}" class="nav-tab" role="tab" aria-selected="false">용어</a>
</nav>

<!-- 형사 분야 허브 페이지 -->
<div class="criminal-hub-page">
  <!-- 헤더 배너 -->
  <div class="criminal-header-banner">
    <h1 class="criminal-title">형사 분야 허브</h1>
    <p class="criminal-description">형사 사건을 빠르게 이해하고 실행하세요. 하위 허브와 단계별 자료, 대표 서식/판례/FAQ/용어를 모았습니다.</p>
    
    <!-- 검색 바 -->
    <div class="criminal-search-container">
      <input type="text" class="criminal-search-input" placeholder="예: 음주측정거부, 특수폭행 선처, 보이스피싱 공범" aria-label="형사 사건 검색">
      <button type="button" class="criminal-search-button">검색</button>
    </div>
  </div>

  <!-- 메인 컨텐츠 영역 -->
  <div class="criminal-main-content">
    <!-- 왼쪽 컨텐츠 -->
    <div class="criminal-content-left">
      <!-- 하위 허브 섹션 -->
      <div class="criminal-section-card">
        <div class="criminal-section-header">
          <h2 class="criminal-section-title">하위 허브</h2>
          <span class="criminal-section-subtitle">핵심 쟁점 지도</span>
        </div>
        
        <div class="criminal-sub-hubs">
          <!-- 음주운전 허브 -->
          <div class="criminal-sub-hub">
            <h3 class="sub-hub-title">음주운전 허브</h3>
            <p class="sub-hub-description">처벌 수위·면허·측정거부·채혈까지 한<br/>눈에.</p>
            <div class="sub-hub-actions">
              <a href="{{ route('wiki.special-assault') }}" class="hub-main-button">허브 바로가기</a>
              <button type="button" class="hub-sub-button">세부 가이드</button>
              <button type="button" class="hub-sub-button">서식</button>
            </div>
          </div>

          <!-- 특수폭행 허브 -->
          <div class="criminal-sub-hub">
            <h3 class="sub-hub-title">특수폭행 허브</h3>
            <p class="sub-hub-description">가담 형태·위험물 사용·양형 요소·합<br/>의 전략.</p>
            <div class="sub-hub-actions">
              <button type="button" class="hub-main-button">허브 바로가기</button>
              <button type="button" class="hub-sub-button">세부 가이드</button>
              <button type="button" class="hub-sub-button">서식</button>
            </div>
          </div>

          <!-- 보이스피싱 허브 -->
          <div class="criminal-sub-hub">
            <h3 class="sub-hub-title">보이스피싱 허브</h3>
            <p class="sub-hub-description">가담 유형별 쟁점, 불송치/기소유예<br/>전략.</p>
            <div class="sub-hub-actions">
              <button type="button" class="hub-main-button">허브 바로가기</button>
              <button type="button" class="hub-sub-button">세부 가이드</button>
              <button type="button" class="hub-sub-button">서식</button>
            </div>
          </div>

          <!-- 주거침입 허브 -->
          <div class="criminal-sub-hub">
            <h3 class="sub-hub-title">주거침입 허브</h3>
            <p class="sub-hub-description">구성요건·벌금사례·합의 포인트.</p>
            <div class="sub-hub-actions">
              <button type="button" class="hub-main-button">허브 바로가기</button>
              <button type="button" class="hub-sub-button">세부 가이드</button>
              <button type="button" class="hub-sub-button">서식</button>
            </div>
          </div>
        </div>
      </div>

      <!-- 절차별 필터 -->
      <div class="criminal-procedure-filter">
        <button type="button" class="procedure-filter-btn active">전체</button>
        <button type="button" class="procedure-filter-btn">신고</button>
        <button type="button" class="procedure-filter-btn">수사</button>
        <button type="button" class="procedure-filter-btn">기소</button>
        <button type="button" class="procedure-filter-btn">재판</button>
        <button type="button" class="procedure-filter-btn">집행</button>
      </div>

      <!-- 절차별 추천 문서 -->
      <div class="criminal-section-card">
        <div class="criminal-section-header">
          <h2 class="criminal-section-title">절차별 추천 문서</h2>
          <span class="criminal-section-subtitle">형사</span>
        </div>
        
        <div class="criminal-documents">
          <div class="criminal-document-item">
            <span class="document-title">음주운전 초기대응 24시간 플랜</span>
            <span class="document-category">신고 · 체크리스트</span>
          </div>
          <div class="criminal-document-item">
            <span class="document-title">음주측정거부 대응 가이드</span>
            <span class="document-category">수사 · 실무포인트</span>
          </div>
          <div class="criminal-document-item">
            <span class="document-title">보이스피싱 피의자신문 대비</span>
            <span class="document-category">수사 · 질문 리스트</span>
          </div>
          <div class="criminal-document-item">
            <span class="document-title">특수폭행 양형 요소와 선처 포인트</span>
            <span class="document-category">기소 · 양형</span>
          </div>
          <div class="criminal-document-item">
            <span class="document-title">주거침입 벌금사례 분석</span>
            <span class="document-category">재판 · 사례</span>
          </div>
          <div class="criminal-document-item">
            <span class="document-title">성범죄 취업제한 제도 총정리</span>
            <span class="document-category">집행 · 행정연계</span>
          </div>
        </div>
      </div>

      <!-- 핵심 서식 -->
      <div class="criminal-section-card">
        <div class="criminal-section-header">
          <h2 class="criminal-section-title">핵심 서식</h2>
          <span class="criminal-section-subtitle">미리보기/다운로드</span>
        </div>
        
        <div class="criminal-forms">
          <div class="criminal-form-item">
            <span class="form-title">형사 합의서 표준안</span>
            <span class="form-type">DOCX/HWPX</span>
          </div>
          <div class="criminal-form-item">
            <span class="form-title">반성문 템플릿</span>
            <span class="form-type">PDF</span>
          </div>
          <div class="criminal-form-item">
            <span class="form-title">수사단계 의견서</span>
            <span class="form-type">DOCX</span>
          </div>
        </div>
      </div>

      <!-- 대표 판례 -->
      <div class="criminal-section-card">
        <div class="criminal-section-header">
          <h2 class="criminal-section-title">대표 판례</h2>
          <button type="button" class="more-button">더보기</button>
        </div>
        
        <div class="criminal-precedents">
          <div class="criminal-precedent-item">
            <span class="precedent-title">대법원 20XX도XXXX — 음주측정거부</span>
            <span class="precedent-category">요건·고지</span>
          </div>
          <div class="criminal-precedent-item">
            <span class="precedent-title">대법원 20XX도XXXX — 채혈 적법성</span>
            <span class="precedent-category">절차 하자</span>
          </div>
          <div class="criminal-precedent-item">
            <span class="precedent-title">대법원 20XX도XXXX — 주거침입</span>
            <span class="precedent-category">구성요건</span>
          </div>
        </div>
      </div>

      <!-- FAQ & 용어 -->
      <div class="criminal-section-card">
        <div class="criminal-section-header">
          <h2 class="criminal-section-title">FAQ & 용어</h2>
        </div>
        
        <div class="criminal-faq-terms">
          <div class="criminal-faq-term-item">
            <span class="faq-term-title">음주운전 초범, 선처 가능할까요?</span>
            <span class="faq-term-type">FAQ</span>
          </div>
          <div class="criminal-faq-term-item">
            <span class="faq-term-title">혈중알코올농도(BAC)</span>
            <span class="faq-term-type">용어</span>
          </div>
          <div class="criminal-faq-term-item">
            <span class="faq-term-title">보이스피싱 단순 전달도 처벌?</span>
            <span class="faq-term-type">FAQ</span>
          </div>
        </div>
      </div>
    </div>

    <!-- 오른쪽 사이드바 -->
    <div class="criminal-sidebar">
      <!-- 형사 사건 상담 -->
      <div class="criminal-sidebar-card">
        <div class="sidebar-card-header">
          <h3 class="sidebar-card-title">형사 사건 상담</h3>
        </div>
        <p class="sidebar-card-description">사건 요지·증거 현황을 보내주시면 전<br/>담 변호사가 검토합니다.</p>
        <div class="sidebar-card-actions">
          <button type="button" class="consultation-button">상담 시작</button>
          <button type="button" class="checklist-button">체크리스트</button>
        </div>
      </div>

      <!-- 대표 집필 변호사 -->
      <div class="criminal-sidebar-card author-card">
        <div class="sidebar-card-header">
          <h3 class="sidebar-card-title">대표 집필 변호사</h3>
        </div>
        <div class="author-profile">
          <img src="https://placehold.co/72x73" alt="변호사 프로필" class="author-avatar">
          <div class="author-info">
            <span class="author-name">홍길동</span>
            <span class="author-title">변호사<br/>형사/민사<br/>법률감수 1,204건</span>
          </div>
        </div>
      </div>

      <!-- 공동집필진 -->
      <div class="criminal-sidebar-card author-card">
        <div class="sidebar-card-header">
          <h3 class="sidebar-card-title">공동집필진(주간 TOP)</h3>
          <button type="button" class="contribution-button">기여도</button>
        </div>
        <div class="co-authors">
          <div class="co-author-item">
            <img src="https://placehold.co/61x62" alt="공동집필진 프로필" class="co-author-avatar">
            <div class="co-author-info">
              <span class="co-author-name">이효주 변호사</span>
              <span class="co-author-contribution">+12 편집</span>
            </div>
          </div>
          <div class="co-author-item">
            <img src="https://placehold.co/61x62" alt="공동집필진 프로필" class="co-author-avatar">
            <div class="co-author-info">
              <span class="co-author-name">김지운 에디터</span>
              <span class="co-author-contribution">+9 편집</span>
            </div>
          </div>
          <div class="co-author-item">
            <img src="https://placehold.co/61x62" alt="공동집필진 프로필" class="co-author-avatar">
            <div class="co-author-info">
              <span class="co-author-name">박민서 변호사</span>
              <span class="co-author-contribution">+7 감수</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 스폰서 광고 -->
      <div class="criminal-sponsor-ad">
        <span class="sponsor-text">스폰서 300×250</span>
      </div>
    </div>
  </div>
</div>

<!-- 면책 공지 -->
@include('components.wiki-disclaimer')
@endsection
