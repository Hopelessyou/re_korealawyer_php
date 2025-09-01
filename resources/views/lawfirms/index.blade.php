@extends('layouts.app')

@section('title', '로펌 - 법무법인 검색 - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="/css/lawfirms.css">
@endsection

@section('content')
<main class="lawfirm-search-page" aria-label="로펌 찾기">
  <div class="page">
    <div class="hero" role="search" aria-label="상단 검색">
      <button class="pill">개인 <span class="caret" aria-hidden="true"></span></button>
      <div class="searchbar">
        <button class="plus" aria-label="추가">+</button>
        <input placeholder="법률 질문, 문서작성 여기서 해결하세요." />
        <button class="send" aria-label="전송">↗</button>
                    </div>
                </div>
    <div class="quick">
      <span class="label">자주 사용 되는 문서 :</span>
      <div class="chips">
        <a class="chip" href="#">표준 근로계약서</a>
        <a class="chip" href="#">내용증명 작성</a>
        <a class="chip" href="#">OOO 문서</a>
        <a class="chip" href="#">OOO 문서</a>
        <a class="chip" href="#">OOO 문서</a>
      </div>
        </div>
    <!-- 키워드 섹션 -->
    @include('components.keyword-section')
    
    <!-- ▼ 하위 섹션을 여기에 추가하세요 (메인 + 사이드바 분리) -->
    <div class="layout" aria-label="본문 레이아웃">
      <section class="main" aria-label="메인">
                     <div data-layer="lawfirm-content-wrapper" class="lawfirm-content-wrapper">
          <div data-layer="ad-banner" class="ad-banner">
            <div data-layer="ad-badge" class="ad-badge">
              <div data-layer="ad-label" class="ad-label">광고</div>
            </div>
            <div data-layer="ad-title" class="ad-title">AD LAWYERS</div>
          </div>
          <div data-layer="lawfirm-main-content" class="lawfirm-main-content">
            <div data-layer="lawfirm-header" class="lawfirm-header">
              <div data-layer="lawfirm-title" class="lawfirm-title">로펌</div>
              <div data-layer="category-filter" class="category-filter">분야별 ▼</div>
            </div>
            <div data-layer="lawfirm-section" class="lawfirm-section">
              <div data-layer="lawfirm-info-container" class="lawfirm-info-container">
                <div data-layer="lawfirm-name-container" class="lawfirm-name-container">
                  <div data-layer="lawfirm-name" class="lawfirm-name">[로티피] 법률상담부터 사건종결까지 직접 진행합니다.</div>
                </div>
                <div data-layer="lawfirm-description-container" class="lawfirm-description-container">
                  <div data-layer="lawfirm-description" class="lawfirm-description">의뢰인의 눈높이에서 쉽고 친절한 상담을 약속합니다</div>
                </div>
                <div data-layer="lawfirm-tags" class="lawfirm-tags">
                  <div data-layer="lawyer-tag" class="lawyer-tag">
                    <div data-layer="lawyer-name" class="lawyer-name">최광희 변호사</div>
                  </div>
                  <div data-layer="case-type-tag" class="case-type-tag">
                    <div data-layer="case-type" class="case-type">민사사건</div>
                  </div>
                  <div data-layer="specialty-tag" class="specialty-tag">
                    <div data-layer="specialty" class="specialty">이혼/상속사건</div>
                  </div>
                  <div data-layer="area-tag" class="area-tag">
                    <div data-layer="area" class="area">지역주택조합</div>
                  </div>
                </div>
                <div data-layer="image-gallery-container" class="image-gallery-container">
                  <div data-layer="image-gallery" class="image-gallery">
                    <img data-layer="gallery-image-1" class="gallery-image-1" src="https://placehold.co/167x125" />
                    <img data-layer="gallery-image-2" class="gallery-image-2" src="https://placehold.co/224x125" />
                    <img data-layer="gallery-image-3" class="gallery-image-3" src="https://placehold.co/165x125" />
                    <img data-layer="gallery-image-4" class="gallery-image-4" src="https://placehold.co/166x125" />
                    <img data-layer="gallery-image-5" class="gallery-image-5" src="https://placehold.co/166x125" />
                  </div>
                  <div data-layer="gallery-nav-button" class="gallery-nav-button">
                    <div data-layer="nav-icon" class="nav-icon">
                      <div data-layer="nav-arrow" class="nav-arrow"></div>
                    </div>
                  </div>
                </div>
                <div data-layer="consultation-banner" class="consultation-banner">
                  <img data-layer="consultation-icon" class="consultation-icon" src="https://placehold.co/28x28" />
                  <div data-layer="consultation-title" class="consultation-title">로펌에 간편 상담을 신청해 보세요</div>
                  <div data-layer="consultation-button" class="consultation-button">
                    <div data-layer="consultation-button-text" class="consultation-button-text">간편 상담 신청</div>
                  </div>
                </div>
                <div data-layer="address-container" class="address-container">
                  <div data-layer="location-icon" class="location-icon">
                    <div data-layer="location-pin" class="location-pin"></div>
                  </div>
                  <div data-layer="address-text-container" class="address-text-container">
                    <div data-layer="address-text" class="address-text">서울특별시 서초구 반포대로30길 61 (서초동) 4층, 로티피 법률사무소</div>
                  </div>
                </div>
              </div>
            </div>
            <div data-layer="Frame 1171278528" class="Frame1171278528">
              <div data-layer="Container" class="Container">
                <div data-layer="lawfirm-name" class="lawfirm-name">[로티피] 법률상담부터 사건종결까지 직접 진행합니다.</div>
              </div>
              <div data-layer="Container" class="Container">
                <div data-layer="lawfirm-description" class="lawfirm-description">의뢰인의 눈높이에서 쉽고 친절한 상담을 약속합니다</div>
              </div>
              <div data-layer="Frame 1171278526" class="Frame1171278526">
                <div data-layer="Button" class="Button">
                  <div data-layer="lawyer-name" class="lawyer-name">최광희 변호사</div>
                </div>
                <div data-layer="Button" class="Button">
                  <div data-layer="case-type" class="case-type">민사사건</div>
                </div>
                <div data-layer="Button" class="Button">
                  <div data-layer="specialty" class="specialty">이혼/상속사건</div>
                </div>
                <div data-layer="Button" class="Button">
                  <div data-layer="area" class="area">지역주택조합</div>
                </div>
              </div>
              <div data-layer="Background+Border" class="BackgroundBorder">
                <img data-layer="consultation-icon" class="consultation-icon" src="https://placehold.co/28x28" />
                <div data-layer="consultation-title" class="consultation-title">로펌에 간편 상담을 신청해 보세요</div>
                <div data-layer="Button" class="Button">
                  <div data-layer="consultation-button-text" class="consultation-button-text">간편 상담 신청</div>
                </div>
              </div>
              <div data-layer="Container" class="Container">
                <div data-layer="SVG" class="Svg">
                  <div data-layer="Vector" class="Vector"></div>
                </div>
                <div data-layer="Container" class="Container">
                  <div data-layer="address-text" class="address-text">서울특별시 서초구 반포대로30길 61 (서초동) 4층, 로티피 법률사무소</div>
                </div>
              </div>
            </div>
            <div data-layer="load-more-button" class="load-more-button">
              <div data-layer="load-more-text" class="load-more-text">더보기</div>
              <div data-layer="load-more-icon" class="load-more-icon">
                <div data-layer="icon-mask" class="icon-mask">
                  <div data-layer="icon-fill" class="icon-fill">
                    <div data-layer="icon-image" class="icon-image">
                      <div data-layer="icon-arrow" class="icon-arrow"></div>
                    </div>
                  </div>
                </div>
                <div data-layer="icon-background" class="icon-background"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <aside class="side" aria-label="사이드바">
        @include('components.sidebar')
      </aside>
        </div>
    </div>
</main>
@endsection
