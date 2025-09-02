@extends('layouts.app')

@section('title', '위키 - 분야')

@section('content')
<!-- 상단 네비게이션 탭 -->
<nav class="nav-tabs" role="tablist" aria-label="위키 카테고리">
  <a href="{{ route('wiki.index') }}" class="nav-tab" role="tab" aria-selected="false">
    홈
  </a>
  <a href="{{ route('wiki.field') }}" class="nav-tab active" role="tab" aria-selected="true">
    분야
  </a>
  <a href="{{ route('wiki.precedent') }}" class="nav-tab" role="tab" aria-selected="false">
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

<!-- 분야 탐색 헤더 -->
<div class="field-explorer-header">
  <h1 class="field-explorer-title">분야로 탐색</h1>
  <p class="field-explorer-description">관심 분야를 선택해 허브(쟁점 지도)와 세부 문서로 빠르게 이동하세요.</p>
  
  <!-- 분야 필터 탭 -->
  <div class="field-filter-tabs">
    <button type="button" class="field-filter-tab">형사</button>
    <button type="button" class="field-filter-tab">민사</button>
    <button type="button" class="field-filter-tab">가사/상속</button>
    <button type="button" class="field-filter-tab">노동</button>
    <button type="button" class="field-filter-tab">부동산</button>
    <button type="button" class="field-filter-tab">상사/회사</button>
    <button type="button" class="field-filter-tab">지재/콘텐츠</button>
    <button type="button" class="field-filter-tab">행정/조세</button>
    <button type="button" class="field-filter-tab">출입국</button>
    <button type="button" class="field-filter-tab">의료</button>
    <button type="button" class="field-filter-tab">교통</button>
  </div>
</div>

