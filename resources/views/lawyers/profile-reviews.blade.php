@extends('layouts.app')

@section('title', '이용후기 - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/lawyers.css') }}?v={{ filemtime(public_path('css/lawyers.css')) }}">
@endsection

@section('content')
<main class="lawyer-profile-page">
  <div class="lp-nav">
    <a class="lp-nav-item" href="{{ route('lawyers.profile', $id) }}">홈</a>
    <a class="lp-nav-item" href="{{ route('lawyers.profile.services', $id) }}">변호사 서비스</a>
    <div class="lp-nav-item active">이용후기</div>
    <a class="lp-nav-item" href="{{ route('lawyers.profile.activities', $id) }}">변호사 활동내역</a>
  </div>
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
            <x-lr-review-item 
              category="분야"
              summary="의뢰인 한줄 후기입니다. 의뢰인 한줄 후기입니다. 의뢰인 한줄 후기입니다."
              detail="상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다."
              clientName="김아무개"
              serviceType="전화상담"
              date="2025-04-21"
              diagnosis="변호사진단 보기"
              :badges="[
                ['number' => '배지1', 'label' => '친절배려'],
                ['number' => '배지4', 'label' => '쉬운설명']
              ]"
            />

            <x-lr-review-item 
              category="분야"
              summary="의뢰인 한줄 후기입니다. 의뢰인 한줄 후기입니다. 의뢰인 한줄 후기입니다."
              detail="상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다."
              clientName="김아무개"
              serviceType="전화상담"
              date="2025-04-21"
              diagnosis="변호사진단 보기"
              :badges="[
                ['number' => '배지1', 'label' => '친절배려'],
                ['number' => '배지4', 'label' => '쉬운설명']
              ]"
            />

            <x-lr-review-item 
              category="분야"
              summary="의뢰인 한줄 후기입니다. 의뢰인 한줄 후기입니다. 의뢰인 한줄 후기입니다."
              detail="상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다."
              clientName="김아무개"
              serviceType="전화상담"
              date="2025-04-21"
              diagnosis="변호사진단 보기"
              :badges="[
                ['number' => '배지1', 'label' => '친절배려'],
                ['number' => '배지4', 'label' => '쉬운설명']
              ]"
            />

            <x-lr-review-item 
              category="분야"
              summary="의뢰인 한줄 후기입니다. 의뢰인 한줄 후기입니다. 의뢰인 한줄 후기입니다."
              detail="상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다. 상세 후기 입니다."
              clientName="김아무개"
              serviceType="전화상담"
              date="2025-04-21"
              diagnosis="변호사진단 보기"
              :badges="[
                ['number' => '배지1', 'label' => '친절배려'],
                ['number' => '배지4', 'label' => '쉬운설명']
              ]"
            />
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
            <img src="https://via.placeholder.com/479x545" alt="유정훈 변호사">
          </div>
          <div class="lp-profile-header">
            <div class="lp-profile-info">
              <h2 class="lp-profile-name">유정훈 변호사</h2>
              <div class="lp-profile-firm">IBS법률사무소</div>
            </div>
          </div>
          <div class="lp-profile-cta">
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


