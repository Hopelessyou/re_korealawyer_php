document.addEventListener('DOMContentLoaded', function() {
  // 캐러셀 기능
  const dots = document.querySelectorAll('.lr-dot');
  const arrows = document.querySelectorAll('.lr-arrow');
  
  let currentSlide = 0;
  const totalSlides = dots.length;
  
  // 점 클릭 이벤트
  dots.forEach((dot, index) => {
    dot.addEventListener('click', function() {
      setActiveSlide(index);
    });
  });
  
  // 화살표 클릭 이벤트
  arrows.forEach((arrow, index) => {
    arrow.addEventListener('click', function() {
      if (index === 0) { // 왼쪽 화살표
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
      } else { // 오른쪽 화살표
        currentSlide = (currentSlide + 1) % totalSlides;
      }
      setActiveSlide(currentSlide);
    });
  });
  
  // 활성 슬라이드 설정
  function setActiveSlide(index) {
    // 모든 점에서 active 클래스 제거
    dots.forEach(dot => dot.classList.remove('active'));
    
    // 선택된 점에 active 클래스 추가
    dots[index].classList.add('active');
    
    currentSlide = index;
  }
  
  // 페이지네이션 기능
  const pages = document.querySelectorAll('.lr-page');
  
  pages.forEach((page, index) => {
    page.addEventListener('click', function() {
      // 모든 페이지에서 active 클래스 제거
      pages.forEach(p => p.classList.remove('active'));
      
      // 클릭된 페이지에 active 클래스 추가
      this.classList.add('active');
    });
  });
});
