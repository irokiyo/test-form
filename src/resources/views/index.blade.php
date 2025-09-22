@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
@endsection

@section('content')
    <div class="contact">{{-- タイトル--}}
        <h2>Contact</h2>
    </div>
    <form action="{{ url('/confirm') }}" class="form" method="post" novalidate>
        @csrf

        {{-- お名前 --}}
        <div class="form__group">
            <div class="form__group-title">
                <label for="last_name" class="form__label-item">お名前</label>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group-input">
                <div class="input-col">
                    <input type="text" id="last_name" name="last_name" class="form__text-name" placeholder="例: 山田" value="{{ old('last_name') }}" />
                    @error('last_name') <div class="form__error">{{ $message }}</div> @enderror
                </div>
                <div class="input-col">
                    <input type="text" id="first_name" name="first_name" class="form__text-name" placeholder="例: 太郎" value="{{ old('first_name') }}" />
                    @error('first_name') <div class="form__error">{{ $message }}</div> @enderror
                </div>
            </div>
        </div>

        {{-- 性別 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">性別</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group-input">
                <label class="radio"><input type="radio" name="gender" value="男性" > 男性</label>
                <label class="radio"><input type="radio" name="gender" value="女性" > 女性</label>
                <label class="radio"><input type="radio" name="gender" value="その他"> その他</label>
                @error('gender') <div class="form__error">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- メールアドレス --}}
        <div class="form__group">
            <div class="form__group-title">
                <label for="email" class="form__label-item">メールアドレス</label>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group-input">
                <input type="email" id="email" name="email" class="form__email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                @error('email') <div class="form__error">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- 電話番号 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">電話番号</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group-input form__tel-group">
                <input type="tel" name="tel1" class="form__tel" placeholder="080" value="{{ old('tel1') }}"> -
                <input type="tel" name="tel2" class="form__tel" placeholder="1234" value="{{ old('tel2') }}"> -
                <input type="tel" name="tel3" class="form__tel" placeholder="5678" value="{{ old('tel3') }}">
                @error('tel1') <div class="form__error">{{ $message }}</div> @enderror
                @error('tel2') <div class="form__error">{{ $message }}</div> @enderror
                @error('tel3') <div class="form__error">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- 住所 --}}
        <div class="form__group">
            <div class="form__group-title">
                <label for="address" class="form__label-item">住所</label>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group-input">
                <input type="text" id="address" name="address" class="form__address" placeholder="例: 東京都渋谷区千代田1-2-3" value="{{ old('address') }}">
                @error('address') <div class="form__error">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- 建物名 --}}
        <div class="form__group">
            <div class="form__group-title">
                <label for="building" class="form__label-item">建物名</label>
            </div>
            <div class="form__group-input">
                <input type="text" id="building" name="building" class="form__building" placeholder="例: 千代々々マンション101" value="{{ old('building') }}">
            </div>
        </div>

        {{-- お問い合わせの種類 --}}
        <div class="form__group">
            <div class="form__group-title">
                <label for="category_id" class="form__label-item">お問い合わせの種類</label>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group-input">
                <select id="category_id" name="category_id">
                    <option value="">選択してください</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->content }}
                    </option>
                    @endforeach
                </select>
                @error('category_id') <div class="form__error">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- お問い合わせ内容 --}}
        <div class="form__group">
            <div class="form__group-title">
                <label for="detail" class="form__label-item">お問い合わせ内容</label>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group-input">
                <textarea id="detail" name="detail" class="form__detail" rows="5" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                @error('detail') <div class="form__error">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- 確認ボタン --}}
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>

    </form>

