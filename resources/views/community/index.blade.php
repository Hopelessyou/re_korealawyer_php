@extends('layouts.app')

@section('title', '커뮤니티 — 변호사닷컴')

@section('content')
<main id="main" class="container layout">
  <!-- 좌측 사이드 -->
  <aside class="aside-left" aria-label="보조 내비게이션">
    <section class="card nav-block" aria-label="HOT">
      <div class="card__header"><h2 class="section-title">🔥 HOT</h2></div>
      <div class="card__body">
        <ul class="vlist" aria-label="실시간 인기글">
          <li><a href="#"><span class="dot" aria-hidden="true"></span>사례</a><span class="count">💬 23</span></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>변호사 썰</a><span class="count">💬 19</span></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>재판 후기</a><span class="count">💬 17</span></li>
        </ul>
      </div>
    </section>

    <section class="card nav-block" aria-label="참여">
      <div class="card__header"><h2 class="section-title">참여</h2></div>
      <div class="card__body">
        <ul class="vlist" aria-label="참여 목록">
          <li><a href="#"><span class="dot" aria-hidden="true"></span>투표하기</a></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>찬반토론</a></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>신문고</a></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>자유게시판</a></li>
        </ul>
      </div>
    </section>

    <section class="card nav-block" aria-label="분야별">
      <div class="card__header"><h2 class="section-title">분야별</h2></div>
      <div class="card__body">
        <ul class="vlist" aria-label="분야 목록">
          <li><a href="#"><span class="dot" aria-hidden="true"></span>형사/범죄</a></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>가족/이혼</a></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>기타 민사</a></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>노동(노무)</a></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>부동산</a></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>교통사고</a></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>의료사고</a></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>코인/NFT 등</a></li>
        </ul>
      </div>
    </section>

    <section class="card nav-block" aria-label="SOS 바로가기">
      <div class="card__header"><h2 class="section-title">SOS</h2></div>
      <div class="card__body">
        <ul class="vlist" aria-label="SOS 빠른 링크">
          <li><a href="#"><span class="dot" aria-hidden="true"></span>체포/긴급체포</a></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>압수수색</a></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>가처분(접근금지/점유/집행정지)</a></li>
          <li><a href="#"><span class="dot" aria-hidden="true"></span>음주운전(단속 직후/사고포함)</a></li>
        </ul>
      </div>
    </section>
  </aside>

  <!-- 메인 컬럼 -->
  <section class="maincol" aria-label="메인">
    <div>
      <nav class="breadcrumb" aria-label="경로">커뮤니티</nav>
      <h1 class="page-title">이번주 이슈, 지금 투표하고 결과를 확인 해 보세요!</h1>
    </div>

    <!-- Poll 카드 -->
    <section class="card poll" aria-label="이번주 이슈 투표">
      <div class="card__body" style="display:grid;gap:var(--s3)">
        <p class="lead">음주운전 방조 혐의 해결 가능성은?</p>
        <p class="desc">친구가 음주운전을 하다가 사고를 냈는데, 제가 차를 빌려줬다고 방조 혐의를 받고 있습니다. 이런 경우 변호사 도움이 필요할까요?</p>
        <div class="vote-grid">
          <div class="vote">
            <h3>(찬성) 변호사 도움이 필요 하다.</h3>
            <p class="desc">방조 혐의는 형사사건이므로 전문적인 법률 도움이 필요합니다.</p>
            <a class="btn btn--green" href="#">투표하기</a>
          </div>
          <div class="vote">
            <h3>(반대) 변호사 까지는 필요 없다.</h3>
            <p class="desc">단순히 차를 빌려준 것뿐이므로 큰 문제가 되지 않을 것입니다.</p>
            <a class="btn btn--green" href="#">투표하기</a>
          </div>
        </div>
      </div>
    </section>

    <!-- 토론하기 & 신문고 섹션 -->
    <section class="boards" aria-label="토론 및 신문고">
      <div class="board">
        <div class="board__header">
          <h3 class="board__title">(토론하기) 투표 후 다른 분들의 의견을 확인해보세요.</h3>
        </div>
        <div class="card__body">
          <h4>음주운전 방조 혐의 해결 가능성은?</h4>
          <p class="desc">친구가 음주운전을 하다가 사고를 냈는데, 제가 차를 빌려줬다고 방조 혐의를 받고 있습니다. 이런 경우 변호사 도움이 필요할까요?</p>
          <a class="btn btn--green" href="#">자세히보기 ></a>
        </div>
      </div>
      <div class="board">
        <div class="board__header">
          <h3 class="board__title">(신문고) 도움이 필요해 보인다면?</h3>
        </div>
        <div class="card__body">
          <h4>갑작스러운 채무 요구에 어떻게 해야할까요?</h4>
          <p class="desc">갑자기 모르는 사람이 연락해서 돈을 갚으라고 합니다. 이런 경우 어떻게 대응해야 할까요?</p>
          <a class="btn btn--green" href="#">자세히보기 ></a>
        </div>
      </div>
    </section>

    <!-- HOT 리스트 -->
    <section class="card hot" aria-label="인기글">
      <div class="card__header">
        <h2 class="section-title">🔥 HOT</h2>
        <a class="more" href="#">더보기 ></a>
      </div>
      <div class="card__body">
        <div class="item">
          <a class="title" href="#">베스트 글 제목입니다. 베스트 글 제목입니다.</a>
          <div class="meta"><span class="badge badge--field">형사/범죄</span><span>👍 46</span><span>💬 21</span></div>
        </div>
        <div class="item">
          <a class="title" href="#">베스트 글 제목입니다. 베스트 글 제목입니다.</a>
          <div class="meta"><span class="badge badge--field">성범죄</span><span>👍 32</span><span>💬 15</span></div>
        </div>
        <div class="item">
          <a class="title" href="#">베스트 글 제목입니다. 베스트 글 제목입니다.</a>
          <div class="meta"><span class="badge badge--field">음주운전</span><span>👍 28</span><span>💬 12</span></div>
        </div>
        <div class="item">
          <a class="title" href="#">베스트 글 제목입니다. 베스트 글 제목입니다.</a>
          <div class="meta"><span class="badge badge--field">부동산</span><span>👍 25</span><span>💬 8</span></div>
        </div>
        <div class="item">
          <a class="title" href="#">베스트 글 제목입니다. 베스트 글 제목입니다.</a>
          <div class="meta"><span class="badge badge--field">상속</span><span>👍 22</span><span>💬 6</span></div>
        </div>
      </div>
    </section>

    <div class="ad" aria-label="광고 영역">광고 영역</div>

    <!-- 보드 묶음 -->
    <section class="boards" aria-label="분야별 게시판">
      <div class="board">
        <div class="board__header"><h3 class="board__title">형사/범죄</h3><a class="more" href="#">더보기 ></a></div>
        <ol class="board__list">
          <li><a class="title" href="#">게시판 제목입니다. 게시판 제목입니다. 게시판 제목!</a><div class="counts">👁 30</div></li>
          <li><a class="title" href="#">게시판 제목입니다. 게시판 제목입니다. 게시판 제목!</a><div class="counts">👁 28</div></li>
          <li><a class="title" href="#">게시판 제목입니다. 게시판 제목입니다. 게시판 제목!</a><div class="counts">👁 25</div></li>
          <li><a class="title" href="#">게시판 제목입니다. 게시판 제목입니다. 게시판 제목!</a><div class="counts">👁 22</div></li>
        </ol>
      </div>
      <div class="board">
        <div class="board__header"><h3 class="board__title">가족/이혼</h3><a class="more" href="#">더보기 ></a></div>
        <ol class="board__list">
          <li><a class="title" href="#">게시판 제목입니다. 게시판 제목입니다. 게시판 제목!</a><div class="counts">👁 30</div></li>
          <li><a class="title" href="#">게시판 제목입니다. 게시판 제목입니다. 게시판 제목!</a><div class="counts">👁 28</div></li>
          <li><a class="title" href="#">게시판 제목입니다. 게시판 제목입니다. 게시판 제목!</a><div class="counts">👁 25</div></li>
          <li><a class="title" href="#">게시판 제목입니다. 게시판 제목입니다. 게시판 제목!</a><div class="counts">👁 22</div></li>
        </ol>
      </div>
    </section>
  </section>

  <!-- 우측 사이드 -->
  <aside class="aside-right" aria-label="빠른 액션">
    <a class="cta" href="#">상담글 쓰기</a>
    
    <section class="card" aria-label="변호사 광고">
      <div class="card__body" style="position: relative;">
        <div style="position: absolute; top: 0; right: 0; background: #6b7280; color: white; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.75rem;">AD</div>
        <div style="display: flex; gap: 1rem; align-items: center; margin-top: 1rem;">
          <div style="width: 60px; height: 60px; background: #e5e7eb; border-radius: 50%; display: grid; place-items: center; font-weight: 800; color: #6b7280;">박</div>
          <div>
            <h4 style="margin: 0 0 0.5rem 0; font-weight: 700;">박성현 대표 변호사</h4>
            <p style="margin: 0; color: var(--muted); font-size: 0.9rem;">무죄/무혐의 등 해결사례로 말합니다</p>
          </div>
        </div>
      </div>
    </section>

    <section class="card" aria-label="SOS 긴급상담">
      <div class="card__header"><h2 class="section-title">SOS 긴급 상황이라면?</h2></div>
      <div class="card__body">
        <div style="display: flex; gap: 0.5rem; margin-bottom: 1rem;">
          <button class="btn" style="flex: 1; padding: 0.5rem; font-size: 0.85rem;">체포/긴급체포</button>
          <button class="btn" style="flex: 1; padding: 0.5rem; font-size: 0.85rem;">압수수색</button>
          <button class="btn" style="flex: 1; padding: 0.5rem; font-size: 0.85rem;">가처분</button>
          <button class="btn btn--green" style="flex: 1; padding: 0.5rem; font-size: 0.85rem;">음주운전</button>
        </div>
        <form class="form" action="#" method="post">
          <div class="field"><label for="arrest-time">체포시간 :</label><input id="arrest-time" name="arrest-time" type="text"></div>
          <div class="field"><label for="location">장소 :</label><input id="location" name="location" type="text"></div>
          <div class="field"><label for="charge">혐의 :</label><input id="charge" name="charge" type="text"></div>
          <div class="field"><label for="request">요청사항 :</label><textarea id="request" name="request"></textarea></div>
          <button class="btn btn--green" type="submit" style="width: 100%;">도움 요청하기</button>
        </form>
      </div>
    </section>

    <section class="card" aria-label="자주 검색되는 키워드">
      <div class="card__header"><h2 class="section-title">자주 검색 되는 키워드</h2></div>
      <div class="card__body">
        <div class="chips">
          <a class="tag" href="#">#선임비용</a>
          <a class="tag" href="#">#무혐의</a>
          <a class="tag" href="#">#이혼소송</a>
          <a class="tag" href="#">#교통사고</a>
          <a class="tag" href="#">#부동산분쟁</a>
          <a class="tag" href="#">#상속분할</a>
        </div>
      </div>
    </section>

    <section class="card" aria-label="최근 답변이 활발한 변호사">
      <div class="card__header"><h2 class="section-title">최근 답변이 활발한 변호사</h2></div>
      <div class="card__body lawyers">
        <div class="lawyer">
          <span class="avatar" aria-hidden="true">김</span>
          <div>
            <div class="title">김OO 변호사</div>
            <small class="muted">변호사 소개입니다. 변호사 소개입니다. 변호사 소개...</small>
          </div>
        </div>
        <div class="lawyer">
          <span class="avatar" aria-hidden="true">이</span>
          <div>
            <div class="title">이OO 변호사</div>
            <small class="muted">변호사 소개입니다. 변호사 소개입니다. 변호사 소개...</small>
          </div>
        </div>
        <div class="lawyer">
          <span class="avatar" aria-hidden="true">박</span>
          <div>
            <div class="title">박OO 변호사</div>
            <small class="muted">변호사 소개입니다. 변호사 소개입니다. 변호사 소개...</small>
          </div>
        </div>
        <div style="text-align: center; margin-top: 1rem;">
          <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 600;">더보기▼</a>
        </div>
      </div>
    </section>
  </aside>
</main>
@endsection
