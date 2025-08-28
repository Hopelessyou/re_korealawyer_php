@extends('layouts.app')

@section('title', '변호사닷컴 - 메인')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('content')
<!-- 히어로 영역 -->
<section class="hero" role="region" aria-label="히어로">
  <div class="wrap">
    <h1 class="title">당신의 <span class="em">형사 문제</span>를 해결하세요.</h1>

    <!-- 세그먼트 + 검색 바 -->
    <div class="row" aria-label="세그먼트 및 검색">
      <button class="seg" type="button" aria-label="개인 선택">개인
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5"/></svg>
      </button>
      <div class="search">
        <input placeholder="법률 질문, 문서작성 여기서 해결하세요." />
        <div class="plus" aria-hidden="true">+</div>
        <div class="go" aria-label="검색">🔍</div>
      </div>
    </div>

    <!-- 해시태그 라인 -->
    <div class="tags" aria-label="추천 태그">
      <span class="tag">#법률 상담</span>
      <span class="tag">#법률 문서 작성</span>
      <span class="tag">#변호사 선임</span>
      <span class="tag">#지금 핫한 변호사</span>
      <span class="tag">#떼인돈 받아 내기</span>
      <span class="tag">#자주 이용하는 서비스</span>
    </div>

    <!-- 퀵 액션 7개 -->
    <div class="quick" aria-label="퀵 액션">
      <button class="qcard" type="button">
        <span class="qico" aria-hidden="true">
          <img src="/icons/write.png" alt="" onerror="this.replaceWith(document.createElement('span'))" />
        </span>
        <span class="qtxt">상담글 작성</span>
      </button>
      <button class="qcard" type="button">
        <span class="qico" aria-hidden="true">
          <img src="/icons/calendar.png" alt="" onerror="this.replaceWith(document.createElement('span'))" />
        </span>
        <span class="qtxt">상담 예약</span>
      </button>
      <button class="qcard" type="button">
        <span class="qico" aria-hidden="true">
          <img src="/icons/compass.png" alt="" onerror="this.replaceWith(document.createElement('span'))" />
        </span>
        <span class="qtxt">단계별 선임</span>
      </button>
      <button class="qcard" type="button">
        <span class="qico" aria-hidden="true">
          <img src="/icons/guard.png" alt="" onerror="this.replaceWith(document.createElement('span'))" />
        </span>
        <span class="qtxt">실시간 변호사</span>
      </button>
      <button class="qcard" type="button">
        <span class="qico" aria-hidden="true">
          <img src="/icons/chat.png" alt="" onerror="this.replaceWith(document.createElement('span'))" />
        </span>
        <span class="qtxt">커뮤니티</span>
      </button>
      <button class="qcard" type="button">
        <span class="qico" aria-hidden="true">
          <img src="/icons/doc.png" alt="" onerror="this.replaceWith(document.createElement('span'))" />
        </span>
        <span class="qtxt">신문고</span>
      </button>
      <button class="qcard" type="button">
        <span class="qico" aria-hidden="true">
          <img src="/icons/phone.png" alt="" onerror="this.replaceWith(document.createElement('span'))" />
        </span>
        <span class="qtxt">02-537-6902</span>
      </button>
    </div>
  </div>
</section>

<!-- 다음 섹션: 배너 + 우측 스택 -->
<section class="section-next" aria-label="추천/프로모션">
  <div class="next-wrap">
    <div class="next-grid">
      <!-- 좌측 배너 -->
      <article class="promo" aria-label="프로모션 배너">
        <span class="badge">AD</span>
        <div class="copy">
          <span class="law">법률사무소 유○</span>
          <strong>무죄/무혐의 등 해결사례로 말합니다</strong>
          <span>서울대, 로스쿨수석, 형사법교수, 언론보도사건 多</span>
        </div>
        <div class="portrait" aria-hidden="true">
          <!-- 변호사 이미지 자리 -->
        </div>
        <div class="slider-ui" aria-hidden="true">
          <span class="ui-pill">1/6</span>
          <span class="ui-ctrl">▶</span>
          <span class="ui-ctrl">›</span>
        </div>
      </article>

      <!-- 우측 스택 카드 -->
      <aside class="side-stack" aria-label="바로가기">
        <a href="#" class="side-card"><strong>10분 긴급 대응</strong>
          <svg class="chev" viewBox="0 0 24 24"><path fill="currentColor" d="M9 6l6 6-6 6"/></svg>
        </a>
        <a href="#" class="side-card"><strong>맞춤 변호사 검색</strong>
          <svg class="chev" viewBox="0 0 24 24"><path fill="currentColor" d="M9 6l6 6-6 6"/></svg>
        </a>
        <a href="#" class="side-card"><strong>제휴 혜택안내</strong>
          <svg class="chev" viewBox="0 0 24 24"><path fill="currentColor" d="M9 6l6 6-6 6"/></svg>
        </a>
      </aside>
    </div>
  </div>
