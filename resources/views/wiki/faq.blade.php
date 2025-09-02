@extends('layouts.app')

@section('title', '위키 - FAQ')

@section('content')
<!-- 상단 네비게이션 탭 -->
<nav class="nav-tabs" role="tablist" aria-label="위키 카테고리">
  <a href="{{ route('wiki.index') }}" class="nav-tab" role="tab" aria-selected="false">
    홈
  </a>
  <a href="{{ route('wiki.field') }}" class="nav-tab" role="tab" aria-selected="false">
    분야
  </a>
  <a href="{{ route('wiki.precedent') }}" class="nav-tab" role="tab" aria-selected="false">
    판례
  </a>
  <a href="{{ route('wiki.form') }}" class="nav-tab" role="tab" aria-selected="false">
    서식
  </a>
  <a href="{{ route('wiki.faq') }}" class="nav-tab active" role="tab" aria-selected="true">
    FAQ
  </a>
  <a href="{{ route('wiki.terms') }}" class="nav-tab" role="tab" aria-selected="false">
    용어
  </a>
</nav>

<!-- FAQ 콘텐츠 -->
<div class="wiki-content-area">
  <h1>자주 묻는 질문 (FAQ)</h1>
  <p>법률 관련 자주 묻는 질문과 답변을 정리했습니다.</p>
  
  <!-- FAQ 분야별 -->
  <div class="faq-sections">
    <section class="faq-section">
      <h2>형사 관련 FAQ</h2>
      <div class="faq-list">
        <article class="faq-item">
          <h3>음주운전 단속에 걸렸을 때 어떻게 해야 하나요?</h3>
          <p>음주운전 단속 시 즉시 측정을 거부하지 말고, 변호사와 상담하여 적절한 대응 방안을 마련해야 합니다.</p>
        </article>
        <article class="faq-item">
          <h3>경찰조사 시 변호사 동석이 가능한가요?</h3>
          <p>네, 경찰조사 시 변호사 동석이 가능합니다. 본인의 권리이므로 적극적으로 요청하세요.</p>
        </article>
      </div>
    </section>
    
    <section class="faq-section">
      <h2>민사 관련 FAQ</h2>
      <div class="faq-list">
        <article class="faq-item">
          <h3>전세금을 못 받을 때 어떻게 해야 하나요?</h3>
          <p>전세금 반환 소송을 제기하여 법적 절차를 통해 해결할 수 있습니다.</p>
        </article>
        <article class="faq-item">
          <h3>교통사고 손해배상은 어떻게 계산되나요?</h3>
          <p>의료비, 휴업손실, 위자료 등을 종합적으로 고려하여 계산됩니다.</p>
        </article>
      </div>
    </section>
  </div>
</div>

<!-- 면책 공지 -->
@include('components.wiki-disclaimer')

@endsection
