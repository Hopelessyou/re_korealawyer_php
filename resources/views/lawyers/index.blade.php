@extends('layouts.app')

@section('title', '변호사찾기 - 분야별 변호사 검색 - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="/css/lawyers.css">
@endsection

@section('content')
<main class="lawyer-search-page" aria-label="변호사 찾기">
  
    <!-- 분야별 찾기 탭 -->
    <div class="tab-content active" id="category-tab">
      <!-- 탭 스위처 섹션 -->
      <section class="tab-switcher-section" aria-label="탭 선택">
        <div class="tab-switcher">
          <button type="button" class="tab-btn active" data-tab="category" aria-pressed="true">
            분야로 찾기
          </button>
          <button type="button" class="tab-btn" data-tab="region" aria-pressed="false">
            지역으로 찾기
          </button>
        </div>
      </section>
      <div class="container">  
      <!-- 검색 콘텐츠 섹션 -->
      <section class="search-content-section" aria-label="변호사 검색">
        <div class="search-content">
        <!-- 좌측 네비게이션 -->
        <nav class="category-nav" aria-label="분야별 네비게이션">
          <ul class="nav-list">
            <li><button type="button" class="nav-item active" data-category="sexual">성범죄</button></li>
            <li><button type="button" class="nav-item" data-category="property">재산범죄</button></li>
            <li><button type="button" class="nav-item" data-category="traffic">교통사고/범죄</button></li>
            <li><button type="button" class="nav-item" data-category="criminal-procedure">형사절차</button></li>
            <li><button type="button" class="nav-item" data-category="assault">폭행/협박</button></li>
            <li><button type="button" class="nav-item" data-category="defamation">명예훼손/모욕</button></li>
            <li><button type="button" class="nav-item" data-category="other-criminal">기타 형사범죄</button></li>
            <li><button type="button" class="nav-item" data-category="real-estate">부동산/임대차</button></li>
            <li><button type="button" class="nav-item" data-category="money-contract">금전/계약 문제</button></li>
            <li><button type="button" class="nav-item" data-category="civil-procedure">민사절차</button></li>
            <li><button type="button" class="nav-item" data-category="other-civil">기타 민사문제</button></li>
            <li><button type="button" class="nav-item" data-category="family">가족</button></li>
            <li><button type="button" class="nav-item" data-category="company">회사</button></li>
            <li><button type="button" class="nav-item" data-category="medical-tax">의료/세금/행정</button></li>
            <li><button type="button" class="nav-item" data-category="it-ip-finance">IT/지식재산/금융</button></li>
          </ul>
        </nav>

        <!-- 우측 카테고리 내용 -->
        <div class="category-content">
            <h1 class="page-title">분야로 변호사를 찾으세요.</h1>
          <!-- 성범죄 -->
          <div class="category-section active" data-category="sexual">
            <div class="category-header">성범죄</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">성매매</div>
                <div class="item-desc">조건만남, 랜덤채팅, 유흥업소, 유사성매매 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">성폭력/강제추행 등</div>
                <div class="item-desc">성폭행, 준강간, 데이트폭력, 성희롱, 성추행 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">미성년 대상 성범죄</div>
                <div class="item-desc">아동청소년보호법, 미성년성매매 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">디지털 성범죄</div>
                <div class="item-desc">통신매체이용음란죄, 웹하드, 몰카, 음란물유포 등</div>
              </div>
            </div>
          </div>

          <!-- 재산범죄 -->
          <div class="category-section" data-category="property">
            <div class="category-header">재산범죄</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">횡령/배임</div>
                <div class="item-desc">업무상 횡령/배임, 신용카드 범죄, 점유이탈물횡령 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">사기/공갈</div>
                <div class="item-desc">보이스피싱, 명의 대여/도용, 유사수신, 중고사기 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">기타 재산범죄</div>
                <div class="item-desc">절도, 주거침입, 재물손괴, 장물 등</div>
              </div>
            </div>
          </div>

          <!-- 교통사고/범죄 -->
          <div class="category-section" data-category="traffic">
            <div class="category-header">교통사고/범죄</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">교통사고/도주</div>
                <div class="item-desc">교통사고 합의, 손해사정, 뺑소니, 보복운전 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">음주/무면허</div>
                <div class="item-desc">음주운전, 음주사고, 무면허운전 등</div>
              </div>
            </div>
          </div>

          <!-- 형사절차 -->
          <div class="category-section" data-category="criminal-procedure">
            <div class="category-header">형사절차</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">고소/소송절차</div>
                <div class="item-desc">합의, 무혐의, 공소시효, 고소대리, 약식명령, 즉결심판 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">수사/체포/구속</div>
                <div class="item-desc">체포/구속, 현행범, 영장, 압수수색, 포렌식 등</div>
              </div>
            </div>
          </div>

          <!-- 폭행/협박 -->
          <div class="category-section" data-category="assault">
            <div class="category-header">폭행/협박</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">폭행/협박/상해 일반</div>
                <div class="item-desc">폭행, 협박, 상해, 감금, 유기, 학대, 과실치사상, 공무집행방해 등</div>
              </div>
            </div>
          </div>

          <!-- 명예훼손/모욕 -->
          <div class="category-section" data-category="defamation">
            <div class="category-header">명예훼손/모욕</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">명예훼손/모욕 일반</div>
                <div class="item-desc">명예훼손죄, 모욕죄, 허위사실유포, 언어폭력 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">사이버 명예훼손/모욕</div>
                <div class="item-desc">정보통신망법, 악성댓글 등</div>
              </div>
            </div>
          </div>

          <!-- 기타 형사범죄 -->
          <div class="category-section" data-category="other-criminal">
            <div class="category-header">기타 형사범죄</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">마약/도박</div>
                <div class="item-desc">향정신성의약품, 대마, 사설토토, 사행성게임, 원정도박 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">소년범죄/학교폭력</div>
                <div class="item-desc">아동학대, 학교폭력, 왕따, 소년사건 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">형사일반/기타범죄</div>
                <div class="item-desc">위증, 무고, 뇌물, 문서위조, 스토킹, 실화/방화 등</div>
              </div>
            </div>
          </div>

          <!-- 부동산/임대차 -->
          <div class="category-section" data-category="real-estate">
            <div class="category-header">부동산/임대차</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">건축/부동산 일반</div>
                <div class="item-desc">건축법, 하자담보책임, 누수, 층간소음, 공사대금 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">재개발/재건축</div>
                <div class="item-desc">재개발, 재건축, 지역주택조합, 수용, 보상 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">매매/소유권 등</div>
                <div class="item-desc">부동산매매, 유치권, 지상권, 경매, 명도소송, 명의신탁 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">임대차</div>
                <div class="item-desc">주택/상가임대차, 계약금, 권리금, 보증금, 전세계약 등</div>
              </div>
            </div>
          </div>

          <!-- 금전/계약 문제 -->
          <div class="category-section" data-category="money-contract">
            <div class="category-header">금전/계약 문제</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">손해배상</div>
                <div class="item-desc">손해배상청구, 정신적피해보상, 위자료, 불법행위, 과실 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">대여금/채권추심</div>
                <div class="item-desc">대여금반환청구, 채권압류 및 추심, 연대보증 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">계약일반/매매</div>
                <div class="item-desc">계약해지, 계약서검토, 계약금, 중도금, 이중계약, 중고차매매 등</div>
              </div>
            </div>
          </div>

          <!-- 민사절차 -->
          <div class="category-section" data-category="civil-procedure">
            <div class="category-header">민사절차</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">소송/집행절차</div>
                <div class="item-desc">지급명령, 등기/등록, 조정/화해/중재, 재심, 공탁 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">가압류/가처분</div>
                <div class="item-desc">가처분/가압류 절차, 가등기, 이의신청, 취소 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">회생/파산</div>
                <div class="item-desc">개인회생, 법인회생, 파산, 도산, 면책 등</div>
              </div>
            </div>
          </div>

          <!-- 기타 민사문제 -->
          <div class="category-section" data-category="other-civil">
            <div class="category-header">기타 민사문제</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">공증/내용증명/조합/국제문제 등</div>
                <div class="item-desc">증여, 도급/용역, 조합/사단, 부당이득, 국제, 종교, 공증 등</div>
              </div>
            </div>
          </div>

          <!-- 가족 -->
          <div class="category-section" data-category="family">
            <div class="category-header">가족</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">이혼</div>
                <div class="item-desc">합의이혼, 재판이혼, 재산분할, 양육권, 상간, 위자료, 외도 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">상속</div>
                <div class="item-desc">상속재산분할, 증여세, 유류분, 한정승인, 상속포기 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">가사 일반</div>
                <div class="item-desc">친족, 성년후견, 부양료, 친자확인, 친권, 가사소송 등</div>
              </div>
            </div>
          </div>

          <!-- 회사 -->
          <div class="category-section" data-category="company">
            <div class="category-header">회사</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">기업법무</div>
                <div class="item-desc">경업금지, 합병, 영업양도, 스타트업, 계약서검토, 부정경쟁방지법 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">노동/인사</div>
                <div class="item-desc">노무, 직장 내 괴롭힘, 임금체불, 부당해고, 실업급여, 산업재해보상 등</div>
              </div>
            </div>
          </div>

          <!-- 의료/세금/행정 -->
          <div class="category-section" data-category="medical-tax">
            <div class="category-header">의료/세금/행정</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">세금/행정/헌법</div>
                <div class="item-desc">세금, 과태료, 환경, 인허가, 헌법, 이민/비자, 선거, 언론/방송, 행정소송 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">의료/식품의약</div>
                <div class="item-desc">의료사고, 의료소송, 약사법, 식품위생법 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">병역/군형법</div>
                <div class="item-desc">국방/병역, 군형법, 유공자/보훈, 군인징계 등</div>
              </div>
            </div>
          </div>

          <!-- IT/지식재산/금융 -->
          <div class="category-section" data-category="it-ip-finance">
            <div class="category-header">IT/지식재산/금융</div>
            <div class="category-grid">
              <div class="category-item">
                <div class="item-title">소비자/공정거래</div>
                <div class="item-desc">소비자피해, 집단소송, 전자상거래, 불공정거래, 약관, 허위/과대광고 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">IT/개인정보</div>
                <div class="item-desc">개인정보유출/침해, 감청, 통신비밀보호법, 인공지능, SNS 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">지식재산권/엔터</div>
                <div class="item-desc">상표권, 저작권, 특허, 방송, 음악, 영화 등</div>
              </div>
              <div class="category-item">
                <div class="item-title">금융/보험</div>
                <div class="item-desc">가상화폐, 투자, 마진거래, 보험 등</div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- 지역별 찾기 탭 -->
    <div class="tab-content" id="region-tab">
      <!-- 지역별 찾기 섹션 -->
      <section class="region-search-section" aria-label="지역별 변호사 찾기">
      <h1 class="page-title">지역으로 변호사를 찾으세요.</h1>
      <div class="region-content">
        <p>지역별 찾기 기능은 개발 예정입니다.</p>
      </div>
      </section>
    </div>
  </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // 탭 스위처 기능
  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      const targetTab = this.getAttribute('data-tab');
      
      // 모든 탭 비활성화
      tabBtns.forEach(b => b.classList.remove('active'));
      tabContents.forEach(c => c.classList.remove('active'));
      
      // 선택된 탭 활성화
      this.classList.add('active');
      document.getElementById(targetTab + '-tab').classList.add('active');
    });
  });

  // 카테고리 네비게이션 기능
  const navItems = document.querySelectorAll('.nav-item');
  const categorySections = document.querySelectorAll('.category-section');

  navItems.forEach(item => {
    item.addEventListener('click', function() {
      const targetCategory = this.getAttribute('data-category');
      
      // 모든 네비게이션 아이템 비활성화
      navItems.forEach(nav => nav.classList.remove('active'));
      categorySections.forEach(section => section.classList.remove('active'));
      
      // 선택된 네비게이션 아이템과 섹션 활성화
      this.classList.add('active');
      document.querySelector(`[data-category="${targetCategory}"]`).classList.add('active');
    });
  });
});
</script>
@endsection
