<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>FashionablyLate</h1>
        <a href="#" class="login-link">login</a>
    </header>
    <main>
        <h2>Login</h2>
        <div class="login-box">
            <form action="login.blade.php" method="POST">
                <div class="form-group">
                    <label for="email">お客様</label>
                    <input type="email" id="name" name="email" placeholder="例: 山田 太郎" required>
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" placeholder="例: test@example.com" required>
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" placeholder="例: coachtechno6" required>
                </div>
                <button type="submit" class="btn">登録</button>
            </form>
        </div>
    </main>
</body>
</html>