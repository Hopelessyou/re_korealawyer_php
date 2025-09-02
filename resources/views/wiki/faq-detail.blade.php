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

<!-- FAQ 상세 페이지 -->
<div class="faq-detail-page">
  <!-- 헤더 배너 -->
  <div class="faq-detail-header-banner">
    <h1 class="faq-detail-title">음주운전 초범, 선처 가능할까요?</h1>
    
    <!-- 메타 정보 바 -->
    <div class="meta-info-bar">
      <span class="status-tag">감수 완료</span>
      <span class="meta-info">최종 수정: 2025-08-22</span>
      <span class="meta-info">버전: v1.0.0</span>
      <span class="meta-info">태그: 형사 · 음주운전 · 선처</span>
    </div>
    
    <!-- 요약 박스 -->
    <div class="summary-box">
      <div class="summary-content">
        <p class="summary-item">선처 가능성은 <strong>농도·사고·전력·피해회복·반성</strong> 등 종합 요소에 좌우됩니다. 약식명령 단계에서의 <strong>기 판단</strong>과 <strong>교육 이수·반성문</strong> 제출이 중요합니다.</p>
      </div>
    </div>
  </div>

  <!-- 메인 컨텐츠 영역 -->
  <div class="faq-detail-main-content">
    <!-- 왼쪽 컨텐츠 -->
    <div class="faq-detail-content-left">
      <!-- 답변 섹션 -->
      <div class="content-section">
        <h2 class="section-title">답변</h2>
        <div class="answer-content">
          <p class="answer-text">
            음주운전 초범의 선처 여부는 혈중알코올농도(BAC), 사고 유무, 동종 전력의 존재, 피해회복(합의·공탁)과<br/>
            반성 정도 등 <strong>복수 요소의 결합</strong>으로 판단됩니다. 일반적으로 농도가 낮고 사고가 없으며 피해회복이 이뤄졌<br/>
            다면 약식명령(벌금) 선에서 종결될 확률이 높습니다.
          </p>
          <p class="answer-text">
            다만, 단순히 초범이라는 이유만으로 자동 선처가 보장되지는 않습니다. <strong>약식명령 이의 여부</strong>를 사건의 특성<br/>
            (직업·면허 문제·재범 가능성 등)에 맞춰 결정해야 하며, 이의 후 정식재판에서 제출할 
          </p>
          <p class="answer-text">
            <strong>양형자료(합의서, 반성문, 교육 이수증, 탄원서)</strong> 준비가 중요합니다.
          </p>
          <p class="answer-text">
            또한 형사와 별도로 진행되는 <strong>면허 행정처분</strong>의 일정(정지/취소·이의신청 기한)을 반드시 관리해야 합니다.<br/>
            형사 결과와 행정처분은 서로 영향을 줄 수 있으나 <strong>절차는 별개</strong>이므로 각각의 대응 전략을 병행하십시오.
          </p>
        </div>
      </div>

      <!-- 실무 팁 섹션 -->
      <div class="content-section">
        <h2 class="section-title">실무 팁</h2>
        <div class="practical-tips">
          <p class="tip-item"><strong>피해회복</strong>: 합의 최우선, 불가 시 공탁으로 의사 표명</p>
          <p class="tip-item"><strong>반성 입증</strong>: 반성문·관련 교육 이수(증빙), 봉사·치료 계획</p>
          <p class="tip-item"><strong>증거 정리</strong>: 단속 경위, 고지 내용, 블랙박스·CCTV, 채혈/호흡측정 기록</p>
        </div>
      </div>

      <!-- 추가로 알아보기 섹션 -->
      <div class="content-section">
        <h2 class="section-title">추가로 알아보기</h2>
        <div class="related-links">
          <p class="link-item">
            <a href="#" class="related-link">허브: 음주운전</a>
          </p>
          <p class="link-item">
            <a href="#" class="related-link">세부: 음주측정거부 대응</a>
          </p>
          <p class="link-item">
            <a href="#" class="related-link">판례 해설: 음주측정거부</a>
          </p>
          <p class="link-item">
            <a href="#" class="related-link">서식: 반성문(가이드)</a>
          </p>
        </div>
      </div>

      <!-- 유의사항 섹션 -->
      <div class="content-section">
        <h2 class="section-title">유의사항</h2>
        <div class="disclaimer-box">
          <p class="disclaimer-text">
            본 답변은 일반 정보입니다. 개별 사건의 사실관계와 법령 변화에 따라 결론이 달라질 수 있으니, 적용 전<br/>
            변호사 상담을 권합니다.
          </p>
        </div>
      </div>
    </div>

    <!-- 오른쪽 사이드바 -->
    <div class="faq-detail-sidebar">
      <!-- 바로 상담하기 -->
      <div class="sidebar-card">
        <div class="sidebar-card-header">
          <h3 class="sidebar-card-title">바로 상담하기</h3>
        </div>
        <div class="consultation-content">
          <p class="consultation-text">사건 요지·증거 현황을 보내주시면 분<br/>야 전담 변호사가 검토합니다.</p>
          <div class="consultation-links">
            <a href="#" class="consultation-link">전화상담</a>
            <a href="#" class="consultation-link">체크리스트</a>
          </div>
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
    </div>
  </div>
</div>

<!-- 면책 공지 -->
@include('components.wiki-disclaimer')
@endsection
