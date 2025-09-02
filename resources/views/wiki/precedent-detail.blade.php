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

<!-- 판례 상세 페이지 -->
<div class="precedent-detail-page">
  <!-- 헤더 배너 -->
  <div class="precedent-detail-header-banner">
    <h1 class="precedent-detail-title">대법원 20XX다XXXX — 전세금 반환</h1>
    
    <!-- 메타 정보 바 -->
    <div class="meta-info-bar">
      <span class="status-tag">법률감수 완료</span>
      <span class="meta-info">선고: 20XX.XX.XX.</span>
      <span class="meta-info">법원: 대법원</span>
      <span class="meta-info">사건번호: 20XX다XXXX</span>
      <span class="meta-info">주요 쟁점: 반환 요건 / 지연손해금</span>
      <span class="meta-info">버전: v1.0.0</span>
    </div>
    
    <!-- 요약 박스 -->
    <div class="summary-box">
      <div class="summary-content">
        <p class="summary-item">임대차 종료 및 보증금 반환의무 성립 요건을 재확인.</p>
        <p class="summary-item">지연손해금의 기산점/이율 판단 기준 제시.</p>
        <p class="summary-item">통지·증빙의 적정성이 결론에 실질 영향을 미침.</p>
      </div>
    </div>
  </div>

  <!-- 메인 컨텐츠 영역 -->
  <div class="precedent-detail-main-content">
    <!-- 왼쪽 컨텐츠 -->
    <div class="precedent-detail-content-left">
      <!-- 사건 개요 섹션 -->
      <div class="content-section">
        <h2 class="section-title">사건 개요</h2>
        <div class="case-overview-table">
          <div class="table-row">
            <div class="table-cell label">사건번호</div>
            <div class="table-cell value">대법원 20XX다XXXX</div>
          </div>
          <div class="table-row">
            <div class="table-cell label">선고일</div>
            <div class="table-cell value">20XX.XX.XX.</div>
          </div>
          <div class="table-row">
            <div class="table-cell label">법원</div>
            <div class="table-cell value">대법원</div>
          </div>
          <div class="table-row">
            <div class="table-cell label">관련 법령</div>
            <div class="table-cell value">민법(임대차), 민사소송법</div>
          </div>
          <div class="table-row">
            <div class="table-cell label">키워드</div>
            <div class="table-cell value">전세금 반환, 지연손해금, 통지</div>
          </div>
        </div>
      </div>

      <!-- 사실관계 섹션 -->
      <div class="content-section">
        <h2 class="section-title">사실관계</h2>
        <p class="section-content">
          임차인은 임대차 종료 후 전세금 반환을 요청했으나 임대인이 반환하지 않자 소송을 제기하였습니다.<br/>
          본건에서는 임대차 종료의 성립, 적법한 통지 여부, 보증금 반환의무의 발생 시점, 지연손해금의 기산점<br/>
          등이 쟁점이 되었습니다.
        </p>
      </div>

      <!-- 주요 쟁점 섹션 -->
      <div class="content-section">
        <h2 class="section-title">주요 쟁점</h2>
        <div class="key-issues">
          <p class="issue-item">임대차 종료 및 보증금 반환의무 성립 요건</p>
          <p class="issue-item">지연손해금의 기산점·이율</p>
          <p class="issue-item">내용증명 등 통지의 적정성</p>
        </div>
      </div>

      <!-- 판시사항 / 결론 섹션 -->
      <div class="content-section">
        <h2 class="section-title">판시사항 / 결론</h2>
        <p class="section-content">
          <strong>결론(요지):</strong> 임대차 종료가 확인되고 임차인의 반환 요청이 적법하게 이루어진 경우 임대인의 전세금 반
          환의무가 성립한다. 지연손해금은 통상 <strong>반환 청구 가능 시점</strong> 또는 <strong>이행청구</strong> 이후 기산된다(구체적 사정
          에 따라 변동).
        </p>
      </div>

      <!-- 판시이유(요지) 섹션 -->
      <div class="content-section">
        <h2 class="section-title">판시이유(요지)</h2>
        <p class="section-content">
          법원은 임대차 종료의 성립과 보증금 반환의무의 발생을 판단함에 있어, 계약 기간·갱신 여부, 인도·명도
          상황, 반환 요청의 방식과 시기, 증빙의 적정성 등을 종합적으로 고려하였다. 지연손해금 기산점은 임대
          차 종료와 이행청구 시점을 기준으로 판단하였다.
        </p>
      </div>

      <!-- 실무 포인트 섹션 -->
      <div class="content-section">
        <h2 class="section-title">실무 포인트</h2>
        <div class="practical-points">
          <p class="point-item">임대차계약서, 입금내역, 명도 관련 자료, 내용증명 등 <strong>증빙 일체 확보</strong>.</p>
          <p class="point-item">지연손해금 산정: 기산점·이율, 청구취지에 명확히 기재.</p>
          <p class="point-item">보전처분(가압류/가처분) 병행 여부 검토로 <strong>집행 담보</strong> 강화.</p>
        </div>
      </div>

      <!-- 절차 타임라인 섹션 -->
      <div class="content-section">
        <h2 class="section-title">절차 타임라인</h2>
        <div class="procedure-timeline">
          <div class="timeline-step">
            <strong>계약 종료/통지</strong> — 갱신 여부 확인, 반환 요청.
          </div>
          <div class="timeline-step">
            <strong>소 제기</strong> — 청구취지/원인 정리, 증거 첨부.
          </div>
          <div class="timeline-step">
            <strong>변론/판결</strong> — 입증 계획에 따른 주장·증거 제출.
          </div>
          <div class="timeline-step">
            <strong>집행</strong> — 채권/부동산 강제집행, 담보 확보.
          </div>
        </div>
      </div>

      <!-- 연관 문서 섹션 -->
      <div class="content-section">
        <h2 class="section-title">연관 문서</h2>
        <div class="related-documents">
          <p class="document-item">
            <a href="#" class="document-link">세부 가이드: 전세금반환 소송 절차</a><span class="document-type">HowTo</span>
          </p>
          <p class="document-item">
            <a href="#" class="document-link">서식: 소장(전세금반환)</a><span class="document-type">DOCX</span>
          </p>
          <p class="document-item">
            <a href="#" class="document-link">FAQ: 전세금반환소송, 무엇부터?</a><span class="document-type">FAQ</span>
          </p>
        </div>
      </div>

      <!-- 참고/출처 섹션 -->
      <div class="content-section">
        <h2 class="section-title">참고/출처</h2>
        <div class="references">
          <p class="reference-item">민법(임대차) 관련 규정</p>
          <p class="reference-item">대법원 20XX다XXXX, 선고 20XX.XX.XX. (공보 인용 형태)</p>
          <p class="reference-item">대법원 전자소송/나의사건검색 안내</p>
        </div>
      </div>
    </div>

    <!-- 오른쪽 사이드바 -->
    <div class="precedent-detail-sidebar">
      <!-- 목차 -->
      <div class="sidebar-card">
        <div class="sidebar-card-header">
          <h3 class="sidebar-card-title">목차</h3>
        </div>
        <div class="table-of-contents">
          <div class="toc-item">사실관계</div>
          <div class="toc-item">주요 쟁점</div>
          <div class="toc-item">판시사항 / 결론</div>
          <div class="toc-item">판시이유(요지)</div>
          <div class="toc-item">실무 포인트</div>
          <div class="toc-item">절차 타임라인</div>
          <div class="toc-item">연관 문서</div>
          <div class="toc-item">참고/출처</div>
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
          <a href="#" class="quick-link">판례 모음</a>
          <a href="#" class="quick-link">전세금반환 허브</a>
          <a href="#" class="quick-link">전세금 소장 서식</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 면책 공지 -->
@include('components.wiki-disclaimer')
@endsection
