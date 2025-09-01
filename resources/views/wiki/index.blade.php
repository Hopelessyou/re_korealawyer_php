@extends('layouts.app')

@section('title', '위키')

@section('content')
<!-- 상단 네비게이션 탭 -->
<div class="nav-tabs">
  <div class="nav-tab">
    <div class="tab-text">분야</div>
  </div>
  <div class="nav-tab">
    <div class="tab-text">판례</div>
  </div>
  <div class="nav-tab">
    <div class="tab-text">서식</div>
  </div>
  <div class="nav-tab">
    <div class="tab-text">FAQ</div>
  </div>
  <div class="nav-tab">
    <div class="tab-text">용어</div>
  </div>
</div>

<!-- 히어로 섹션 -->
<div class="hero-section">
  <div class="hero-badge">
    <div class="badge-text">행동 설계형 법률 지식베이스</div>
  </div>
  
  <div class="hero-title">무엇부터 해야 할지 모를 때,<br/>위키가 단계별로 안내합니다.</div>
  
  <div class="hero-description">초동대응 가이드 · 체크리스트 · 서식 라이브러리 · 법령/판례 · 검수 배지까지 한 곳에서.</div>
  
  <div class="search-container">
    <div class="search-input">
      <div class="search-placeholder">예: 음주측정거부, 전세금반환, 특수폭행 선처</div>
    </div>
    <div class="search-button">
      <div class="button-text">검색</div>
    </div>
  </div>
  
  <div class="filter-tags filter-tags-first">
    <div class="filter-tag active">초동대응 24~72h</div>
    <div class="filter-tag">기일</div>
    <div class="filter-tag">증거</div>
    <div class="filter-tag">서식 라이브러리</div>
    <div class="filter-tag">법령/판례</div>
    <div class="filter-tag">검수 배지</div>
  </div>
  
  <div class="filter-tags filter-tags-second">
    <div class="filter-tag">경찰조사</div>
    <div class="filter-tag">음주운전</div>
    <div class="filter-tag">내용증명</div>
    <div class="filter-tag">가압류/가처분</div>
    <div class="filter-tag">전세금반환</div>
  </div>
  
  <div class="consultation-card">
    <div class="card-header">
      <div class="card-title">변호사에게 바로 물어보기</div>
    </div>
    <div class="card-description">사건 요지와 증거 보유 현황을 보내주시<br/>면, 분야 담당 변호사가 검토합니다.</div>
    <div class="card-buttons">
      <div class="btn-primary">
        <div class="button-text">상담 시작</div>
      </div>
      <div class="btn-secondary">
        <div class="button-text">체크리스트</div>
      </div>
    </div>
  </div>
</div>

<!-- 빠른 시작 가이드 섹션 -->
<div class="quick-start-section">
  <div class="section-header">
    <div class="section-title">상황별 빠른 시작 가이드</div>
    <div class="section-badge">
      <div class="badge-text">한눈에</div>
    </div>
  </div>
  
  <div class="guide-cards">
    <div class="guide-card">
      <div class="card-title">경찰조사 통지서 받았다면</div>
      <div class="card-subtitle">초동대응 가이드 보기 →</div>
    </div>
    
    <div class="guide-card">
      <div class="card-title">음주운전 단속에 걸렸을 때</div>
      <div class="card-subtitle">절차·서식·주의점 →</div>
    </div>
    
    <div class="guide-card">
      <div class="card-title">내용증명 보내야 할 때</div>
      <div class="card-subtitle">작성 예시/템플릿 →</div>
    </div>
    
    <div class="guide-card">
      <div class="card-title">가압류/가처분이 필요할 때</div>
      <div class="card-subtitle">준비물 체크리스트 →</div>
    </div>
    
    <div class="guide-card">
      <div class="card-title">전세금반환소송 준비</div>
      <div class="card-subtitle">임대차 쟁점 한 번에 →</div>
    </div>
  </div>
</div>

