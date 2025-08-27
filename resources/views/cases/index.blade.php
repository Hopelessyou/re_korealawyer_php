@extends('layouts.app')

@section('title', '해결사례')

@section('content')
<div class="page-header" style="margin-bottom: 2rem;">
    <h1 style="font-size: 2rem; color: #1f2937;">해결사례</h1>
    <p style="color: #6b7280;">실제 해결된 법률 사례들을 통해 유사한 문제의 해결 방법을 참고하세요</p>
</div>

<div style="display: flex; gap: 1rem; margin-bottom: 2rem; flex-wrap: wrap;">
    <a href="{{ route('cases.list') }}" class="btn">전체 사례 보기</a>
    @auth
        @if(auth()->user()->lawyerProfile)
            <a href="#" class="btn" onclick="showCaseForm()">새 사례 등록</a>
        @endif
    @endauth
</div>

<div class="stats" style="background: #f8fafc; padding: 2rem; border-radius: 0.5rem; margin-bottom: 3rem;">
    <h2 style="text-align: center; margin-bottom: 2rem;">사례 통계</h2>
    <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
        <div style="text-align: center;">
            <div style="font-size: 2rem; font-weight: bold; color: var(--primary);">형사</div>
            <div style="color: #6b7280;">사례 수</div>
        </div>
        <div style="text-align: center;">
            <div style="font-size: 2rem; font-weight: bold; color: var(--primary);">민사</div>
            <div style="color: #6b7280;">사례 수</div>
        </div>
        <div style="text-align: center;">
            <div style="font-size: 2rem; font-weight: bold; color: var(--primary);">가사</div>
            <div style="color: #6b7280;">사례 수</div>
        </div>
        <div style="text-align: center;">
            <div style="font-size: 2rem; font-weight: bold; color: var(--primary);">기타</div>
            <div style="color: #6b7280;">사례 수</div>
        </div>
    </div>
</div>

<div class="featured-cases">
    <h2 style="margin-bottom: 2rem;">주요 해결사례</h2>
    <div class="grid">
        <div class="card">
            <h3 style="color: var(--primary); margin-bottom: 1rem;">형사사건 - 무죄판결</h3>
            <p style="color: #6b7280; margin-bottom: 1rem;">폭행 혐의로 기소된 사건에서 무죄판결을 받은 사례입니다.</p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span style="color: #6b7280; font-size: 0.875rem;">서울중앙지방법원</span>
                <a href="#" class="btn" style="font-size: 0.875rem;">상세보기</a>
            </div>
        </div>
        
        <div class="card">
            <h3 style="color: var(--primary); margin-bottom: 1rem;">민사사건 - 손해배상</h3>
            <p style="color: #6b7280; margin-bottom: 1rem;">교통사고 손해배상 사건에서 피해자에게 유리한 판결을 받은 사례입니다.</p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span style="color: #6b7280; font-size: 0.875rem;">부산지방법원</span>
                <a href="#" class="btn" style="font-size: 0.875rem;">상세보기</a>
            </div>
        </div>
        
        <div class="card">
            <h3 style="color: var(--primary); margin-bottom: 1rem;">가사사건 - 이혼</h3>
            <p style="color: #6b7280; margin-bottom: 1rem;">이혼 소송에서 양육권과 재산분할을 성공적으로 해결한 사례입니다.</p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span style="color: #6b7280; font-size: 0.875rem;">대구가정법원</span>
                <a href="#" class="btn" style="font-size: 0.875rem;">상세보기</a>
            </div>
        </div>
    </div>
</div>

@auth
    @if(auth()->user()->lawyerProfile)
    <div id="caseForm" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 2rem; border-radius: 0.5rem; width: 90%; max-width: 600px;">
            <h3>새 해결사례 등록</h3>
            <form method="post" action="{{ route('cases.store') }}">
                @csrf
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">제목</label>
                    <input type="text" name="title" required style="width: 100%; padding: 0.5rem; border: 1px solid #d1d5db; border-radius: 0.375rem;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">요약</label>
                    <textarea name="summary" required rows="3" style="width: 100%; padding: 0.5rem; border: 1px solid #d1d5db; border-radius: 0.375rem;"></textarea>
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">상세 내용</label>
                    <textarea name="body" required rows="8" style="width: 100%; padding: 0.5rem; border: 1px solid #d1d5db; border-radius: 0.375rem;"></textarea>
                </div>
                <div style="display: flex; gap: 1rem; justify-content: flex-end;">
                    <button type="button" onclick="hideCaseForm()" class="btn btn-secondary">취소</button>
                    <button type="submit" class="btn">등록</button>
                </div>
            </form>
        </div>
    </div>

    <script>
    function showCaseForm() {
        document.getElementById('caseForm').style.display = 'block';
    }
    function hideCaseForm() {
        document.getElementById('caseForm').style.display = 'none';
    }
    </script>
    @endif
@endauth
@endsection
