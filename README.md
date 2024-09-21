# お問い合わせフォーム

## 環境構築
Dockerビルド

1. git clone git@github.com:coachtech-material/laravel-docker-template.git
2. mv laravel-docker-template FashionablyLate
3. git remote set-url origin git@github.com:ST0724/FashionablyLate.git
4. git remote -v
5. git add .
6. git commit -m "リモートリポジトリの変更"
7. git push origin main
8. docker-compose up -d --build

Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. cp .env.example .env
4. .envファイルの編集
5. php artisan key:generate
6. php artisan migrate
7. php artisan db:seed

## 使用技術(実行環境)
+ Laravel 8.83.8

## ER図
< - - - 作成したER図の画像 - - - >

未作成

## URL
開発環境：[http://localhost/](http://localhost/)
