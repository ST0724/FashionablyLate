@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__title">
        <h2>Contact</h2>
    </div>

    <form class="form" action="/confirm" method="post">
        @csrf
        <!-- お名前 -->
        <div class="form__group">
            <div class="form__label">
                <span class="form__label--item">お名前</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__input--name">
                <input type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}">
                <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}">

                <div class="form__error">
                    @error('last_name')
                    {{ $message }}
                    @enderror

                    @error('first_name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        
         
        <!-- 性別 -->
        <div class="form__group">
            <div class="form__label">
                <span class="form__label--item">性別</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__input--radio">
                <input type="radio" name="gender" id="1" value="1" checked>男性
                <input type="radio" name="gender" id="2" value="2">女性
                <input type="radio" name="gender" id="3" value="3">その他

                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
    

        <!-- メールアドレス -->
        <div class="form__group">
            <div class="form__label">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__input--text">
                <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">

                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        

        <!-- 電話番号 -->
        <div class="form__group">
            <div class="form__label">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__input--tell">
                <input type="tel" name="tell_1" placeholder="080" value="{{ old('tell_1') }}"><span>-</span>
                <input type="tel" name="tell_2" placeholder="1234" value="{{ old('tell_2') }}"><span>-</span>
                <input type="tel" name="tell_3" placeholder="5678" value="{{ old('tell_3') }}">
                
                <div class="form__error">
                    @error('tell')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        

        <!-- 住所 -->
        <div class="form__group">
            <div class="form__label">
                <span class="form__label--item">住所</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__input--text">
                <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">

                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>


        <!-- 建物名 -->
        <div class="form__group">
            <div class="form__label">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__input--text">
                <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}">
            </div>
        </div>


        <!-- お問い合わせの種類 -->
        <div class="form__group">
            <div class="form__label">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__input--select">
                <select name="category_id">
                    <option value="">選択してください</option>
                    @foreach($categories as $category)
                        <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                    @endforeach
                </select>

                <div class="form__error">
                    @error('category_id')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>


        <!-- お問い合わせ内容 -->
        <div class="form__group">
            <div class="form__label">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--red">※</span>
            </div>
            <div class="form__input--textarea">
                <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>

                <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
 

        <!-- 確認ボタン -->
        <div class="form__button">
            <button class="form__button--submit" type="submit">確認画面</button>
        </div>
    </form>
</div>

@endsection