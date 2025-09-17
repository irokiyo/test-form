<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}"/>

    @yield('css')

</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="../index.blade.php">
                FashionablyLate
            </a>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>