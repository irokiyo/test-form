@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection

@section('content')
<div class="main">
    <h2 class="main__title">Admin</h2>
</div>
{{-- 検索部分--}}
<div class="search">
    <form action="" class="search__form">
        <input type="text" placeholder="名前やメールアドレスを入力してください">
        <select name="" id="">
            <option value="">性別</option>
            <option value="">男性</option>
            <option value="">女性</option>
            <option value="">その他</option>
        </select>
        <select name="" id="">
            <option value="">商品のお届けについて</option>
            <option value="">商品の交換について</option>
            <option value="">商品トラブル</option>
            <option value="">ショップへのお問い合わせ</option>
            <option value="">その他</option>
        </select>
        <input type="date">
        <button type="submit" class="btn-search">検索</button>
        <button type="reset" class="btn-reset">リセット</button>
    </form>
</div>
{{-- エクスポートボタン部分--}}
<div class="export">
    <button class="export-btn">エクスポート</button>
</div>
{{-- テーブル部分--}}
<div class="contact">
    <table class="contact__table">
        <tr class="table___row">
            <th class="table ttl">お名前</th>
            <th class="table ttl">性別</th>
            <th class="table ttl">メールアドレス</th>
            <th class="table ttl">お問い合わせの種類</th>
        </tr>
        {{-- データが入るところ--}}
        <tr class="table___row2">
            <td class="table__data">山田 太郎</td>
            <td class="table__data">男性</td>
            <td class="table__data">アドレス</td>
            <td class="table__data">商品の交換</td>
            <td class="table__data"><button class="table-btn">詳細</button></td>
        </tr>
    </table>
</div>