</section>

<!-- 분야 아이콘 섹션 -->
<section class="section-cats" aria-label="분야 목록">
  <div class="cats-wrap">
    <div class="cat-box">
      <h2>어떤 분야의 변호사를 찾으시나요?</h2>
      <div class="cats" role="list">
        <!-- 1행 10개 -->
        <a href="#" class="cat" role="listitem" aria-label="형사·범죄">
          <span class="ico">
            <svg viewBox="0 0 24 24"><circle cx="8" cy="8" r="4"/><path d="M11 11l5 5"/></svg>
          </span><span class="name">형사·범죄</span>
        </a>
        <a href="#" class="cat" aria-label="사기·횡령"><span class="ico">
          <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M7 9h10M7 13h6"/></svg>
        </span><span class="name">사기·횡령</span></a>
        <a href="#" class="cat" aria-label="성범죄"><span class="ico">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="7" r="3"/><path d="M12 10v10M9 14h6"/></svg>
        </span><span class="name">성범죄</span></a>
        <a href="#" class="cat" aria-label="음주·교통사고"><span class="ico">
          <svg viewBox="0 0 24 24"><rect x="4" y="11" width="16" height="6" rx="2"/><path d="M6 11l2-4h8l2 4"/></svg>
        </span><span class="name">음주·교통사고</span></a>
        <a href="#" class="cat" aria-label="폭행·상해"><span class="ico">
          <svg viewBox="0 0 24 24"><path d="M6 12l4-4 4 4-4 4z"/></svg>
        </span><span class="name">폭행·상해</span></a>
        <a href="#" class="cat" aria-label="민사"><span class="ico">
          <svg viewBox="0 0 24 24"><path d="M8 3h8v4H8zM5 7h14v14H5z"/></svg>
        </span><span class="name">민사</span></a>
        <a href="#" class="cat" aria-label="금전·계약"><span class="ico">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"/><path d="M8 12h8M12 8v8"/></svg>
        </span><span class="name">금전·계약</span></a>
        <a href="#" class="cat" aria-label="이혼·가정"><span class="ico">
          <svg viewBox="0 0 24 24"><path d="M7 20V8a5 5 0 0110 0v12"/></svg>
        </span><span class="name">이혼·가정</span></a>
        <a href="#" class="cat" aria-label="부동산·임대차"><span class="ico">
          <svg viewBox="0 0 24 24"><path d="M3 11l9-7 9 7v9H3z"/></svg>
        </span><span class="name">부동산·임대차</span></a>
        <a href="#" class="cat" aria-label="상속"><span class="ico">
          <svg viewBox="0 0 24 24"><path d="M12 3v18M6 9l6-6 6 6"/></svg>
        </span><span class="name">상속</span></a>
        <!-- 2행 10개 -->
        <a href="#" class="cat" aria-label="행정"><span class="ico">
          <svg viewBox="0 0 24 24"><path d="M3 20h18M5 20V9l7-4 7 4v11"/></svg>
        </span><span class="name">행정</span></a>
        <a href="#" class="cat" aria-label="노무"><span class="ico">
          <svg viewBox="0 0 24 24"><circle cx="8" cy="7" r="3"/><path d="M5 21v-5a3 3 0 013-3h0a3 3 0 013 3v5M19 21v-8l-3 2"/></svg>
        </span><span class="name">노무</span></a>
        <a href="#" class="cat" aria-label="세무"><span class="ico">
          <svg viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M8 8h8M8 12h8M8 16h8"/></svg>
        </span><span class="name">세무</span></a>
        <a href="#" class="cat" aria-label="지적재산권"><span class="ico">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="4"/><path d="M2 12h4M18 12h4M12 2v4M12 18v4"/></svg>
        </span><span class="name">지적재산권</span></a>
        <a href="#" class="cat" aria-label="의료"><span class="ico">
          <svg viewBox="0 0 24 24"><rect x="6" y="9" width="12" height="6" rx="3"/><path d="M12 3v18"/></svg>
        </span><span class="name">의료</span></a>
        <a href="#" class="cat" aria-label="기업업무"><span class="ico">
          <svg viewBox="0 0 24 24"><path d="M3 21h18M6 21V6h6v15M12 10h6v11"/></svg>
        </span><span class="name">기업업무</span></a>
        <a href="#" class="cat" aria-label="국제·외국인"><span class="ico">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M2 12h20M12 3a15 15 0 010 18M12 3a15 15 0 000 18"/></svg>
        </span><span class="name">국제·외국인</span></a>
        <a href="#" class="cat" aria-label="코인·NFT"><span class="ico">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"/><path d="M9 9h6v6H9z"/></svg>
        </span><span class="name">코인·NFT</span></a>
        <a href="#" class="cat" aria-label="재판분쟁"><span class="ico">
          <svg viewBox="0 0 24 24"><path d="M8 3h8v4H8zM5 7h14v14H5z"/></svg>
        </span><span class="name">재판분쟁</span></a>
        <a href="#" class="cat" aria-label="기타 의뢰"><span class="ico">
          <svg viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M8 12h8"/></svg>
        </span><span class="name">기타 의뢰</span></a>
      </div>
    </div>
  </div>
