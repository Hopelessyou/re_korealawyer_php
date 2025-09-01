@extends('layouts.app')

@section('title', '변호사찾기 - ' . $slug . ' - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/lawyers.css') }}">
@endsection

@section('content')
<main class="lawyer-search-page" aria-label="변호사 찾기">
  <div class="container">
    <div class="category-page-header">
      <h1 class="page-title">{{ ucfirst(str_replace('-', ' ', $slug)) }} 변호사 찾기</h1>
      <p class="page-description">해당 분야의 전문 변호사를 찾아보세요.</p>
    </div>

    <div class="category-content">
      <div class="category-info">
        <h2>카테고리: {{ ucfirst(str_replace('-', ' ', $slug)) }}</h2>
        <p>이 페이지는 개발 중입니다. 곧 해당 분야의 전문 변호사 목록이 제공될 예정입니다.</p>
      </div>

      <div class="back-link">
        <a href="{{ route('lawyers.index') }}" class="btn-back">← 변호사찾기 메인으로 돌아가기</a>
      </div>
    </div>
  </div>
</main>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
  console.log('카테고리 페이지 로드됨:', '{{ $slug }}');
});
</script>
@endsection
