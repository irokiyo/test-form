<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />

    @yield('css')

</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="../index.blade.php">
                FashionablyLate
            </a>
            <a href="./register.blade.php" class="header___link">register</a>
        </div>
    </header>
    <main>
        <h2>Login</h2>
        <div class="login-box">
            <form action="/login" method="POST">
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" placeholder="例: test@example.com" required>
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" placeholder="例: coachtechno6" required>
                </div>
                <button type="submit" class="btn">ログイン</button>
            </form>
        </div>
    </main>
</body>

</html>