<!-- 분야별 카테고리 그리드 -->
<div class="field-categories-grid">
  <!-- 형사 -->
  <article class="field-category-card">
    <a href="{{ route('wiki.criminal') }}" class="field-category-link">
      <h2 class="field-category-title">형사</h2>
      <p class="field-category-subtitle">초동대응·수사·재판</p>
      
      <div class="field-hub-list">
        <div class="field-hub-item">
          <span class="hub-name">음주운전 허브</span>
          <span class="hub-description">처벌·면허·측정거부</span>
        </div>
        <div class="field-hub-item">
          <span class="hub-name">특수폭행 허브</span>
          <span class="hub-description">양형·합의전략</span>
        </div>
        <div class="field-hub-item">
          <span class="hub-name">보이스피싱 허브</span>
          <span class="hub-description">가담유형·불송치</span>
        </div>
        <div class="field-hub-item">
          <span class="hub-name">주거침입 허브</span>
          <span class="hub-description">구성요건·벌금사례</span>
        </div>
      </div>
    </a>
  </article>

  <!-- 민사 -->
  <article class="field-category-card">
    <h2 class="field-category-title">민사</h2>
    <p class="field-category-subtitle">손해배상·가압류/가처분</p>
    
    <div class="field-hub-list">
      <div class="field-hub-item">
        <span class="hub-name">전세금반환 허브</span>
        <span class="hub-description">소장·집행</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">손해배상 허브</span>
        <span class="hub-description">책임·액수 산정</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">가압류/가처분 허브</span>
        <span class="hub-description">요건·절차</span>
      </div>
    </div>
  </article>

  <!-- 가사/상속 -->
  <article class="field-category-card">
    <h2 class="field-category-title">가사/상속</h2>
    <p class="field-category-subtitle">이혼·양육·상속</p>
    
    <div class="field-hub-list">
      <div class="field-hub-item">
        <span class="hub-name">이혼 허브</span>
        <span class="hub-description">재산분할·위자료</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">양육 허브</span>
        <span class="hub-description">친권·면접교섭</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">상속 허브</span>
        <span class="hub-description">유류분·분할</span>
      </div>
    </div>
  </article>

  <!-- 노동 -->
  <article class="field-category-card">
    <h2 class="field-category-title">노동</h2>
    <p class="field-category-subtitle">부당해고·임금</p>
    
    <div class="field-hub-list">
      <div class="field-hub-item">
        <span class="hub-name">부당해고 허브</span>
        <span class="hub-description">절차·구제</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">임금체불 허브</span>
        <span class="hub-description">증거·진정</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">산재 허브</span>
        <span class="hub-description">요건·보상</span>
      </div>
    </div>
  </article>

  <!-- 부동산 -->
  <article class="field-category-card">
    <h2 class="field-category-title">부동산</h2>
    <p class="field-category-subtitle">임대차·등기·분쟁</p>
    
    <div class="field-hub-list">
      <div class="field-hub-item">
        <span class="hub-name">임대차 허브</span>
        <span class="hub-description">보증금·명도</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">소유권 허브</span>
        <span class="hub-description">경계·분쟁</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">건설 허브</span>
        <span class="hub-description">계약·하자</span>
      </div>
    </div>
  </article>

  <!-- 상사/회사 -->
  <article class="field-category-card">
    <h2 class="field-category-title">상사/회사</h2>
    <p class="field-category-subtitle">계약·컴플라이언스</p>
    
    <div class="field-hub-list">
      <div class="field-hub-item">
        <span class="hub-name">계약 허브</span>
        <span class="hub-description">리스크·조항</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">분쟁 해결 허브</span>
        <span class="hub-description">증거·전략</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">컴플라이언스 허브</span>
        <span class="hub-description">내부통제</span>
      </div>
    </div>
  </article>

  <!-- 지재/콘텐츠 -->
  <article class="field-category-card">
    <h2 class="field-category-title">지재/콘텐츠</h2>
    <p class="field-category-subtitle">저작권·상표</p>
    
    <div class="field-hub-list">
      <div class="field-hub-item">
        <span class="hub-name">저작권 허브</span>
        <span class="hub-description">침해·라이선스</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">상표 허브</span>
        <span class="hub-description">출원·분쟁</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">디자인 허브</span>
        <span class="hub-description">보호·분쟁</span>
      </div>
    </div>
  </article>

  <!-- 행정/조세 -->
  <article class="field-category-card">
    <h2 class="field-category-title">행정/조세</h2>
    <p class="field-category-subtitle">인허가·처분·불복</p>
    
    <div class="field-hub-list">
      <div class="field-hub-item">
        <span class="hub-name">행정심판 허브</span>
        <span class="hub-description">청구·절차</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">처분취소 허브</span>
        <span class="hub-description">요건·사례</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">조세 불복 허브</span>
        <span class="hub-description">이의·심판</span>
      </div>
    </div>
  </article>

  <!-- 출입국 -->
  <article class="field-category-card">
    <h2 class="field-category-title">출입국</h2>
    <p class="field-category-subtitle">비자·체류</p>
    
    <div class="field-hub-list">
      <div class="field-hub-item">
        <span class="hub-name">체류자격 허브</span>
        <span class="hub-description">변경·연장</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">강제퇴거 허브</span>
        <span class="hub-description">불복·구제</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">영주권 허브</span>
        <span class="hub-description">요건·절차</span>
      </div>
    </div>
  </article>

  <!-- 의료 -->
  <article class="field-category-card">
    <h2 class="field-category-title">의료</h2>
    <p class="field-category-subtitle">의료분쟁</p>
    
    <div class="field-hub-list">
      <div class="field-hub-item">
        <span class="hub-name">의료사고 허브</span>
        <span class="hub-description">책임·절차</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">분쟁조정 허브</span>
        <span class="hub-description">조정·합의</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">보험연계 허브</span>
        <span class="hub-description">청구·분쟁</span>
      </div>
    </div>
  </article>

  <!-- 교통 -->
  <article class="field-category-card">
    <h2 class="field-category-title">교통</h2>
    <p class="field-category-subtitle">사고·보험</p>
    
    <div class="field-hub-list">
      <div class="field-hub-item">
        <span class="hub-name">교통사고 허브</span>
        <span class="hub-description">과실·합의</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">보험 허브</span>
        <span class="hub-description">보상·분쟁</span>
      </div>
      <div class="field-hub-item">
        <span class="hub-name">벌점·면허 허브</span>
        <span class="hub-description">행정처분</span>
      </div>
    </div>
  </article>
</div>

<!-- 면책 공지 -->
@include('components.wiki-disclaimer')

@endsection
