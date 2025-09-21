<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />

    @yield('css')

</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="../index.blade.php">
                FashionablyLate
            </a>
            <a href="{{ route('register') }}" class="header___link">
            <button type="button " class="header___link-nav">register</button>
            </a>
        </div>
    </header>
    <main>
        <h2>Login</h2>
        <div class="login-box">
            <form action="{{ route('login') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" placeholder="例: test@example.com">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" placeholder="例: coachtechno6" >
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn">ログイン</button></a>
            </form>
        </div>
    </main>
</body>

</html>