# TDDBC for PHP with PHPUnit

これは、TDDBCのPHP向けPHPUnitプロジェクトです。

## 動作環境

* PHP 7.0以上
* [Composer](https://getcomposer.org/download/)

## セットアップ

### リポジトリを取得する

```sh
git clone git@github.com:satoryu/php_phpunit.git
cd php_phpunit
```

### 必要なパッケージをインストール

```sh
composer install
```

### 動作確認

`./vendor/bin/phpunit`を実行して

```sh
$ ./vendor/bin/phpunit
PHPUnit 6.3.0 by Sebastian Bergmann and contributors.

.                                        1 / 1 (100%)

Time: 43 ms, Memory: 4.00MB

OK (1 test, 1 assertion)
$
```

のようにテストが正常終了すればOKです。

## ライセンス

三条項BSDライセンス (3-clause BSD license)です。
詳しくはプロジェクト直下のLICENSEを読んでください。
