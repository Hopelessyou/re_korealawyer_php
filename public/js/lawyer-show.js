document.addEventListener('DOMContentLoaded', function() {
  const tabBtns = document.querySelectorAll('.ld-tab-btn');
  const tabContents = document.querySelectorAll('.ld-tab-content');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      const target = this.getAttribute('data-tab');

      tabBtns.forEach(b => b.classList.remove('active'));
      tabContents.forEach(c => c.classList.remove('active'));

      this.classList.add('active');
      const content = document.getElementById(target + '-tab');
      if (content) content.classList.add('active');
    });
  });
});
