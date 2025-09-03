@extends('layouts.app')

@section('content')
<div class="resolution-cases-container">
  <!-- 헤더 섹션 -->
  <div class="resolution-header">
    <h1 class="resolution-title">법률정보부터 사건 대응 전략까지<br> 변호사가 직접 알려 드립니다.</h1>
  </div>

  <!-- 피처드 해결사례 그리드 -->
  <div class="featured-cases">
    <!-- 카드 1: NEW -->
    <div class="featured-case-card">
      <div class="case-tag new">NEW</div>
      <div class="case-category">고소/수사/체포/구속</div>
      <h3 class="case-title">아동학대변호사가 알려주는 아동학대 혐의 대응 방법 총정리</h3>
      <div class="case-author">
        <div class="case-author-avatar">조</div>
        <span>By 조기한 변호사</span>
      </div>
    </div>

    <!-- 카드 2: NEW -->
    <div class="featured-case-card">
      <div class="case-tag new">NEW</div>
      <div class="case-category">형사일반/기타법의</div>
      <h3 class="case-title">전과기록 어디에 어떻게 남고, 누가 볼 수 있나요?</h3>
      <div class="case-author">
        <div class="case-author-avatar">박</div>
        <span>By 박영국 변호사</span>
      </div>
    </div>

    <!-- 카드 3: HOT -->
    <div class="featured-case-card">
      <div class="case-tag hot">HOT</div>
      <div class="case-category">미성년자 성범죄</div>
      <h3 class="case-title">압수영장에 없던 혐의도 처벌될까? - 대법원 최신 판례 해설</h3>
      <div class="case-author">
        <div class="case-author-avatar">영</div>
        <span>By 영호변호사</span>
      </div>
    </div>

    <!-- 카드 4: NEW -->
    <div class="featured-case-card">
      <div class="case-tag new">NEW</div>
      <div class="case-category">회사/이직/기타법의</div>
      <h3 class="case-title">헌팅, 소개팅 앱 일회성 만남의 특수한 성폭력 피해사례와 대처방법</h3>
      <div class="case-author">
        <div class="case-author-avatar">로</div>
        <span>By 로톡 시절법직원</span>
      </div>
    </div>
  </div>

  <!-- 메인 레이아웃 -->
  <div class="resolution-layout">
    <!-- 메인 콘텐츠 영역 -->
    <main class="resolution-main">
      <!-- 필터/정렬 바 -->
      <div class="resolution-controls">
        <div class="resolution-filter">
          <select>
            <option>모든 것이</option>
            <option>형사사건</option>
            <option>민사사건</option>
            <option>가족사건</option>
            <option>행정사건</option>
          </select>
        </div>
        <div class="resolution-sort">
          <a href="#" class="active">최신순</a>
          <a href="#">인기순</a>
        </div>
      </div>

      <!-- 해결사례 리스트 -->
      <div class="cases-list">
        <div class="cases-list-header">
          <h2 class="cases-list-title">해결사례 목록</h2>
        </div>

        <!-- 해결사례 아이템들 -->
        @for ($i = 1; $i <= 10; $i++)
        <div class="case-list-item">
          <!-- 카테고리 메타 정보 -->
          <div class="case-list-meta">
            <div class="case-list-category-group">
              <div class="case-list-category">
                @if($i % 4 == 0)
                  고소/소송절차
                @elseif($i % 4 == 1)
                  형사일반/기타법의
                @elseif($i % 4 == 2)
                  미성년자 성범죄
                @else
                  회사/이직/기타법의
                @endif
              </div>
              <div class="case-list-category-separator">
                <span class="dot">·</span>
                <span class="text">
                  @if($i % 4 == 0)
                    수사/체포/구속
                  @elseif($i % 4 == 1)
                    기타 형사사건
                  @elseif($i % 4 == 2)
                    성범죄 대응
                  @else
                    노무/계약 분쟁
                  @endif
                </span>
              </div>
            </div>
          </div>

          <!-- 제목 -->
          <div class="case-list-title-wrapper">
            <h3 class="case-list-title">
              @if($i % 3 == 0)
                아동학대변호사가 알려주는 아동학대 혐의 대응 방법 총정리
              @elseif($i % 3 == 1)
                전과기록 어디에 어떻게 남고, 누가 볼 수 있나요?
              @else
                압수영장에 없던 혐의도 처벌될까? - 대법원 최신 판례 해설
              @endif
            </h3>
          </div>

          <!-- 설명 -->
          <div class="case-list-snippet-wrapper">
            <p class="case-list-snippet">
              @if($i % 3 == 0)
                안녕하세요. 아동학대 형사사건과 행정처분 대응 전문 법무법인 대한중앙 대표변호사 조기현입니다. 오늘은 학원 강사의 훈육 행위가 아동학대로 의심받아 형사처벌 위기에 놓였던 사건에서, 무혐의 처분을 받은 사례를 통해 아동학대 혐의 대응 방법을 상세히 설명드리겠습니다.
              @elseif($i % 3 == 1)
                전과기록은 개인의 범죄 이력을 기록한 공식 문서로, 형사사건을 겪은 분들이 가장 궁금해하는 부분 중 하나입니다. 이 글에서는 전과기록이 어디에 어떻게 남는지, 누가 볼 수 있는지, 그리고 전과기록 삭제 방법까지 상세히 다루고 있습니다.
              @else
                압수영장에 명시되지 않은 혐의도 처벌될 수 있는지에 대한 대법원의 최신 판례를 분석해보겠습니다. 이는 형사사건에서 매우 중요한 법적 쟁점으로, 피고인의 권리보호와 관련된 핵심적인 내용을 담고 있습니다.
              @endif
            </p>
          </div>

          <!-- 작성자 정보 -->
          <div class="case-list-author-info">
            <img class="case-list-author-avatar" src="https://placehold.co/24x24" alt="변호사 아바타">
            <div class="case-list-author-text">
              <span class="by-text">By</span>
              <span class="author-name">
                @if($i % 3 == 0)
                  조기현 변호사
                @elseif($i % 3 == 1)
                  백영국 변호사
                @else
                  영호변호사
                @endif
              </span>
            </div>
          </div>
        </div>
        @endfor

        <!-- 더보기 버튼 -->
        <a href="#" class="view-more-btn">더보기 →</a>
      </div>
    </main>

    <!-- 우측 사이드바 -->
    <aside class="resolution-sidebar" aria-label="바로가기">
      <!-- 긴급 대응 및 바로가기 -->
      <div class="side-stack">
        <a href="#" class="side-card">
          <strong>10분 긴급 대응</strong>
          <svg class="chev" viewBox="0 0 24 24">
            <path fill="currentColor" d="M9 6l6 6-6 6"/>
          </svg>
        </a>
        <a href="#" class="side-card">
          <strong>맞춤 변호사 검색</strong>
          <svg class="chev" viewBox="0 0 24 24">
            <path fill="currentColor" d="M9 6l6 6-6 6"/>
          </svg>
        </a>
        <a href="#" class="side-card">
          <strong>제휴 혜택안내</strong>
          <svg class="chev" viewBox="0 0 24 24">
            <path fill="currentColor" d="M9 6l6 6-6 6"/>
          </svg>
        </a>
      </div>

      <!-- 프로모션 배너 -->
      <div class="promo-banner">
        <img src="https://placehold.co/80x80" alt="변호사 이미지">
        <div class="promo-banner-text">무죄/무혐의 등 해결사례로 말합니다</div>
      </div>

      <!-- 최근 답변이 활발한 변호사 -->
      <div class="sidebar-card">
        <h3>최근 답변이 활발한 변호사</h3>
        <ul class="lawyer-list">
          <li>
            <div class="lawyer-avatar">김</div>
            <div class="lawyer-info">
              <div class="lawyer-name">김진수 변호사</div>
              <div class="lawyer-desc">변호사 소개입니다. 변호사 소개입니다.</div>
            </div>
          </li>
          <li>
            <div class="lawyer-avatar">이</div>
            <div class="lawyer-info">
              <div class="lawyer-name">이영희 변호사</div>
              <div class="lawyer-desc">변호사 소개입니다. 변호사 소개입니다.</div>
            </div>
          </li>
          <li>
            <div class="lawyer-avatar">박</div>
            <div class="lawyer-info">
              <div class="lawyer-name">박철수 변호사</div>
              <div class="lawyer-desc">변호사 소개입니다. 변호사 소개입니다.</div>
            </div>
          </li>
        </ul>
        <a href="#" class="more-link">더보기</a>
      </div>

      <!-- 유사 해결사례 -->
      <div class="sidebar-card">
        <h3>유사 해결사례</h3>
        <ul class="case-list-sidebar">
          <li>
            <div class="case-sidebar-avatar">김</div>
            <div class="case-sidebar-content">
              <div class="case-sidebar-title">해결사례 제목입니다. 해결사례 제목</div>
              <div class="case-sidebar-author">김진수 변호사</div>
            </div>
          </li>
          <li>
            <div class="case-sidebar-avatar">이</div>
            <div class="case-sidebar-content">
              <div class="case-sidebar-title">해결사례 제목입니다. 해결사례 제목</div>
              <div class="case-sidebar-author">이영희 변호사</div>
            </div>
          </li>
          <li>
            <div class="case-sidebar-avatar">박</div>
            <div class="case-sidebar-content">
              <div class="case-sidebar-title">해결사례 제목입니다. 해결사례 제목</div>
              <div class="case-sidebar-author">박철수 변호사</div>
            </div>
          </li>
          <li>
            <div class="case-sidebar-avatar">최</div>
            <div class="case-sidebar-content">
              <div class="case-sidebar-title">해결사례 제목입니다. 해결사례 제목</div>
              <div class="case-sidebar-author">최민수 변호사</div>
            </div>
          </li>
          <li>
            <div class="case-sidebar-avatar">정</div>
            <div class="case-sidebar-content">
              <div class="case-sidebar-title">해결사례 제목입니다. 해결사례 제목</div>
              <div class="case-sidebar-author">정수진 변호사</div>
            </div>
          </li>
        </ul>
      </div>

      <!-- 프로모션 배너 (중간) -->
      <div class="promo-banner">
        <img src="https://placehold.co/80x80" alt="변호사 이미지">
        <div class="promo-banner-text">무죄/무혐의 등 해결사례로 말합니다</div>
      </div>

      <!-- 자주 작성하는 문서 -->
      <div class="sidebar-card">
        <h3>자주 작성하는 문서</h3>
        <ul class="document-list">
          <li>
            <div class="document-number">1</div>
            <div class="document-title">계약서 제목입니다. 계약서 제목입니다.</div>
          </li>
          <li>
            <div class="document-number">2</div>
            <div class="document-title">계약서 제목입니다. 계약서 제목입니다.</div>
          </li>
          <li>
            <div class="document-number">3</div>
            <div class="document-title">계약서 제목입니다. 계약서 제목입니다.</div>
          </li>
          <li>
            <div class="document-number">4</div>
            <div class="document-title">계약서 제목입니다. 계약서 제목입니다.</div>
          </li>
          <li>
            <div class="document-number">5</div>
            <div class="document-title">계약서 제목입니다. 계약서 제목입니다.</div>
          </li>
        </ul>
        <a href="#" class="more-link">전체보기</a>
      </div>

      <!-- 동영상 -->
      <div class="sidebar-card">
        <h3>동영상</h3>
        <div class="video-thumbnail">동영상 썸네일</div>
        <div class="video-title">서울대 출신, 건설전문변호사가 직접 알려주는 Q&A</div>
      </div>

      <!-- 실시간 인기뉴스 -->
      <div class="sidebar-card">
        <h3>실시간 인기뉴스</h3>
        <ul class="news-list">
          <li>실시간 인기뉴스 글입니다. 실시간 인기뉴스 글입니다. 다. 실시간 인</li>
          <li>실시간 인기뉴스 글입니다. 실시간 인기뉴스 글입니다. 다. 실시간 인</li>
          <li>실시간 인기뉴스 글입니다. 실시간 인기뉴스 글입니다. 다. 실시간 인</li>
          <li>실시간 인기뉴스 글입니다. 실시간 인기뉴스 글입니다. 다. 실시간 인</li>
        </ul>
      </div>

      <!-- 카드 -->
      <div class="sidebar-card">
        <h3>카드</h3>
        <div class="card-image">카드 이미지</div>
        <div class="card-title">국가곡굽시니스트 시사만화</div>
        <div class="card-timestamp">시시에 5시간전</div>
      </div>
    </aside>
  </div>
</div>
@endsection
