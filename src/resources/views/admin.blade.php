<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@400;700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">

</head>
<style>
    svg.w-5.h-5 {
    /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
    color: #7c6355; /* ブラウン */
    stroke: currentColor; /* パスの色を継承させる */

    }


</style>

<body>
    <header >
        <h1 class="header">FashionablyLate</h1>
        <a href="{{ route('login') }}" class="header__login-link">logout</a>
    </header>
<main>
<div class="main">
    <h2 class="main__title">Admin</h2>
</div>
{{-- 検索部分--}}
<div class="search">
    <form action="/admin/search" method="get" class="search__form">
    @csrf
        <input type="text" class="search-form__item-text" name="keyword" value="{{ old('keyword') }}" placeholder=" 名前やメールアドレスを入力してください">
        <select class="search-form__item-gender" name="gender">
            <option selected>選択してください</option>
            <option value="男性">男性</option>
            <option value="女性">女性</option>
            <option value="その他">その他</option>
        </select>
        <select class="create-form__item-select" name="category_id">
            @foreach ($categories as $category)
            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
            @endforeach
        </select>
        <input type="date" class="date">
        <button type="submit" class="btn-search">検索</button>
        <button type="reset" class="btn-reset">リセット</button>
    </form>
</div>
{{-- ツール部分--}}
<div class="export">
    <button class="export-btn">エクスポート</button>
    
</div>
{{-- テーブル部分--}}
<div class="contact">
    <table class="contact__table">
        <tr class="table___row">
            <th class="table__ttl">お名前</th>
            <th class="table__ttl">性別</th>
            <th class="table__ttl">メールアドレス</th>
            <th class="table__ttl">お問い合わせの種類</th>
        </tr>
        {{-- データが入るところ--}}
        @foreach ($contacts as $contact)
        <tr class="table___row2">
            <td class="table__data">{{ $contact['last_name'] }} {{ $contact['first_name'] }}</td>
            <td class="table__data">{{ $contact['gender'] }}</td>
            <td class="table__data">{{ $contact['email'] }}</td>
            <td class="table__data">{{ $category['content'] }}</td>
            <td class="table__data"><a href="#modal-{{ $loop->index }}" class="table-btn">詳細</a>
            {{-- モーダル--}}
                <div id="modal-{{ $loop->index }}" class="modal">
                    <div class="modal-content">
                        <a href="#" class="close">&times;</a>
                        <h2>お問い合わせ詳細</h2>
                        <p><strong>お名前:</strong>{{ $contact['last_name'] }} {{ $contact['first_name'] }}</p>
                        <p><strong>性別:</strong> {{ $contact['gender'] }}</p>
                        <p><strong>メール:</strong>{{ $contact['email'] }}</p>
                        <p><strong>種類:</strong>{{ $category['content'] }}</p>
                        <p><strong>内容:</strong>{{ $contact['detail'] }}</p>
                        <form class="delete-form" action="/categories/delete" method="post">
                            @method('DELETE')
                            @csrf
                            <div class="delete-form__button">
                                <input type="hidden" name="id" value="{{ $contact['id'] }}">

                                <button type="submit">削除</button>
                            </div>
                        </form>
                    </div>
                </div>
                @endforeach
            </td>
        </tr>
    </table>
</main>
</body>