@extends('layouts.app')

@section('title', '커뮤니티')

@section('content')
<div class="container">
    <h1>커뮤니티</h1>
    <p>법률 관련 커뮤니티 페이지입니다.</p>
    
    <div class="community-sections">
        <div class="section">
            <h2>자유게시판</h2>
            <p>법률 관련 자유로운 토론과 정보 공유</p>
        </div>
        
        <div class="section">
            <h2>법률정보 공유</h2>
            <p>유용한 법률 정보와 경험담 공유</p>
        </div>
        
        <div class="section">
            <h2>변호사 후기</h2>
            <p>변호사 이용 후기와 추천</p>
        </div>
    </div>
</div>
@endsection
