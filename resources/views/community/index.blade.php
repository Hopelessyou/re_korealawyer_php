@extends('layouts.app')

@section('title', '커뮤니티 — 변호사닷컴')

@section('content')
<div class="container layout">
    <!-- 좌측 사이드바 -->
    <aside class="aside-left">
        <div class="nav-block card">
            <div class="card__header">
                <h3 class="section-title">사례</h3>
            </div>
            <div class="card__body">
                <ul class="vlist">
                    <li><a href="#"><span class="dot"></span>변호사 썰</a></li>
                    <li><a href="#"><span class="dot"></span>재판 후기</a></li>
                </ul>
            </div>
        </div>

        <div class="nav-block card">
            <div class="card__header">
                <h3 class="section-title">참여</h3>
            </div>
            <div class="card__body">
                <ul class="vlist">
                    <li><a href="#"><span class="dot"></span>투표하기</a></li>
                    <li><a href="#"><span class="dot"></span>찬반토론</a></li>
                    <li><a href="{{ route('community.board') }}"><span class="dot"></span>신문고</a></li>
                    <li><a href="{{ route('community.board') }}"><span class="dot"></span>자유게시판</a></li>
                </ul>
            </div>
        </div>

        <div class="nav-block card">
            <div class="card__header">
                <h3 class="section-title">상담</h3>
            </div>
            <div class="card__body">
                <ul class="vlist">
                    <li><a href="{{ route('community.board') }}"><span class="dot"></span>형사/범죄</a></li>
                    <li><a href="#"><span class="dot"></span>가족/이혼</a></li>
                    <li><a href="#"><span class="dot"></span>기타 민사</a></li>
                    <li><a href="#"><span class="dot"></span>노동(노무)</a></li>
                    <li><a href="#"><span class="dot"></span>부동산</a></li>
                    <li><a href="#"><span class="dot"></span>교통사고</a></li>
                    <li><a href="#"><span class="dot"></span>의료사고</a></li>
                    <li><a href="#"><span class="dot"></span>코인/NFT 등</a></li>
                </ul>
            </div>
        </div>

        <div class="nav-block card">
            <div class="card__header">
                <h3 class="section-title">SOS</h3>
            </div>
            <div class="card__body">
                <ul class="vlist">
                    <li><a href="#"><span class="dot"></span>체포/긴급체포</a></li>
                    <li><a href="#"><span class="dot"></span>압수수색</a></li>
                    <li><a href="#"><span class="dot"></span>가처분(접근금지/점유/집행정지)</a></li>
                    <li><a href="#"><span class="dot"></span>음주운전(단숙 직후/사고포함)</a></li>
                </ul>
            </div>
        </div>
    </aside>

    <!-- 메인 컬럼 -->
    <main class="maincol">
      <!-- 투표 섹션 -->
      <div class="card poll">
        <div class="card__body">
          <h2 class="lead">이번 주 법률 상담 주제</h2>
          <p class="desc">가장 도움이 필요한 법률 분야는 무엇인가요?</p>
          <div class="vote-grid">
            <div class="vote">
              <h3>형사 사건</h3>
              <p class="desc">수사 과정에서의 권리 보호와 변호사 선임</p>
              <button class="btn btn--green">투표하기</button>
            </div>
            <div class="vote">
              <h3>가족법 분쟁</h3>
              <p class="desc">이혼, 상속, 친권 등 가족 관련 법률 문제</p>
              <button class="btn btn--green">투표하기</button>
            </div>
          </div>
        </div>
      </div>

      <!-- 토론 및 신문고 -->
      <div class="boards">
        <div class="board">
          <div class="board__header">
            <h3 class="board__title">토론하기</h3>
          </div>
          <div class="card__body">
            <h4>최근 법률 이슈</h4>
            <p class="desc">새로운 법안이나 판례에 대한 의견을 나누어보세요</p>
            <a href="{{ route('community.board') }}" class="btn">참여하기</a>
          </div>
        </div>
        <div class="board">
          <div class="board__header">
            <h3 class="board__title">신문고</h3>
          </div>
          <div class="card__body">
            <h4>불법 행위 신고</h4>
            <p class="desc">법적으로 문제가 되는 상황을 신고하고 상담받으세요</p>
            <a href="{{ route('community.board') }}" class="btn">신고하기</a>
          </div>
        </div>
      </div>

      <!-- HOT 리스트 -->
      <div class="card hot">
        <div class="card__header">
          <h3 class="section-title">HOT 게시글</h3>
          <a href="{{ route('community.board') }}" class="more">더보기</a>
        </div>
        <div class="card__body">
          <div class="item">
            <a href="#" class="title">형사 사건에서 변호사 동행의 중요성</a>
            <div class="meta">
              <span class="badge badge--field">형사</span>
              <span>조회 1,234</span>
            </div>
          </div>
          <div class="item">
            <a href="#" class="title">이혼 절차와 준비사항 가이드</a>
            <div class="meta">
              <span class="badge badge--field">가족법</span>
              <span>조회 987</span>
            </div>
          </div>
          <div class="item">
            <a href="#" class="title">교통사고 후처리와 보험 청구</a>
            <div class="meta">
              <span class="badge badge--field">교통사고</span>
              <span>조회 756</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 광고 영역 -->
      <div class="ad-banner">
        <div class="ad-banner-text">광고 영역</div>
      </div>

      <!-- 게시판 카테고리 그리드 -->
      <div class="board-categories-grid">
        <!-- 첫 번째 행 -->
        <div class="board-categories-row">
          <div class="board-categories-container">
            <!-- 형사/범죄 카드 -->
            <div class="board-category-card">
              <div class="board-category-header">
                <div class="board-category-title-section">
                  <div class="board-category-icon"></div>
                  <div class="board-category-name">형사/범죄</div>
                </div>
                <div class="board-category-more">더보기 ></div>
              </div>
              <div class="board-posts-list">
                @for ($i = 1; $i <= 5; $i++)
                <div class="board-post-item">
                  <div class="board-post-title-container">
                    <div class="board-post-title">게시판 제목입니다. 게시판 제목입니다. 게시판 제목입니다.</div>
                  </div>
                  <div class="board-post-stats">
                    <div class="board-post-stats-container">
                      <img class="board-post-icon" src="https://placehold.co/16x16" alt="조회수" />
                    </div>
                    <div class="board-post-count">30</div>
                  </div>
                </div>
                @endfor
              </div>
            </div>

            <!-- 가족/이혼 카드 -->
            <div class="board-category-card">
              <div class="board-category-header">
                <div class="board-category-title-section">
                  <div class="board-category-icon"></div>
                  <div class="board-category-name">가족/이혼</div>
                </div>
                <div class="board-category-more">더보기 ></div>
              </div>
              <div class="board-posts-list">
                @for ($i = 1; $i <= 5; $i++)
                <div class="board-post-item">
                  <div class="board-post-title-container">
                    <div class="board-post-title">게시판 제목입니다. 게시판 제목입니다. 게시판 제목입니다.</div>
                  </div>
                  <div class="board-post-stats">
                    <div class="board-post-stats-container">
                      <img class="board-post-icon" src="https://placehold.co/16x16" alt="조회수" />
                    </div>
                    <div class="board-post-count">30</div>
                  </div>
                </div>
                @endfor
              </div>
            </div>
          </div>
        </div>

        <!-- 두 번째 행 -->
        <div class="board-categories-row">
          <div class="board-categories-container">
            <!-- 기타 민사 카드 -->
            <div class="board-category-card">
              <div class="board-category-header">
                <div class="board-category-title-section">
                  <div class="board-category-icon"></div>
                  <div class="board-category-name">기타 민사</div>
                </div>
                <div class="board-category-more">더보기 ></div>
              </div>
              <div class="board-posts-list">
                @for ($i = 1; $i <= 5; $i++)
                <div class="board-post-item">
                  <div class="board-post-title-container">
                    <div class="board-post-title">게시판 제목입니다. 게시판 제목입니다. 게시판 제목입니다.</div>
                  </div>
                  <div class="board-post-stats">
                    <div class="board-post-stats-container">
                      <img class="board-post-icon" src="https://placehold.co/16x16" alt="조회수" />
                    </div>
                    <div class="board-post-count">30</div>
                  </div>
                </div>
                @endfor
              </div>
            </div>

            <!-- 노동/노무 카드 -->
            <div class="board-category-card">
              <div class="board-category-header">
                <div class="board-category-title-section">
                  <div class="board-category-icon"></div>
                  <div class="board-category-name">노동/노무</div>
                </div>
                <div class="board-category-more">더보기 ></div>
              </div>
              <div class="board-posts-list">
                @for ($i = 1; $i <= 5; $i++)
                <div class="board-post-item">
                  <div class="board-post-title-container">
                    <div class="board-post-title">게시판 제목입니다. 게시판 제목입니다. 게시판 제목입니다.</div>
                  </div>
                  <div class="board-post-stats">
                    <div class="board-post-stats-container">
                      <img class="board-post-icon" src="https://placehold.co/16x16" alt="조회수" />
                    </div>
                    <div class="board-post-count">30</div>
                  </div>
                </div>
                @endfor
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 하단 광고 영역 -->
      <div class="ad-banner">
        <div class="ad-banner-text">광고 영역</div>
      </div>

      <!-- 하단 게시판 카테고리 그리드 -->
      <div class="board-categories-grid">
        <!-- 첫 번째 행 -->
        <div class="board-categories-row">
          <div class="board-categories-container">
            <!-- 부동산 카드 -->
            <div class="board-category-card">
              <div class="board-category-header">
                <div class="board-category-title-section">
                  <div class="board-category-icon"></div>
                  <div class="board-category-name">부동산</div>
                </div>
                <div class="board-category-more">더보기 ></div>
              </div>
              <div class="board-posts-list">
                @for ($i = 1; $i <= 5; $i++)
                <div class="board-post-item">
                  <div class="board-post-title-container">
                    <div class="board-post-title">게시판 제목입니다. 게시판 제목입니다. 게시판 제목입니다.</div>
                  </div>
                  <div class="board-post-stats">
                    <div class="board-post-stats-container">
                      <img class="board-post-icon" src="https://placehold.co/16x16" alt="조회수" />
                    </div>
                    <div class="board-post-count">30</div>
                  </div>
                </div>
                @endfor
              </div>
            </div>

            <!-- 교통사고 카드 -->
            <div class="board-category-card">
              <div class="board-category-header">
                <div class="board-category-title-section">
                  <div class="board-category-icon"></div>
                  <div class="board-category-name">교통사고</div>
                </div>
                <div class="board-category-more">더보기 ></div>
              </div>
              <div class="board-posts-list">
                @for ($i = 1; $i <= 5; $i++)
                <div class="board-post-item">
                  <div class="board-post-title-container">
                    <div class="board-post-title">게시판 제목입니다. 게시판 제목입니다. 게시판 제목입니다.</div>
                  </div>
                  <div class="board-post-stats">
                    <div class="board-post-stats-container">
                      <img class="board-post-icon" src="https://placehold.co/16x16" alt="조회수" />
                    </div>
                    <div class="board-post-count">30</div>
                  </div>
                </div>
                @endfor
              </div>
            </div>
          </div>
        </div>

        <!-- 두 번째 행 -->
        <div class="board-categories-row">
          <div class="board-categories-container">
            <!-- 의료사고 카드 -->
            <div class="board-category-card">
              <div class="board-category-header">
                <div class="board-category-title-section">
                  <div class="board-category-icon"></div>
                  <div class="board-category-name">의료사고</div>
                </div>
                <div class="board-category-more">더보기 ></div>
              </div>
              <div class="board-posts-list">
                @for ($i = 1; $i <= 5; $i++)
                <div class="board-post-item">
                  <div class="board-post-title-container">
                    <div class="board-post-title">게시판 제목입니다. 게시판 제목입니다. 게시판 제목입니다.</div>
                  </div>
                  <div class="board-post-stats">
                    <div class="board-post-stats-container">
                      <img class="board-post-icon" src="https://placehold.co/16x16" alt="조회수" />
                    </div>
                    <div class="board-post-count">30</div>
                  </div>
                </div>
                @endfor
              </div>
            </div>

            <!-- 코인/NFT 카드 -->
            <div class="board-category-card">
              <div class="board-category-header">
                <div class="board-category-title-section">
                  <div class="board-category-icon"></div>
                  <div class="board-category-name">코인/NFT</div>
                </div>
                <div class="board-category-more">더보기 ></div>
              </div>
              <div class="board-posts-list">
                @for ($i = 1; $i <= 5; $i++)
                <div class="board-post-item">
                  <div class="board-post-title-container">
                    <div class="board-post-title">게시판 제목입니다. 게시판 제목입니다. 게시판 제목입니다.</div>
                  </div>
                  <div class="board-post-stats">
                    <div class="board-post-stats-container">
                      <img class="board-post-icon" src="https://placehold.co/16x16" alt="조회수" />
                    </div>
                    <div class="board-post-count">30</div>
                  </div>
                </div>
                @endfor
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- 우측 사이드바 -->
    <aside class="aside-right">
        <!-- 상담글 쓰기 버튼 -->
        <a href="#" class="cta">상담글 쓰기</a>

        <!-- 변호사 광고 -->
        <div class="card">
            <div class="card__header">
                <h3 class="section-title">추천 변호사</h3>
            </div>
            <div class="card__body">
                <div class="lawyers">
                    <div class="lawyer">
                        <div class="avatar">김</div>
                        <div>
                            <div class="title">김형사 변호사</div>
                            <div class="muted">형사사건 전문, 15년 경력</div>
                        </div>
                    </div>
                    <div class="lawyer">
                        <div class="avatar">이</div>
                        <div>
                            <div class="title">이가족 변호사</div>
                            <div class="muted">가족사건 전문, 12년 경력</div>
                        </div>
                    </div>
                    <div class="lawyer">
                        <div class="avatar">박</div>
                        <div>
                            <div class="title">박민사 변호사</div>
                            <div class="muted">민사사건 전문, 18년 경력</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 키워드 태그 -->
        <div class="card">
            <div class="card__header">
                <h3 class="section-title">인기 키워드</h3>
            </div>
            <div class="card__body">
                <div class="chips">
                    <a href="#" class="tag"># 형사사건</a>
                    <a href="#" class="tag"># 이혼</a>
                    <a href="#" class="tag"># 교통사고</a>
                    <a href="#" class="tag"># 부동산</a>
                    <a href="#" class="tag"># 노동법</a>
                    <a href="#" class="tag"># 의료사고</a>
                </div>
            </div>
        </div>

        <!-- 광고 영역 -->
        <div class="ad">
            <h4>법률 상담 광고</h4>
            <p>전문 변호사와 상담하세요</p>
        </div>
    </aside>
</div>
@endsection
