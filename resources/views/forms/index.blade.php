@extends('layouts.app')

@section('title', '법률문서 작성 - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection

@section('content')
<div class="forms-container">
  <!-- 메인 제목 -->
  <div class="forms-main-title">
    <h1>어떤 서식을 찾으세요?</h1>
  </div>

  <!-- 문서 타입 아이콘 -->
  <div class="document-type-icons">
    <div class="icon-item">
      <div class="icon-wrapper">
        <div class="icon-content">
          <div class="icon-document"></div>
          <div class="icon-magnifier"></div>
        </div>
      </div>
      <span class="icon-label">내용증명</span>
    </div>
    
    <div class="icon-item">
      <div class="icon-wrapper">
        <div class="icon-content">
          <div class="icon-payment"></div>
          <div class="icon-w"></div>
        </div>
      </div>
      <span class="icon-label">지급명령</span>
    </div>
    
    <div class="icon-item">
      <div class="icon-wrapper">
        <div class="icon-content">
          <div class="icon-contract"></div>
          <div class="icon-pen"></div>
        </div>
      </div>
      <span class="icon-label">계약서</span>
    </div>
    
    <div class="icon-item">
      <div class="icon-wrapper">
        <div class="icon-content">
          <div class="icon-agreement"></div>
          <div class="icon-hands"></div>
        </div>
      </div>
      <span class="icon-label">합의서</span>
    </div>
    
    <div class="icon-item">
      <div class="icon-wrapper">
        <div class="icon-content">
          <div class="icon-complaint"></div>
          <div class="icon-exclamation"></div>
        </div>
      </div>
      <span class="icon-label">고소장</span>
    </div>
    
    <div class="icon-item">
      <div class="icon-wrapper">
        <div class="icon-content">
          <div class="icon-labor"></div>
          <div class="icon-person"></div>
        </div>
      </div>
      <span class="icon-label">근로계약</span>
    </div>
    
    <div class="icon-item">
      <div class="icon-wrapper">
        <div class="icon-content">
          <div class="icon-promissory"></div>
          <div class="icon-w"></div>
        </div>
      </div>
      <span class="icon-label">차용증</span>
    </div>
  </div>

  <!-- 검색 및 헤더 -->
  <div class="forms-header">
    <div class="header-content">
      <!-- 사용자 선택 -->
      <div class="user-selector">
        <span class="user-type">개인</span>
        <div class="dropdown-arrow"></div>
      </div>
      
      <!-- 검색바 -->
      <div class="search-container">
        <div class="search-bar">
          <span class="search-placeholder">문서 검색 또는 클릭하여 계약서 작성 시작...</span>
        </div>
        <div class="search-actions">
          <div class="add-button">+</div>
          <div class="filter-button">
            <div class="filter-icon"></div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- 자주 사용하는 문서 -->
    <div class="frequent-documents">
      <span class="frequent-label">자주 사용 되는 문서 :</span>
      <div class="document-tags">
        <span class="doc-tag">표준 근로계약서</span>
        <span class="doc-tag">내용증명 작성</span>
        <span class="doc-tag">OOO 문서</span>
        <span class="doc-tag">OOO 문서</span>
        <span class="doc-tag">OOO 문서</span>
      </div>
    </div>
  </div>

  <!-- 문서 타입 필터 -->
  <div class="document-type-filters">
    <div class="type-filter active">
      <span>전체</span>
    </div>
    <div class="type-filter">
      <span>무료 서식</span>
    </div>
    <div class="type-filter">
      <span>유료 서식</span>
    </div>
    <div class="type-filter">
      <span>추천 서식</span>
    </div>
  </div>

  <!-- 카테고리 필터 -->
  <div class="category-filters">
    <div class="filter-tabs">
      <div class="filter-tab active">
        <span>전체</span>
      </div>
      <div class="filter-tab">
        <span>노동</span>
      </div>
      <div class="filter-tab">
        <span>부동산</span>
      </div>
      <div class="filter-tab">
        <span>가사</span>
      </div>
      <div class="filter-tab">
        <span>민사</span>
      </div>
      <div class="filter-tab">
        <span>형사</span>
      </div>
      <div class="filter-tab filter-button">
        <div class="filter-icon"></div>
        <span>필터</span>
      </div>
    </div>
  </div>

  <!-- 문서 카드 그리드 -->
  <div class="document-grid">
    <!-- 문서 카드 1 -->
    <div class="document-card">
      <div class="card-header">
        <div class="category-badge labor">노동</div>
        <div class="price-badge free">무료</div>
      </div>
      
      <div class="card-title">
        <div class="title-icon"></div>
        <h3>표준 근로계약서</h3>
      </div>
      
      <div class="document-type">계약</div>
      
      <div class="document-description">
        고용노동부에서 제공하는 표준 근로계약서 서식입니다. 근로 조건, 급여, 근무시간 등의 항목이 포함되어 있습니다.
      </div>
      
      <div class="document-tags">
        <span class="tag">#근로계약</span>
        <span class="tag">#표준서식</span>
        <span class="tag">#고용</span>
      </div>
      
      <div class="document-stats">
        <div class="download-count">
          <div class="download-icon"></div>
          <span>다운로드 8,540회</span>
        </div>
        <div class="update-date">최근 업데이트: 2024-03-15</div>
      </div>
      
      <div class="card-actions">
        <button class="btn-primary">문서 작성하기</button>
        <button class="btn-secondary">챗봇 작성하기</button>
      </div>
    </div>

    <!-- 문서 카드 2 -->
    <div class="document-card">
      <div class="card-header">
        <div class="category-badge labor">노동</div>
        <div class="price-badge free">무료</div>
      </div>
      
      <div class="card-title">
        <div class="title-icon"></div>
        <h3>부당해고 구제신청서</h3>
      </div>
      
      <div class="document-type">민원/신고</div>
      
      <div class="document-description">
        노동위원회에 제출하는 부당해고 구제신청 양식입니다. 해고 사유, 경위, 요구사항 등을 작성할 수 있습니다.
      </div>
      
      <div class="document-tags">
        <span class="tag">#부당해고</span>
        <span class="tag">#구제신청</span>
        <span class="tag">#노동위원회</span>
      </div>
      
      <div class="document-stats">
        <div class="download-count">
          <div class="download-icon"></div>
          <span>다운로드 4,230회</span>
        </div>
        <div class="update-date">최근 업데이트: 2024-02-20</div>
      </div>
      
      <div class="card-actions">
        <button class="btn-primary">문서 작성하기</button>
        <button class="btn-secondary">챗봇 작성하기</button>
      </div>
    </div>

    <!-- 문서 카드 3 -->
    <div class="document-card">
      <div class="card-header">
        <div class="category-badge realestate">부동산</div>
        <div class="price-badge free">무료</div>
      </div>
      
      <div class="card-title">
        <div class="title-icon"></div>
        <h3>임대차계약서 (주택)</h3>
      </div>
      
      <div class="document-type">계약</div>
      
      <div class="document-description">
        주택 임대차 계약에 사용되는 표준 계약서입니다. 보증금, 월세, 계약기간, 특약사항 등을 작성할 수 있습니다.
      </div>
      
      <div class="document-tags">
        <span class="tag">#임대차</span>
        <span class="tag">#전월세</span>
        <span class="tag">#주택</span>
      </div>
      
      <div class="document-stats">
        <div class="download-count">
          <div class="download-icon"></div>
          <span>다운로드 12,450회</span>
        </div>
        <div class="update-date">최근 업데이트: 2024-04-01</div>
      </div>
      
      <div class="card-actions">
        <button class="btn-primary">문서 작성하기</button>
        <button class="btn-secondary">챗봇 작성하기</button>
      </div>
    </div>

    <!-- 문서 카드 4 -->
    <div class="document-card">
      <div class="card-header">
        <div class="category-badge family">가사</div>
        <div class="price-badge paid">유료</div>
      </div>
      
      <div class="card-title">
        <div class="title-icon"></div>
        <h3>이혼 합의서 (전문가 감수)</h3>
      </div>
      
      <div class="document-type">합의서</div>
      
      <div class="document-description">
        가정법원 변호사가 감수한 이혼 합의서 양식으로, 재산분할, 양육권, 위자료 등 주요 합의사항을 포함합니다.
      </div>
      
      <div class="document-tags">
        <span class="tag">#이혼</span>
        <span class="tag">#합의이혼</span>
        <span class="tag">#재산분할</span>
      </div>
      
      <div class="document-stats">
        <div class="download-count">
          <div class="download-icon"></div>
          <span>다운로드 2,340회</span>
        </div>
        <div class="update-date">최근 업데이트: 2024-01-10</div>
      </div>
      
      <div class="card-actions">
        <button class="btn-primary">문서 작성하기</button>
        <button class="btn-secondary">챗봇 작성하기</button>
      </div>
    </div>

    <!-- 문서 카드 5 -->
    <div class="document-card">
      <div class="card-header">
        <div class="category-badge civil">민사</div>
        <div class="price-badge paid">유료</div>
      </div>
      
      <div class="card-title">
        <div class="title-icon"></div>
        <h3>내용증명 (채무불이행)</h3>
      </div>
      
      <div class="document-type">내용증명</div>
      
      <div class="document-description">
        채무불이행에 대한 내용증명 문서 템플릿입니다. 법적 효력을 가진 문서로 발송 방법 안내도 포함되어 있습니다.
      </div>
      
      <div class="document-tags">
        <span class="tag">#내용증명</span>
        <span class="tag">#채무</span>
        <span class="tag">#독촉장</span>
      </div>
      
      <div class="document-stats">
        <div class="download-count">
          <div class="download-icon"></div>
          <span>다운로드 3,670회</span>
        </div>
        <div class="update-date">최근 업데이트: 2024-03-05</div>
      </div>
      
      <div class="card-actions">
        <button class="btn-primary">문서 작성하기</button>
        <button class="btn-secondary">챗봇 작성하기</button>
      </div>
    </div>

    <!-- 문서 카드 6 -->
    <div class="document-card">
      <div class="card-header">
        <div class="category-badge criminal">형사</div>
        <div class="price-badge free">무료</div>
      </div>
      
      <div class="card-title">
        <div class="title-icon"></div>
        <h3>교통사고 합의서</h3>
      </div>
      
      <div class="document-type">합의서</div>
      
      <div class="document-description">
        교통사고 발생 시 당사자 간 합의를 위한 문서 양식입니다. 손해배상, 치료비, 합의금 등의 항목이 포함되어 있습니다.
      </div>
      
      <div class="document-tags">
        <span class="tag">#교통사고</span>
        <span class="tag">#합의</span>
        <span class="tag">#보험</span>
      </div>
      
      <div class="document-stats">
        <div class="download-count">
          <div class="download-icon"></div>
          <span>다운로드 5,120회</span>
        </div>
        <div class="update-date">최근 업데이트: 2024-02-15</div>
      </div>
      
      <div class="card-actions">
        <button class="btn-primary">문서 작성하기</button>
        <button class="btn-secondary">챗봇 작성하기</button>
      </div>
    </div>
  </div>

  <!-- 법률 문서 이용 가이드 -->
  <div class="usage-guide">
    <div class="guide-header">
      <div class="guide-icon"></div>
      <h2>법률 문서 이용 가이드</h2>
    </div>
    
    <div class="guide-cards">
      <div class="guide-card">
        <h3>무료 서식 제공</h3>
        <p>표준 계약서, 신고서 등 기본적인 법률 서식은 무료로 제공됩니다. 누구나 다운로드, 문서 자동작성을 통해 활용할 수 있습니다.</p>
      </div>
      
      <div class="guide-card">
        <h3>전문가 감수 서식</h3>
        <p>변호사가 감수한 고급 서식은 유료로 제공됩니다. 결제 후 문서 작성을 진행하세요.</p>
      </div>
      
      <div class="guide-card">
        <h3>문서 자동 작성 지원</h3>
        <p>Q&A 방식의 단계별 입력을 통해 누구나 쉽고 빠르게 소장을 완성할 수 있습니다.</p>
      </div>
    </div>
  </div>
</div>
@endsection
