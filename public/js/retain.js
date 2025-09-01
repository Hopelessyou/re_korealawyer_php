(function(){
  // ---- 탭 전환 기능 ----
  const tabs = document.querySelectorAll('.tab');
  const criminalCats = document.querySelector('.criminal-cats');
  const civilCats = document.querySelector('.civil-cats');
  const criminalContent = document.querySelector('.criminal-content');
  const civilContent = document.querySelector('.civil-content');

  function switchTab(tabType) {
    // 탭 상태 변경
    tabs.forEach(tab => {
      const isActive = tab.textContent === tabType;
      tab.classList.toggle('active', isActive);
      tab.setAttribute('aria-selected', isActive);
    });

    // 카테고리 표시/숨김
    if (tabType === '형사') {
      criminalCats.style.display = 'flex';
      civilCats.style.display = 'none';
      criminalContent.style.display = 'grid';
      civilContent.style.display = 'none';
    } else {
      criminalCats.style.display = 'none';
      civilCats.style.display = 'flex';
      criminalContent.style.display = 'none';
      civilContent.style.display = 'grid';
    }

    // 선택된 옵션 초기화
    resetSelections();
  }

  // 탭 클릭 이벤트
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      switchTab(tab.textContent);
    });
  });

  // ---- helpers ----
  function toButton(node){
    if (node.tagName.toLowerCase() === 'button') return node;
    const btn = document.createElement('button');
    btn.type = 'button';
    btn.className = 'pill option' + (node.classList.contains('action') ? ' selected' : '');
    btn.setAttribute('role','radio');
    btn.setAttribute('aria-checked', node.classList.contains('action') ? 'true' : 'false');
    btn.innerHTML = node.innerHTML;
    node.replaceWith(btn);
    return btn;
  }

  function upgradeGroup(list){
    if (!list) return [];
    list.setAttribute('role','radiogroup');
    const btns = Array.from(list.children).map(toButton);
    // remove legacy .action
    btns.forEach(b=>b.classList.remove('action'));
    return btns;
  }

  function resetSelections() {
    const allButtons = document.querySelectorAll('.pill.option');
    allButtons.forEach(b => {
      b.classList.remove('selected');
      b.setAttribute('aria-checked', 'false');
    });
  }

  // ---- build all option sets ----
  function initializeOptions() {
    const allLists = Array.from(document.querySelectorAll('.cols:not([style*="display: none"]) .group .list'));
    const allButtons = allLists.flatMap(upgradeGroup);

    // keep only the first preselected (if any) across ALL groups
    let firstSel = allButtons.find(b => b.classList.contains('selected') || b.getAttribute('aria-checked')==='true');
    if (firstSel) {
      allButtons.forEach(b=>{
        const on = b===firstSel;
        b.classList.toggle('selected', on);
        b.setAttribute('aria-checked', on);
      });
    } else {
      // ensure all start unselected
      allButtons.forEach(b=>{ b.classList.remove('selected'); b.setAttribute('aria-checked','false'); });
    }

    return allButtons;
  }

  let allButtons = initializeOptions();

  function selectOnly(btn){
    allButtons.forEach(b=>{
      const on = b===btn;
      b.classList.toggle('selected', on);
      b.setAttribute('aria-checked', on);
    });
  }

  // click handler (global single-select)
  document.addEventListener('click', (e)=>{
    const btn = e.target.closest('.option[role="radio"]');
    if (btn && allButtons.includes(btn)) selectOnly(btn);
  });

  // keyboard navigation inside a list, but still enforce global single-select
  function setupKeyboardNavigation() {
    const allLists = Array.from(document.querySelectorAll('.cols:not([style*="display: none"]) .group .list'));
    allLists.forEach(list => {
      const radios = Array.from(list.querySelectorAll('.option[role="radio"]'));
      list.addEventListener('keydown', (e)=>{
        const idx = radios.indexOf(document.activeElement);
        if(idx<0) return;
        let target = null;
        if(e.key==='ArrowRight' || e.key==='ArrowDown'){
          e.preventDefault(); target = radios[(idx+1)%radios.length];
        }
        if(e.key==='ArrowLeft' || e.key==='ArrowUp'){
          e.preventDefault(); target = radios[(idx-1+radios.length)%radios.length];
        }
        if(target){ target.focus(); selectOnly(target); }
      });
    });
  }

  setupKeyboardNavigation();

  // 탭 전환 시 옵션 재초기화
  const originalSwitchTab = switchTab;
  switchTab = function(tabType) {
    originalSwitchTab(tabType);
    setTimeout(() => {
      allButtons = initializeOptions();
      setupKeyboardNavigation();
    }, 100);
  };
})();
