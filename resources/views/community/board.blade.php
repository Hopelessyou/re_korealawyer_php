@extends('layouts.app')

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
                    <li><a href="#"><span class="dot"></span>신문고</a></li>
                    <li><a href="#"><span class="dot"></span>자유게시판</a></li>
                </ul>
            </div>
        </div>

        <div class="nav-block card">
            <div class="card__header">
                <h3 class="section-title">상담</h3>
            </div>
            <div class="card__body">
                <ul class="vlist">
                    <li><a href="#"><span class="dot"></span>형사/범죄</a></li>
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
        <!-- 게시글 목록 컨테이너 -->
        <div class="post-list-container">
            @for ($i = 1; $i <= 20; $i++)
            <div class="post-item">
                <!-- 제목 -->
                <div class="post-title-section">
                    <div class="post-title">형사/범죄 제목입니다. 형사/범죄 제목입니다. 형사/범죄 제목입니다.</div>
                </div>
                
                <!-- 내용 -->
                <div class="post-content-section">
                    <div class="post-content">형사/범죄 게시물 내용입니다. 형사/범죄 게시물 내용입니다. 형사/범죄 게시물 내용입니다.</div>
                </div>
                
                <!-- 메타 정보 -->
                <div class="post-meta-section">
                    <div class="post-author">작성자</div>
                    <div class="post-separator">·</div>
                    <div class="post-tag"># 음주운전</div>
                    <div class="post-tag"># 경찰조사</div>
                    <div class="post-tag"># 변호사동행</div>
                    <div class="post-tag"># 선임비용</div>
                    <div class="post-separator">·</div>
                    <div class="post-time">2분 전</div>
                </div>
                
                <!-- 상호작용 -->
                <div class="post-interaction-section">
                    <div class="like-section">
                        <div class="like-icon"></div>
                        <div class="like-count">0</div>
                    </div>
                    <div class="comment-section">
                        <div class="comment-icon"></div>
                        <div class="comment-count">0</div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </main>

    <!-- 우측 사이드바 -->
    <aside class="aside-right">
        <!-- 상담글 쓰기 버튼 -->
        <a href="#" class="cta">상담글 쓰기</a>

        <!-- 광고 카드 -->
        <div class="ad-card">
            <img src="https://placehold.co/290x145" alt="광고" class="ad-image">
            <div class="ad-content">
                <h4>법률사무소 유 박성현 대표 변호사</h4>
                <p class="ad-main-text">무죄/무혐의 등 해결사례로 말합니다</p>
                <p class="ad-sub-text">서울대, 로스쿨수석, 형사법교수, 언론보도사건 多</p>
                <div class="ad-pagination">
                    <span>1/6</span>
                    <div class="ad-nav">
                        <button class="ad-nav-btn">‹</button>
                        <button class="ad-nav-btn">›</button>
                    </div>
                </div>
                <p class="ad-disclaimer">* 광고성 게시물입니다</p>
            </div>
        </div>

        <!-- SOS 긴급 상황 -->
        <div class="sos-card">
            <h4>SOS 긴급 상황이라면?</h4>
            <div class="sos-tabs">
                <button class="sos-tab active">체포/긴급체포</button>
                <button class="sos-tab">압수수색</button>
                <button class="sos-tab">가처분</button>
                <button class="sos-tab">음주운전</button>
            </div>
            <div class="sos-form">
                <div class="form-field">
                    <label>체포시간</label>
                    <input type="text" placeholder="체포시간을 입력하세요">
                </div>
                <div class="form-field">
                    <label>장소</label>
                    <input type="text" placeholder="장소를 입력하세요">
                </div>
                <div class="form-field">
                    <label>혐의</label>
                    <input type="text" placeholder="혐의를 입력하세요">
                </div>
                <div class="form-field">
                    <label>요청사항</label>
                    <textarea placeholder="요청사항을 입력하세요"></textarea>
                </div>
                <button class="btn btn--green">도움 요청하기</button>
            </div>
        </div>

        <!-- 자주 검색되는 키워드 -->
        <div class="keywords-card">
            <h4>자주 검색 되는 키워드</h4>
            <div class="keywords-grid">
                @for ($i = 1; $i <= 20; $i++)
                <span class="keyword-tag"># 선임비용</span>
                @endfor
            </div>
        </div>

        <!-- 최근 답변이 활발한 변호사 -->
        <div class="lawyers-card">
            <h4>최근 답변이 활발한 변호사</h4>
            @for ($i = 1; $i <= 3; $i++)
            <div class="lawyer-profile">
                <div class="lawyer-avatar">
                    <div class="avatar-placeholder"></div>
                </div>
                <div class="lawyer-info">
                    <h5>OOO 변호사</h5>
                    <p>변호사 소개입니다. 변호사 소개입니다. 변호사 소개입니다. 변호사 소개...</p>
                </div>
            </div>
            @endfor
            <a href="#" class="more-link">더보기 ▼</a>
        </div>
    </aside>
</div>
@endsection
