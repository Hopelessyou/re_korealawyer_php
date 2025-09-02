<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Consult\QnaController;
use App\Http\Controllers\Lawyers\LawyerController;
use App\Http\Controllers\Lawfirms\LawfirmController;
use App\Http\Controllers\Cases\CaseController;
use App\Http\Controllers\Wiki\WikiController;
use App\Http\Controllers\Forms\FormController;
use App\Http\Controllers\Community\CommunityController;

// 인증 라우트
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// ① 법률상담(무료 Q&A만)
Route::prefix('consult/qna')->group(function () {
    Route::get('/', [QnaController::class, 'index'])->name('qna.index');
    Route::get('/{id}', [QnaController::class, 'show'])->name('qna.show');
    Route::middleware('auth')->group(function () {
        Route::post('/', [QnaController::class, 'store'])->name('qna.store');
        Route::post('/{id}/answers', [QnaController::class, 'answer'])->name('qna.answer');
        Route::post('/{id}/accept/{answerId}', [QnaController::class, 'accept'])->name('qna.accept');
    });
});

// ② 변호사찾기
Route::prefix('lawyers')->group(function () {
    Route::get('/', [LawyerController::class, 'index'])->name('lawyers.index');
    Route::get('/search', [LawyerController::class, 'search'])->name('lawyers.search');
    Route::get('/category/{slug}', [LawyerController::class, 'category'])->name('lawyers.category');
    Route::get('/profile/{id}', [LawyerController::class, 'profile'])->name('lawyers.profile');
    Route::get('/{id}', [LawyerController::class, 'show'])->name('lawyers.show');
    // profile subpages (placeholders)
    Route::get('/profile/{id}/services', [LawyerController::class, 'profileServices'])->name('lawyers.profile.services');
    Route::get('/profile/{id}/reviews', [LawyerController::class, 'profileReviews'])->name('lawyers.profile.reviews');
    Route::get('/profile/{id}/activities', [LawyerController::class, 'profileActivities'])->name('lawyers.profile.activities');
});

// ③ 로펌 (소속변호사 + 전 사례)
Route::prefix('lawfirms')->group(function () {
    Route::get('/', [LawfirmController::class, 'index'])->name('lawfirms.index');
    Route::get('/{slug}', [LawfirmController::class, 'show'])->name('lawfirms.show');
    Route::get('/{slug}/members', [LawfirmController::class, 'members'])->name('lawfirms.members');
    Route::get('/{slug}/cases', [LawfirmController::class, 'cases'])->name('lawfirms.cases');
});

// ④ 단계별 선임 (라우트만 골격)
Route::view('/retain', 'static.retain')->name('retain.index');

// ⑤ 법률문서작성(서식/검토)
Route::prefix('forms')->group(function () {
    Route::get('/', [FormController::class, 'index'])->name('forms.index');
    Route::get('/{slug}', [FormController::class, 'show'])->name('forms.show');
});
Route::prefix('doc-consult')->middleware('auth')->group(function () {
    Route::post('/new', [FormController::class, 'requestReview'])->name('docconsult.store');
});

// ⑥ 해결사례 상위메뉴
Route::prefix('cases')->group(function () {
    Route::get('/', [CaseController::class, 'index'])->name('cases.index');
    Route::get('/list', [CaseController::class, 'list'])->name('cases.list');
    Route::get('/{id}', [CaseController::class, 'show'])->name('cases.show');
    Route::middleware(['auth', 'role:lawyer'])->group(function () {
        Route::post('/', [CaseController::class, 'store'])->name('cases.store');
        Route::put('/{id}', [CaseController::class, 'update'])->name('cases.update');
        Route::post('/{id}/publish', [CaseController::class, 'publish'])->name('cases.publish');
    });
});

// ⑦ 위키
Route::get('/wiki', [WikiController::class, 'index'])->name('wiki.index');
Route::get('/wiki/field', [WikiController::class, 'field'])->name('wiki.field');
Route::get('/wiki/precedent', [WikiController::class, 'precedent'])->name('wiki.precedent');
Route::get('/wiki/form', [WikiController::class, 'form'])->name('wiki.form');
Route::get('/wiki/faq', [WikiController::class, 'faq'])->name('wiki.faq');
Route::get('/wiki/terms', [WikiController::class, 'terms'])->name('wiki.terms');
Route::get('/wiki/criminal', [WikiController::class, 'criminal'])->name('wiki.criminal');
Route::get('/wiki/special-assault', [WikiController::class, 'specialAssault'])->name('wiki.special-assault');
Route::get('/wiki/sentencing-factors', [WikiController::class, 'sentencingFactors'])->name('wiki.sentencing-factors');
Route::get('/wiki/precedent-detail', [WikiController::class, 'precedentDetail'])->name('wiki.precedent-detail');
Route::get('/wiki/faq-detail', [WikiController::class, 'faqDetail'])->name('wiki.faq-detail');
Route::get('/wiki/terms-detail', [WikiController::class, 'termsDetail'])->name('wiki.terms-detail');
Route::get('/wiki/{slug}', [WikiController::class, 'show'])->name('wiki.show');

// ⑧ 커뮤니티
Route::get('/community', [CommunityController::class, 'index'])->name('community.index');
Route::get('/community/board', [CommunityController::class, 'board'])->name('community.board');

// 메인 페이지
Route::get('/', function () {
    return view('index');
})->name('home');
