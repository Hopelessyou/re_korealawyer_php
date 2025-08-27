@extends('layouts.app')

@section('title', '변호사닷컴 - 메인')

@section('content')
<div class="hero" style="text-align: center; padding: 3rem 0; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 0.5rem; margin-bottom: 3rem;">
    <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">변호사닷컴</h1>
    <p style="font-size: 1.2rem; margin-bottom: 2rem;">법률 문제 해결을 위한 종합 플랫폼</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="{{ route('qna.index') }}" class="btn" style="background: white; color: #667eea;">무료 법률상담</a>
        <a href="{{ route('lawyers.index') }}" class="btn" style="background: rgba(255,255,255,0.2); color: white; border: 1px solid white;">변호사 찾기</a>
    </div>
</div>

<div class="features grid">
    <div class="card">
        <h3 style="color: #3b82f6; margin-bottom: 1rem;">📋 무료 법률상담</h3>
        <p>전문 변호사들이 답변하는 무료 Q&A 서비스입니다. 법률 문제에 대한 전문적인 조언을 받아보세요.</p>
        <a href="{{ route('qna.index') }}" class="btn" style="margin-top: 1rem;">상담하기</a>
    </div>

    <div class="card">
        <h3 style="color: #3b82f6; margin-bottom: 1rem;">👨‍💼 변호사 찾기</h3>
        <p>전문 분야별로 검색하여 나에게 맞는 변호사를 찾을 수 있습니다. 상세한 프로필과 경력을 확인하세요.</p>
        <a href="{{ route('lawyers.index') }}" class="btn" style="margin-top: 1rem;">변호사 찾기</a>
    </div>

    <div class="card">
        <h3 style="color: #3b82f6; margin-bottom: 1rem;">🏢 로펌 정보</h3>
        <p>전국 주요 로펌의 정보와 소속 변호사, 해결사례를 확인할 수 있습니다.</p>
        <a href="{{ route('lawfirms.index') }}" class="btn" style="margin-top: 1rem;">로펌 보기</a>
    </div>

    <div class="card">
        <h3 style="color: #3b82f6; margin-bottom: 1rem;">📚 해결사례</h3>
        <p>실제 해결된 법률 사례들을 통해 유사한 문제의 해결 방법을 참고할 수 있습니다.</p>
        <a href="{{ route('cases.index') }}" class="btn" style="margin-top: 1rem;">사례 보기</a>
    </div>

    <div class="card">
        <h3 style="color: #3b82f6; margin-bottom: 1rem;">📄 법률문서</h3>
        <p>다양한 법률 서식과 문서 검토 서비스를 제공합니다. 전문가의 검토를 받아보세요.</p>
        <a href="{{ route('forms.index') }}" class="btn" style="margin-top: 1rem;">문서 서비스</a>
    </div>

    <div class="card">
        <h3 style="color: #3b82f6; margin-bottom: 1rem;">📖 법률정보</h3>
        <p>법률 위키를 통해 다양한 법률 정보와 지식을 쉽게 찾아볼 수 있습니다.</p>
        <a href="{{ route('wiki.index') }}" class="btn" style="margin-top: 1rem;">정보 보기</a>
    </div>
</div>

<div class="stats" style="background: #f8fafc; padding: 2rem; border-radius: 0.5rem; margin-top: 3rem;">
    <h2 style="text-align: center; margin-bottom: 2rem;">플랫폼 현황</h2>
    <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
        <div style="text-align: center;">
            <div style="font-size: 2rem; font-weight: bold; color: #3b82f6;">1,234</div>
            <div style="color: #6b7280;">등록 변호사</div>
        </div>
        <div style="text-align: center;">
            <div style="font-size: 2rem; font-weight: bold; color: #3b82f6;">567</div>
            <div style="color: #6b7280;">제휴 로펌</div>
        </div>
        <div style="text-align: center;">
            <div style="font-size: 2rem; font-weight: bold; color: #3b82f6;">8,901</div>
            <div style="color: #6b7280;">해결사례</div>
        </div>
        <div style="text-align: center;">
            <div style="font-size: 2rem; font-weight: bold; color: #3b82f6;">12,345</div>
            <div style="color: #6b7280;">상담 완료</div>
        </div>
    </div>
</div>

<div class="quick-actions" style="margin-top: 3rem;">
    <h2 style="text-align: center; margin-bottom: 2rem;">빠른 시작</h2>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="{{ route('qna.index') }}" class="btn" style="background: #10b981;">질문하기</a>
        <a href="{{ route('lawyers.search') }}" class="btn" style="background: #f59e0b;">변호사 검색</a>
        <a href="{{ route('cases.list') }}" class="btn" style="background: #8b5cf6;">사례 보기</a>
        <a href="{{ route('wiki.index') }}" class="btn" style="background: #ef4444;">법률정보</a>
    </div>
</div>
@endsection