</section>

<!-- 지역 선택 섹션 -->
<section class="section-region" aria-label="지역 선택">
  <div class="region-wrap">
    <div class="region-box">
      <h2>현재 변호사의 도움을 원하십니까?</h2>
      <div class="regions">
        <a href="#" class="rchip">전국</a>
        <a href="#" class="rchip">서울</a>
        <a href="#" class="rchip">경기</a>
        <a href="#" class="rchip">청주/충북</a>
        <a href="#" class="rchip">대전</a>
        <a href="#" class="rchip">세종/충남</a>
        <a href="#" class="rchip">전주/전북</a>
        <a href="#" class="rchip">광주/전남</a>
        <a href="#" class="rchip">인천/부천</a>
        <a href="#" class="rchip">대구</a>
        <a href="#" class="rchip">경북</a>
        <a href="#" class="rchip">부산</a>
        <a href="#" class="rchip">울산/경남</a>
        <a href="#" class="rchip">제주</a>
      </div>
    </div>
  </div>
</section>

<!-- 실시간 의뢰 가능 변호사 -->
<section class="section-live" aria-label="실시간 의뢰 가능 변호사">
  <div class="live-wrap">
    <div class="live-box">
      <div class="live-head">
        <div class="live-title">
          <h2>실시간 의뢰 가능 변호사</h2>
          <span style="font-weight:900; color:#10b981">›</span>
        </div>
        <div class="live-ctrl">
          <button class="ctr" aria-label="이전">‹</button>
          <button class="ctr" aria-label="다음">›</button>
        </div>
      </div>
      <div class="live-chips" role="tablist">
        <button class="chip">재산범죄</button>
        <button class="chip">가족</button>
        <button class="chip is-active">형사절차</button>
        <button class="chip">기타 형사범죄</button>
        <button class="chip">부동산/임대차</button>
        <button class="chip">금전/계약 문제</button>
        <button class="chip">폭행/협박</button>
        <button class="chip">명예훼손/모욕</button>
        <button class="chip">회사</button>
        <button class="chip">교통</button>
      </div>

      <div class="live-grid">
        <!-- 카드 1 -->
        <article class="lcard">
          <div class="lrow">
            <div class="avatar"><span class="status" aria-hidden="true"></span></div>
            <div>
              <p class="lname">유정훈 <span style="font-weight:700; color:#6b7280">변호사</span><span class="loffice"> 법정 법률사무소</span></p>
              <div class="ltags">
                <span class="ltag">이혼/가정</span><span class="ltag">상속</span><span class="ltag">형사/범죄</span><span class="ltag">부동산</span>
              </div>
            <div class="lbtns"><a class="lbtn" href="#">전화상담</a><a class="lbtn" href="#">소송서류준비</a><a class="lbtn" href="#">경찰조사동행</a></div>
            </div>
          </div>
        </article>
        <!-- 카드 2 -->
        <article class="lcard">
          <div class="lrow">
            <div class="avatar"><span class="status" aria-hidden="true"></span></div>
            <div>
              <p class="lname">김현수 <span style="font-weight:700; color:#6b7280">변호사</span><span class="loffice"> 법정 법률사무소</span></p>
              <div class="ltags">
                <span class="ltag">이혼/가정</span><span class="ltag">상속</span><span class="ltag">형사/범죄</span><span class="ltag">부동산</span>
              </div>
              <div class="lbtns"><a class="lbtn" href="#">전화상담</a><a class="lbtn" href="#">소송서류준비</a><a class="lbtn" href="#">경찰조사동행</a></div>
            </div>
          </div>
        </article>
        <!-- 카드 3 -->
        <article class="lcard">
          <div class="lrow">
            <div class="avatar"><span class="status" aria-hidden="true"></span></div>
            <div>
              <p class="lname">유정훈 <span style="font-weight:700; color:#6b7280">변호사</span><span class="loffice"> 법정 법률사무소</span></p>
              <div class="ltags">
                <span class="ltag">이혼/가정</span><span class="ltag">상속</span><span class="ltag">형사/범죄</span><span class="ltag">부동산</span>
              </div>
              <div class="lbtns"><a class="lbtn" href="#">전화상담</a><a class="lbtn" href="#">소송서류준비</a><a class="lbtn" href="#">경찰조사동행</a></div>
            </div>
          </div>
        </article>
        <!-- 카드 4 -->
        <article class="lcard">
          <div class="lrow">
            <div class="avatar"><span class="status" aria-hidden="true"></span></div>
            <div>
              <p class="lname">유정훈 <span style="font-weight:700; color:#6b7280">변호사</span><span class="loffice"> 법정 법률사무소</span></p>
              <div class="ltags">
                <span class="ltag">이혼/가정</span><span class="ltag">상속</span><span class="ltag">형사/범죄</span><span class="ltag">부동산</span>
              </div>
              <div class="lbtns"><a class="lbtn" href="#">전화상담</a><a class="lbtn" href="#">소송서류준비</a><a class="lbtn" href="#">경찰조사동행</a></div>
            </div>
          </div>
        </article>
      </div>

    </div>
  </div>
</section>

<!-- 변호사 해결사례 -->
<section class="section-cases" aria-label="변호사 해결사례">
  <div class="cases-wrap">
    <div class="cases-head">
      <h2>변호사 해결사례</h2>
      <span class="caret">›</span>
    </div>

    <div class="cases-grid">
      <!-- 카드 1 -->
      <article class="case-card">
        <div class="case-row-top">
          <div class="case-left">
            <div class="case-avatar" aria-hidden="true"></div>
            <div><span class="case-name">유정훈</span> <span class="case-role">변호사</span></div>
          </div>
          <div class="right">
            <span class="case-badge">🧑‍⚖️ 전부 승소</span>
          </div>
        </div>

        <div class="case-mid">
          <span class="case-pill">금전/계약</span>
          <div class="case-title">변호사 해결 사례 제목입니다.</div>
          <span class="case-count">💬 12</span>
        </div>

        <p class="case-body clamp">저는 일단 친동생남편(매제)한테 대출을 하여 돈을 빌려준 게 있습니다. 하지만 납기일이 다되어가는데 매제는 돈을 못 구하는 상황에…</p>
        <div class="case-tags">#금전/계약 #금전/계약 #금전/계약 #금전/계약</div>
      </article>

      <!-- 카드 2 -->
      <article class="case-card">
        <div class="case-row-top">
          <div class="case-left">
            <div class="case-avatar"></div>
            <div><span class="case-name">유정훈</span> <span class="case-role">변호사</span></div>
          </div>
          <div class="right"><span class="case-badge">🧑‍⚖️ 전부 승소</span></div>
        </div>
        <div class="case-mid">
          <span class="case-pill">금전/계약</span>
          <div class="case-title">변호사 해결 사례 제목입니다.</div>
          <span class="case-count">💬 12</span>
        </div>
        <p class="case-body clamp">저는 일단 친동생남편(매제)한테 대출을 하여 돈을 빌려준 게 있습니다. 하지만 납기일이 다되어가는데 매제는 돈을 못 구하는 상황에…</p>
        <div class="case-tags">#금전/계약 #금전/계약 #금전/계약 #금전/계약</div>
      </article>

      <!-- 카드 3 -->
      <article class="case-card">
        <div class="case-row-top">
          <div class="case-left">
            <div class="case-avatar"></div>
            <div><span class="case-name">유정훈</span> <span class="case-role">변호사</span></div>
          </div>
          <div class="right"><span class="case-badge">🧑‍⚖️ 전부 승소</span></div>
        </div>
        <div class="case-mid">
          <span class="case-pill">금전/계약</span>
          <div class="case-title">변호사 해결 사례 제목입니다.</div>
          <span class="case-count">💬 12</span>
        </div>
        <p class="case-body clamp">저는 일단 친동생남편(매제)한테 대출을 하여 돈을 빌려준 게 있습니다. 하지만 납기일이 다되어가는데 매제는 돈을 못 구하는 상황에…</p>
        <div class="case-tags">#금전/계약 #금전/계약 #금전/계약 #금전/계약</div>
      </article>

      <!-- 카드 4 -->
      <article class="case-card">
        <div class="case-row-top">
          <div class="case-left">
            <div class="case-avatar"></div>
            <div><span class="case-name">유정훈</span> <span class="case-role">변호사</span></div>
          </div>
          <div class="right"><span class="case-badge">🧑‍⚖️ 전부 승소</span></div>
        </div>
        <div class="case-mid">
          <span class="case-pill">금전/계약</span>
          <div class="case-title">변호사 해결 사례 제목입니다.</div>
          <span class="case-count">💬 12</span>
        </div>
        <p class="case-body clamp">저는 일단 친동생남편(매제)한테 대출을 하여 돈을 빌려준 게 있습니다. 하지만 납기일이 다되어가는데 매제는 돈을 못 구하는 상황에…</p>
        <div class="case-tags">#금전/계약 #금전/계약 #금전/계약 #금전/계약</div>
      </article>
    </div>

    <a class="cases-more" href="#" aria-label="더보기">↗ 더보기</a>
  </div>
