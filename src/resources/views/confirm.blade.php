@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">

@endsection

@section('content')

<main>
    <div class="confirm__content">
        <div class="confirm__heading">
            <h2>Confirm</h2>
        </div>
        <form class="form" action="/thanks" method="post">
            @csrf
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header" >お名前</th>
                        <td class="confirm-table__text">
                            <p> {{ $contact['first_name'] }}  {{ $contact['last_name'] }}</p>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別</th>
                        <td class="confirm-table__text">
                            @if($contact['gender'] == 1)
                            男性
                            @elseif($contact['gender'] == 2)
                            女性
                            @elseif($contact['gender'] == 3)
                            その他
                            @endif
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__text">
                            <p>{{ $contact['email'] }}</p>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号</th>
                        <td class="confirm-table__text">
                            <p>{{ $contact['phone-part1'] }}{{ $contact['phone-part2'] }}{{ $contact['phone-part3'] }}</p>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">住所</th>
                        <td class="confirm-table__text">
                            <p>{{ $contact['address'] }}</p>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">建物名</th>
                        <td class="confirm-table__text">
                            <p>{{ $contact['building'] }}</p>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせの種類 </th>
                        <td class="confirm-table__text">
                            <p>{{ $contact['category_id'] }}</p>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header_text">お問い合わせ内容</th>
                        <td class="confirm-table__text">
                        <p>{{ $contact['detail'] }}</p>
                    </tr>
                </table>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
                <a class="form__button-submit-right" href="{{ URL::previous() }}" >修正</a>
            </div>
        </form>
    </div>
</main>
@endsection