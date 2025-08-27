@extends('layouts.app')

@section('title', '회원가입')

@section('content')
<div style="max-width: 400px; margin: 0 auto; padding: 2rem;">
    <div class="card">
        <h2 style="text-align: center; margin-bottom: 2rem; color: var(--primary);">회원가입</h2>
        
        <form method="POST" action="/register">
            @csrf
            <div style="margin-bottom: 1rem;">
                <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">이름</label>
                <input type="text" name="name" required style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 0.375rem;">
            </div>
            
            <div style="margin-bottom: 1rem;">
                <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">이메일</label>
                <input type="email" name="email" required style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 0.375rem;">
            </div>
            
            <div style="margin-bottom: 1rem;">
                <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">비밀번호</label>
                <input type="password" name="password" required style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 0.375rem;">
            </div>
            
            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">비밀번호 확인</label>
                <input type="password" name="password_confirmation" required style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 0.375rem;">
            </div>
            
            <button type="submit" class="btn" style="width: 100%; padding: 0.75rem;">회원가입</button>
        </form>
        
        <div style="text-align: center; margin-top: 1.5rem;">
            <p style="color: #6b7280; margin-bottom: 0.5rem;">이미 계정이 있으신가요?</p>
            <a href="/login" style="color: var(--primary); text-decoration: none; font-weight: 600;">로그인</a>
        </div>
    </div>
</div>
@endsection
