<section class="lawyer-list" aria-label="변호사 목록">
  @php
    $items = $items ?? [
      [ 'name' => '김장환 변호사', 'office' => 'JY법률사무소', 'tags' => ['형사','성범죄','교통사고'], 'avatar' => 'https://placehold.co/128x128' ],
      [ 'name' => '이승현 변호사', 'office' => '로티피 법률사무소', 'tags' => ['민사','이혼','상속'], 'avatar' => 'https://placehold.co/128x128' ],
      [ 'name' => '박지훈 변호사', 'office' => 'OO 법률사무소', 'tags' => ['형사','사기','횡령'], 'avatar' => 'https://placehold.co/128x128' ],
      [ 'name' => '김윤호 변호사', 'office' => 'OOO', 'tags' => ['형사','음주운전'], 'avatar' => 'https://placehold.co/128x128' ],
    ];
  @endphp

  <header class="ll-head">
    <div class="ll-title">AD LAWYERS <span class="ll-count">124</span></div>
  </header>

  <div class="ll-items">
    @foreach($items as $i)
      <article class="ll-card">
        <div class="ll-side ll-side--left">
          <div class="ll-badges">
            <span class="ll-badge">해결사례</span>
            <span class="ll-badge mute">예약많음</span>
          </div>
          <h3 class="ll-name">{{ $i['name'] }}</h3>
          <div class="ll-meta">{{ $i['office'] }} · 관련분야 후기 21건</div>
          <p class="ll-desc">전문분야: 성매매/성범죄/교통사고 등</p>

          <div class="ll-chips">
            @foreach(($i['tags'] ?? []) as $t)
              <span class="chip">#{{ $t }}</span>
            @endforeach
          </div>

          <div class="ll-quick">
            <span class="qi">2분 문의</span>
            <span class="qi">전화</span>
            <span class="qi">채팅</span>
            <span class="qi">공유</span>
          </div>
        </div>

        <div class="ll-side ll-side--right">
          <img class="ll-avatar" src="{{ $i['avatar'] }}" alt="{{ $i['name'] }}" />
        </div>

        <div class="ll-cta">
          <div class="fee">
            <div class="t">15분 전화상담</div>
            <div class="p">20,000원</div>
          </div>
          <div class="fee">
            <div class="t">소송 서류 작성</div>
            <div class="p">300,000원~</div>
          </div>
          <div class="fee">
            <div class="t">협의 대행</div>
            <div class="p">300,000원</div>
          </div>
          <div class="fee">
            <div class="t">변호사 동행</div>
            <div class="p">500,000원~</div>
          </div>
          <a class="btn reserve" href="#">상담/선임 예약하기</a>
          <div class="wait">⌛ 1시간 이내 연결</div>
        </div>
      </article>
    @endforeach
  </div>

  <footer class="ll-foot">
    <a class="ll-more" href="#">변호사 124명 모두 보기 →</a>
  </footer>
</section>
