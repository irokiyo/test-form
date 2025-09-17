@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
@endsection

@section('content')
    <div class="contact">{{-- タイトル--}}
        <h2>Contact</h2>
    </div>
    {{-- お問い合わせの入力部分--}}
    <form action="/confirm" class="form" method="post">
    @csrf
        <div class="form__group">
            <div class="form__group-title">{{-- お名前の部分--}}
                <label for="" class="form__label-item">お名前</label>
                <label for="" class="form__label-required">※</label>
                <input type="text" id="last_name" name="last_name" class="form__text-name" placeholder="例: 山田" value="{{ old('last_name') }}"/>
                {{-- エラーメッセージ--}}
                <div class="form__error">
                    @error('last_name')
                    {{ $message }}
                    @enderror
                </div>
                <input type="text" id="first_name" name="first_name" class="form__text-name" placeholder="例: 太郎" value="{{ old('first_name') }}"/>
                {{-- エラーメッセージ--}}
                <div class="form__error">
                    @error('first_name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">{{-- 性別の部分--}}
            <div class="form__group-title">
                <label for="" class="form__label-item">性別</label>
                <label for="" class="form__label-required">※</label>
                <input type="radio" name="gender" value="男性" class="form-radio">男性
                <input type="radio" name="gender" value="女性" class="form-radio">女性
                <input type="radio" name="gender" value="その他" class="form-radio">その他
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">{{-- メールアドレスの部分--}}
            <div class="form__group-title">
                <label for="" class="form__label-item">メールアドレス</label>
                <label for="" class="form__label-required">※</label>
                <input type="email" id="email" name="email" class="form__email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>

            </div>
        </div>
        <div class="form__group">{{-- 電話番号の部分--}}
            <div class="form__group-title">
                <label for="" class="form__label-item">電話番号</label>
                <label for="" class="form__label-required">※</label>
                <input type="tel" name="tel1" class="form__tel" placeholder="080" value="{{ old('tel1') }}" />-
                <div class="form__error">
                    @error('tel1')
                    {{ $message }}
                    @enderror
                </div>
                <input type="tel" name="tel2" class="form__tel" placeholder="1234" value="{{ old('tel2') }}" />-
                <div class="form__error">
                    @error('tel2')
                    {{ $message }}
                    @enderror
                </div>
                <input type="tel" name="tel3" class="form__tel" placeholder="5678" value="{{ old('tel3') }}" />
                <div class="form__error">
                    @error('tel3')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        {{-- 住所の部分--}}
        <div class="form__group">
            <div class="orm__group-title">
                <label for="" class="form__label-item">住所</label>
                <label for="" class="form__label-required">※</label>
                <input type="text" name="address" class="form__address" placeholder="例: 東京都渋谷区千代田1-2-3" value="{{ old('address') }}" />
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        {{-- 建物名の部分--}}
        <div class="form__group">
            <div class="orm__group-title">
                <label for="" class="form__label-item">建物名</label>
                <input type="text" name="building" class="form__building" placeholder="例: 千代々々マンション101">
            </div>
        </div>
        {{-- お問い合わせの種類の部分--}}
        <div class="form__group">
            <div class="orm__group-title">
                <label for="" class="form__label-item">お問い合わせの種類</label>
                <label for="" class="form__label-required">※</label>
                <select name="inquiry" id="" class="form__select">
                    <option value="商品のお届けについて">商品のお届けについて</option>
                    <option value="商品の交換について">商品の交換について</option>
                    <option value="商品トラブル">商品トラブル</option>
                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                    <option value="その他">その他</option>
                </select>
                <div class="form__error">
                    @error('inquiry')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        {{-- お問い合わせ内容の部分--}}
        <div class="form__group">
            <div class="form__group-title">
                <label for="" class="form__label-item">お問い合わせ内容</label>
                <label for="" class="form__label-required">※</label>
                <textarea name="detail" id="" class="form__detail" rows="5" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
                <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        {{-- 確認ボタン--}}
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>


    </form>
