<?php

use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\ProjectMilestoneController;
use App\Models\SponsoringAgency;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SponsoringAgencyController;

Route::middleware(['auth', 'can:admin-login'])->name('admin.')->prefix('/admin')->group(function () {
    // This Roles can manage with Admin & Writers with specific policies.
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/post/search', [PostController::class, 'search'])->name('post.search');
    Route::get('/post/slug-get', [PostController::class, 'getSlug'])->name('post.getslug');
    Route::get('/banner/slug-get', [BannerController::class, 'getSlug'])->name('banner.getslug');
    Route::get('/project/slug-get', [ProjectController::class, 'getSlug'])->name('project.getslug');
    Route::resources([
        'post' => PostController::class,
        'tag' => TagController::class,
        'banner' => BannerController::class,
        'project' => ProjectController::class,
        'agency' => SponsoringAgencyController::class,
        'announcement' => AnnouncementController::class,
        'milestone' => ProjectMilestoneController::class,
    ]);
    Route::resource('/account', AccountController::class, ['only' => ['index', 'update']]);
    // Special To Admin Role Only
    Route::middleware(['can:admin-only'])->group(function () {
        Route::get('/category/slug-get', [CategoryController::class, 'getSlug'])->name('category.getslug');
        Route::get('/page/slug-get', [PageController::class, 'getSlug'])->name('page.getslug');
        Route::resource('/category', CategoryController::class);
        Route::resource('/user', UserController::class, ['except' => ['create', 'store', 'show']]);
        Route::resource('/page', PageController::class);
        Route::resource('/role', RoleController::class, ['only' => ['index']]);
        Route::resource('/setting', SettingController::class, ['only' => ['index', 'update']]);
    });
});
