@extends('layouts.app')

@section('title', '변호사 활동내역 - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/lawyers.css') }}?v={{ filemtime(public_path('css/lawyers.css')) }}">
@endsection

@section('content')
<main class="lawyer-profile-page">
  <div class="lp-nav">
    <a class="lp-nav-item" href="{{ route('lawyers.profile', $id) }}">홈</a>
    <a class="lp-nav-item" href="{{ route('lawyers.profile.services', $id) }}">변호사 서비스</a>
    <a class="lp-nav-item" href="{{ route('lawyers.profile.reviews', $id) }}">이용후기</a>
    <div class="lp-nav-item active">변호사 활동내역</div>
  </div>
  <div class="container">
    <div class="lp-layout">
      <div class="lp-left">
        <!-- 상단 헤더 -->
        <div class="la-header">
          <h1 class="la-title">유정훈 변호사님의 법률사례 속에서<br/>내 고민과 닮은 사례를 찾아보세요.</h1>
        </div>

        <!-- 활동내역 전체 컨테이너 -->
        <div class="la-wrapper">
          <!-- 필터 옵션 컨테이너 -->
          <div class="la-filter-container">
            <div class="la-filter-item">모든 분야 ▼</div>
            <div class="la-filter-item">상세 분류 ▼</div>
          </div>
          
          <!-- 활동내역 메인 컨테이너 -->
          <div class="la-main-container">
          <!-- 탭 네비게이션 -->
          <div class="la-tabs">
            <div class="la-tab active">
              <span>상담사례</span>
            </div>
            <div class="la-tab">
              <span>해결사례</span>
            </div>
            <div class="la-tab">
              <span>변호사 가이드</span>
            </div>
            <div class="la-tab">
              <span>동영상</span>
            </div>
          </div>

          <!-- 사례 목록 -->
          <div class="la-cases">
          <x-la-case-item 
            mainCategory="성폭력/강제추행 등"
            subCategory="고소/소송절차"
            title="성추행 사건에서 엄벌탄원서 작성 및 제출 방법"
            timeInfo="26분 전 답변 작성 됨"
            :tags="['수사단계', '출국금지', '집행정지']"
          />

          <x-la-case-item 
            mainCategory="성폭력/강제추행 등"
            subCategory="고소/소송절차"
            title="성추행 사건에서 엄벌탄원서 작성 및 제출 방법"
            timeInfo="26분 전 답변 작성 됨"
            :tags="['수사단계', '출국금지', '집행정지']"
          />

          <x-la-case-item 
            mainCategory="성폭력/강제추행 등"
            subCategory="고소/소송절차"
            title="성추행 사건에서 엄벌탄원서 작성 및 제출 방법"
            timeInfo="26분 전 답변 작성 됨"
            :tags="['수사단계', '출국금지', '집행정지']"
          />

          <x-la-case-item 
            mainCategory="성폭력/강제추행 등"
            subCategory="고소/소송절차"
            title="성추행 사건에서 엄벌탄원서 작성 및 제출 방법"
            timeInfo="26분 전 답변 작성 됨"
            :tags="['수사단계', '출국금지', '집행정지']"
          />

          <x-la-case-item 
            mainCategory="성폭력/강제추행 등"
            subCategory="고소/소송절차"
            title="성추행 사건에서 엄벌탄원서 작성 및 제출 방법"
            timeInfo="26분 전 답변 작성 됨"
            :tags="['수사단계', '출국금지', '집행정지']"
          />

          <x-la-case-item 
            mainCategory="성폭력/강제추행 등"
            subCategory="고소/소송절차"
            title="성추행 사건에서 엄벌탄원서 작성 및 제출 방법"
            timeInfo="26분 전 답변 작성 됨"
            :tags="['수사단계', '출국금지', '집행정지']"
          />

          <x-la-case-item 
            mainCategory="성폭력/강제추행 등"
            subCategory="고소/소송절차"
            title="성추행 사건에서 엄벌탄원서 작성 및 제출 방법"
            timeInfo="26분 전 답변 작성 됨"
            :tags="['수사단계', '출국금지', '집행정지']"
          />

          <x-la-case-item 
            mainCategory="성폭력/강제추행 등"
            subCategory="고소/소송절차"
            title="성추행 사건에서 엄벌탄원서 작성 및 제출 방법"
            timeInfo="26분 전 답변 작성 됨"
            :tags="['수사단계', '출국금지', '집행정지']"
          />

          <x-la-case-item 
            mainCategory="성폭력/강제추행 등"
            subCategory="고소/소송절차"
            title="성추행 사건에서 엄벌탄원서 작성 및 제출 방법"
            timeInfo="26분 전 답변 작성 됨"
            :tags="['수사단계', '출국금지', '집행정지']"
          />

          <x-la-case-item 
            mainCategory="성폭력/강제추행 등"
            subCategory="고소/소송절차"
            title="성추행 사건에서 엄벌탄원서 작성 및 제출 방법"
            timeInfo="26분 전 답변 작성 됨"
            :tags="['수사단계', '출국금지', '집행정지']"
          />

          <x-la-case-item 
            mainCategory="성폭력/강제추행 등"
            subCategory="고소/소송절차"
            title="성추행 사건에서 엄벌탄원서 작성 및 제출 방법"
            timeInfo="26분 전 답변 작성 됨"
            :tags="['수사단계', '출국금지', '집행정지']"
          />
          </div>

          <!-- 페이지네이션 -->
          <div class="la-pagination">
            <div class="la-pages-section">
              <div class="la-page active">1</div>
              <div class="la-page">2</div>
              <div class="la-page">3</div>
              <div class="la-page">4</div>
              <div class="la-page">5</div>
              <div class="la-page">6</div>
              <div class="la-page">7</div>
              <div class="la-page">8</div>
              <div class="la-page">9</div>
              <div class="la-page">10</div>
            </div>
            <div class="la-next">
              <span>다음 10페이지</span>
              <div class="la-arrow"></div>
            </div>
          </div>
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
<script src="{{ asset('js/lawyer-activities.js') }}?v={{ filemtime(public_path('js/lawyer-activities.js')) }}"></script>
@endsection


