@extends('layouts.app')

@section('title', '변호사 프로필 - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/lawyers.css') }}?v={{ filemtime(public_path('css/lawyers.css')) }}">
@endsection

@section('content')
<main class="lawyer-profile-page" aria-label="변호사 프로필">
  <!-- 네비게이션 -->
  <div class="lp-nav">
    <div class="lp-nav-item active">홈</div>
    <a class="lp-nav-item" href="{{ route('lawyers.profile.services', $id) }}">변호사 서비스</a>
    <a class="lp-nav-item" href="{{ route('lawyers.profile.reviews', $id) }}">이용후기 <span class="lp-nav-badge">330</span></a>
    <a class="lp-nav-item" href="{{ route('lawyers.profile.activities', $id) }}">변호사 활동내역</a>
  </div>
  <div class="container">

    <!-- 메인 레이아웃 -->
    <div class="lp-layout">
      <!-- 좌측 콘텐츠 -->
      <div class="lp-left">
        <div class="lp-header">
          <h1 class="lp-name">유정훈 변호사</h1>
          <div class="lp-firm">IBS법률사무소</div>
          <div class="lp-tagline">'정확'하고 '명쾌'한 빠른 답변을 드립니다!!!</div>
        </div>

        <div class="lp-stats-box">
          <div class="lp-stats-label">예약준수율</div>
          <div class="lp-stats-percent">96%</div>
          <div class="lp-stats-progress">
            <div class="lp-stats-progress-bar" style="width: 96%"></div>
          </div>
          <div class="lp-office-name">법무법인 태신</div>
          <div class="lp-office-address">서울특별시 서초구 서초대로50길 18 (서초동) 4층</div>
          <div class="lp-office-phone">
            <span class="lp-phone-label">사무실 전화</span>
            <span class="lp-phone-number">050-7725-8845</span>
          </div>
        </div>

        <div class="lp-specialty-box">
          <div class="lp-specialty-label">분야</div>
          <div class="lp-specialty-text">수사/체포/구속, 사기/공갈, 마약/도박, 성폭력/강제추행 등</div>
          <div class="lp-info-row">
            <span class="lp-info-label">경력</span>
            <span class="lp-info-text">서울강남경찰서 지능범죄수사과장</span>
          </div>
        </div>

        <div class="lp-tags">
          <span class="lp-tag">형사법 전문</span>
          <span class="lp-tag">공직 근무 경험</span>
          <span class="lp-tag">경찰 경험</span>
          <span class="lp-tag">영어 가능</span>
        </div>

        <!-- 추가 섹션들 시작 -->
        <x-lp-section title="경력">
          <div class="lp-item">
            <div class="lp-item-title">서울강남경찰서 지능범죄수사과장</div>
            <div class="lp-item-meta"><span>2019</span><span>-</span><span>2020</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">서울송파경찰서 수사1과장</div>
            <div class="lp-item-meta"><span>2023</span><span>-</span><span>2024</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">서울구로경찰서 수사과장</div>
            <div class="lp-item-meta"><span>2022</span><span>-</span><span>2023</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">서울송파경찰서 지능범죄수사과장</div>
            <div class="lp-item-meta"><span>2021</span><span>-</span><span>2022</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">서울관악경찰서 수사과장</div>
            <div class="lp-item-meta"><span>2020</span><span>-</span><span>2021</span></div>
          </div>
        </x-lp-section>

        <!-- 자격/학력 -->
        <x-lp-section title="자격">
          <div class="lp-item">
            <div class="lp-item-title">변호사</div>
            <div class="lp-item-meta"><span>2008</span><span>-</span><span>2020</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">세무사</div>
            <div class="lp-item-meta"><span>2008</span><span>-</span><span>2020</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">변리사</div>
            <div class="lp-item-meta"><span>2008</span><span>-</span><span>2020</span></div>
          </div>
        </x-lp-section>
        <x-lp-section title="학력">
          <div class="lp-item">
            <div class="lp-item-title">서울대 OO학과 졸업</div>
            <div class="lp-item-meta"><span>2019</span><span>-</span><span>2020</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">서울대 OO학과 졸업</div>
            <div class="lp-item-meta"><span>2019</span><span>-</span><span>2020</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">서울대 OO학과 졸업</div>
            <div class="lp-item-meta"><span>2019</span><span>-</span><span>2020</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">서울대 OO학과 졸업</div>
            <div class="lp-item-meta"><span>2019</span><span>-</span><span>2020</span></div>
          </div>
        </x-lp-section>

        <!-- 수상 -->
        <x-lp-section title="수상">
          <div class="lp-item">
            <div class="lp-item-title">대한변호사협회 우수변호사상</div>
            <div class="lp-item-meta"><span>2020</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">서울지방변호사회 공로상</div>
            <div class="lp-item-meta"><span>2019</span></div>
          </div>
        </x-lp-section>

        <!-- 언론보도 -->
        <x-lp-section title="언론보도">
          <div class="lp-item">
            <div class="lp-item-title">조선일보 - "변호사 OOO, 성공적 변론"</div>
            <div class="lp-item-meta"><span>2021</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">중앙일보 - "법률전문가 OOO 변호사"</div>
            <div class="lp-item-meta"><span>2020</span></div>
          </div>
        </x-lp-section>

        <!-- 출판 -->
        <x-lp-section title="출판">
          <div class="lp-item">
            <div class="lp-item-title">민법의 이해 (공저)</div>
            <div class="lp-item-meta"><span>2019</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">변호사 실무 가이드</div>
            <div class="lp-item-meta"><span>2018</span></div>
          </div>
        </x-lp-section>

        <!-- 자문 -->
        <x-lp-section title="자문">
          <div class="lp-item">
            <div class="lp-item-title">삼성전자 법무팀 자문</div>
            <div class="lp-item-meta"><span>2020</span><span>-</span><span>현재</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">현대자동차 컴플라이언스 자문</div>
            <div class="lp-item-meta"><span>2019</span><span>-</span><span>2021</span></div>
          </div>
        </x-lp-section>

        <!-- 동영상 -->
        <x-lp-section title="동영상">
          <div class="lp-item">
            <div class="lp-item-title">민사소송 절차 안내</div>
            <div class="lp-item-meta"><span>2021</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">부동산 계약 주의사항</div>
            <div class="lp-item-meta"><span>2020</span></div>
          </div>
        </x-lp-section>

        <!-- 해결사례 -->
        <x-lp-section title="해결사례">
          <div class="lp-item">
            <div class="lp-item-title">부동산 매매계약 분쟁 승소</div>
            <div class="lp-item-meta"><span>2021</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">손해배상청구 소송 승소</div>
            <div class="lp-item-meta"><span>2020</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">회사법 자문 성공 사례</div>
            <div class="lp-item-meta"><span>2019</span></div>
          </div>
        </x-lp-section>

        <!-- 상담사례 -->
        <x-lp-section title="상담사례">
          <div class="lp-item">
            <div class="lp-item-title">임금체불 관련 상담</div>
            <div class="lp-item-meta"><span>상담 완료</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">이혼소송 진행 절차 상담</div>
            <div class="lp-item-meta"><span>상담 완료</span></div>
          </div>
        </x-lp-section>

        <!-- 변호사 가이드 -->
        <x-lp-section title="변호사 가이드">
          <div class="lp-item">
            <div class="lp-item-title">민사소송 준비 가이드</div>
            <div class="lp-item-meta"><span>작성 완료</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">부동산 계약서 체크리스트</div>
            <div class="lp-item-meta"><span>작성 완료</span></div>
          </div>
        </x-lp-section>

        <!-- 오시는 길 -->
        <x-lp-section title="오시는 길">
          <div class="lp-item">
            <div class="lp-item-title">서울시 강남구 테헤란로 123</div>
            <div class="lp-item-meta"><span>강남역 3번 출구</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">전화: 02-1234-5678</div>
            <div class="lp-item-meta"><span>평일 09:00-18:00</span></div>
          </div>
          <div class="lp-item">
            <div class="lp-item-title">주차: 건물 지하 1-3층</div>
            <div class="lp-item-meta"><span>2시간 무료</span></div>
          </div>
        </x-lp-section>

        <!-- 추가 섹션들 끝 (나머지 요청 섹션은 필요시 계속 삽입 가능) -->
      </div>

      <!-- 우측 프로필 카드 -->
      <div class="lp-right">
        <div class="lp-profile-card">
          <div class="lp-profile-image">
            <img src="https://via.placeholder.com/479x545" alt="유정훈 변호사">
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
