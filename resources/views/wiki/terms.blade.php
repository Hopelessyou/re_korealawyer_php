@extends('layouts.app')

@section('title', '위키 - 용어')

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
  <a href="{{ route('wiki.faq') }}" class="nav-tab" role="tab" aria-selected="false">
    FAQ
  </a>
  <a href="{{ route('wiki.terms') }}" class="nav-tab active" role="tab" aria-selected="true">
    용어
  </a>
</nav>

<!-- 용어 콘텐츠 -->
<div class="wiki-content-area">
  <h1>법률 용어 사전</h1>
  <p>법률 관련 주요 용어와 개념을 알파벳 순으로 정리했습니다.</p>
  
  <!-- 용어 알파벳별 -->
  <div class="terms-sections">
    <section class="terms-section">
      <h2>A~D</h2>
      <div class="terms-list">
        <article class="term-item">
          <h3>가압류 (假押留)</h3>
          <p>채무자가 채무를 이행하지 않을 염려가 있을 때, 채권자의 청구에 의하여 법원이 채무자의 재산을 임시로 압류하는 제도</p>
        </article>
        <article class="term-item">
          <h3>가처분 (假處分)</h3>
          <p>채무자가 채무를 이행하지 않을 염려가 있을 때, 채권자의 청구에 의하여 법원이 채무자의 행위를 임시로 금지하거나 명령하는 제도</p>
        </article>
      </div>
    </section>
    
    <section class="terms-section">
      <h2>E~H</h2>
      <div class="terms-list">
        <article class="term-item">
          <h3>위자료 (慰藉料)</h3>
          <p>정신적 고통을 받은 사람에게 그 고통을 위로하기 위해 지급하는 금전적 보상</p>
        </article>
        <article class="term-item">
          <h3>휴업손실 (休業損失)</h3>
          <p>사고로 인해 일을 할 수 없게 되어 발생한 소득상실</p>
        </article>
      </div>
    </section>
  </div>
</div>

<!-- 면책 공지 -->
@include('components.wiki-disclaimer')

@endsection
