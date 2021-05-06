## 概要

WordPressのオリジナルテーマを作成する際のテンプレートです．

## ポイント

WordPressの自作テーマは最低限index.phpとstyle.cssが存在すれば動くと思いますが，ここでは下記の部分まで作成しています．

- index.phpより優先度の高いfront-page.phpを導入
- header.phpとfooter.phpを追加
- functions.phpで任意のcssやjsスクリプトを追加できるように(jqueryは読み込み速度の観点からWordPress独自のものを使いますので独自に読み込んでいません．独自に読み込む場合はfunctions.phpを編集してください）
- 投稿ページのUIをカテゴリごとに変えるようにsingle.phpにコードを追加

## index.phpより優先度の高いfront-page.phpを導入

front-page.phpがある場合，index.phpより優先して読み込まれます．このテンプレートではfront-page.phpを使っています．

## header.phpとfooter.php
front-page.phpから

```php
<?php get_header(); ?>
<?php get_footer(); ?>
```
で読み込んでいます．もし２種類以上のheader利用したい場合，header-2.phpなどの名前で別のものを作成し，
```php
<?php get_header('2'); ?>
```
で読み込んでください．

## functions.phpで任意のcssやjsスクリプトを追加できるようにしている

style.cssを含めてcss，jsファイルはfunctions.phpで読み込むようにしています．front-page.phpに直接記載することも可能ですが，読み込む場所を一箇所にした方が保守の観点から望ましいと思いますのでfunctions.phpから読み込んでいます．

もしfront-page.phpで読み込む場合下記のようにしてください．

```php
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
```

jsファイルはhtmlと同じようにscriptタグで囲めば使うことができます．

## 投稿ページのUIをカテゴリごとに変えるようにsingle.phpにコードを追加

single.phpでカテゴリごとにテーマを変えられるようにしています．

```php
<?php
if ( in_category("<my-specific-category-name>") ) {
	get_template_part( "single-<my-specific-category-name>" , false );
}
else {
	get_template_part( "single-default" , "normal");
}
?>
```

## その他

functions.phpを下記のようにするとjqueryとbootstrapを読み込むことができます．


```php
<?php
function add_files() {
    wp_deregister_script('jquery');
    wp_enqueue_script(
    'jquery',
    'https://code.jquery.com/jquery-3.5.1.min.js',
    '',
    '3.5.1',
    false
    );
    wp_enqueue_script(
        'bootstrap4-js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        array( 'query' ),
        '4.3.1',
        false
    );
    wp_enqueue_style(
        'bootstrap4-css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        array(),
        '4.3.1',
        false
    );
    // custom css
    wp_enqueue_style( 'my-script-css', get_template_directory_uri() . '/style.css', array('bootstrap4-css'), NULL,false );

    // custom js file
    wp_enqueue_script( 'my-script-js', get_template_directory_uri() . '/main.js', array(), NULL, true);
}

add_action('wp_enqueue_scripts', 'add_files');
```

## ライセンス

Copyright (c) 2021 NP-Systems
Released under the MIT license
https://opensource.org/licenses/mit-license.php

