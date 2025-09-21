<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />

</head>
<body>
    <header>
        <h1>FashionablyLate</h1>
        <a href="{{ route('login') }}" class="login-link">login</a>

    </header>
    <main>
        <h2>Register</h2>
        <div class="login-box">
            <form action="{{ route('register') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="name">お客様</label>
                    <input type="name" id="name" name="name" placeholder="例: 山田 太郎" value="{{ old('name') }}" />
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" novalidate>
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" placeholder="例: coachtechno6">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn">登録</button>
            </form>
        </div>
    </main>
</body>
</html>