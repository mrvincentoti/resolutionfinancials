<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Front\PostController as FrontPostController;
use App\Http\Controllers\Front\CategoryController as FrontCategoryController;
use App\Http\Controllers\Front\CommentController;
use App\Http\Controllers\Front\PageController as FrontPageController;
use App\Http\Controllers\Front\TagController as FrontTagController;
use App\Http\Controllers\Front\ProjectController as FrontProjectController;
use App\Http\Controllers\Front\AnnouncementController as FrontAnnouncementController;
use App\Http\Controllers\Admin\ContractInformationController;

// FrontEnd Routes [Public routes]
Route::get('/', [HomeController::class, 'index'])->name('webhome');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/calculator', [HomeController::class, 'calculator'])->name('calculator');
Route::get('/apply', [HomeController::class, 'apply'])->name('apply');
Route::get('/upload-loan-form', [HomeController::class, 'form'])->name('upload-loan-form');
Route::get('/loan-details/{slug}', [HomeController::class, 'details'])->name('loan-details');
Route::get('/loan/{slug}', [FrontProjectController::class, 'getProjectBySlug'])->name('loan');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

Route::post('/post/comment/{post}', [CommentController::class,'makeComment'])->name('post.comment');
Route::resource('/comment', CommentController::class, ['only' => ['destroy']]);
Route::get('/post/{slug}', [FrontPostController::class, 'getPostBySlug'])->name('post.show');
Route::get('/category/{slug}', [FrontCategoryController::class, 'getCategoryBySlug'])->name('category.show');
Route::get('/page/{slug}', [FrontPageController::class, 'getPageBySlug'])->name('page.show');
Route::get('/tag/{slug}', [FrontTagController::class, 'getPostsPerTags'])->name('tag.show');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

//Projects
Route::get('/project/all', [FrontProjectController::class, 'index'])->name('project.all');
Route::get('/filter-projects', [FrontProjectController::class, 'filterProjects']);
Route::get('/announcement/all', [FrontAnnouncementController::class, 'index'])->name('announcement');
Route::get('/get-projects-count-by-phase', [FrontProjectController::class, 'getProjectsCountByPhase'])->name('getProjectsCountByPhase');
Route::get('/get-projects-count-by-sector', [FrontProjectController::class,'getProjectsCountBySector'])->name('getProjectsCountBySector');
Route::get('/project/{slug}', [FrontProjectController::class, 'getProjectBySlug'])->name('project.details');
Route::get('/announcement/{slug}', [FrontAnnouncementController::class, 'getAnnouncementBySlug'])->name('announcement.details');

Route::post('/apply', [ContractInformationController::class, 'store'])->name('apply.post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
