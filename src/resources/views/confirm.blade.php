

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="confirm">
    <h2 class="confirm__ttl">Confirm</h2>
</div>
<form class="form" action="/contacts" method="post">
@csrf
    <div class="confirm-table">
        <table class="confirm-table__inner">
            <tr class="confirm-table__row">
                <th class="confirm-table__ttl">お名前</th>
                <td class="confirm-table__data">{{ $contact['last_name'] }} {{ $contact['first_name'] }}
                <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__ttl">性別</th>
                <td class="confirm-table__data">{{ $contact['gender'] }}
                <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__ttl">メールアドレス</th>
                <td class="confirm-table__data">{{ $contact['email'] }}
                <input type="hidden" name="email" value="{{ $contact['email'] }}">
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__ttl">電話番号</th>
                <td class="confirm-table__data">{{ $contact['tel1'] }}{{ $contact['tel2'] }}{{ $contact['tel3'] }}
                <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}">
                <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}">
                <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}">
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__ttl">住所</th>
                <td class="confirm-table__data">{{ $contact['address'] }}
                <input type="hidden" name="address" value="{{ $contact['address'] }}">
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__ttl">建物名</th>
                <td class="confirm-table__data">{{ $contact['building'] }}
                <input type="hidden" name="building" value="{{ $contact['building'] }}">
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__ttl">お問い合わせの種類</th>
                <td class="confirm-table__data">{{ $contact['inquiry'] }}
                <input type="hidden" name="inquiry" value="{{ $contact['inquiry'] }}">
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__ttl">お問い合わせの内容</th>
                <td class="confirm-table__data">{{ $contact['detail'] }}
                <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                </td>
            </tr>
        </table>
    </div>
    <div class="confirm__btn">
        <button type="submit" class="confirm__btn-submit">送信</button>
        <a href="index.blade.php" class="confirm__btn-back">修正</a>
        
    </div>
</form>
