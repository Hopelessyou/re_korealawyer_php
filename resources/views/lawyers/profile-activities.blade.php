@extends('layouts.app')

@section('title', '변호사 활동내역 - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/lawyers.css') }}?v={{ filemtime(public_path('css/lawyers.css')) }}">
@endsection

@section('content')
<main class="lawyer-profile-page" style="padding: 0 !important; margin: 0 !important;">
  <x-lawyer-profile-nav active-tab="activities" :lawyer-id="$id" />
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
            <div class="la-tab la-tab-consultation active" data-tab="consultation">
              <span>상담사례</span>
            </div>
            <div class="la-tab la-tab-resolution" data-tab="resolution">
              <span>해결사례</span>
            </div>
            <div class="la-tab la-tab-wiki" data-tab="wiki">
              <span>위키 활동</span>
            </div>
            <div class="la-tab la-tab-video" data-tab="video">
              <span>동영상</span>
            </div>
          </div>

          <!-- 탭 콘텐츠 영역 -->
          <div class="la-tab-content">
            <!-- 상담사례 탭 -->
            <div class="la-tab-panel la-tab-panel-consultation active">
              <div class="la-consultation-cases">
                <div class="la-consultation-item">
                  <div class="la-consultation-header">
                    <span class="la-consultation-category">성폭력/강제추행 등</span>
                    <span class="la-consultation-status pending">답변 완료</span>
                  </div>
                  <h3 class="la-consultation-title">성추행 사건에서 엄벌탄원서 작성 및 제출 방법</h3>
                  <p class="la-consultation-desc">성추행 사건에서 엄벌탄원서를 작성하고 제출하는 방법에 대해 상세히 상담해드렸습니다. 수사단계별 대응방안과 증거수집 방법을 안내했습니다.</p>
                  <div class="la-consultation-meta">
                    <span class="la-consultation-date">26분 전 답변 작성됨</span>
                    <span class="la-consultation-tags">수사단계, 출국금지, 집행정지</span>
                  </div>
                </div>
                <div class="la-consultation-item">
                  <div class="la-consultation-header">
                    <span class="la-consultation-category">교통사고</span>
                    <span class="la-consultation-status pending">답변 완료</span>
                  </div>
                  <h3 class="la-consultation-title">교통사고 과실비율 산정 기준 및 합의금 협상</h3>
                  <p class="la-consultation-desc">교통사고 발생 시 과실비율이 어떻게 산정되는지와 합의금 협상 시 유리한 조건을 얻는 방법에 대해 상담해드렸습니다.</p>
                  <div class="la-consultation-meta">
                    <span class="la-consultation-date">1시간 전 답변 작성됨</span>
                    <span class="la-consultation-tags">과실비율, 합의금, 협상</span>
                  </div>
                </div>
                <div class="la-consultation-item">
                  <div class="la-consultation-header">
                    <span class="la-consultation-category">부동산</span>
                    <span class="la-consultation-status pending">답변 완료</span>
                  </div>
                  <h3 class="la-consultation-title">임대차 계약 해지 시 보증금 반환 절차</h3>
                  <p class="la-consultation-desc">임대차 계약 해지 시 보증금 반환을 위한 법적 절차와 임차인의 권리 보호 방법에 대해 상담해드렸습니다.</p>
                  <div class="la-consultation-meta">
                    <span class="la-consultation-date">2시간 전 답변 작성됨</span>
                    <span class="la-consultation-tags">임대차, 보증금, 계약해지</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- 해결사례 탭 -->
            <div class="la-tab-panel la-tab-panel-resolution">
              <div class="la-resolution-cases">
                <div class="la-resolution-item">
                  <div class="la-resolution-header">
                    <span class="la-resolution-category">성폭력/강제추행 등</span>
                    <span class="la-resolution-status resolved">해결완료</span>
                  </div>
                  <h3 class="la-resolution-title">성추행 사건 무혐의 처리 성공</h3>
                  <p class="la-resolution-desc">의뢰인의 성추행 혐의에 대해 충분한 증거 수집과 변호를 통해 무혐의 처분을 받았습니다.</p>
                  <div class="la-resolution-meta">
                    <span class="la-resolution-date">2024.03.15</span>
                    <span class="la-resolution-result">무혐의</span>
                  </div>
                </div>
                <div class="la-resolution-item">
                  <div class="la-resolution-header">
                    <span class="la-resolution-category">교통사고</span>
                    <span class="la-resolution-status resolved">해결완료</span>
                  </div>
                  <h3 class="la-resolution-title">교통사고 합의금 협상 성공</h3>
                  <p class="la-resolution-desc">과실비율 조정과 합의금 협상을 통해 의뢰인에게 유리한 조건으로 사건을 마무리했습니다.</p>
                  <div class="la-resolution-meta">
                    <span class="la-resolution-date">2024.02.28</span>
                    <span class="la-resolution-result">합의</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- 위키 활동 탭 -->
            <div class="la-tab-panel la-tab-panel-wiki">
              <div class="la-wiki-articles">
                <div class="la-wiki-item">
                  <div class="la-wiki-header">
                    <span class="la-wiki-category">법률 가이드</span>
                    <span class="la-wiki-views">조회 1,234</span>
                  </div>
                  <h3 class="la-wiki-title">성폭력 사건 대응 가이드</h3>
                  <p class="la-wiki-desc">성폭력 사건 발생 시 초기 대응 방법과 법적 절차에 대한 상세한 가이드입니다.</p>
                  <div class="la-wiki-meta">
                    <span class="la-wiki-date">2024.03.10</span>
                    <span class="la-wiki-likes">👍 45</span>
                  </div>
                </div>
                <div class="la-wiki-item">
                  <div class="la-wiki-header">
                    <span class="la-wiki-category">법률 용어</span>
                    <span class="la-wiki-views">조회 856</span>
                  </div>
                  <h3 class="la-wiki-title">교통사고 과실비율 산정 기준</h3>
                  <p class="la-wiki-desc">교통사고 발생 시 과실비율이 어떻게 산정되는지에 대한 법적 기준과 판례를 정리했습니다.</p>
                  <div class="la-wiki-meta">
                    <span class="la-wiki-date">2024.02.25</span>
                    <span class="la-wiki-likes">👍 32</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- 동영상 탭 -->
            <div class="la-tab-panel la-tab-panel-video">
              <div class="la-video-list">
                <div class="la-video-item">
                  <div class="la-video-thumbnail">
                    <img src="https://picsum.photos/300/200" alt="법률 상담 동영상">
                    <div class="la-video-duration">15:30</div>
                    <div class="la-video-play-btn">▶</div>
                  </div>
                  <div class="la-video-info">
                    <h3 class="la-video-title">성폭력 사건 초기 대응 방법</h3>
                    <p class="la-video-desc">성폭력 사건 발생 시 즉시 해야 할 행동과 주의사항에 대해 설명합니다.</p>
                    <div class="la-video-meta">
                      <span class="la-video-date">2024.03.05</span>
                      <span class="la-video-views">조회 2,456</span>
                    </div>
                  </div>
                </div>
                <div class="la-video-item">
                  <div class="la-video-thumbnail">
                    <img src="https://picsum.photos/300/200" alt="법률 상담 동영상">
                    <div class="la-video-duration">12:15</div>
                    <div class="la-video-play-btn">▶</div>
                  </div>
                  <div class="la-video-info">
                    <h3 class="la-video-title">교통사고 합의금 협상 전략</h3>
                    <p class="la-video-desc">교통사고 합의금 협상 시 유리한 조건을 얻기 위한 전략과 방법을 알려드립니다.</p>
                    <div class="la-video-meta">
                      <span class="la-video-date">2024.02.20</span>
                      <span class="la-video-views">조회 1,789</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
<script src="{{ asset('js/lawyer-activities.js') }}?v={{ filemtime(public_path('js/lawyer-activities.js')) }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // 탭 전환 기능
  const tabs = document.querySelectorAll('.la-tab');
  const panels = document.querySelectorAll('.la-tab-panel');
  
  tabs.forEach(tab => {
    tab.addEventListener('click', function() {
      const targetTab = this.getAttribute('data-tab');
      
      // 모든 탭에서 active 클래스 제거
      tabs.forEach(t => t.classList.remove('active'));
      panels.forEach(p => p.classList.remove('active'));
      
      // 클릭된 탭에 active 클래스 추가
      this.classList.add('active');
      
      // 해당하는 패널에 active 클래스 추가
      const targetPanel = document.querySelector(`.la-tab-panel-${targetTab}`);
      if (targetPanel) {
        targetPanel.classList.add('active');
      }
    });
  });
});
</script>
@endsection


