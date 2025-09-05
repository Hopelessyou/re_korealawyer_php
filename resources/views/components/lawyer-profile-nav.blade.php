@props(['activeTab' => 'home', 'lawyerId' => 1])

<div class="lp-nav">
  <button class="lp-hamburger" id="sidebarToggle">
    <span></span>
    <span></span>
    <span></span>
  </button>
  
  <div class="lp-nav-item {{ $activeTab === 'home' ? 'active' : '' }}">
    @if($activeTab === 'home')
      홈
    @else
      <a href="{{ route('lawyers.profile', $lawyerId) }}">홈</a>
    @endif
  </div>
  
  <div class="lp-nav-item {{ $activeTab === 'services' ? 'active' : '' }}">
    @if($activeTab === 'services')
      변호사 서비스
    @else
      <a href="{{ route('lawyers.profile.services', $lawyerId) }}">변호사 서비스</a>
    @endif
  </div>
  
  <div class="lp-nav-item {{ $activeTab === 'reviews' ? 'active' : '' }}">
    @if($activeTab === 'reviews')
      이용후기
    @else
      <a href="{{ route('lawyers.profile.reviews', $lawyerId) }}">이용후기</a>
    @endif
  </div>
  
  <div class="lp-nav-item {{ $activeTab === 'activities' ? 'active' : '' }}">
    @if($activeTab === 'activities')
      변호사 활동내역
    @else
      <a href="{{ route('lawyers.profile.activities', $lawyerId) }}">변호사 활동내역</a>
    @endif
  </div>
</div>

<!-- 사이드바 -->
<div class="lp-sidebar" id="sidebar">
  <div class="lp-sidebar-content">
    <div class="lp-sidebar-header">
      <h3>메뉴</h3>
      <button class="lp-sidebar-close" id="sidebarClose">×</button>
    </div>
    <div class="lp-sidebar-menu">
      <a href="#" class="lp-sidebar-item">프로필 정보</a>
      <a href="#" class="lp-sidebar-item">전문 분야</a>
      <a href="#" class="lp-sidebar-item">경력 사항</a>
      <a href="#" class="lp-sidebar-item">자격 사항</a>
      <a href="#" class="lp-sidebar-item">연락처</a>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const sidebarClose = document.getElementById('sidebarClose');

    // 햄버거 버튼 클릭시 사이드바 열기
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.add('active');
        });
    }

    // 닫기 버튼 클릭시 사이드바 닫기
    if (sidebarClose) {
        sidebarClose.addEventListener('click', function() {
            sidebar.classList.remove('active');
        });
    }

    // 사이드바 외부 클릭시 닫기
    document.addEventListener('click', function(e) {
        if (sidebar && sidebarToggle && !sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
            sidebar.classList.remove('active');
        }
    });
});
</script>
