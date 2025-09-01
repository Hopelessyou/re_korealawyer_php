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

  @include('components.keyword-section')

  <!-- 전략서 섹션: 좌 리스트 + 우 상담 안내 -->
  <section class="section-strategy" aria-label="법률문제 해결을 위한 전략서">
    <div class="strategy-wrap">
      <div class="strategy-grid">
        <!-- 좌 카드 -->
        <article class="s-card">
          <div class="s-head">
            <div class="s-title"><span class="ico">🎼</span> 법률문제 해결을 위한 전략서</div>
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
              </div>
              <div class="s-right">
                <div class="s-thumb" aria-hidden="true"></div>
                <div class="s-lawyer">김준환 변호사</div>
              </div>
            </div>
            <!-- 아이템 2 -->
            <div class="s-item">
              <div class="s-left">
                <div class="s-kicker">해결사례</div>
                <div class="s-ttl">실제아동이 나이를 알려줬다고 진술했지만 성인 성매매로 처분 사례</div>
              </div>
              <div class="s-right">
                <div class="s-thumb"></div>
                <div class="s-lawyer">박선하 변호사</div>
              </div>
            </div>
            <!-- 아이템 3 -->
            <div class="s-item">
              <div class="s-left">
                <div class="s-kicker">해결사례</div>
                <div class="s-ttl">성매매, 돈을 주고 성을 산다? 전과 안 남는 방법</div>
              </div>
              <div class="s-right">
                <div class="s-thumb"></div>
                <div class="s-lawyer">이재용 변호사</div>
              </div>
            </div>
            <!-- 아이템 4 -->
            <div class="s-item">
              <div class="s-left">
                <div class="s-kicker">해결사례</div>
                <div class="s-ttl">성매매, 재범하지 않을 것을 피력하며 기소유예</div>
              </div>
              <div class="s-right">
                <div class="s-thumb"></div>
                <div class="s-lawyer">이재용 변호사</div>
              </div>
            </div>
            <!-- 아이템 5 -->
            <div class="s-item">
              <div class="s-left">
                <div class="s-kicker">해결사례</div>
                <div class="s-ttl">마사지 받으러 갔다가 성매매로 입건? '무혐의' 가능</div>
              </div>
              <div class="s-right">
                <div class="s-thumb"></div>
                <div class="s-lawyer">이재용 변호사</div>
              </div>
            </div>
            <!-- 아이템 6 -->
            <div class="s-item">
              <div class="s-left">
                <div class="s-kicker">해결사례</div>
                <div class="s-ttl">성매매 혐의로 두려웠던 의뢰자, 기소유예에 이끌어낸 사례!</div>
              </div>
              <div class="s-right">
                <div class="s-thumb"></div>
                <div class="s-lawyer">유선종 변호사</div>
              </div>
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
  <section class="section-board" aria-label="전체 게시판">
    <div class="board-wrap">
      <div class="board-grid">
        <!-- 좌: 게시판 섹션 -->
        <div class="bd-left">
          <!-- 게시판 영역 -->
          <section class="board-section" aria-label="게시판">
            <h2 class="bd-head">전체</h2>
            <div class="bd-header">
              <div class="bd-tabs">
                <button type="button" class="bd-tab active" aria-pressed="true">정확도 순</button>
                <button type="button" class="bd-tab" aria-pressed="false">최신 답변순</button>
                <button type="button" class="bd-tab" aria-pressed="false">최신 질문순</button>
                <button type="button" class="bd-tab" aria-pressed="false">인기순</button>
              </div>
              <div class="bd-tool">
                <form class="bd-search" method="GET" action="{{ route('qna.index') }}">
                  <input id="board-search" name="query" placeholder="검색어를 입력하세요" autocomplete="off"/>
            <button type="submit">검색</button>
        </form>
              </div>
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
          </section>

          <!-- 로펌 섹션 -->
          @include('components.lawfirm-section')
        </div>

        <!-- 우: 사이드바 -->
        @include('components.sidebar')

        </div>
    </div>
  </section>

</main>
@endsection
