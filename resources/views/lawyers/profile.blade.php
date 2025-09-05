@extends('layouts.app')

@section('content')

<main class="lawyer-profile-page" style="padding: 0 !important; margin: 0 !important;">
  <x-lawyer-profile-nav active-tab="home" :lawyer-id="1" />
  <div class="container">
    <!-- 메인 레이아웃 -->
    <div class="lp-layout">
      <!-- 좌측 프로필 정보 -->
      <div class="lp-left">
        <div class="lp-header">
          <h1 class="lp-name">유정훈 변호사</h1>
          <div class="lp-firm">IBS법률사무소</div>
          <div class="lp-tagline">'정확'하고 '명쾌'한 빠른 답변을 드립니다!!!</div>
        </div>

        <div class="lp-tags">
          <span class="lp-tag">형사법 전문</span>
          <span class="lp-tag">공직 근무 경험</span>
          <span class="lp-tag">경찰 경험</span>
          <span class="lp-tag">영어 가능</span>
        </div>

        <div class="lp-info-container lp-info-container-home">
          <div class="lp-stats-box">
            <div class="lp-stats-label">예약준수율</div>
            <div class="lp-stats-percent">96%</div>
            <div class="lp-stats-progress"><div class="lp-stats-progress-bar" style="width:96%"></div></div>
            <div class="lp-office-name">법무법인 태신</div>
            <div class="lp-office-address">서울특별시 서초구 서초대로50길 18 (서초동) 4층</div>
            <div class="lp-office-phone">
              <span class="lp-phone-label">사무실 전화</span>
              <span class="lp-phone-number">050-7725-8845</span>
            </div>
          </div>

          <div class="lp-info-right">
            <div class="lp-specialty-box">
              <div class="lp-specialty-label">분야</div>
              <div class="lp-specialty-text">수사/체포/구속, 사기/공갈, 마약/도박, 성폭력/강제추행 등</div>
              <div class="lp-info-row"><span class="lp-info-label">경력</span><span class="lp-info-text">서울강남경찰서 지능범죄수사과장</span></div>
              <div class="lp-info-row"><span class="lp-info-label">자격</span><span class="lp-info-text">사법시험 47회 (2008년)</span></div>
              <div class="lp-info-row"><span class="lp-info-label">소속</span><span class="lp-info-text">서울지방변호사회</span></div>
              <div class="lp-info-row"><span class="lp-info-label">학력</span><span class="lp-info-text">연세대학교 법학과 학사 졸업</span></div>
            </div>
          </div>

          <!-- 간편 문의 -->
          <div class="ls-quick-contact">
            <div class="label">간편 문의</div>
            <div class="note">간편 문의는 사무실 직원이 응대할 수 있습니다.</div>
            <div class="actions">
              <div class="qi"></div>
              <div class="qi"></div>
              <div class="qi"></div>
            </div>
          </div>
        </div>

        <div class="lp-cards-container">
          <!-- 왼쪽 열 -->
          <div class="lp-left-column">
            <!-- 경력 -->
            <div class="lp-card">
              <div class="lp-card-title">경력</div>
              <div class="lp-card-content">
                <div class="lp-card-item">
                  <div class="lp-item-main">서울강남경찰서 지능범죄수사과장</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">서울송파경찰서 수사1과장</div>
                  <div class="lp-item-date">
                    <span>2023</span>
                    <span>-</span>
                    <span>2024</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">서울구로경찰서 수사과장</div>
                  <div class="lp-item-date">
                    <span>2022</span>
                    <span>-</span>
                    <span>2023</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">서울송파경찰서 지능범죄수사과장</div>
                  <div class="lp-item-date">
                    <span>2021</span>
                    <span>-</span>
                    <span>2022</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">서울관악경찰서 수사과장</div>
                  <div class="lp-item-date">
                    <span>2020</span>
                    <span>-</span>
                    <span>2021</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- 수상 -->
            <div class="lp-card">
              <div class="lp-card-title">수상</div>
              <div class="lp-card-content">
                <div class="lp-card-item">
                  <div class="lp-item-main">OOOOO 문화상 수상</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">OOOOO 문화상 수상</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">OOOOO 문화상 수상</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">OOOOO 문화상 수상</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">OOOOO 문화상 수상</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">OOOOO 문화상 수상</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- 자문 -->
            <div class="lp-card">
              <div class="lp-card-title">자문</div>
              <div class="lp-card-content">
                <div class="lp-card-item">
                  <div class="lp-item-main">"OOO 기업" 자문</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- 해결사례 -->
            <div class="lp-card lp-card-consultation">
              <div class="lp-card-title">해결사례</div>
              <div class="lp-card-content">
                <div class="lp-card-item">
                  <div class="lp-item-category">폭행/협박/상해 일반소년범죄/학교폭력</div>
                  <div class="lp-item-title-row">
                    <div class="lp-item-title">청소년 집단폭행</div>
                    <div class="lp-item-tag">불처분</div>
                  </div>
                  <div class="lp-item-description">1. 사건개요고등학생이 친구들과 함께 동급생을 집단폭행한 사건입니다. 경찰은 사안이 심각하다고 보고 소년들을 기소의견으로 검찰에 송....</div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-category">폭행/협박/상해 일반소년범죄/학교폭력</div>
                  <div class="lp-item-title-row">
                    <div class="lp-item-title">청소년 집단폭행</div>
                    <div class="lp-item-tag">불처분</div>
                  </div>
                  <div class="lp-item-description">1. 사건개요고등학생이 친구들과 함께 동급생을 집단폭행한 사건입니다. 경찰은 사안이 심각하다고 보고 소년들을 기소의견으로 검찰에 송....</div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-category">폭행/협박/상해 일반소년범죄/학교폭력</div>
                  <div class="lp-item-title-row">
                    <div class="lp-item-title">청소년 집단폭행</div>
                    <div class="lp-item-tag">불처분</div>
                  </div>
                  <div class="lp-item-description">1. 사건개요고등학생이 친구들과 함께 동급생을 집단폭행한 사건입니다. 경찰은 사안이 심각하다고 보고 소년들을 기소의견으로 검찰에 송....</div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-category">폭행/협박/상해 일반소년범죄/학교폭력</div>
                  <div class="lp-item-title-row">
                    <div class="lp-item-title">청소년 집단폭행</div>
                    <div class="lp-item-tag">불처분</div>
                  </div>
                  <div class="lp-item-description">1. 사건개요고등학생이 친구들과 함께 동급생을 집단폭행한 사건입니다. 경찰은 사안이 심각하다고 보고 소년들을 기소의견으로 검찰에 송....</div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-category">폭행/협박/상해 일반소년범죄/학교폭력</div>
                  <div class="lp-item-title-row">
                    <div class="lp-item-title">청소년 집단폭행</div>
                    <div class="lp-item-tag">불처분</div>
                  </div>
                  <div class="lp-item-description">1. 사건개요고등학생이 친구들과 함께 동급생을 집단폭행한 사건입니다. 경찰은 사안이 심각하다고 보고 소년들을 기소의견으로 검찰에 송....</div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-category">폭행/협박/상해 일반소년범죄/학교폭력</div>
                  <div class="lp-item-title-row">
                    <div class="lp-item-title">청소년 집단폭행</div>
                    <div class="lp-item-tag">불처분</div>
                  </div>
                  <div class="lp-item-description">1. 사건개요고등학생이 친구들과 함께 동급생을 집단폭행한 사건입니다. 경찰은 사안이 심각하다고 보고 소년들을 기소의견으로 검찰에 송....</div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-category">폭행/협박/상해 일반소년범죄/학교폭력</div>
                  <div class="lp-item-title-row">
                    <div class="lp-item-title">청소년 집단폭행</div>
                    <div class="lp-item-tag">불처분</div>
                  </div>
                  <div class="lp-item-description">1. 사건개요고등학생이 친구들과 함께 동급생을 집단폭행한 사건입니다. 경찰은 사안이 심각하다고 보고 소년들을 기소의견으로 검찰에 송....</div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-category">폭행/협박/상해 일반소년범죄/학교폭력</div>
                  <div class="lp-item-title-row">
                    <div class="lp-item-title">청소년 집단폭행</div>
                    <div class="lp-item-tag">불처분</div>
                  </div>
                  <div class="lp-item-description">1. 사건개요고등학생이 친구들과 함께 동급생을 집단폭행한 사건입니다. 경찰은 사안이 심각하다고 보고 소년들을 기소의견으로 검찰에 송....</div>
                </div>
              </div>
            </div>
          </div>

          <!-- 오른쪽 열 -->
          <div class="lp-right-column">
            <!-- 자격 -->
            <div class="lp-card">
              <div class="lp-card-title">자격</div>
              <div class="lp-card-content">
                <div class="lp-card-item">
                  <div class="lp-item-main">변호사</div>
                  <div class="lp-item-date">
                    <span>2008</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">세무사</div>
                  <div class="lp-item-date">
                    <span>2008</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">변리사</div>
                  <div class="lp-item-date">
                    <span>2008</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- 학력 -->
            <div class="lp-card">
              <div class="lp-card-title">학력</div>
              <div class="lp-card-content">
                <div class="lp-card-item">
                  <div class="lp-item-main">서울대 OO학과 졸업</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">서울대 OO학과 졸업</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">서울대 OO학과 졸업</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">서울대 OO학과 졸업</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- 언론보도 -->
            <div class="lp-card lp-card-news">
              <div class="lp-card-title">언론보도</div>
              <div class="lp-card-content">
                <div class="lp-card-item">
                  <div class="lp-item-main">[서울경제] 형법이야기 - 구속의 위험</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">4차산업혁명융합법학회, ''게임산업법의 개정과 게임 아이템의 NFT화' 세미나 17일 개최</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">4차산업혁명융합법학회, 내달 6일 '인공지능법제' 국제학술대회</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">"사유지 개발 목적 서울시 공원 땅 사용 불허…침해되는 공익 더 크다 판단" [디케의 눈물 326]</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">4차산업혁명융합법학회, ''게임산업법의 개정과 게임 아이템의 NFT화' 세미나 17일 개최</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-main">4차산업혁명융합법학회, ''게임산업법의 개정과 게임 아이템의 NFT화' 세미나 17일 개최</div>
                  <div class="lp-item-date">
                    <span>2019</span>
                    <span>-</span>
                    <span>2020</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- 상담사례 -->
            <div class="lp-card lp-card-consultation">
              <div class="lp-card-title">상담사례</div>
              <div class="lp-card-content">
                <div class="lp-card-item">
                  <div class="lp-item-category">폭행/협박/상해 일반소년범죄/학교폭력</div>
                  <div class="lp-item-title-row">
                    <div class="lp-item-title">청소년 집단폭행</div>
                  </div>
                  <div class="lp-item-description">1. 사건개요고등학생이 친구들과 함께 동급생을 집단폭행한 사건입니다. 경찰은 사안이 심각하다고 보고 소년들을 기소의견으로 검찰에 송....</div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-category">폭행/협박/상해 일반소년범죄/학교폭력</div>
                  <div class="lp-item-title-row">
                    <div class="lp-item-title">청소년 집단폭행</div>
                  </div>
                  <div class="lp-item-description">1. 사건개요고등학생이 친구들과 함께 동급생을 집단폭행한 사건입니다. 경찰은 사안이 심각하다고 보고 소년들을 기소의견으로 검찰에 송....</div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-category">폭행/협박/상해 일반소년범죄/학교폭력</div>
                  <div class="lp-item-title-row">
                    <div class="lp-item-title">청소년 집단폭행</div>
                  </div>
                  <div class="lp-item-description">1. 사건개요고등학생이 친구들과 함께 동급생을 집단폭행한 사건입니다. 경찰은 사안이 심각하다고 보고 소년들을 기소의견으로 검찰에 송....</div>
                </div>
                <div class="lp-card-item">
                  <div class="lp-item-category">폭행/협박/상해 일반소년범죄/학교폭력</div>
                  <div class="lp-item-title-row">
                    <div class="lp-item-title">청소년 집단폭행</div>
                  </div>
                  <div class="lp-item-description">1. 사건개요고등학생이 친구들과 함께 동급생을 집단폭행한 사건입니다. 경찰은 사안이 심각하다고 보고 소년들을 기소의견으로 검찰에 송....</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 동영상 -->
        <div class="lp-card lp-card-video">
          <div class="lp-card-title">동영상 ></div>
          <div class="lp-card-content">
            <div class="lp-video-grid">
              <div class="lp-video-item">
                <div class="lp-video-thumbnail">
                  <img src="https://placehold.co/176x90" alt="동영상 썸네일">
                  <div class="lp-video-overlay">
                    <div class="lp-video-play-icon"></div>
                    <div class="lp-video-duration">00:27</div>
                  </div>
                </div>
                <div class="lp-video-title">데이트 폭력을 당하면 이 영상을 기억해 주세요</div>
              </div>
              <div class="lp-video-item">
                <div class="lp-video-thumbnail">
                  <img src="https://placehold.co/176x90" alt="동영상 썸네일">
                  <div class="lp-video-overlay">
                    <div class="lp-video-play-icon"></div>
                    <div class="lp-video-duration">00:27</div>
                  </div>
                </div>
                <div class="lp-video-title">데이트 폭력을 당하면 이 영상을 기억해 주세요</div>
              </div>
              <div class="lp-video-item">
                <div class="lp-video-thumbnail">
                  <img src="https://placehold.co/176x90" alt="동영상 썸네일">
                  <div class="lp-video-overlay">
                    <div class="lp-video-play-icon"></div>
                    <div class="lp-video-duration">00:27</div>
                  </div>
                </div>
                <div class="lp-video-title">데이트 폭력을 당하면 이 영상을 기억해 주세요</div>
              </div>
              <div class="lp-video-item">
                <div class="lp-video-thumbnail">
                  <img src="https://placehold.co/176x90" alt="동영상 썸네일">
                  <div class="lp-video-overlay">
                    <div class="lp-video-play-icon"></div>
                    <div class="lp-video-duration">00:27</div>
                  </div>
                </div>
                <div class="lp-video-title">데이트 폭력을 당하면 이 영상을 기억해 주세요</div>
              </div>
            </div>
            <div class="lp-video-divider">
              <div class="lp-video-divider-line lp-video-divider-line-dark"></div>
              <div class="lp-video-divider-line lp-video-divider-line-light"></div>
            </div>
          </div>
        </div>

        <!-- 오시는 길 -->
        <div class="lp-card lp-card-location">
          <div class="lp-location-header">
            <h2 class="lp-location-title">법률사무소에 오셔서<br/>문제를 해결하세요.</h2>
            <div class="lp-location-firm">
              <span class="lp-firm-name">법무법인 태신</span>
              <a href="#" class="lp-firm-website">홈페이지</a>
            </div>
            <div class="lp-location-address">
              <span>서울특별시 서초구 서초대로50길 18 (서초동) 4층</span>
              <a href="#" class="lp-map-link">네이버 지도로 보기</a>
            </div>
          </div>
          <div class="lp-location-map">
            <!-- 네이버 지도 연결 예정 -->
          </div>
        </div>
      </div>

      <!-- 우측 프로필 카드 -->
      <div class="lp-right">
        <div class="lp-profile-card">
          <div class="lp-profile-image">
            <img src="https://picsum.photos/479/545" alt="유정훈 변호사">
          </div>
          <div class="lp-profile-header">
            <div class="lp-profile-info">
              <h2 class="lp-profile-name">유정훈 변호사</h2>
              <div class="lp-profile-firm">IBS법률사무소</div>
            </div>
          </div>
          <div class="lp-profile-cta">
            <button class="lp-cta-button">상담 / 선임 예약하기</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/lawyers.css') }}?v={{ filemtime(public_path('css/lawyers.css')) }}">
@endsection
