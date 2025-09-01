@extends('layouts.app')

@section('title', '변호사 활동내역 - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/lawyers.css') }}?v={{ filemtime(public_path('css/lawyers.css')) }}">
@endsection

@section('content')
<main class="lawyer-profile-page">
  <div class="lp-nav">
    <a class="lp-nav-item" href="{{ route('lawyers.profile', $id) }}">홈</a>
    <a class="lp-nav-item" href="{{ route('lawyers.profile.services', $id) }}">변호사 서비스</a>
    <a class="lp-nav-item" href="{{ route('lawyers.profile.reviews', $id) }}">이용후기</a>
    <div class="lp-nav-item active">변호사 활동내역</div>
  </div>
  <div class="container">
    <div class="lp-layout">
      <div class="lp-left">
        <x-lp-card>
          <div style="padding:80px 0; text-align:center; color:#90969D;">활동내역 페이지 (빈 페이지)</div>
        </x-lp-card>
      </div>
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


