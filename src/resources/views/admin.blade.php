@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
    <div class="admin__title">
        <h2>Admin</h2>
    </div>

    <!-- 検索枠 -->
    <div class="search-form">
        <form class="search-form__content" action="/admin/search" method="get">
            @csrf
            <!-- 名前・メールアドレス検索 -->
            <div class="search-form__text">
                <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください">
            </div>

            <!-- 性別 -->
            <div class="search-form__select">
                <select name="gender">
                    <option value="">性別</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
            </div>

            <!-- お問い合わせの種類 -->
            <div class="search-form__select">
                <select name="category_id">
                    <option value="">お問い合わせの種類</option>
                    {{--
                    @foreach($categories as $category)
                        <option value="{{ $category['id'] }}">"{{ $category['name'] }}"</option>
                    @endforeach
                    --}}
                </select>
            </div>

            <!-- 年月日 -->
            <div class="search-form__select">
                <input type="date" name="date">  
            </div>

            <!-- 検索ボタン -->
            <div class="form__button">
                <button class="form__button--search" type="submit">検索</button>
            </div>

            <!-- リセットボタン -->
            <div class="form__button">
                <button class="form__button--reset" type="submit">リセット</button>
            </div>
        </form>

    </div>

    <!-- 一覧テーブル -->
    <div class="admin-table">
        {{ $contacts->links() }}
        <table class="admin-table__inner">
            <tr class="admin-table__row">
                <th class="admin-table__header">お名前</th>
                <th class="admin-table__header">性別</th>
                <th class="admin-table__header">メールアドレス</th>
                <th class="admin-table__header">お問い合わせの種類</th>
                <th class="admin-table__header"></th>
            </tr>
            @foreach($contacts as $contact)
            <tr class="admin-table__row">
                <td class="admin-table__item">{{ $contact['first_name']. '　'. $contact['last_name'] }}</td>
                <td class="admin-table__item">{{ $contact['gender'] }}</td>
                <td class="admin-table__item">{{ $contact['email'] }}</td>
                <td class="admin-table__item">{{ $contact['category_id'] }}</td>

                <!-- 詳細ボタン -->
                <td class="admin-table__item">
                    <form class="admin-table__detail">
                        <button class="admin-table__detail--button">詳細</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection