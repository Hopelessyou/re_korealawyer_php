@extends('layouts.app')

@section('title', '변호사 찾기')

@section('content')
<div class="page-header" style="margin-bottom: 2rem;">
    <h1 style="font-size: 2rem; color: #1f2937;">변호사 찾기</h1>
    <p style="color: #6b7280;">전문 분야별로 나에게 맞는 변호사를 찾아보세요</p>
</div>

<form class="search-form" method="get" action="{{ route('lawyers.search') }}">
    <input name="query" placeholder="변호사명, 전문분야, 지역으로 검색" value="{{ request('query') }}">
    <button type="submit">검색</button>
</form>

<div class="lawyers-grid grid">
    @forelse($lawyers ?? [] as $lawyer)
        <div class="card lawyer-card">
            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                <div style="width: 60px; height: 60px; background: #e5e7eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                    <span style="font-size: 1.5rem; color: #6b7280;">👨‍💼</span>
                </div>
                <div>
                    <h3 style="color: #3b82f6; margin-bottom: 0.25rem;">{{ $lawyer->name }}</h3>
                    <p style="color: #6b7280; font-size: 0.875rem;">변호사</p>
                </div>
            </div>
            
            @if($lawyer->lawyerProfile)
                <div style="margin-bottom: 1rem;">
                    <p style="color: #6b7280; font-size: 0.875rem;">
                        <strong>사번:</strong> {{ $lawyer->lawyerProfile->license_no }}
                    </p>
                </div>
            @endif
            
            <div style="margin-bottom: 1rem;">
                <p style="color: #6b7280; font-size: 0.875rem;">
                    <strong>소속:</strong> 
                    @if($lawyer->memberships->isNotEmpty())
                        {{ $lawyer->memberships->first()->org->name ?? '개인변호사' }}
                    @else
                        개인변호사
                    @endif
                </p>
            </div>
            
            <a href="{{ route('lawyers.show', $lawyer->id) }}" class="btn" style="width: 100%; text-align: center;">상세보기</a>
        </div>
    @empty
        <div class="card" style="text-align: center; color: #6b7280; grid-column: 1 / -1;">
            <p>등록된 변호사가 없습니다.</p>
        </div>
    @endforelse
</div>

@if(isset($lawyers) && $lawyers->hasPages())
    <div style="margin-top: 2rem;">
        {{ $lawyers->links() }}
    </div>
@endif
@endsection
