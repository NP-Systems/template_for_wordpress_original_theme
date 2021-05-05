<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>サンプル</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
</head>
<body>

<section class="conA">
<div class="container">
	<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
	<h1>LOGGER</h1>
	<p>美味しく楽しくライフログ</p>
	<a href="#">ライフログを始める</a>
</div>
</section>

</body>
</html>
