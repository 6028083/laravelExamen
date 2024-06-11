<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;




Route::prefix('auth')->name('auth.')->group(function () {
    Route::middleware(['guest:web'])->group(function () {
        Route::view('/login', 'back.pages.auth.login')->name('login');
        Route::view('/forgot-password', 'back.pages.auth.forgot')->name('forgot-password');
        Route::get('/password/reset/{token}', [AuthController::class, 'ResetFrom'])->name('reset-form');
    });

    Route::middleware(['auth:web'])->group(function () {
        Route::get('/home', [AuthController::class, 'index'])->name('home');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::view('/profile', 'back.pages.profile')->name('profile');
        Route::post('/change-profile-picture', [AuthController::class, 'changeProfilePicture'])->name('change-profile-picture');
        Route::view('/settings', 'back.pages.settings')->name('settings');
        Route::post('/change-blog-logo', [AuthController::class, 'changeBlogLogo'])->name('change-blog-logo');
        Route::view('/over-ons', 'back.pages.over-ons')->name('over-ons');
    });
});
// Verander dit in je routes/web.php bestand
Route::prefix('posts')->name('posts.')->group(function () {
    Route::view('/add-post', 'back.pages.add-post')->name('add-post');
    Route::post('/create-post', [AuthController::class, 'createPost'])->name('create-post');
    Route::view('/all', 'back.pages.all_posts')->name('all_posts');
    Route::get('/edit-post', [AuthController::class, 'editPost'])->name('edit-post');
    Route::post('/update-post', [AuthController::class, 'updatePost'])->name('update-post');
    Route::delete('/all/delete-post/{id}', [AuthController::class, 'deletePost'])->name('delete-post');
});
