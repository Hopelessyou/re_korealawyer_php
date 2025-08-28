@extends('layouts.app')

@section('title', '법률상담 - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/qna.css') }}">
@endsection

@section('content')
<main class="page" aria-label="분야 선택">
  <div class="top-wrap">
    <section class="cat-box" role="list" aria-label="법률 분야">
      <div class="cats">
        <!-- 1행 -->
        <div class="cat" role="listitem">형사·범죄</div>
        <div class="cat">사기·횡령</div>
        <div class="cat">성범죄</div>
        <div class="cat">음주·교통사고</div>
        <div class="cat">폭행·상해</div>
        <div class="cat">민사</div>
        <div class="cat">금전·계약</div>
        <div class="cat">이혼·가정</div>
        <div class="cat">부동산·임대차</div>
        <div class="cat">상속</div>
        <!-- 2행 -->
        <div class="cat">행정</div>
        <div class="cat">노무</div>
        <div class="cat">세무</div>
        <div class="cat">지적재산권</div>
        <div class="cat">의료</div>
        <div class="cat">기업업무</div>
        <div class="cat">국제·외국인</div>
        <div class="cat">코인·NFT</div>
        <div class="cat">재판분쟁</div>
        <div class="cat">기타 의뢰</div>
      </div>
    </section>
  </div>

  <!-- 자주 검색 되는 키워드 -->
  <section class="kw-section" aria-label="자주 검색 되는 키워드">
    <div class="kw-wrap">
      <div class="kw-row">
        <div class="kw-title">자주 검색 되는 키워드</div>
        <div class="kw-chips" role="list">
          <a class="kw-chip" role="listitem" href="#">성매매변호사</a>
          <a class="kw-chip" href="#">성매매초범</a>
          <a class="kw-chip" href="#">오피단속</a>
          <a class="kw-chip" href="#">마사지 단속</a>
          <a class="kw-chip" href="#">출장마사지</a>
          <a class="kw-chip" href="#">마사지</a>
          <a class="kw-chip" href="#">단속</a>
          <a class="kw-chip" href="#">오피</a>
          <a class="kw-chip" href="#">타이마사지</a>
          <a class="kw-chip" href="#">성매매</a>
          <a class="kw-chip" href="#">성매매장부</a>
          <a class="kw-chip" href="#">스웨디시</a>
          <a class="kw-chip all" href="#">전체보기</a>
        </div>
      </div>
    </div>
  </section>

  <!-- 전략서 섹션: 좌 리스트 + 우 상담 안내 -->
  <section class="section-strategy" aria-label="성범죄 분야의 전략서">
    <div class="strategy-wrap">
      <div class="strategy-grid">
        <!-- 좌 카드 -->
        <article class="s-card">
          <div class="s-head">
            <div class="s-title"><span class="ico">🎼</span> 성범죄 분야의 전략서</div>
            <div class="s-badges">
              <span class="s-badge">관련도 높음</span>
              <span class="s-ad">광고</span>
            </div>
          </div>
          <div class="s-list">
            <!-- 아이템 1 -->
            <div class="s-item">
              <div class="s-left">
                <div class="s-kicker">해결사례</div>
                <div class="s-ttl">⭐ 성매매 "모든 사건" 기소유예 — 무수한 상담후기/검증된 변호사</div>
                <div class="s-meta"><span class="s-ava"></span> 김준환 변호사</div>
              </div>
              <div class="s-right"><div class="s-thumb" aria-hidden="true"></div></div>
            </div>
            <!-- 아이템 2 -->
            <div class="s-item">
              <div class="s-left">
                <div class="s-kicker">해결사례</div>
                <div class="s-ttl">실제아동이 나이를 알려줬다고 진술했지만 성인 성매매로 처분 사례</div>
                <div class="s-meta"><span class="s-ava"></span> 박선하 변호사</div>
              </div>
              <div class="s-right"><div class="s-thumb"></div></div>
            </div>
            <!-- 아이템 3 -->
            <div class="s-item">
              <div class="s-left">
                <div class="s-kicker">해결사례</div>
                <div class="s-ttl">성매매, 돈을 주고 성을 산다? 전과 안 남는 방법</div>
                <div class="s-meta"><span class="s-ava"></span> 이재용 변호사</div>
              </div>
              <div class="s-right"><div class="s-thumb"></div></div>
            </div>
            <!-- 아이템 4 -->
            <div class="s-item">
              <div class="s-left">
                <div class="s-kicker">해결사례</div>
                <div class="s-ttl">성매매, 재범하지 않을 것을 피력하며 기소유예</div>
                <div class="s-meta"><span class="s-ava"></span> 이재용 변호사</div>
              </div>
              <div class="s-right"><div class="s-thumb"></div></div>
            </div>
            <!-- 아이템 5 -->
            <div class="s-item">
              <div class="s-left">
                <div class="s-kicker">해결사례</div>
                <div class="s-ttl">마사지 받으러 갔다가 성매매로 입건? '무혐의' 가능</div>
                <div class="s-meta"><span class="s-ava"></span> 이재용 변호사</div>
              </div>
              <div class="s-right"><div class="s-thumb"></div></div>
            </div>
            <!-- 아이템 6 -->
            <div class="s-item">
              <div class="s-left">
                <div class="s-kicker">해결사례</div>
                <div class="s-ttl">성매매 혐의로 두려웠던 의뢰자, 기소유예에 이끌어낸 사례!</div>
                <div class="s-meta"><span class="s-ava"></span> 유선종 변호사</div>
              </div>
              <div class="s-right"><div class="s-thumb"></div></div>
            </div>
          </div>
        </article>

        <!-- 우측 상담 안내 카드 -->
        <aside class="c-card" aria-label="원하는 시간, 원하는 방식으로">
          <div class="c-head">원하는 시간, 원하는 방식으로</div>
          <div class="c-sub">전문 변호사에게 상담을 받아보세요.</div>
          <div class="c-list">
            <div class="c-item"><div class="c-left"><div class="c-ico" aria-hidden="true"></div><div class="c-ttl">부담없이 진단받는 <strong>15분 전화상담</strong></div></div><div class="c-arr">›</div></div>
            <div class="c-item"><div class="c-left"><div class="c-ico"></div><div class="c-ttl">원하는 단계만 이용하는 <strong>단계별 의뢰</strong></div></div><div class="c-arr">›</div></div>
            <div class="c-item"><div class="c-left"><div class="c-ico"></div><div class="c-ttl">확실한 법률문서를 위한 <strong>법률 문서 작성</strong></div></div><div class="c-arr">›</div></div>
          </div>
        </aside>
      </div>
    </div>
  </section>

  <!-- 게시판 섹션(다크 보드 + 사이드바) -->
  <section class="section-board" aria-label="이혼·가정 게시판">
    <div class="board-wrap">
      <div class="board-grid">
        <!-- 좌: 다크 보드 -->
        <div class="bd-left">
          <h2 class="bd-head">이혼,가정</h2>
          <div class="bd-tabs">
            <button type="button" class="bd-tab active" aria-pressed="true">정보글만</button>
            <button type="button" class="bd-tab" aria-pressed="false">최신 답변순</button>
            <button type="button" class="bd-tab" aria-pressed="false">최신 질문순</button>
            <button type="button" class="bd-tab" aria-pressed="false">인기순</button>
          </div>
          <div class="bd-tool">
            <div style="font-weight:800;color:#9ca3af">사기죄 · 계약/채권 · 소송/서류</div>
            <form class="bd-search" method="GET" action="{{ route('qna.index') }}">
              <input id="board-search" name="query" placeholder="검색어를 입력하세요" autocomplete="off"/>
              <button type="submit">검색</button>
            </form>
          </div>

          <div class="posts">
            @if(isset($items) && $items->count() > 0)
              @foreach($items as $item)
                <article class="post">
                  <div class="p-cat">{{ $item->category }}</div>
                  <div class="p-title">
                    <a href="{{ route('qna.show', $item->id) }}">{{ $item->title }}</a>
                  </div>
                  <p class="p-ex">{{ Str::limit($item->body, 100) }}</p>
                  <div class="p-meta">
                    <span>조회수 {{ rand(500, 2000) }}</span>
                    <span>댓글 {{ $item->answers_count }}</span>
                    <span class="p-date">{{ $item->created_at->format('Y-m-d') }} 작성</span>
                  </div>
                </article>
              @endforeach
            @else
              <!-- 검색 결과가 없을 때 -->
              <article class="post">
                <div class="p-cat">검색 결과</div>
                <div class="p-title">검색 결과가 없습니다</div>
                <p class="p-ex">다른 키워드로 검색해보세요.</p>
                <div class="p-meta">
                  <span class="p-date">검색 결과 없음</span>
                </div>
              </article>
            @endif

            <div class="bd-more"><button type="button">더보기</button></div>
          </div>
          <!-- 로펌 리스트 (내부) -->
          <div class="fb-inside" aria-label="로펌 리스트">
            <h2 class="fb-title">로펌</h2>
            <div class="fb-list">
              <!-- Row 1 -->
              <article class="fb-row">
                <div class="fb-left">
                  <h3 class="fb-h1">[로티피] 법률상담부터 사건종결까지 직접 진행합니다.</h3>
                  <div class="fb-desc">의뢰인의 눈높이에서 쉽고 친절한 상담을 약속합니다</div>
                  <div class="fb-tags">
                    <span class="fb-tag">최강팀 변호사</span>
                    <span class="fb-tag">민사사건</span>
                    <span class="fb-tag">이혼/상속사건</span>
                    <span class="fb-tag">지역주택조합</span>
                  </div>
                  <div class="fb-cta">
                    <div class="left"><span class="ico" aria-hidden="true"></span>로펌에 간편 상담을 신청해 보세요</div>
                    <a class="btn" href="#">간편 상담 신청</a>
                  </div>
                  <div class="fb-meta">📍 서울특별시 서초구 반포대로30길 61 (서초동) 4층, 로티피 법률사무소</div>
                </div>
                <div class="fb-right"><div class="fb-thumb" aria-hidden="true"></div></div>
              </article>
              <!-- Row 2 -->
              <article class="fb-row">
                <div class="fb-left">
                  <h3 class="fb-h1">[로티피] 법률상담부터 사건종결까지 직접 진행합니다.</h3>
                  <div class="fb-desc">의뢰인의 눈높이에서 쉽고 친절한 상담을 약속합니다</div>
                  <div class="fb-tags">
                    <span class="fb-tag">최강팀 변호사</span>
                    <span class="fb-tag">민사사건</span>
                    <span class="fb-tag">이혼/상속사건</span>
                    <span class="fb-tag">지역주택조합</span>
                  </div>
                  <div class="fb-cta">
                    <div class="left"><span class="ico" aria-hidden="true"></span>로펌에 간편 상담을 신청해 보세요</div>
                    <a class="btn" href="#">간편 상담 신청</a>
                  </div>
                  <div class="fb-meta">📍 서울특별시 서초구 반포대로30길 61 (서초동) 4층, 로티피 법률사무소</div>
                </div>
                <div class="fb-right"><div class="fb-thumb" aria-hidden="true"></div></div>
              </article>
              <!-- Row 3 -->
              <article class="fb-row">
                <div class="fb-left">
                  <h3 class="fb-h1">[로티피] 법률상담부터 사건종결까지 직접 진행합니다.</h3>
                  <div class="fb-desc">의뢰인의 눈높이에서 쉽고 친절한 상담을 약속합니다</div>
                  <div class="fb-tags">
                    <span class="fb-tag">최강팀 변호사</span>
                    <span class="fb-tag">민사사건</span>
                    <span class="fb-tag">이혼/상속사건</span>
                    <span class="fb-tag">지역주택조합</span>
                  </div>
                  <div class="fb-cta">
                    <div class="left"><span class="ico" aria-hidden="true"></span>로펌에 간편 상담을 신청해 보세요</div>
                    <a class="btn" href="#">간편 상담 신청</a>
                  </div>
                  <div class="fb-meta">📍 서울특별시 서초구 반포대로30길 61 (서초동) 4층, 로티피 법률사무소</div>
                </div>
                <div class="fb-right"><div class="fb-thumb" aria-hidden="true"></div></div>
              </article>
            </div>
          </div>
        </div>

        <!-- 우: 사이드바 -->
        <aside class="bd-right">
          <a class="write-green" href="#">상담글 쓰기</a>
          <div class="adbox" aria-hidden="true"></div>

          <div class="widget widget-hotlawyers"><div class="wtitle">최근 답변이 활발한 변호사</div>
            <div class="mini-list">
              <div class="mini-item"><div class="mini-ava"></div><div>OOO 변호사<br><span style="color:#9ca3af; font-weight:700">형사 · 민사 · 이혼</span></div></div>
              <div class="mini-item"><div class="mini-ava"></div><div>OOO 변호사<br><span style="color:#9ca3af; font-weight:700">형사 · 민사</span></div></div>
              <div class="mini-item"><div class="mini-ava"></div><div>OOO 변호사<br><span style="color:#9ca3af; font-weight:700">부동산 · 상속</span></div></div>
            </div><a class="morelink" href="#">더보기 ▾</a></div>

          <div class="widget widget-similarcases"><div class="wtitle">유사 해결사례</div>
            <div class="mini-list">
              <div>사기죄 형사소송 후 민사소송 진행 절차 — 간략 요약…</div>
              <div>음주운전 무죄 판결 — 절차 하자 및 증거 배척</div>
            </div><a class="morelink" href="#">더보기 ▾</a></div>

          <div class="widget widget-cardnews widget-mint"><div class="wtitle">카드</div>
            <div class="thumb" aria-hidden="true"></div>
            <div class="ctitle">곡과 마곡 [곰시니스트 시사 만화]</div>
            <div class="cmeta">시사·HN · 5시간 전</div>
          </div>
          <div class="widget widget-video widget-mint"><div class="wtitle">동영상</div>
            <div class="vthumb">동영상 썸네일</div>
            <div class="vdesc">서울대 출신, 건설전문변호사가 직접 알려주는 Q&A</div>
          </div>
          <div class="adbox" aria-hidden="true"></div>
          <div class="widget widget-news widget-mint"><div class="wtitle">실시간 인기뉴스</div>
            <ul>
              <li><span class="ntag">금전/계약</span> <span class="ntitle">실시간 인기 뉴스 글입니다. 실시간 인기 뉴스 글입니다. 실시간 …</span>
                <div class="nmeta">단, 실시간 인</div></li>
              <li><span class="ntag">금전/계약</span> <span class="ntitle">실시간 인기 뉴스 글입니다. 실시간 인기 뉴스 글입니다. 실시간 …</span>
                <div class="nmeta">단, 실시간 인</div></li>
              <li><span class="ntag">금전/계약</span> <span class="ntitle">실시간 인기 뉴스 글입니다. 실시간 인기 뉴스 글입니다. 실시간 …</span>
                <div class="nmeta">단, 실시간 인</div></li>
              <li><span class="ntag">금전/계약</span> <span class="ntitle">실시간 인기 뉴스 글입니다. 실시간 인기 뉴스 글입니다. 실시간 …</span>
                <div class="nmeta">단, 실시간 인</div></li>
              <li><span class="ntag">금전/계약</span> <span class="ntitle">실시간 인기 뉴스 글입니다. 실시간 인기 뉴스 글입니다. 실시간 …</span>
                <div class="nmeta">단, 실시간 인</div></li>
            </ul>
          </div>

          <div class="widget widget-docs widget-mint"><div class="wtitle">자주 작성하는 문서</div>
            <ol>
              <li>계약서 제목입니다. 계약서 제목입니다.</li>
              <li>계약서 제목입니다. 계약서 제목입니다.</li>
              <li>계약서 제목입니다. 계약서 제목입니다.</li>
              <li>계약서 제목입니다. 계약서 제목입니다.</li>
              <li>계약서 제목입니다. 계약서 제목입니다.</li>
            </ol>
            <a class="docs-more" href="#">전체보기 ▾</a>
          </div>
        </aside>

      </div>
    </div>
  </section>

</main>
@endsection
