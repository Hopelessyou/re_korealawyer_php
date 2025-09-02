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

<!-- 용어 상세 페이지 -->
<div class="terms-detail-page">
  <!-- 헤더 배너 -->
  <div class="terms-detail-header-banner">
    <h1 class="terms-detail-title">특수폭행</h1>
    
    <!-- 메타 정보 바 -->
    <div class="meta-info-bar">
      <span class="status-tag">법률감수 완료</span>
      <span class="meta-info">최종 수정: 2025-08-18</span>
      <span class="meta-info">버전: v1.0.0</span>
    </div>
    
    <!-- 요약 박스 -->
    <div class="summary-box">
      <div class="summary-content">
        <p class="summary-item">특수한 상황이나 관계에서 발생하는 폭행 행위. 일반 폭행보다 가중처벌되며, 피해자와의 관계, 장소, 시간, 방법 등이 양형에 영향을 미칩니다.</p>
      </div>
    </div>
    
    <!-- 액션 버튼 -->
    <div class="action-buttons">
      <button type="button" class="action-button secondary">정의 복사</button>
      <a href="{{ route('wiki.terms') }}" class="action-button primary">용어 목록</a>
    </div>
  </div>

  <!-- 메인 컨텐츠 영역 -->
  <div class="terms-detail-main-content">
    <!-- 왼쪽 컨텐츠 -->
    <div class="terms-detail-content-left">
      <!-- 정의와 구성요건 섹션 -->
      <div class="content-section">
        <h2 class="section-title">정의와 구성요건</h2>
        <div class="definition-content">
          <p class="definition-text">
            특수폭행은 일반 폭행죄(형법 제260조)에 비해 가중처벌되는 범죄로, 특수한 상황이나 관계에서 발생하는 폭행 행위를 의미합니다. 
            동일 시점이라도 폭행의 방법·수단·장소·시간·피해자와의 관계 등에 따라 수치가 달라질 수 있습니다. 실무에서는 
            <strong>폭행의 특수성</strong>과 <strong>피해자 보호의 필요성</strong>, <strong>가해자의 책임 가중성</strong>이 쟁점이 됩니다.
          </p>
          <div class="note-box">
            <p class="note-text">※ 특수폭행의 가중요소: 피해자와의 관계(친족·상사·교사 등), 장소(공공장소·피해자 주거 등), 시간(야간·공휴일 등), 방법(흉기·집단 등)</p>
          </div>
        </div>
      </div>

      <!-- 법적 기준(형사·행정) 섹션 -->
      <div class="content-section">
        <h2 class="section-title">법적 기준(형사·행정)</h2>
        <div class="legal-standards-table">
          <div class="table-header">
            <div class="table-cell header">구분</div>
            <div class="table-cell header">의미</div>
          </div>
          <div class="table-row">
            <div class="table-cell">형사</div>
            <div class="table-cell">형법 제261조(특수폭행) 처벌 기준. 특수요소, 피해 정도, 전력 등에 따라 양형이 달라짐.</div>
          </div>
          <div class="table-row">
            <div class="table-cell">행정</div>
            <div class="table-cell">경찰·검찰의 수사·기소 정책 기준. 형사와 별개로 진행되며 이의절차가 존재.</div>
          </div>
        </div>
      </div>

      <!-- 관련 조문·판례 섹션 -->
      <div class="content-section">
        <h2 class="section-title">관련 조문·판례</h2>
        <div class="related-statutes">
          <p class="statute-item">형법 제261조(특수폭행), 제260조(폭행)</p>
          <p class="statute-item">대법원 20XX도XXXX — 특수폭행: 특수요소의 인정 기준과 가중처벌의 정당성</p>
          <p class="statute-item">대법원 20XX도XXXX — 친족간 폭행: 친족관계와 특수폭행 성립 요건</p>
        </div>
      </div>

      <!-- 오해 주의 섹션 -->
      <div class="content-section">
        <h2 class="section-title">오해 주의</h2>
        <div class="misconceptions">
          <p class="misconception-item">
            <strong>"친족간 폭행은 항상 특수폭행이다"</strong>는 오해: 친족관계만으로는 부족하며, 폭행의 특수성·가중성 등이 추가로 인정되어야 함.
          </p>
          <p class="misconception-item">
            <strong>"특수폭행은 반드시 실형이다"</strong>는 오해: 구체적 사정에 따라 벌금형·집행유예 등이 가능하며, 피해자와의 합의가 중요함.
          </p>
        </div>
      </div>

      <!-- 연관 문서 섹션 -->
      <div class="content-section">
        <h2 class="section-title">연관 문서</h2>
        <div class="related-documents">
          <p class="document-item">
            <a href="#" class="document-link">허브: 특수폭행</a>
          </p>
          <p class="document-item">
            <a href="#" class="document-link">세부: 친족간 폭행 대응</a>
          </p>
          <p class="document-item">
            <a href="#" class="document-link">판례 해설: 특수폭행 양형 요소</a>
          </p>
          <p class="document-item">
            <a href="#" class="document-link">서식: 합의서(특수폭행)</a>
          </p>
        </div>
      </div>

      <!-- FAQ 섹션 -->
      <div class="content-section">
        <h2 class="section-title">FAQ</h2>
        <div class="faq-items">
          <p class="faq-item">
            <strong>친족간 폭행이면 무조건 특수폭행인가요?</strong> — 친족관계는 중요한 요소이지만, 폭행의 특수성·가중성 등이 추가로 인정되어야 특수폭행이 성립됩니다.
          </p>
          <p class="faq-item">
            <strong>특수폭행도 합의가 가능한가요?</strong> — 가능합니다. 피해자와의 합의는 양형에 중요한 영향을 미치며, 경우에 따라 기소유예나 벌금형 선고가 가능합니다.
          </p>
        </div>
      </div>
    </div>

    <!-- 오른쪽 사이드바 -->
    <div class="terms-detail-sidebar">
      <!-- 목차 -->
      <div class="sidebar-card">
        <div class="sidebar-card-header">
          <h3 class="sidebar-card-title">목차</h3>
        </div>
        <div class="table-of-contents">
          <div class="toc-item">정의와 구성요건</div>
          <div class="toc-item">법적 기준(형사·행정)</div>
          <div class="toc-item">관련 조문·판례</div>
          <div class="toc-item">오해 주의</div>
          <div class="toc-item">연관 문서</div>
          <div class="toc-item">FAQ</div>
        </div>
      </div>

      <!-- 작성자 및 에디터 -->
      <div class="sidebar-card">
        <div class="sidebar-card-header">
          <h3 class="sidebar-card-title">작성자 및 에디터</h3>
        </div>
        <div class="authors-editors">
          <div class="author-item">
            <img src="https://placehold.co/61x62" alt="이효주 변호사" class="author-avatar">
            <div class="author-info">
              <span class="author-name">이효주 변호사</span>
              <span class="author-role">집필</span>
            </div>
          </div>
          <div class="author-item">
            <img src="https://placehold.co/61x62" alt="김지운 에디터" class="author-avatar">
            <div class="author-info">
              <span class="author-name">김지운 에디터</span>
              <span class="author-role">감수</span>
            </div>
          </div>
          <div class="author-item">
            <img src="https://placehold.co/61x62" alt="박민서 변호사" class="author-avatar">
            <div class="author-info">
              <span class="author-name">박민서 변호사</span>
              <span class="author-role">감수</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 문서 정보 -->
      <div class="sidebar-card">
        <div class="sidebar-card-header">
          <h3 class="sidebar-card-title">문서 정보</h3>
        </div>
        <div class="document-info">
          <p class="info-item"><strong>버전</strong> v1.1.0</p>
          <p class="info-item"><strong>최종 수정</strong> 2025-08-18 14:20</p>
        </div>
      </div>

      <!-- 바로가기 -->
      <div class="sidebar-card">
        <div class="sidebar-card-header">
          <h3 class="sidebar-card-title">바로가기</h3>
        </div>
        <div class="quick-links">
          <a href="#" class="quick-link">용어 사전</a>
          <a href="#" class="quick-link">특수폭행 허브</a>
          <a href="#" class="quick-link">관련 판례</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 면책 공지 -->
@include('components.wiki-disclaimer')
@endsection
