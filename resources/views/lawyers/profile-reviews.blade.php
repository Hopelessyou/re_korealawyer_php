@extends('layouts.app')

@section('title', '이용후기 - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/lawyers.css') }}?v={{ filemtime(public_path('css/lawyers.css')) }}">
@endsection

@section('content')
<main class="lawyer-profile-page" style="padding: 0 !important; margin: 0 !important;">
  <x-lawyer-profile-nav active-tab="reviews" :lawyer-id="$id" />
  <div class="container">
    <div class="lp-layout">
      <div class="lp-left">
        <!-- 상단 후기 요약 -->
        <div class="lr-header">
          <h1 class="lr-title">변호사와 함께한<br/>의뢰인의 후기를 확인 하세요.</h1>
        </div>

        <!-- 주요 후기 캐러셀 -->
        <div class="lr-featured">
          <div class="lr-carousel">
            <div class="lr-arrow lr-arrow-left"></div>
            <div class="lr-carousel-content">
              <div class="lr-quote">
                <div class="lr-quote-text">" 기존의 사례와 유사한 사건들을 맡아본 적 있는 변호사님 "</div>
                <div class="lr-quote-desc">변호사님께서는 제 사건과 유사한 사건으로 무혐의를 끌어내신 이력이 있으시며 여러방면으로 답변을 주셨습니다. 편한 분위기를 조성해주셨습니다.</div>
              </div>
              <div class="lr-meta">
                <div class="lr-meta-field">문의 분야</div>
                <div class="lr-meta-item">의뢰인 아이디</div>
                <div class="lr-meta-item">날짜</div>
                <div class="lr-meta-item">전화상담</div>
              </div>
            </div>
            <div class="lr-arrow lr-arrow-right"></div>
          </div>
          <div class="lr-dots">
            <div class="lr-dot active"></div>
            <div class="lr-dot"></div>
            <div class="lr-dot"></div>
            <div class="lr-dot"></div>
          </div>
        </div>

        <!-- 후기 목록 -->
        <div class="lr-reviews">
          <div class="lr-reviews-header">
            <h2 class="lr-reviews-title">총 이용 후기</h2>
            <div class="lr-filters">
              <div class="lr-filter">모든 분야 ▼</div>
              <div class="lr-filter">서비스 종류 ▼</div>
              <div class="lr-filter">상세 분류▼</div>
            </div>
          </div>

          <div class="lr-reviews-list">
            <div class="lr-review-item">
              <div class="lr-review-header">
                <span class="lr-review-category">성폭력/강제추행 등</span>
              </div>
              <h3 class="lr-review-title">"기존의 사례와 유사한 사건들을 맡아본 적 있는 변호사님"</h3>
              <p class="lr-review-desc">변호사님께서는 제 사건과 유사한 사건으로 무혐의를 끌어내신 이력이 있으시며 여러방면으로 답변을 주셨습니다. 편한 분위기를 조성해주셨습니다.</p>
              <div class="lr-review-meta">
                <span class="lr-review-client">김아무개</span>
                <span class="lr-review-service">전화상담</span>
                <span class="lr-review-date">2025-04-21</span>
              </div>
              <div class="lr-review-badges">
                <span class="lr-review-badge">친절배려</span>
                <span class="lr-review-badge">쉬운설명</span>
              </div>
            </div>

            <div class="lr-review-item">
              <div class="lr-review-header">
                <span class="lr-review-category">교통사고</span>
              </div>
              <h3 class="lr-review-title">"합의금 협상에서 큰 도움을 받았습니다"</h3>
              <p class="lr-review-desc">교통사고 합의금 협상에서 변호사님의 도움으로 예상보다 훨씬 유리한 조건으로 합의할 수 있었습니다. 전문적인 조언에 감사드립니다.</p>
              <div class="lr-review-meta">
                <span class="lr-review-client">이아무개</span>
                <span class="lr-review-service">방문상담</span>
                <span class="lr-review-date">2025-04-20</span>
              </div>
              <div class="lr-review-badges">
                <span class="lr-review-badge">전문성</span>
                <span class="lr-review-badge">빠른처리</span>
              </div>
            </div>

            <div class="lr-review-item">
              <div class="lr-review-header">
                <span class="lr-review-category">부동산</span>
              </div>
              <h3 class="lr-review-title">"임대차 분쟁 해결에 최고입니다"</h3>
              <p class="lr-review-desc">임대차 계약 해지와 보증금 반환 문제로 고민이 많았는데, 변호사님의 상담을 통해 문제를 해결할 수 있었습니다. 정말 감사합니다.</p>
              <div class="lr-review-meta">
                <span class="lr-review-client">박아무개</span>
                <span class="lr-review-service">전화상담</span>
                <span class="lr-review-date">2025-04-19</span>
              </div>
              <div class="lr-review-badges">
                <span class="lr-review-badge">친절배려</span>
                <span class="lr-review-badge">쉬운설명</span>
                <span class="lr-review-badge">빠른처리</span>
              </div>
            </div>

            <div class="lr-review-item">
              <div class="lr-review-header">
                <span class="lr-review-category">형사사건</span>
              </div>
              <h3 class="lr-review-title">"무혐의 처분을 받을 수 있었습니다"</h3>
              <p class="lr-review-desc">형사사건으로 고민이 많았는데, 변호사님의 전문적인 변호로 무혐의 처분을 받을 수 있었습니다. 정말 감사드립니다.</p>
              <div class="lr-review-meta">
                <span class="lr-review-client">최아무개</span>
                <span class="lr-review-service">선임</span>
                <span class="lr-review-date">2025-04-18</span>
              </div>
              <div class="lr-review-badges">
                <span class="lr-review-badge">전문성</span>
                <span class="lr-review-badge">성공사례</span>
              </div>
            </div>
          </div>

          <!-- 페이지네이션 -->
          <div class="lr-pagination">
            <div class="lr-page active">1</div>
            <div class="lr-page">2</div>
            <div class="lr-page">3</div>
            <div class="lr-page">4</div>
            <div class="lr-page">5</div>
            <div class="lr-page">6</div>
            <div class="lr-page">7</div>
            <div class="lr-page">8</div>
            <div class="lr-page">9</div>
          </div>
        </div>
      </div>
      <div class="lp-right">
        <div class="lp-profile-card">
          <div class="lp-profile-image">
            <img src="https://picsum.photos/479/545" alt="유정훈 변호사">
          </div>
          <div class="lp-profile-header">
            <div class="lp-profile-info">
              <h2 class="lp-profile-name">유정훈 변호사</h2>
              <div class="lp-profile-firm">IBS법률사무소</div>
            </div>
          </div>
          <div class="lp-profile-cta">
            <button class="lp-cta-button">상담 / 선임 예약하기</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@section('scripts')
<script src="{{ asset('js/lawyer-reviews.js') }}?v={{ filemtime(public_path('js/lawyer-reviews.js')) }}"></script>
@endsection


