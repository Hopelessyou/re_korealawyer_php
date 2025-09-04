@extends('layouts.app')

@section('title', '변호사 서비스 - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/lawyers.css') }}?v={{ filemtime(public_path('css/lawyers.css')) }}">
@endsection

@section('content')
@section('scripts')
<script src="{{ asset('js/lawyer-services.js') }}?v={{ filemtime(public_path('js/lawyer-services.js')) }}"></script>
@endsection
<main class="lawyer-profile-page">
  <div class="lp-nav">
    <a class="lp-nav-item" href="{{ route('lawyers.profile', $id) }}">홈</a>
    <div class="lp-nav-item active">변호사 서비스</div>
    <a class="lp-nav-item" href="{{ route('lawyers.profile.reviews', $id) }}">이용후기</a>
    <a class="lp-nav-item" href="{{ route('lawyers.profile.activities', $id) }}">변호사 활동내역</a>
  </div>
  <div class="container">
    <div class="lp-layout">
      <div class="lp-left">
        <!-- 상단 프로필 요약 -->
        <div class="lp-header">
          <h1 class="lp-name">유정훈 변호사</h1>
          <div class="lp-firm">IBS법률사무소</div>
          <div class="lp-tagline">'정확'하고 '명쾌'한 빠른 답변을 드립니다!!!</div>
        </div>

        <div class="lp-tags">
          <span class="lp-tag">형사법 전문</span>
          <span class="lp-tag">공직 근무 경험</span>
          <span class="lp-tag">경찰 경험</span>
          <span class="lp-tag">영어 가능</span>
        </div>

        <div class="lp-info-container">
          <div class="lp-info-left">
            <div class="lp-stats-box">
              <div class="lp-stats-label">예약준수율</div>
              <div class="lp-stats-percent">96%</div>
              <div class="lp-stats-progress"><div class="lp-stats-progress-bar" style="width:96%"></div></div>
              <div class="lp-office-name">법무법인 태신</div>
              <div class="lp-office-address">서울특별시 서초구 서초대로50길 18 (서초동) 4층</div>
              <div class="lp-office-phone">
                <span class="lp-phone-label">사무실 전화</span>
                <span class="lp-phone-number">050-7725-8845</span>
              </div>
            </div>

            <!-- 간편 문의 -->
            <div class="ls-quick-contact">
              <div class="label">간편 문의</div>
              <div class="note">간편 문의는 사무실 직원이 응대할 수 있습니다.</div>
              <div class="actions">
                <div class="qi"></div>
                <div class="qi"></div>
                <div class="qi"></div>
              </div>
            </div>
          </div>

          <div class="lp-info-right">
            <div class="lp-specialty-box">
              <div class="lp-specialty-label">분야</div>
              <div class="lp-specialty-text">수사/체포/구속, 사기/공갈, 마약/도박, 성폭력/강제추행 등</div>
              <div class="lp-info-row"><span class="lp-info-label">경력</span><span class="lp-info-text">서울강남경찰서 지능범죄수사과장</span></div>
              <div class="lp-info-row"><span class="lp-info-label">자격</span><span class="lp-info-text">사법시험 47회 (2008년)</span></div>
              <div class="lp-info-row"><span class="lp-info-label">소속</span><span class="lp-info-text">서울지방변호사회</span></div>
              <div class="lp-info-row"><span class="lp-info-label">학력</span><span class="lp-info-text">연세대학교 법학과 학사 졸업</span></div>
            </div>
          </div>
        </div>

        <!-- 전화 상담 섹션 -->
        <div class="ls-phone-consultation">
          <div class="ls-phone-header">
            <h2 class="ls-phone-title">전화 상담</h2>
            <p class="ls-phone-description">빠르고 정확한 전화 상담으로 법률 문제를 해결하세요</p>
          </div>
          
          <div class="ls-phone-services">
            <div class="ls-phone-service-card">
              <div class="ls-phone-service-info">
                <h3 class="ls-phone-service-title">10분 전화상담</h3>
                <p class="ls-phone-service-desc">간단한 법률 질문에 대한 빠른 답변</p>
              </div>
              <button class="ls-phone-service-btn">예약하기</button>
            </div>
            
            <div class="ls-phone-service-card">
              <div class="ls-phone-service-info">
                <h3 class="ls-phone-service-title">방문상담</h3>
                <p class="ls-phone-service-desc">사무실에서 직접 만나 상세한 상담</p>
              </div>
              <button class="ls-phone-service-btn">예약하기</button>
            </div>
            
            <div class="ls-phone-service-card">
              <div class="ls-phone-service-info">
                <h3 class="ls-phone-service-title">가선임</h3>
                <p class="ls-phone-service-desc">사건 초기 단계부터 변호사 선임</p>
              </div>
              <button class="ls-phone-service-btn">예약하기</button>
            </div>
          </div>
        </div>

        <!-- 기타 서비스 목록 -->
        <div class="ls-wrap">
          <x-ls-section 
            title="서류작성" 
            :services="[
              ['title' => '소장작성'],
              ['title' => '답변서 작성'],
              ['title' => '변호사 의견서 작성'],
              ['title' => '기타 양형 자료']
            ]" 
          />

          <x-ls-section 
            title="변호사 동행" 
            :services="[
              ['title' => '경찰 동행'],
              ['title' => '검찰 동행'],
              ['title' => '재판 참석']
            ]" 
          />

          <x-ls-section 
            title="체포/구속" 
            :services="[
              ['title' => '유치장 접견'],
              ['title' => '구속영장 대비'],
              ['title' => '압수/수색 대비']
            ]" 
          />

          <x-ls-section 
            title="기타 서비스" 
            :services="[
              ['title' => '합의 대행'],
              ['title' => '사전 처분'],
              ['title' => '강제 집행']
            ]" 
          />

          <x-ls-section 
            title="패키지" 
            :services="[
              ['title' => '수사 단계 조력'],
              ['title' => '영장실질심사'],
              ['title' => '검찰 조사 단계 조력']
            ]" 
          />
          
          <!-- 견적 문의하기 버튼 -->
          <div class="ls-quote-inquiry">
            <div class="ls-quote-content">
              <h3 class="ls-quote-title">맞춤형 견적이 필요하신가요?</h3>
              <p class="ls-quote-description">복잡한 사건이나 특별한 요구사항이 있으시면 견적을 문의해 주세요.</p>
            </div>
            <button class="ls-quote-btn">견적 문의하기</button>
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
            <button class="lp-cta-button">상담예약</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection


