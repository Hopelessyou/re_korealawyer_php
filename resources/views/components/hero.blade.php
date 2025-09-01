<!-- 히어로 영역 -->
<section class="hero" role="region" aria-label="히어로">
  <div class="wrap">
    <h1 class="title">당신의 <span class="em">형사 문제</span>를 해결하세요.</h1>

    <!-- 세그먼트 + 검색 바 -->
    <div class="row" aria-label="세그먼트 및 검색">
      <button class="seg" type="button" aria-label="개인 선택">개인
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5"/></svg>
      </button>
      <form class="search" method="GET" action="{{ route('qna.index') }}">
        <input id="hero-search" name="query" placeholder="법률 질문, 문서작성 여기서 해결하세요." autocomplete="off" />
        <div class="plus" aria-hidden="true">+</div>
        <button type="submit" class="go" aria-label="검색">🔍</button>
      </form>
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
