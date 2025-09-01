@extends('layouts.app')

@section('title', '단계별 선임 - 변호사닷컴')

@section('content')
<div class="frame" aria-label="단계별 선임">
  <h1 class="title">단계별 선임으로 필요한 서비스만 이용해 보세요.</h1>

  <div class="tabs" role="tablist">
    <button class="tab active" aria-selected="true">형사</button>
    <button class="tab" aria-selected="false">민사</button>
  </div>
  <p class="subtitle">필요한 단계만 선택해 빠르게 진행하세요 — 불필요한 비용과 시간을 줄여드립니다.</p>

  <!-- 주요 분야 아이콘 라인(샘플) -->
  <div class="cats" aria-label="주요 분야">
    <span class="chip"><span class="ico"></span>형사·범죄</span>
    <span class="chip"><span class="ico"></span>사기·횡령</span>
    <span class="chip"><span class="ico"></span>성범죄</span>
    <span class="chip"><span class="ico"></span>음주·교통사고</span>
    <span class="chip"><span class="ico"></span>형사절차</span>
    <span class="chip"><span class="ico"></span>민사</span>
    <span class="chip"><span class="ico"></span>금전·계약</span>
    <span class="chip"><span class="ico"></span>이혼·가정</span>
    <span class="chip"><span class="ico"></span>부동산·임대차</span>
    <span class="chip"><span class="ico"></span>상속</span>
  </div>

  <!-- 3단 단계 카드 -->
  <div class="cols">
    <!-- 1단계 -->
    <section class="col" aria-label="경찰 조사 단계">
      <div class="colhead"><span class="badge">1</span> <div><div class="coltitle">경찰 조사 단계</div><div class="coldesc">초동수사 및 의뢰인 인정여부 결정</div></div></div>

      <div class="group" id="complaint">
        <div class="glabel">고소/고발 접수</div>
        <div class="list" role="radiogroup" aria-label="고소/고발 접수">
          <button type="button" class="pill option" role="radio" aria-checked="false">형사 사건 상담</button>
          <button type="button" class="pill option" role="radio" aria-checked="false">고소장 작성</button>
          <button type="button" class="pill option" role="radio" aria-checked="false">소장 접수 대행</button>
        </div>
      </div>

      <div class="group">
        <div class="glabel">수사 개시 및 피의자 신분 전환</div>
        <div class="list">
          <div class="pill">피의자 조사 입회</div>
          <div class="pill">체포/구속 긴급대응</div>
        </div>
      </div>

      <div class="group">
        <div class="glabel">수사 종결</div>
        <div class="list">
          <div class="pill">혐의없음 합의</div>
          <div class="pill">합의서 작성</div>
        </div>
      </div>
    </section>

    <!-- 2단계 -->
    <section class="col" aria-label="검찰 조사 단계">
      <div class="colhead"><span class="badge">2</span> <div><div class="coltitle">검찰 조사 단계</div><div class="coldesc">보완수사 및 기소 여부 최종 결정</div></div></div>

      <div class="group">
        <div class="glabel">사건 송치</div>
        <div class="list">
          <div class="pill">검찰 조사 입회</div>
          <div class="pill">구속영장실질심사 변호</div>
        </div>
      </div>

      <div class="group">
        <div class="glabel">검찰 보완 수사</div>
        <div class="list">
          <div class="pill">보석 신청</div>
          <div class="pill">피해자와의 합의 대리</div>
        </div>
      </div>

      <div class="group">
        <div class="glabel">수사 종결</div>
        <div class="list">
          <div class="pill">합의로 기소유예</div>
          <div class="pill">반성문/탄원서 작성</div>
        </div>
      </div>
    </section>

    <!-- 3단계 -->
    <section class="col" aria-label="공판(법원) 단계">
      <div class="colhead"><span class="badge">3</span> <div><div class="coltitle">공판(법원)단계</div><div class="coldesc">유무죄 및 형량 판단</div></div></div>

      <div class="group">
        <div class="glabel">공판 준비</div>
        <div class="list">
          <div class="pill">형사 공판 준비</div>
          <div class="pill">탄원서/반성문 작성</div>
        </div>
      </div>

      <div class="group">
        <div class="glabel">공판 절차</div>
        <div class="list">
          <div class="pill">증거조사/증인신문</div>
          <div class="pill">형사 재판 출석 변호</div>
          <div class="pill">양형자료 수집·제출</div>
        </div>
      </div>

      <div class="group">
        <div class="glabel">판결 및 상소</div>
        <div class="list">
          <div class="pill">항소·이유서 작성</div>
          <div class="pill">상고 이유서 작성</div>
        </div>
      </div>
    </section>
  </div>

  <div class="footer"><button class="next">다음 →</button></div>
</div>
@endsection

@section('scripts')
<script>
(function(){
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

  // ---- build all option sets ----
  const allLists = Array.from(document.querySelectorAll('.cols .group .list'));
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
})();
</script>
@endsection
