@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">

@endsection

@section('content')



<main>
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>Contact</h2>
        </div>
        <form class="form" action="/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--name">
                        <p class="form__input--text-list-li"><input type="text" name="first_name" placeholder="例: 山田" value="{{ old('first_name' , $contact['first_name'] ?? '') }}" /></p>
                        <p class="form__input--text-list-last"><input type="text" name="last_name" placeholder="例: 太郎" value="{{ old('last_name', $contact['last_name'] ?? '') }}" /></p>
                    </div>
                    <div class="form__error">
                        @error('first_name')
                        {{ $message }}
                        @enderror
                        @error('last_name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--radio">
                        <label><input type="radio" name="gender" value="1" checked>男性</label>
                        <label><input type="radio" name="gender" value="2">女性</label>
                        <label><input type="radio" name="gender" value="3">その他</label>
                    </div>
                    <div class="form__error">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--tel">
                        <span class="form__input--tel-number"><input type="tel" name="phone-part1" placeholder="080" value="{{ old('phone-part1') }}" />-</span>
                        <span class="form__input--tel-number"><input type="tel" name="phone-part2" placeholder="1234" value="{{ old('phone-part2') }}" />-</span>
                        <span class="form__input--tel-number"><input type="tel" name="phone-part3" placeholder="5678" value="{{ old('phone-part3') }}" /></span>
                    </div>
                    <div class="form__error">
                        @error('phone-part1')
                        {{ $message }}
                        @enderror
                        @error('phone-part2')
                        {{ $message }}
                        @enderror
                        @error('phone-part3')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                    </div>
                    <div class="form__error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}" />
                    </div>
                    <div class="form__error">
                        @error('building')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">※</span>
                </div>
                    <div class="form__group-content">
                        <div class="form__input--select">
                            <select class="create-form__item-select" name="category_id" value="{{ old('category_id') }}">
                                <option value="">選択してください</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->content }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form__error">
                        @error('category_id')
                        {{ $message }}
                        @enderror
                        </div>
                    </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="detail" placeholder="お問い合わせ内容をご記入ください" value="{{ old('detail') }}"></textarea>
                    </div>
                    <div class="form__error">
                        @error('detail')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
</main>
@endsection
