<header class="site-header" role="banner">
  <div class="container">
    <!-- 좌측: 로고/브랜드 -->
    <div class="brand">
      <div>
        <small>쉽고 빠른 무료법률상담</small>
        <a href="{{ route('home') }}" aria-label="변호사닷컴 홈">변호사닷컴.</a>
      </div>
    </div>

    <!-- 가운데: 주요 메뉴 -->
    <nav aria-label="주요">
      <ul class="menu">
        <li><a href="{{ route('qna.index') }}" @if(request()->routeIs('qna.*')) aria-current="page" @endif>법률상담</a></li>
        <li><a href="{{ route('lawyers.index') }}" @if(request()->routeIs('lawyers.*')) aria-current="page" @endif>변호사찾기</a></li>
        <li><a href="{{ route('lawfirms.index') }}" @if(request()->routeIs('lawfirms.*')) aria-current="page" @endif>로펌</a></li>
        <li><a href="{{ route('retain.index') }}" @if(request()->routeIs('retain.*')) aria-current="page" @endif>단계별선임</a></li>
        <li><a href="{{ route('forms.index') }}" @if(request()->routeIs('forms.*')) aria-current="page" @endif>법률문서 작성</a></li>
        <li><a href="{{ route('cases.index') }}" @if(request()->routeIs('cases.*')) aria-current="page" @endif>해결사례</a></li>
        <li><a href="{{ route('wiki.index') }}" @if(request()->routeIs('wiki.*')) aria-current="page" @endif>위키</a></li>
        <li><a href="{{ route('community.index') }}" @if(request()->routeIs('community.*')) aria-current="page" @endif>커뮤니티</a></li>
      </ul>
    </nav>

    <!-- 우측: 검색 / 로그인 / 전화 CTA -->
    <div class="utils" aria-label="사용자 도구">
      <a class="util-btn" href="/search" aria-label="검색">
        <!-- search icon -->
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path fill="currentColor" d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 10-.71.71l.27.28v.79L20 21.5 21.5 20l-6-6zm-6 0A4.5 4.5 0 1114 9.5 4.5 4.5 0 019.5 14z"/>
        </svg>
        <span class="util-label">검색</span>
      </a>

      @auth
        <a class="util-btn" href="#" aria-label="내 정보">
          <!-- user icon -->
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path fill="currentColor" d="M12 12a5 5 0 10-5-5 5 5 0 005 5zm0 2c-4.33 0-8 2.17-8 5v1h16v-1c0-2.83-3.67-5-8-5z"/>
          </svg>
          <span class="util-label">{{ auth()->user()->name }}</span>
        </a>
      @else
        <a class="util-btn" href="{{ route('login') }}" aria-label="로그인">
          <!-- user icon -->
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path fill="currentColor" d="M12 12a5 5 0 10-5-5 5 5 0 005 5zm0 2c-4.33 0-8 2.17-8 5v1h16v-1c0-2.83-3.67-5-8-5z"/>
          </svg>
          <span class="util-label">로그인</span>
        </a>
      @endauth

      <a class="cta-call" href="tel:025376902" aria-label="전화 02-537-6902">
        <!-- phone icon -->
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.36 11.36 0 003.56.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h2.5a1 1 0 011 1 11.36 11.36 0 00.57 3.56 1 1 0 01-.24 1.02l-2.21 2.21z" fill="currentColor"/>
        </svg>
        <span>02-537-6902</span>
      </a>
    </div>
  </div>
</header>
