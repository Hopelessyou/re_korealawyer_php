document.addEventListener('DOMContentLoaded', function() {
  // 탭 기능
  const tabs = document.querySelectorAll('.la-tab');
  
  tabs.forEach(tab => {
    tab.addEventListener('click', function() {
      // 모든 탭에서 active 클래스 제거
      tabs.forEach(t => t.classList.remove('active'));
      
      // 클릭된 탭에 active 클래스 추가
      this.classList.add('active');
      
      // 여기에 탭별 콘텐츠 변경 로직을 추가할 수 있습니다
      // 예: API 호출, 콘텐츠 필터링 등
    });
  });
  
  // 페이지네이션 기능
  const pages = document.querySelectorAll('.la-page');
  
  pages.forEach(page => {
    page.addEventListener('click', function() {
      // 모든 페이지에서 active 클래스 제거
      pages.forEach(p => p.classList.remove('active'));
      
      // 클릭된 페이지에 active 클래스 추가
      this.classList.add('active');
      
      // 여기에 페이지 변경 로직을 추가할 수 있습니다
      // 예: API 호출, 페이지 로딩 등
    });
  });
  
  // 다음 페이지 버튼
  const nextButton = document.querySelector('.la-next');
  if (nextButton) {
    nextButton.addEventListener('click', function() {
      // 다음 페이지 로직
      console.log('다음 페이지로 이동');
    });
  }
});
