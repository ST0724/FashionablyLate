@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register-form__content">
    <div class="register__title">
        <h2>Register</h2>
    </div>

    <form class="form" action="/login" method="post">
        @csrf
        <div class="form__group">
            <!-- お名前 -->
            <div class="form__name">
                <p class="form__label">お名前</p>
                <input type="text" name="name" placeholder="例:test@example.com" value="{{ old('name') }}">
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <!-- メールアドレス -->
            <div class="form__email">
                <p class="form__label">メールアドレス</p>
                <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <!-- パスワード -->
            <div class="form__pass">
                <p class="form__label">パスワード</p>
                <input type="text" name="password" placeholder="例:coachtech1106" value="{{ old('password') }}">
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__button">
                <button class="form__button--submit" type="submit">登録</button>
            </div>
        </div>
    </form>
</div>
@endsection