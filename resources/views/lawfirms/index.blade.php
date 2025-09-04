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
                                           <div class="lawfirm-content-wrapper">
           <div class="ad-banner">
             <div class="ad-badge">
               <div class="ad-label">광고</div>
             </div>
             <div class="ad-title">AD LAWYERS</div>
           </div>
           <div class="lawfirm-main-content">
             <div class="lawfirm-header">
               <div class="lawfirm-title">로펌</div>
               <div class="category-filter">분야별 ▼</div>
             </div>
             <div class="lawfirm-section">
               <div class="lawfirm-info-container">
                 <div class="lawfirm-name-container">
                   <div class="lawfirm-name">[로티피] 법률상담부터 사건종결까지 직접 진행합니다.</div>
                 </div>
                 <div class="lawfirm-description-container">
                   <div class="lawfirm-description">의뢰인의 눈높이에서 쉽고 친절한 상담을 약속합니다</div>
                 </div>
                 <div class="lawfirm-tags">
                   <div class="lawyer-tag">
                     <div class="lawyer-name">최광희 변호사</div>
                   </div>
                   <div class="case-type-tag">
                     <div class="case-type">민사사건</div>
                   </div>
                   <div class="specialty-tag">
                                       <div class="specialty">이혼/상속사건</div>
                 </div>
                 <div class="area-tag">
                   <div class="area">지역주택조합</div>
                   </div>
                 </div>
                 <div class="image-gallery-container">
                   <div class="image-gallery">
                     <img class="gallery-image-1" src="https://placehold.co/167x125" />
                     <img class="gallery-image-2" src="https://placehold.co/224x125" />
                     <img class="gallery-image-3" src="https://placehold.co/165x125" />
                     <img class="gallery-image-4" src="https://placehold.co/166x125" />
                     <img class="gallery-image-5" src="https://placehold.co/166x125" />
                   </div>
                   <div class="gallery-nav-button">
                     <div class="nav-icon">
                       <div class="nav-arrow"></div>
                     </div>
                   </div>
                 </div>
                 <div class="consultation-banner">
                   <img class="consultation-icon" src="https://placehold.co/28x28" />
                   <div class="consultation-title">로펌에 간편 상담을 신청해 보세요</div>
                   <div class="consultation-button">
                     <div class="consultation-button-text">간편 상담 신청</div>
                   </div>
                 </div>
                 <div class="address-container">
                   <div class="location-icon">
                     <div class="location-pin"></div>
                   </div>
                   <div class="address-text-container">
                     <div class="address-text">서울특별시 서초구 반포대로30길 61 (서초동) 4층, 로티피 법률사무소</div>
                   </div>
                 </div>
               </div>
             </div>
            <div class="lawfirm-details-section">
              <div class="lawfirm-info-container">
                <div class="lawfirm-name">[로티피] 법률상담부터 사건종결까지 직접 진행합니다.</div>
              </div>
              <div class="lawfirm-info-container">
                <div class="lawfirm-description">의뢰인의 눈높이에서 쉽고 친절한 상담을 약속합니다</div>
              </div>
              <div class="lawfirm-tags-section">
                <div class="lawfirm-tag-item">
                  <div class="lawyer-name">최광희 변호사</div>
                </div>
                <div class="lawfirm-tag-item">
                  <div class="case-type">민사사건</div>
                </div>
                <div class="lawfirm-tag-item">
                  <div class="specialty">이혼/상속사건</div>
                </div>
                <div class="lawfirm-tag-item">
                  <div class="area">지역주택조합</div>
                </div>
              </div>
              <div class="consultation-section">
                <img class="consultation-icon" src="https://placehold.co/28x28" />
                <div class="consultation-title">로펌에 간편 상담을 신청해 보세요</div>
                <div class="consultation-button">
                  <div class="consultation-button-text">간편 상담 신청</div>
                </div>
              </div>
              <div class="address-section">
                <div class="location-icon">
                  <div class="location-pin"></div>
                </div>
                <div class="address-text-container">
                  <div class="address-text">서울특별시 서초구 반포대로30길 61 (서초동) 4층, 로티피 법률사무소</div>
                </div>
              </div>
            </div>
            <div class="load-more-button">
              <div class="load-more-text">더보기</div>
              <div class="load-more-icon">
                <div class="icon-mask">
                  <div class="icon-fill">
                    <div class="icon-image">
                      <div class="icon-arrow"></div>
                    </div>
                  </div>
                </div>
                <div class="icon-background"></div>
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