</section>

<!-- 변호사 Tip(변호사 가이드) -->
<section class="section-tips" aria-label="변호사 Tip(가이드)">
  <div class="tips-wrap">
    <div class="tips-box">
      <div class="tips-head">
        <h2>변호사 Tip(변호사 가이드)</h2>
        <span style="font-weight:900">›</span>
      </div>
      <div class="tips-grid">
        <!-- 1 -->
        <article class="tip-card">
          <span class="tip-tag">손해배상</span>
          <h3 class="tip-title">형사소송 후 민사소송 시 계약서 명시된 배상가능여부</h3>
          <p class="tip-desc">안녕하세요. 글 읽어주셔서 감사드립니다. 온라인게임 계정을 …</p>
        </article>
        <!-- 2 -->
        <article class="tip-card">
          <span class="tip-tag">손해배상</span>
          <h3 class="tip-title">형사소송 후 민사소송 시 계약서 명시된 배상가능여부</h3>
          <p class="tip-desc">안녕하세요. 글 읽어주셔서 감사드립니다. 온라인게임 계정을 …</p>
        </article>
        <!-- 3 -->
        <article class="tip-card">
          <span class="tip-tag">손해배상</span>
          <h3 class="tip-title">형사소송 후 민사소송 시 계약서 명시된 배상가능여부</h3>
          <p class="tip-desc">안녕하세요. 글 읽어주셔서 감사드립니다. 온라인게임 계정을 …</p>
        </article>
        <!-- 4 -->
        <article class="tip-card">
          <span class="tip-tag">손해배상</span>
          <h3 class="tip-title">형사소송 후 민사소송 시 계약서 명시된 배상가능여부</h3>
          <p class="tip-desc">안녕하세요. 글 읽어주셔서 감사드립니다. 온라인게임 계정을 …</p>
        </article>
      </div>
      <a class="tips-more" href="#" aria-label="더보기">⟲ 더보기</a>
    </div>
  </div>
