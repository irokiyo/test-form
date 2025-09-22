<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MiddlewareController;


Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);// 確認画面表示
Route::post('/contacts', [ContactController::class, 'store']);// DB保存
Route::get('/admin', [ContactController::class, 'admin'])->name('admin');//管理画面
Route::get('/admin/search', [ContactController::class, 'search'])->name('admin.search');//検索
Route::delete('/categories/delete', [ContactController::class, 'destroy']);//削除

Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories/confirm', [CategoryController::class, 'store']);
Route::post('/categories', [CategoryController::class, 'confirm']);

Route::get('/login', [UserController::class, 'index'])->name('login'); // ログインフォーム表示
Route::post('/login', [UserController::class, 'login']); // ログイン処理
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register'); // 登録フォーム
Route::post('/register', [UserController::class, 'store']); // 登録処理

Route::get('/middleware', [MiddlewareController::class, 'index']);
Route::post('/middleware', [MiddlewareController::class, 'post'])->middleware('first');