<!-- 메인 콘텐츠 영역 -->
<div class="main-content-wrapper">
  <div class="main-content">
    <!-- 광고 배너 -->
    <div class="ad-banner">
      <div class="ad-text">광고 배너 970×250</div>
    </div>
    
    <!-- 요즘 많이 보는 문서 -->
    <div class="popular-docs-section">
      <div class="section-header">
        <div class="section-title">요즘 많이 보는 문서</div>
        <div class="section-badge">
          <div class="badge-text">주간</div>
        </div>
      </div>
      <div class="doc-list">
        <div class="doc-item">
          <div class="doc-title">음주측정거부 대응 가이드</div>
          <div class="doc-stats">주간 12.4K</div>
        </div>
        <div class="doc-item">
          <div class="doc-title">전세금반환소송 제기 절차</div>
          <div class="doc-stats">주간 9.1K</div>
        </div>
        <div class="doc-item">
          <div class="doc-title">보이스피싱 구속/불구속 실무</div>
          <div class="doc-stats">주간 6.3K</div>
        </div>
      </div>
    </div>
    
    <!-- 분야로 찾기 -->
    <div class="category-finder-section">
      <div class="section-header">
        <div class="section-title">분야로 찾기</div>
        <div class="section-badge">
          <div class="badge-text">빠른 이동</div>
        </div>
      </div>
      <div class="category-grid">
        <div class="category-item">
          <div class="category-icon">형</div>
          <div class="category-name">형사</div>
          <div class="category-desc">초동대응·수사·재판</div>
        </div>
        <div class="category-item">
          <div class="category-icon">민</div>
          <div class="category-name">민사</div>
          <div class="category-desc">손해배상·가압류/가처<br/>분</div>
        </div>
        <div class="category-item">
          <div class="category-icon">가</div>
          <div class="category-name">가사/상속</div>
          <div class="category-desc">이혼·양육·상속</div>
        </div>
        <div class="category-item">
          <div class="category-icon">노</div>
          <div class="category-name">노동</div>
          <div class="category-desc">부당해고·임금</div>
        </div>
        <div class="category-item">
          <div class="category-icon">부</div>
          <div class="category-name">부동산</div>
          <div class="category-desc">임대차·등기·분쟁</div>
        </div>
        <div class="category-item">
          <div class="category-icon">상</div>
          <div class="category-name">상사/회사</div>
          <div class="category-desc">계약·컴플라이언스</div>
        </div>
        <div class="category-item">
          <div class="category-icon">지</div>
          <div class="category-name">지재/콘텐츠</div>
          <div class="category-desc">저작권·상표</div>
        </div>
        <div class="category-item">
          <div class="category-icon">행</div>
          <div class="category-name">행정</div>
          <div class="category-desc">인허가·처분</div>
        </div>
        <div class="category-item">
          <div class="category-icon">조</div>
          <div class="category-name">조세</div>
          <div class="category-desc">불복·쟁송</div>
        </div>
        <div class="category-item">
          <div class="category-icon">출</div>
          <div class="category-name">출입국</div>
          <div class="category-desc">비자·체류</div>
        </div>
        <div class="category-item">
          <div class="category-icon">의</div>
          <div class="category-name">의료</div>
          <div class="category-desc">의료분쟁</div>
        </div>
        <div class="category-item">
          <div class="category-icon">교</div>
          <div class="category-name">교통</div>
          <div class="category-desc">사고·보험</div>
        </div>
      </div>
    </div>
    
    <!-- 사건 타임라인으로 찾기 -->
    <div class="timeline-finder-section">
      <div class="section-header">
        <div class="section-title">사건 타임라인으로 찾기</div>
        <div class="section-badge">
          <div class="badge-text">단계별</div>
        </div>
      </div>
      <div class="timeline-tags">
        <div class="timeline-tag">① 초동대응</div>
        <div class="timeline-tag">② 증거/자료 수집</div>
        <div class="timeline-tag">③ 신고/고소·답변</div>
        <div class="timeline-tag">④ 조사/수사·준비</div>
        <div class="timeline-tag">⑤ 재판/심판</div>
        <div class="timeline-tag">⑥ 판결/집행·사후</div>
      </div>
    </div>
    
    <!-- 최근 수정된 문서 -->
    <div class="recent-docs-section">
      <div class="section-header">
        <div class="section-title">최근 수정된 문서</div>
        <div class="section-badge">
          <div class="badge-text">실시간</div>
        </div>
      </div>
      <div class="recent-doc-list">
        <div class="recent-doc-item">
          <div class="recent-doc-title">야간건조물침입절도 구성요건</div>
          <div class="recent-doc-time">5분 전 · 감수 완료</div>
        </div>
        <div class="recent-doc-item">
          <div class="recent-doc-title">음주단속도주 양형 요소</div>
          <div class="recent-doc-time">27분 전 · 개정 반영</div>
        </div>
        <div class="recent-doc-item">
          <div class="recent-doc-title">성범죄 취업제한 제도 Q&A</div>
          <div class="recent-doc-time">1시간 전 · 문답 추가</div>
        </div>
      </div>
    </div>
    
    <!-- 하단 섹션들 -->
    <div class="bottom-sections">
      <!-- 무료 체크리스트/서식 & 핫토픽 섹션 -->
      <div class="bottom-cards">
        <!-- 무료 체크리스트/서식 카드 -->
        <div class="checklist-card">
          <div class="card-header">
            <div class="card-title">무료 체크리스트/서식</div>
            <div class="card-badge">
              <div class="badge-text">이메일로 받기</div>
            </div>
          </div>
          <div class="checklist-list">
            <div class="checklist-item">
              <div class="checklist-title">전세금반환 소장 작성 체크리스트</div>
              <div class="checklist-info">PDF · v1.2</div>
            </div>
            <div class="checklist-item">
              <div class="checklist-title">음주운전 초기대응 24시간 플랜</div>
              <div class="checklist-info">PDF · v2.0</div>
            </div>
          </div>
        </div>
        <!-- 핫토픽 & 개정 알림 카드 -->
        <div class="hot-topic-card">
          <div class="card-header">
            <div class="card-title">핫토픽 & 개정 알림</div>
            <div class="card-badge">
              <div class="badge-text">알림</div>
            </div>
          </div>
          <div class="hot-topic-list">
            <div class="hot-topic-item">
              <div class="hot-topic-title">초범 형사 선처 가이드</div>
              <div class="hot-topic-stats">주간 12,430</div>
            </div>
            <div class="hot-topic-item large">
              <div class="hot-topic-title">전세사기 대응: 보증금 회수 절<br/>차</div>
              <div class="hot-topic-update">업데이트 2025-08-21</div>
            </div>
            <div class="hot-topic-item">
              <div class="hot-topic-title">형사소송법 일부 개정</div>
              <div class="hot-topic-new">New</div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- 검수 배지 안내 -->
      <div class="review-badge-info">
        <div class="review-badge-content">
          <span class="review-badge-title">검수 배지 안내</span>
          <span class="review-badge-description"> — 위키 게시물은 변호사 사전 감수를 거칩니다. 문서 상단에서 검수·버전·감수자 정보를 확인하세요. 감수 변호사<br/>78명 · 감수 완료 3,421건</span>
        </div>
      </div>
      
      <!-- 전문가 상담 섹션 -->
      <div class="expert-consultation">
        <div class="expert-title">전문가에게 바로 물어보기</div>
        <div class="expert-description">사건요지·증거현황을 보내주시면, 분야 담당 변호사가 검토합니다.</div>
        <div class="expert-buttons">
          <div class="expert-btn-primary">
            <div class="btn-text">전화상담 연결</div>
          </div>
          <div class="expert-btn-secondary">
            <div class="btn-text">체크리스트</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- 사이드바 -->
  <div class="sidebar">
    <!-- 스폰서 광고 -->
    <div class="sponsor-ad">
      <div class="ad-text">스폰서 300×250</div>
    </div>
    
                 <!-- 대표 집필 변호사 -->
             <div class="main-lawyer-card">
               <div class="main-lawyer-header">
                 <div class="main-lawyer-title">대표 집필 변호사</div>
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
        <div class="co-authors-title">공동집필진(주간 TOP)</div>
        <div class="co-authors-badge">
          <div class="co-authors-badge-text">기여도</div>
        </div>
      </div>
      <div class="co-authors-list">
        <div class="co-author-item">
          <img class="co-author-photo" src="https://placehold.co/61x62" alt="이효주 변호사" />
          <div class="co-author-info">
            <div class="co-author-name">이효주 변호사</div>
            <div class="co-author-contribution">+12 편집</div>
          </div>
        </div>
        <div class="co-author-item">
          <img class="co-author-photo" src="https://placehold.co/61x62" alt="김지운 에디터" />
          <div class="co-author-info">
            <div class="co-author-name">김지운 에디터</div>
            <div class="co-author-contribution">+9 편집</div>
          </div>
        </div>
        <div class="co-author-item">
          <img class="co-author-photo" src="https://placehold.co/61x62" alt="박민서 변호사" />
          <div class="co-author-info">
            <div class="co-author-name">박민서 변호사</div>
            <div class="co-author-contribution">+7 감수</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- 업데이트 로그 -->
    <div class="update-log-card">
      <div class="update-log-header">
        <div class="update-log-title">업데이트 로그</div>
      </div>
      <div class="update-log-list">
        <div class="update-log-item">
          <div class="update-log-content">v1.4 · 2025-08-15 — 형사 등록글 4건 보강</div>
          <div class="update-log-status">검수 완료</div>
        </div>
        <div class="update-log-item">
          <div class="update-log-content">v1.3 · 2025-08-12 — 서식 센터: 파일 포맷 추가 (HWPX)</div>
          <div class="update-log-status">문서 9건</div>
        </div>
        <div class="update-log-item">
          <div class="update-log-content">v1.2 · 2025-08-08 — 검색 품질 사전 보강</div>
          <div class="update-log-status">키워드 124→168</div>
        </div>
      </div>
    </div>
    
    <!-- 바로가기 -->
    <div class="quick-links-card">
      <div class="quick-links-header">
        <div class="quick-links-title">바로가기</div>
      </div>
      <div class="quick-links-list">
        <div class="quick-link-item">
          <div class="quick-link-title">판례 모음</div>
          <div class="quick-link-desc">최신 선고 정리</div>
        </div>
        <div class="quick-link-item">
          <div class="quick-link-title">서식 센터</div>
          <div class="quick-link-desc">미리보기/다운로드</div>
        </div>
        <div class="quick-link-item">
          <div class="quick-link-title">FAQ</div>
          <div class="quick-link-desc">관련 상담 사례</div>
        </div>
        <div class="quick-link-item">
          <div class="quick-link-title">용어 사전</div>
          <div class="quick-link-desc">A–Z 색인</div>
        </div>
      </div>
    </div>
    
    <!-- 네이티브 카드 -->
    <div class="native-card">
      <div class="ad-text">우측 고정 300~336px 네이티브 카드</div>
    </div>
  </div>
</div>
@endsection