</section>

<!-- 의뢰인 후기 -->
<section class="section-reviews" aria-label="의뢰인 후기">
  <div class="reviews-wrap">
    <div class="reviews-bg">
      <div class="reviews-inner">
        <div class="reviews-head">
          <h2>의뢰인 후기</h2>
          <div class="rev-ctrl">
            <button class="ctr" aria-label="이전">‹</button>
            <button class="ctr" aria-label="다음">›</button>
          </div>
        </div>

        <div class="rev-grid">
          <!-- 후기 1 -->
          <article class="rcard">
            <div class="quote">"</div>
            <span class="rlabel">양지웅 변호사</span>
            <h3 class="rtitle">억울한 상황인데 큰 도움되었어요.</h3>
            <p class="rdesc">직장에서 부당한 일이 있어 너무 억울하고 답답했는데 양지웅변호사님의 덕분에 큰 위로와 도움을 받았습니다. 제 사정을 복잡하게 했는데…</p>
            <div class="rauthor">hu**********님의 후기</div>
          </article>
          <!-- 후기 2 -->
          <article class="rcard">
            <div class="quote">"</div>
            <span class="rlabel">양지웅 변호사</span>
            <h3 class="rtitle">친절하시고 빠르고 현실적인 조언을 해주셨어요.</h3>
            <p class="rdesc">따뜻한 말투로 상담을 해주셨고 전문적인 내용과 함께 이해하기 편하도록 부연 설명을 자세히 해주셨어요. 정리되는 부분에 있어서…</p>
            <div class="rauthor">달빛********님의 후기</div>
          </article>
          <!-- 후기 3 -->
          <article class="rcard">
            <div class="quote">"</div>
            <span class="rlabel">양지웅 변호사</span>
            <h3 class="rtitle">보내드린 내용에 대해 해답을 주셨습니다.</h3>
            <p class="rdesc">미리 질문사항을 보내드렸는데, 해당내용에 대해 잘 설명해주셨어요. 가족들과 잘 얘기해보고 연락드리겠습니다. 감사합니다.</p>
            <div class="rauthor">se*************님의 후기</div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 법률영상 & 웹툰(카드뉴스) -->
<section class="section-media" aria-label="법률영상 및 카드뉴스">
  <div class="media-wrap">
    <div class="media-box">
      <div class="media-grid">
        <!-- 왼쪽: 법률영상 -->
        <div class="video-box">
          <div class="mhead"><h2>법률영상</h2><span class="caret">›</span></div>
          <div class="video-list">
            <article class="vitem"><div class="thumb" aria-hidden="true"></div><div class="vtit">이자를 많이 받는것도 죄가 되나요 [생존법률 쇼츠]</div></article>
            <article class="vitem"><div class="thumb"></div><div class="vtit">다른 사람의 지갑을 주우면 죄가 되나요 [쇼츠 생존법률]</div></article>
            <article class="vitem"><div class="thumb"></div><div class="vtit">알고 나면 유용한 법률 상식 OX #퀴즈 #지식 #정보</div></article>
          </div>
        </div>
        <!-- 오른쪽: 웹툰(카드뉴스) -->
        <aside class="cardnews-box">
          <div class="mhead"><h2>웹툰(카드뉴스)</h2><span class="caret">›</span></div>
          <div class="cn-thumb" aria-hidden="true"></div>
          <div class="cn-title">곡과 마곡 [곰시니스트 시사 만화]</div>
          <div class="cn-meta">시사·HN&nbsp;&nbsp;·&nbsp;&nbsp;5시간 전</div>
        </aside>
      </div>
    </div>
  </div>
