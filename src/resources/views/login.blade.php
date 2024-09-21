@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login-form__content">
    <div class="login__title">
        <h2>Login</h2>
    </div>

    <form class="form" action="/admin" method="post">
    @csrf
        <div class="form__group">
            <!-- メールアドレス -->
            <div class="form__email">
                <label class="form__label">メールアドレス</label>
                <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <!-- パスワード -->
            <div class="form__pass">
                <label class="form__label">パスワード</label>
                <input type="text" name="password" placeholder="例:coachtech1106" value="{{ old('password') }}">
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__button">
                <button class="form__button--submit" type="submit">ログイン</button>
            </div>
        </div>
    </form>
</div>
@endsection