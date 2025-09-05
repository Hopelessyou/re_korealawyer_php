@extends('layouts.app')

@section('title', '위키')

@section('content')
<!-- 상단 네비게이션 탭 -->
<nav class="nav-tabs" role="tablist" aria-label="위키 카테고리">
  <a href="{{ route('wiki.index') }}" class="nav-tab active" role="tab" aria-selected="true">
    홈
  </a>
  <a href="{{ route('wiki.field') }}" class="nav-tab" role="tab" aria-selected="false">
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

<!-- 히어로 섹션 -->
<section class="hero-section">
  <div class="hero-badge">
    <span class="badge-text">행동 설계형 법률 지식베이스</span>
  </div>
  
  <h1 class="hero-title">무엇부터 해야 할지 모를 때,<br/>위키가 단계별로 안내합니다.</h1>
  
  <p class="hero-description">초동대응 가이드 · 체크리스트 · 서식 라이브러리 · 법령/판례 · 검수 배지까지 한 곳에서.</p>
  
  <div class="search-container">
    <input type="text" class="search-input" placeholder="예: 음주측정거부, 전세금반환, 특수폭행 선처" aria-label="위키 검색">
    <button type="button" class="search-button">검색</button>
  </div>
  
  <div class="filter-tags filter-tags--primary">
    <button type="button" class="filter-tag active">초동대응 24~72h</button>
    <button type="button" class="filter-tag">기일</button>
    <button type="button" class="filter-tag">증거</button>
    <button type="button" class="filter-tag">서식 라이브러리</button>
    <button type="button" class="filter-tag">법령/판례</button>
    <button type="button" class="filter-tag">검수 배지</button>
  </div>
  
  <div class="consultation-card">
    <div class="card-header">
      <h3 class="card-title">변호사에게 바로 물어보기</h3>
    </div>
    <p class="card-description">사건 요지와 증거 보유 현황을 보내주시면, 분야 담당 변호사가 검토합니다.</p>
    <div class="card-buttons">
      <button type="button" class="btn btn--primary">상담 시작</button>
      <button type="button" class="btn btn--secondary">체크리스트</button>
    </div>
  </div>
</section>

<!-- 빠른 시작 가이드 섹션 -->
<section class="quick-start-section">
  <div class="section-header">
    <h2 class="section-title">상황별 빠른 시작 가이드</h2>
    <div class="section-badge">
      <span class="badge-text">한눈에</span>
    </div>
  </div>
  
  <div class="guide-cards">
    <article class="guide-card">
      <h3 class="guide-card__title">경찰조사 통지서 받았다면</h3>
      <p class="guide-card__subtitle">초동대응 가이드 보기 →</p>
    </article>
    
    <article class="guide-card">
      <h3 class="guide-card__title">음주운전 단속에 걸렸을 때</h3>
      <p class="guide-card__subtitle">절차·서식·주의점 →</p>
    </article>
    
    <article class="guide-card">
      <h3 class="guide-card__title">내용증명 보내야 할 때</h3>
      <p class="guide-card__subtitle">작성 예시/템플릿 →</p>
    </article>
    
    <article class="guide-card">
      <h3 class="guide-card__title">가압류/가처분이 필요할 때</h3>
      <p class="guide-card__subtitle">준비물 체크리스트 →</p>
    </article>
    
    <article class="guide-card">
      <h3 class="guide-card__title">전세금반환소송 준비</h3>
      <p class="guide-card__subtitle">임대차 쟁점 한 번에 →</p>
    </article>
  </div>
</section>

