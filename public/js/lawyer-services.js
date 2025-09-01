document.addEventListener('DOMContentLoaded', function() {
  // 서비스 카드 선택 기능
  const serviceCards = document.querySelectorAll('.ls-card');
  
  serviceCards.forEach(card => {
    card.addEventListener('click', function() {
      // ls-wrap 내의 모든 카드들의 선택 상태 제거
      const wrap = this.closest('.ls-wrap');
      const allCardsInWrap = wrap.querySelectorAll('.ls-card');
      
      // 클릭된 카드가 이미 선택된 상태라면 선택 해제
      if (this.classList.contains('selected')) {
        this.classList.remove('selected');
        return;
      }
      
      // 다른 모든 카드들의 선택 상태 제거
      allCardsInWrap.forEach(c => {
        c.classList.remove('selected');
      });
      
      // 클릭된 카드 선택 상태로 변경
      this.classList.add('selected');
    });
  });
});
