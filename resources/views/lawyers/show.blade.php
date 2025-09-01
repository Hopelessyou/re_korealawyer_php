@extends('layouts.app')

@section('title', '변호사 상세 - 변호사닷컴')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/lawyers.css') }}?v={{ filemtime(public_path('css/lawyers.css')) }}">
<link rel="stylesheet" href="{{ asset('css/qna.css') }}?v={{ filemtime(public_path('css/qna.css')) }}">
@endsection

@section('content')
<main class="lawyer-detail-page" aria-label="변호사 상세">
  <div class="ld-top-blank">
    @include('components.keyword-section')
  </div>
  <div class="container">
    <div class="ld-layout">
      <div class="ld-main">
        @include('components.lawyer-list')
        @include('components.lawfirm-section')
      </div>
      @include('components.sidebar')
    </div>
  </div>
</main>
@endsection

@section('scripts')
<script src="{{ asset('js/lawyer-show.js') }}?v={{ filemtime(public_path('js/lawyer-show.js')) }}"></script>
@endsection
