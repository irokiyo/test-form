<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate | Register</title>

    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@400;700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
</head>

<body class="page">
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="">FashionablyLate</a>
            <nav class="header__actions">
                <a href="{{ route('login') }}" class="btn btn--ghost header__action">login</a>
            </nav>
        </div>
    </header>

    <main class="auth">
        <h2 class="auth__title">Register</h2>

        <div class="auth-card">
            <form action="{{ route('register') }}" method="POST" class="auth-form" novalidate>
                @csrf

                <div class="form-group">
                    <label for="name" class="form-label">お客様</label>
                    <input type="text" id="name" name="name" class="form-input" placeholder="例: 山田 太郎" value="{{ old('name') }}" />
                    @error('name')
                    <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">メールアドレス</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="例: test@example.com" value="{{ old('email') }}" />
                    @error('email')
                    <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">パスワード</label>
                    <input type="password" id="password" name="password" class="form-input" placeholder="例: coachtechno6" />
                    @error('password')
                    <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn--primary">登録</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>

