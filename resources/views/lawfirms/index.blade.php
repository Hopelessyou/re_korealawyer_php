@extends('layouts.app')

@section('title', '로펌 목록')

@section('content')
<div class="page-header" style="margin-bottom: 2rem;">
    <h1 style="font-size: 2rem; color: #1f2937;">로펌 목록</h1>
    <p style="color: #6b7280;">전국 주요 로펌의 정보와 소속 변호사를 확인하세요</p>
</div>

<div class="lawfirms-grid grid">
    @forelse($firms ?? [] as $firm)
        <div class="card lawfirm-card">
            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                <div style="width: 60px; height: 60px; background: #e5e7eb; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                    <span style="font-size: 1.5rem; color: #6b7280;">🏢</span>
                </div>
                <div>
                    <h3 style="color: #3b82f6; margin-bottom: 0.25rem;">{{ $firm->name }}</h3>
                    <p style="color: #6b7280; font-size: 0.875rem;">로펌</p>
                </div>
            </div>
            
            @if($firm->lawfirmProfile && $firm->lawfirmProfile->intro)
                <div style="margin-bottom: 1rem;">
                    <p style="color: #6b7280; font-size: 0.875rem; line-height: 1.5;">
                        {{ Str::limit($firm->lawfirmProfile->intro, 100) }}
                    </p>
                </div>
            @endif
            
            <div style="display: flex; gap: 0.5rem; margin-bottom: 1rem;">
                <a href="{{ route('lawfirms.members', $firm->slug) }}" class="btn" style="flex: 1; text-align: center; font-size: 0.875rem;">소속변호사</a>
                <a href="{{ route('lawfirms.cases', $firm->slug) }}" class="btn" style="flex: 1; text-align: center; font-size: 0.875rem;">해결사례</a>
            </div>
            
            <a href="{{ route('lawfirms.show', $firm->slug) }}" class="btn" style="width: 100%; text-align: center;">상세보기</a>
        </div>
    @empty
        <div class="card" style="text-align: center; color: #6b7280; grid-column: 1 / -1;">
            <p>등록된 로펌이 없습니다.</p>
        </div>
    @endforelse
</div>

@if(isset($firms) && $firms->hasPages())
    <div style="margin-top: 2rem;">
        {{ $firms->links() }}
    </div>
@endif
@endsection
