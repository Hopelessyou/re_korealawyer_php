{{-- 
  로펌 섹션 컴포넌트
  
  사용법:
  @include('components.lawfirm-section')
  
  또는 데이터와 함께 사용:
  @php
    $lawfirms = [
      [
        'title' => '로펌 제목',
        'description' => '로펌 설명',
        'tags' => ['태그1', '태그2', '태그3'],
        'cta_text' => 'CTA 텍스트',
        'cta_button' => '버튼 텍스트',
        'cta_link' => '#',
        'address' => '주소'
      ]
    ];
  @endphp
  @include('components.lawfirm-section')
--}}

<section class="lawfirm-section" aria-label="로펌 리스트">
  <div class="fb-inside">
    <h2 class="fb-title">로펌</h2>
    <div class="fb-list">
      @foreach($lawfirms ?? [] as $lawfirm)
        <article class="fb-row">
          <div class="fb-left">
            <h3 class="fb-h1">{{ $lawfirm['title'] ?? '[로티피] 법률상담부터 사건종결까지 직접 진행합니다.' }}</h3>
            <div class="fb-desc">{{ $lawfirm['description'] ?? '의뢰인의 눈높이에서 쉽고 친절한 상담을 약속합니다' }}</div>
            <div class="fb-tags">
              @foreach($lawfirm['tags'] ?? ['최강팀 변호사', '민사사건', '이혼/상속사건', '지역주택조합'] as $tag)
                <span class="fb-tag">{{ $tag }}</span>
              @endforeach
            </div>
            <div class="fb-cta">
              <div class="left"><span class="ico" aria-hidden="true"></span>{{ $lawfirm['cta_text'] ?? '로펌에 간편 상담을 신청해 보세요' }}</div>
              <a class="btn" href="{{ $lawfirm['cta_link'] ?? '#' }}">{{ $lawfirm['cta_button'] ?? '간편 상담 신청' }}</a>
            </div>
            <div class="fb-meta">📍 {{ $lawfirm['address'] ?? '서울특별시 서초구 반포대로30길 61 (서초동) 4층, 로티피 법률사무소' }}</div>
          </div>
          <div class="fb-right">
            <div class="fb-thumb" aria-hidden="true"></div>
          </div>
        </article>
      @endforeach
      
      @if(empty($lawfirms))
        <!-- 기본 로펌 데이터 (3개) -->
        @for($i = 1; $i <= 3; $i++)
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
            <div class="fb-right">
              <div class="fb-thumb" aria-hidden="true"></div>
            </div>
          </article>
        @endfor
      @endif
    </div>
  </div>
</section>
