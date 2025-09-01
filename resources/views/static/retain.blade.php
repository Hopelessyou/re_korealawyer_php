@extends('layouts.app')

@section('title', '단계별 선임 - 변호사닷컴')

@section('content')
<div class="frame" aria-label="단계별 선임">
  <h1 class="title">단계별 선임으로 필요한 서비스만 이용해 보세요.</h1>

  <div class="tabs" role="tablist">
    <button class="tab active" aria-selected="true">형사</button>
    <button class="tab" aria-selected="false">민사</button>
  </div>
  <p class="subtitle">필요한 단계만 선택해 빠르게 진행하세요 — 불필요한 비용과 시간을 줄여드립니다.</p>

  <!-- 주요 분야 아이콘 라인(형사) -->
  <div class="cats criminal-cats" aria-label="주요 분야">
    <span class="chip"><span class="ico"></span>형사·범죄</span>
    <span class="chip"><span class="ico"></span>사기·횡령</span>
    <span class="chip"><span class="ico"></span>성범죄</span>
    <span class="chip"><span class="ico"></span>음주·교통사고</span>
    <span class="chip"><span class="ico"></span>형사절차</span>
    <span class="chip"><span class="ico"></span>민사</span>
    <span class="chip"><span class="ico"></span>금전·계약</span>
    <span class="chip"><span class="ico"></span>이혼·가정</span>
    <span class="chip"><span class="ico"></span>부동산·임대차</span>
    <span class="chip"><span class="ico"></span>상속</span>
  </div>

  <!-- 주요 분야 아이콘 라인(민사) -->
  <div class="cats civil-cats" aria-label="주요 분야" style="display: none;">
    <span class="chip"><span class="ico"></span>금전청구</span>
    <span class="chip"><span class="ico"></span>부동산</span>
    <span class="chip"><span class="ico"></span>손해배상청구</span>
    <span class="chip"><span class="ico"></span>이혼(재판상 이혼)</span>
    <span class="chip"><span class="ico"></span>친권·양육권</span>
    <span class="chip"><span class="ico"></span>계약해제·해지·손해배상</span>
    <span class="chip"><span class="ico"></span>보험금청구 구상금청구</span>
  </div>

  <!-- 3단 단계 카드 (형사) -->
  <div class="cols criminal-content">
    <!-- 1단계 -->
    <section class="col" aria-label="경찰 조사 단계">
      <div class="colhead"><span class="badge">1</span> <div><div class="coltitle">경찰 조사 단계</div><div class="coldesc">초동수사 및 의뢰인 인정여부 결정</div></div></div>

      <div class="group" id="complaint">
        <div class="glabel">고소/고발 접수</div>
        <div class="list" role="radiogroup" aria-label="고소/고발 접수">
          <button type="button" class="pill option" role="radio" aria-checked="false">형사 사건 상담</button>
          <button type="button" class="pill option" role="radio" aria-checked="false">고소장 작성</button>
          <button type="button" class="pill option" role="radio" aria-checked="false">소장 접수 대행</button>
        </div>
      </div>

      <div class="group">
        <div class="glabel">수사 개시 및 피의자 신분 전환</div>
        <div class="list">
          <div class="pill">피의자 조사 입회</div>
          <div class="pill">체포/구속 긴급대응</div>
        </div>
      </div>

      <div class="group">
        <div class="glabel">수사 종결</div>
        <div class="list">
          <div class="pill">혐의없음 합의</div>
          <div class="pill">합의서 작성</div>
        </div>
      </div>
    </section>

    <!-- 2단계 -->
    <section class="col" aria-label="검찰 조사 단계">
      <div class="colhead"><span class="badge">2</span> <div><div class="coltitle">검찰 조사 단계</div><div class="coldesc">보완수사 및 기소 여부 최종 결정</div></div></div>

      <div class="group">
        <div class="glabel">사건 송치</div>
        <div class="list">
          <div class="pill">검찰 조사 입회</div>
          <div class="pill">구속영장실질심사 변호</div>
        </div>
      </div>

      <div class="group">
        <div class="glabel">검찰 보완 수사</div>
        <div class="list">
          <div class="pill">보석 신청</div>
          <div class="pill">피해자와의 합의 대리</div>
        </div>
      </div>

      <div class="group">
        <div class="glabel">수사 종결</div>
        <div class="list">
          <div class="pill">합의로 기소유예</div>
          <div class="pill">반성문/탄원서 작성</div>
        </div>
      </div>
    </section>

    <!-- 3단계 -->
    <section class="col" aria-label="공판(법원) 단계">
      <div class="colhead"><span class="badge">3</span> <div><div class="coltitle">공판(법원)단계</div><div class="coldesc">유무죄 및 형량 판단</div></div></div>

      <div class="group">
        <div class="glabel">공판 준비</div>
        <div class="list">
          <div class="pill">형사 공판 준비</div>
          <div class="pill">탄원서/반성문 작성</div>
        </div>
      </div>

      <div class="group">
        <div class="glabel">공판 절차</div>
        <div class="list">
          <div class="pill">증거조사/증인신문</div>
          <div class="pill">형사 재판 출석 변호</div>
          <div class="pill">양형자료 수집·제출</div>
        </div>
      </div>

      <div class="group">
        <div class="glabel">판결 및 상소</div>
        <div class="list">
          <div class="pill">항소·이유서 작성</div>
          <div class="pill">상고 이유서 작성</div>
        </div>
      </div>
    </section>
  </div>

  <!-- 3단 단계 카드 (민사) -->
  <div class="cols civil-content" style="display: none;">
    <!-- 1단계 -->
    <section class="col" aria-label="소송 전 단계">
      <div class="colhead"><span class="badge">1</span> <div><div class="coltitle">소송 전 단계</div><div class="coldesc">소송 진행 전 사전 준비</div></div></div>

      <div class="group">
        <div class="glabel">소송 서류 준비</div>
        <div class="list" role="radiogroup" aria-label="소송 서류 준비">
          <button type="button" class="pill option" role="radio" aria-checked="false">피해 범위, 보상액 등 산정</button>
          <button type="button" class="pill option" role="radio" aria-checked="false">소장 작성</button>
          <button type="button" class="pill option" role="radio" aria-checked="false">답변서 작성</button>
        </div>
      </div>

      <div class="group">
        <div class="glabel">보전 처분</div>
        <div class="list">
          <div class="pill">소송 전 재산 처분 방지</div>
          <div class="pill">가처분</div>
          <div class="pill">가압류</div>
        </div>
      </div>

      <div class="group">
        <div class="glabel">기타</div>
        <div class="list">
          <div class="pill">기타 소송</div>
          <div class="pill">소액심판청구(3,000만원 이하)</div>
        </div>
      </div>
    </section>

    <!-- 2단계 -->
    <section class="col" aria-label="소송 단계">
      <div class="colhead"><span class="badge">2</span> <div><div class="coltitle">소송 단계</div><div class="coldesc">재판 진행 중</div></div></div>

      <div class="group">
        <div class="glabel">재판 대응</div>
        <div class="list">
          <div class="pill">법적 분쟁에 대한 조치</div>
          <div class="pill">쟁점 및 증거 정리</div>
          <div class="pill">변호사 재판 출석</div>
          <div class="pill">조정 절차 대리인</div>
        </div>
      </div>
    </section>

    <!-- 3단계 -->
    <section class="col" aria-label="판결 및 집행절차">
      <div class="colhead"><span class="badge">3</span> <div><div class="coltitle">판결 및 집행절차</div><div class="coldesc">최종 판결</div></div></div>

      <div class="group">
        <div class="glabel">판결 후 대응 절차</div>
        <div class="list">
          <div class="pill">승소, 패소시 대응</div>
          <div class="pill">항소이유서 작성</div>
          <div class="pill">상고 이유서 작성</div>
          <div class="pill">강제집행</div>
        </div>
      </div>
    </section>
  </div>

  <div class="footer"><button class="next">다음 →</button></div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/retain.js') }}?v={{ filemtime(public_path('js/retain.js')) }}"></script>
@endsection
