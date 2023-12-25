# laravel-test

お問い合わせフォーム

● 環境構築
Docker ビルド
docker-compose up -d --build

●Laravel の環境構築
docker-compose exec php bash
composer install
.env の環境変数の変更
php artisan key:generate
php artisan migrate
php artisan db:seed
$ mysql -u laravel_user -p

● 使用技術
・mysql:8.0.26
・nginx:1.21.1
・php:7.4.9
・laravel:8

●ER 図
![Alt text](image.png)

●URL
・お問い合わせフォーム入力ページ：http://localhost/
・お問い合わせフォーム確認ページ：http://localhost/confirm

# suwamame-Laravel-test
