<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;
use App\Models\Category;


class UserController extends Controller
{
    // ログインフォームを表示
    public function index()
    {
        return view('login');
    }
    // ログイン処理
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
        // 認証成功 → 管理画面へ
            return redirect()->intended('/admin');
        }
        // 認証失敗 → フォームに戻る
        return back()->withErrors->withInput();
    }
    // 登録フォームを表示
    public function showRegisterForm()
    {
        return view('register');
    }
    // 登録処理
    public function store(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // 登録後管理画面
        auth()->login($user);
        return redirect('/admin');
    }
}
