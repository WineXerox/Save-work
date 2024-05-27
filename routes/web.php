<?php

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('login'));

Route::middleware(['auth'])->group(function () {
    Route::get('/index', fn () => view('pages.home.index'))->name('index');

    Route::prefix('work')->group(function() {
        Route::get('/', fn () => view('pages.work.index'))->name('work');
        Route::get('/new', fn () => view('pages.work.new'))->name('work.new');
        Route::get('/proceed', fn () => view('pages.work.proceed'))->name('work.proceed');
        Route::get('/success', fn () => view('pages.work.success'))->name('work.success');
        Route::get('/cancel', fn () => view('pages.work.cancel'))->name('work.cancel');
        Route::get('/detail/{id}', fn ($id) => view('pages.work.detail', compact('id')))->name('work.detail');
    });

    Route::get('/user', fn () => view('pages.user.index'))->name('user');
})->middleware(AdminMiddleware::class);


Route::middleware(['guest'])->group(function () {
    Route::prefix('auth')->group(function() {
        Route::get('/login', fn () => view('pages.auth.login'))->name('login');
    });
});


Route::get('/logout', [App\Livewire\Auth\Login::class, 'logout'])->name('logout');