<!-- 메인 콘텐츠 영역 -->
<div class="main-content-wrapper">
  <main class="main-content">
    <!-- 광고 배너 -->
    <div class="ad-banner" role="banner" aria-label="광고">
      <div class="ad-text">광고 배너 970×250</div>
    </div>
    
    <!-- 요즘 많이 보는 문서 -->
    <section class="popular-docs-section">
      <div class="section-header">
        <h2 class="section-title">요즘 많이 보는 문서</h2>
        <div class="section-badge">
          <span class="badge-text">주간</span>
        </div>
      </div>
      <div class="doc-list">
        <article class="doc-item">
          <h3 class="doc-title">음주측정거부 대응 가이드</h3>
          <div class="doc-stats">주간 12.4K</div>
        </article>
        <article class="doc-item">
          <h3 class="doc-title">전세금반환소송 제기 절차</h3>
          <div class="doc-stats">주간 9.1K</div>
        </article>
        <article class="doc-item">
          <h3 class="doc-title">보이스피싱 구속/불구속 실무</h3>
          <div class="doc-stats">주간 6.3K</div>
        </article>
      </div>
    </section>
    
    <!-- 분야로 찾기 -->
    <section class="category-finder-section">
      <div class="section-header">
        <h2 class="section-title">분야로 찾기</h2>
        <div class="section-badge">
          <span class="badge-text">빠른 이동</span>
        </div>
      </div>
      <div class="category-grid">
        <article class="category-item">
          <div class="category-icon">형</div>
          <h3 class="category-name">형사</h3>
          <p class="category-desc">초동대응·수사·재판</p>
        </article>
        <article class="category-item">
          <div class="category-icon">민</div>
          <h3 class="category-name">민사</h3>
          <p class="category-desc">손해배상·가압류/가처분</p>
        </article>
        <article class="category-item">
          <div class="category-icon">가</div>
          <h3 class="category-name">가사/상속</h3>
          <p class="category-desc">이혼·양육·상속</p>
        </article>
        <article class="category-item">
          <div class="category-icon">노</div>
          <h3 class="category-name">노동</h3>
          <p class="category-desc">부당해고·임금</p>
        </article>
        <article class="category-item">
          <div class="category-icon">부</div>
          <h3 class="category-name">부동산</h3>
          <p class="category-desc">임대차·등기·분쟁</p>
        </article>
        <article class="category-item">
          <div class="category-icon">상</div>
          <h3 class="category-name">상사/회사</h3>
          <p class="category-desc">계약·컴플라이언스</p>
        </article>
        <article class="category-item">
          <div class="category-icon">지</div>
          <h3 class="category-name">지재/콘텐츠</h3>
          <p class="category-desc">저작권·상표</p>
        </article>
        <article class="category-item">
          <div class="category-icon">행</div>
          <h3 class="category-name">행정</h3>
          <p class="category-desc">인허가·처분</p>
        </article>
        <article class="category-item">
          <div class="category-icon">조</div>
          <h3 class="category-name">조세</h3>
          <p class="category-desc">불복·쟁송</p>
        </article>
        <article class="category-item">
          <div class="category-icon">출</div>
          <h3 class="category-name">출입국</h3>
          <p class="category-desc">비자·체류</p>
        </article>
        <article class="category-item">
          <div class="category-icon">의</div>
          <h3 class="category-name">의료</h3>
          <p class="category-desc">의료분쟁</p>
        </article>
        <article class="category-item">
          <div class="category-icon">교</div>
          <h3 class="category-name">교통</h3>
          <p class="category-desc">사고·보험</p>
        </article>
      </div>
    </section>
    
    <!-- 사건 타임라인으로 찾기 -->
    <section class="timeline-finder-section">
      <div class="section-header">
        <h2 class="section-title">사건 타임라인으로 찾기</h2>
        <div class="section-badge">
          <span class="badge-text">단계별</span>
        </div>
      </div>
      <div class="timeline-tags">
        <button type="button" class="timeline-tag">① 초동대응</button>
        <button type="button" class="timeline-tag">② 증거/자료 수집</button>
        <button type="button" class="timeline-tag">③ 신고/고소·답변</button>
        <button type="button" class="timeline-tag">④ 조사/수사·준비</button>
        <button type="button" class="timeline-tag">⑤ 재판/심판</button>
        <button type="button" class="timeline-tag">⑥ 판결/집행·사후</button>
      </div>
    </section>
    
    <!-- 최근 수정된 문서 -->
    <section class="recent-docs-section">
      <div class="section-header">
        <h2 class="section-title">최근 수정된 문서</h2>
        <div class="section-badge">
          <span class="badge-text">실시간</span>
        </div>
      </div>
      <div class="recent-doc-list">
        <article class="recent-doc-item">
          <h3 class="recent-doc-title">야간건조물침입절도 구성요건</h3>
          <div class="recent-doc-time">5분 전 · 감수 완료</div>
        </article>
        <article class="recent-doc-item">
          <h3 class="recent-doc-title">음주단속도주 양형 요소</h3>
          <div class="recent-doc-time">27분 전 · 개정 반영</div>
        </article>
        <article class="recent-doc-item">
          <h3 class="recent-doc-title">성범죄 취업제한 제도 Q&A</h3>
          <div class="recent-doc-time">1시간 전 · 문답 추가</div>
        </article>
      </div>
    </section>
    
    <!-- 하단 섹션들 -->
    <div class="bottom-sections">
      <!-- 무료 체크리스트/서식 & 핫토픽 섹션 -->
      <div class="bottom-cards">
        <!-- 무료 체크리스트/서식 카드 -->
        <div class="checklist-card">
          <div class="card-header">
            <h3 class="card-title">무료 체크리스트/서식</h3>
            <div class="card-badge">
              <span class="badge-text">이메일로 받기</span>
            </div>
          </div>
          <div class="checklist-list">
            <article class="checklist-item">
              <h4 class="checklist-title">전세금반환 소장 작성 체크리스트</h4>
              <div class="checklist-info">PDF · v1.2</div>
            </article>
            <article class="checklist-item">
              <h4 class="checklist-title">음주운전 초기대응 24시간 플랜</h4>
              <div class="checklist-info">PDF · v2.0</div>
            </article>
          </div>
        </div>
        <!-- 핫토픽 & 개정 알림 카드 -->
        <div class="hot-topic-card">
          <div class="card-header">
            <h3 class="card-title">핫토픽 & 개정 알림</h3>
            <div class="card-badge">
              <span class="badge-text">알림</span>
            </div>
          </div>
          <div class="hot-topic-list">
            <article class="hot-topic-item">
              <h4 class="hot-topic-title">초범 형사 선처 가이드</h4>
              <div class="hot-topic-stats">주간 12,430</div>
            </article>
            <article class="hot-topic-item hot-topic-item--large">
              <h4 class="hot-topic-title">전세사기 대응: 보증금 회수 절차</h4>
              <div class="hot-topic-update">업데이트 2025-08-21</div>
            </article>
            <article class="hot-topic-item">
              <h4 class="hot-topic-title">형사소송법 일부 개정</h4>
              <div class="hot-topic-new">New</div>
            </article>
          </div>
        </div>
      </div>
      
      <!-- 검수 배지 안내 -->
      <div class="review-badge-info">
        <div class="review-badge-content">
          <span class="review-badge-title">검수 배지 안내</span>
          <span class="review-badge-description"> — 위키 게시물은 변호사 사전 감수를 거칩니다. 문서 상단에서 검수·버전·감수자 정보를 확인하세요. 감수 변호사 78명 · 감수 완료 3,421건</span>
        </div>
      </div>
      
      <!-- 전문가 상담 섹션 -->
      <section class="expert-consultation">
        <h2 class="expert-title">전문가에게 바로 물어보기</h2>
        <p class="expert-description">사건요지·증거현황을 보내주시면, 분야 담당 변호사가 검토합니다.</p>
        <div class="expert-buttons">
          <button type="button" class="btn btn--primary">전화상담 연결</button>
          <button type="button" class="btn btn--secondary">체크리스트</button>
        </div>
      </section>
    </div>
  </main>
  
  <!-- 사이드바 -->
  <aside class="sidebar">
    <!-- 스폰서 광고 -->
    <div class="sponsor-ad" role="banner" aria-label="스폰서 광고">
      <div class="ad-text">스폰서 300×250</div>
    </div>
    
    <!-- 대표 집필 변호사 -->
    <div class="main-lawyer-card">
      <div class="main-lawyer-header">
        <h3 class="main-lawyer-title">대표 집필 변호사</h3>
      </div>
      <div class="main-lawyer-info">
        <img class="main-lawyer-photo" src="https://placehold.co/72x73" alt="변호사 사진" />
        <div class="main-lawyer-details">
          <span class="main-lawyer-name">홍길동 변호사</span>
          <span class="main-lawyer-info-text">형사/민사<br/>법률감수 1,204건</span>
        </div>
      </div>
    </div>
    
    <!-- 공동집필진 -->
    <div class="co-authors-card">
      <div class="co-authors-header">
        <h3 class="co-authors-title">공동집필진(주간 TOP)</h3>
        <div class="co-authors-badge">
          <span class="co-authors-badge-text">기여도</span>
        </div>
      </div>
      <div class="co-authors-list">
        <article class="co-author-item">
          <img class="co-author-photo" src="https://placehold.co/61x62" alt="이효주 변호사" />
          <div class="co-author-info">
            <h4 class="co-author-name">이효주 변호사</h4>
            <div class="co-author-contribution">+12 편집</div>
          </div>
        </article>
        <article class="co-author-item">
          <img class="co-author-photo" src="https://placehold.co/61x62" alt="김지운 에디터" />
          <div class="co-author-info">
            <h4 class="co-author-name">김지운 에디터</h4>
            <div class="co-author-contribution">+9 편집</div>
          </div>
        </article>
        <article class="co-author-item">
          <img class="co-author-photo" src="https://placehold.co/61x62" alt="박민서 변호사" />
          <div class="co-author-info">
            <h4 class="co-author-name">박민서 변호사</h4>
            <div class="co-author-contribution">+7 감수</div>
          </div>
        </article>
      </div>
    </div>
    
    <!-- 업데이트 로그 -->
    <div class="update-log-card">
      <div class="update-log-header">
        <h3 class="update-log-title">업데이트 로그</h3>
      </div>
      <div class="update-log-list">
        <article class="update-log-item">
          <div class="update-log-content">v1.4 · 2025-08-15 — 형사 등록글 4건 보강</div>
          <div class="update-log-status">검수 완료</div>
        </article>
        <article class="update-log-item">
          <div class="update-log-content">v1.3 · 2025-08-12 — 서식 센터: 파일 포맷 추가 (HWPX)</div>
          <div class="update-log-status">문서 9건</div>
        </article>
        <article class="update-log-item">
          <div class="update-log-content">v1.2 · 2025-08-08 — 검색 품질 사전 보강</div>
          <div class="update-log-status">키워드 124→168</div>
        </article>
      </div>
    </div>
    
    <!-- 바로가기 -->
    <div class="quick-links-card">
      <div class="quick-links-header">
        <h3 class="quick-links-title">바로가기</h3>
      </div>
      <div class="quick-links-list">
        <article class="quick-link-item">
          <h4 class="quick-link-title">판례 모음</h4>
          <p class="quick-link-desc">최신 선고 정리</p>
        </article>
        <article class="quick-link-item">
          <h4 class="quick-link-title">서식 센터</h4>
          <p class="quick-link-desc">미리보기/다운로드</p>
        </article>
        <article class="quick-link-item">
          <h4 class="quick-link-title">FAQ</h4>
          <p class="quick-link-desc">관련 상담 사례</p>
        </article>
        <article class="quick-link-item">
          <h4 class="quick-link-title">용어 사전</h4>
          <p class="quick-link-desc">A–Z 색인</p>
        </article>
      </div>
    </div>
    
    <!-- 네이티브 카드 -->
    <div class="native-card" role="banner" aria-label="네이티브 광고">
      <div class="ad-text">우측 고정 300~336px 네이티브 카드</div>
    </div>
  </aside>
</div>

<!-- 면책 공지 -->
@include('components.wiki-disclaimer')

@endsection
