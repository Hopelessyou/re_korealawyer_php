@extends('layouts.app')

@section('title', '커뮤니티 — 변호사닷컴')

@section('content')
<div class="container layout">
    <!-- 좌측 사이드바 -->
    <aside class="aside-left">
        <div class="nav-block card">
            <div class="card__header">
                <h3 class="section-title">사례</h3>
            </div>
            <div class="card__body">
                <ul class="vlist">
                    <li><a href="#"><span class="dot"></span>변호사 썰</a></li>
                    <li><a href="#"><span class="dot"></span>재판 후기</a></li>
                </ul>
            </div>
        </div>

        <div class="nav-block card">
            <div class="card__header">
                <h3 class="section-title">참여</h3>
            </div>
            <div class="card__body">
                <ul class="vlist">
                    <li><a href="#"><span class="dot"></span>투표하기</a></li>
                    <li><a href="#"><span class="dot"></span>찬반토론</a></li>
                    <li><a href="{{ route('community.board') }}"><span class="dot"></span>신문고</a></li>
                    <li><a href="{{ route('community.board') }}"><span class="dot"></span>자유게시판</a></li>
                </ul>
            </div>
        </div>

        <div class="nav-block card">
            <div class="card__header">
                <h3 class="section-title">상담</h3>
            </div>
            <div class="card__body">
                <ul class="vlist">
                    <li><a href="{{ route('community.board') }}"><span class="dot"></span>형사/범죄</a></li>
                    <li><a href="#"><span class="dot"></span>가족/이혼</a></li>
                    <li><a href="#"><span class="dot"></span>기타 민사</a></li>
                    <li><a href="#"><span class="dot"></span>노동(노무)</a></li>
                    <li><a href="#"><span class="dot"></span>부동산</a></li>
                    <li><a href="#"><span class="dot"></span>교통사고</a></li>
                    <li><a href="#"><span class="dot"></span>의료사고</a></li>
                    <li><a href="#"><span class="dot"></span>코인/NFT 등</a></li>
                </ul>
            </div>
        </div>

        <div class="nav-block card">
            <div class="card__header">
                <h3 class="section-title">SOS</h3>
            </div>
            <div class="card__body">
                <ul class="vlist">
                    <li><a href="#"><span class="dot"></span>체포/긴급체포</a></li>
                    <li><a href="#"><span class="dot"></span>압수수색</a></li>
                    <li><a href="#"><span class="dot"></span>가처분(접근금지/점유/집행정지)</a></li>
                    <li><a href="#"><span class="dot"></span>음주운전(단숙 직후/사고포함)</a></li>
                </ul>
            </div>
        </div>
    </aside>

    <!-- 메인 컬럼 -->
    <main class="maincol">
        <h1 class="page-title">커뮤니티</h1>
        
        <!-- 투표 섹션 -->
        <div class="card poll">
            <div class="card__body">
                <h2 class="lead">이번 주 법률 토론 주제</h2>
                <p class="desc">음주운전 단속 강화에 대한 여러분의 의견을 들려주세요. 현재 법률의 적절성과 개선 방안에 대해 토론해보겠습니다.</p>
                <div class="vote-grid">
                    <div class="vote">
                        <h3>강화해야 한다</h3>
                        <p class="desc">현재 처벌이 너무 약하다고 생각합니다. 더 강력한 제재가 필요합니다.</p>
                        <button class="btn btn--green">투표하기</button>
                    </div>
                    <div class="vote">
                        <h3>현재 수준이 적절하다</h3>
                        <p class="desc">현재 처벌 수준이 적절하다고 생각합니다. 추가 강화는 불필요합니다.</p>
                        <button class="btn btn--green">투표하기</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- 토론 및 신문고 -->
        <div class="boards">
            <div class="board">
                <div class="board__header">
                    <h3 class="board__title">찬반토론</h3>
                </div>
                <div class="card__body">
                    <h4>형사사건에서 피해자 진술의 증거능력</h4>
                    <p class="desc">피해자의 진술이 얼마나 신뢰할 수 있는지, 어떤 경우에 증거로 채택되어야 하는지에 대한 의견을 나누어보세요.</p>
                    <a href="#" class="btn">참여하기</a>
                </div>
            </div>
            <div class="board">
                <div class="board__header">
                    <h3 class="board__title">신문고</h3>
                </div>
                <div class="card__body">
                    <h4>법원 업무 처리 지연 문제</h4>
                    <p class="desc">재판 지연으로 인한 피해와 개선 방안에 대해 의견을 수렴합니다.</p>
                    <a href="{{ route('community.board') }}" class="btn">자세히 보기</a>
                </div>
            </div>
        </div>

        <!-- HOT 리스트 -->
        <div class="card">
            <div class="card__header">
                <h3 class="section-title">HOT 게시글</h3>
                <a href="{{ route('community.board') }}" class="more">더보기</a>
            </div>
            <div class="card__body">
                <div class="hot">
                    <div class="item">
                        <a href="#" class="title">형사사건에서 변호사 선임의 중요성</a>
                        <div class="meta">
                            <span class="badge badge--field">형사</span>
                            <span>김변호사</span>
                            <span>2024.01.15</span>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#" class="title">이혼 절차와 준비사항 완벽 가이드</a>
                        <div class="meta">
                            <span class="badge badge--field">가족</span>
                            <span>이변호사</span>
                            <span>2024.01.14</span>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#" class="title">교통사고 합의 시 주의사항</a>
                        <div class="meta">
                            <span class="badge badge--field">교통</span>
                            <span>박변호사</span>
                            <span>2024.01.13</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- 우측 사이드바 -->
    <aside class="aside-right">
        <!-- 상담글 쓰기 버튼 -->
        <a href="#" class="cta">상담글 쓰기</a>

        <!-- 변호사 광고 -->
        <div class="card">
            <div class="card__header">
                <h3 class="section-title">추천 변호사</h3>
            </div>
            <div class="card__body">
                <div class="lawyers">
                    <div class="lawyer">
                        <div class="avatar">김</div>
                        <div>
                            <div class="title">김형사 변호사</div>
                            <div class="muted">형사사건 전문, 15년 경력</div>
                        </div>
                    </div>
                    <div class="lawyer">
                        <div class="avatar">이</div>
                        <div>
                            <div class="title">이가족 변호사</div>
                            <div class="muted">가족사건 전문, 12년 경력</div>
                        </div>
                    </div>
                    <div class="lawyer">
                        <div class="avatar">박</div>
                        <div>
                            <div class="title">박민사 변호사</div>
                            <div class="muted">민사사건 전문, 18년 경력</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 키워드 태그 -->
        <div class="card">
            <div class="card__header">
                <h3 class="section-title">인기 키워드</h3>
            </div>
            <div class="card__body">
                <div class="chips">
                    <a href="#" class="tag"># 형사사건</a>
                    <a href="#" class="tag"># 이혼</a>
                    <a href="#" class="tag"># 교통사고</a>
                    <a href="#" class="tag"># 부동산</a>
                    <a href="#" class="tag"># 노동법</a>
                    <a href="#" class="tag"># 의료사고</a>
                </div>
            </div>
        </div>

        <!-- 광고 영역 -->
        <div class="ad">
            <h4>법률 상담 광고</h4>
            <p>전문 변호사와 상담하세요</p>
        </div>
    </aside>
</div>
@endsection
