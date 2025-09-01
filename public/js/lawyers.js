document.addEventListener('DOMContentLoaded', function() {
  // 탭 스위처 기능
  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      const targetTab = this.getAttribute('data-tab');
      
      // 모든 탭 비활성화
      tabBtns.forEach(b => b.classList.remove('active'));
      tabContents.forEach(c => c.classList.remove('active'));
      
      // 선택된 탭 활성화
      this.classList.add('active');
      document.getElementById(targetTab + '-tab').classList.add('active');
    });
  });

  // 카테고리 네비게이션 기능
  const navItems = document.querySelectorAll('.nav-item');
  const categorySections = document.querySelectorAll('.category-section');

  navItems.forEach(item => {
    item.addEventListener('click', function() {
      const targetCategory = this.getAttribute('data-category');
      
      // 모든 네비게이션 아이템 비활성화
      navItems.forEach(nav => nav.classList.remove('active'));
      
      // 선택된 네비게이션 아이템 활성화
      this.classList.add('active');
      
      // 해당 카테고리 섹션으로 스크롤
      const targetSection = document.querySelector(`.category-section[data-category="${targetCategory}"]`);
      if (targetSection) {
        targetSection.scrollIntoView({ 
          behavior: 'smooth', 
          block: 'start' 
        });
      }
    });
  });

  // 카테고리 아이템 클릭 이벤트 (링크가 없는 경우를 위한 fallback)
  document.addEventListener('click', function(e) {
    if (e.target.closest('.category-item') && !e.target.closest('.category-item').href) {
      const itemTitle = e.target.closest('.category-item').querySelector('.item-title').textContent;
      const categorySlug = itemTitle.toLowerCase().replace(/[^a-z0-9가-힣]/g, '-').replace(/-+/g, '-').replace(/^-|-$/g, '');
      
      // 기본 카테고리 페이지로 이동
      window.location.href = `/lawyers/category/${categorySlug}`;
    }
  });
});