</section>

<!-- 전화상담 배너 -->
<section class="section-phonead" aria-label="전화상담 배너">
  <div class="phonead-wrap">
    <a class="phonead" href="tel:0606041000">
      <span class="ad-badge">AD</span>
      <div class="text">로비스 실시간 전화상담 <span class="num">060-604-1000</span></div>
      <div class="illus" aria-hidden="true"></div>
    </a>
  </div>
</section>

<!-- 로펌 섹션 -->
<section class="section-firms" aria-label="로펌">
  <div class="firms-wrap">
    <div class="firms-box">
      <div class="firms-head"><h2>로펌</h2><span class="caret">›</span></div>
      <div class="firm-list">
        <!-- 로우 1 -->
        <article class="firm-row">
          <div class="fleft">
            <h3 class="ftitle">[법무법인 새옹] 가사·상속 분야에 집중한 프리미엄…</h3>
            <p class="fdesc">2024년 10월 25일 기준 전국에서 단 '2명'에 불과한 성년후견·상속전문변호사, 상속유류분…</p>
            <a href="#" class="fcta">
              <span class="tag"><span class="dot">핫</span> 서울대 출신 오경수 대표변호사가 모두 직접 …</span>
              <span class="arr">›</span>
            </a>
          </div>
          <div class="fright">
            <div class="thumbs">
              <div class="t" aria-hidden="true"></div>
              <div class="t"></div>
              <div class="t"></div>
            </div>
          </div>
        </article>
        <!-- 로우 2 -->
        <article class="firm-row">
          <div class="fleft">
            <h3 class="ftitle">[법무법인 새옹] 가사·상속 분야에 집중한 프리미엄…</h3>
            <p class="fdesc">2024년 10월 25일 기준 전국에서 단 '2명'에 불과한 성년후견·상속전문변호사, 상속유류분…</p>
            <a href="#" class="fcta">
              <span class="tag"><span class="dot">핫</span> 서울대 출신 오경수 대표변호사가 모두 직접 …</span>
              <span class="arr">›</span>
            </a>
          </div>
          <div class="fright">
            <div class="thumbs">
              <div class="t" aria-hidden="true"></div>
              <div class="t"></div>
              <div class="t"></div>
            </div>
          </div>
        </article>
        <!-- 로우 3 -->
        <article class="firm-row">
          <div class="fleft">
            <h3 class="ftitle">[법무법인 새옹] 가사·상속 분야에 집중한 프리미엄…</h3>
            <p class="fdesc">2024년 10월 25일 기준 전국에서 단 '2명'에 불과한 성년후견·상속전문변호사, 상속유류분…</p>
            <a href="#" class="fcta">
              <span class="tag"><span class="dot">핫</span> 서울대 출신 오경수 대표변호사가 모두 직접 …</span>
              <span class="arr">›</span>
            </a>
          </div>
          <div class="fright">
            <div class="thumbs">
              <div class="t" aria-hidden="true"></div>
              <div class="t"></div>
              <div class="t"></div>
            </div>
          </div>
        </article>
      </div>
      <a class="firms-more" href="#" aria-label="더보기">⟳ 더보기</a>
    </div>
  </div>
</section>

<!-- 하단 CTA(그린 밴드) -->
<section class="section-cta2" aria-label="하단 CTA">
  <div class="cta2-wrap">
    <div class="cta2-box">
      <div class="cta2-title">변호사닷컴에서 <span class="hi">쉽고 빠르게!</span> 해결해 보세요.</div>
      <div class="cta2-actions">
        <a href="#" class="btn-ghost2" aria-label="변호사닷컴은?">변호사닷컴은?</a>
        <a href="#" class="btn-solid2" aria-label="서비스 소개">서비스 소개</a>
      </div>
    </div>
  </div>
</section>
@endsection
