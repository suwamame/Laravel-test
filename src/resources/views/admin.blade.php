<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">

</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/">FashionablyLate</a>
                <nav>
                    <ul class="header-nav">
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="/login">logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="admin-form__content">
            <div class="admin-form__heading">
                <h2>Admin</h2>
            </div>
            <form class="search-form">
                <div class="search-form__item">
                    <p class="form__input--text"><a href="" class="download__btn"><input type="text" name="seach" placeholder="名前やメールアドレスを入力してください" /></a></p>
                </div>
                <select class="admin-form__item-gender" name="gender">
                    <option value="">全て</option>
                    <option value="">男性</option>
                    <option value="">女性</option>
                    <option value="">その他</option>
                </select>
                <div class="form__input--select">
                    <select class="admin-form__item-select" name="select">
                        <option value="">お問い合わせの種類</option>
                    </select>
                </div>
                <div class="date-form__item-input" >
                    <input class="form__input--date" type="date" id="date" name="date" placeholder="日付を選択してください"  />
                </div>
            </form>
            <div class="data-controls">
                <div class="form__button">
                    <button class="form__input--export" type="submit">エクスポート</button>
                </div>
                <nav class="pagination">
                    <a href="" class="pagination__arrow pagination__prev">
                        <span class="visuallyhidden">Previous Page</span>
                    </a>
                    <ul class="pagination__items">
                        <li class="is-active"><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                    <a href="" class="pagination__arrow pagination__next">
                        <span class="visuallyhidden">Next Page</span>
                    </a>
                </nav>
            </div>
            <div class="admin-table">
                <table class="admin-table__inner">
                    <tr class="admin-table__title">
                        <th class="admin-table__header">
                            <span class="admin-table__header-span">お名前</span>
                            <span class="admin-table__header-span">性別</span>
                            <span class="admin-table__header-span">メールアドレス</span>
                            <span class="admin-table__header-span">お問い合わせの種類</span>
                            <span class="admin-table__header-span"></span>
                        </th>
                    </tr>
                    <tr class="admin-table__row">
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <p class="update-form__item-p">山田　太郎</p>
                                </div>
                                <div class="update-form__item">
                                    <p class="update-form__item-p">男性</p>
                                </div>
                                <div class="update-form__item">
                                    <p class="update-form__item-p">test@example.com</p>
                                </div>
                                <div class="update-form__item">
                                    <p class="update-form__item-p">商品の交換について</p>
                                </div>
                                <div class="detail-form__botton">
                                    <button class="detail-form__button-submit" type="submit">詳細</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr class="admin-table__row">
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <p class="update-form__item-p">山田　太郎</p>
                                </div>
                                <div class="update-form__item">
                                    <p class="update-form__item-p">男性</p>
                                </div>
                                <div class="update-form__item">
                                    <p class="update-form__item-p">test@example.com</p>
                                </div>
                                <div class="update-form__item">
                                    <p class="update-form__item-p">商品の交換について</p>
                                </div>
                                <div class="detail-form__botton">
                                    <button class="detail-form__button-submit" type="submit">詳細</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr class="admin-table__row">
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <p class="update-form__item-p">山田　太郎</p>
                                </div>
                                <div class="update-form__item">
                                    <p class="update-form__item-p">男性</p>
                                </div>
                                <div class="update-form__item">
                                    <p class="update-form__item-p">test@example.com</p>
                                </div>
                                <div class="update-form__item">
                                    <p class="update-form__item-p">商品の交換について</p>
                                </div>
                                <div class="detail-form__botton">
                                    <button class="detail-form__button-submit" type="submit">詳細</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
                <div class="reset__button">
                    <button class="reset__button-submit" type="submit">リセット</button>
                </div>
            </div>
        </div>
    </main>
</body>