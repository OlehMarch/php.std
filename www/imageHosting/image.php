<? ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Хостинг изображений</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<style>
		h1, h2, p, div {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Добро пожаловать на Хостинг Изображений</h1>
	<?php
		require_once "show_image.php";
	?>
	<? if ($results) {?>
		<p>Адресс данного изображения:<b><?=$link?></b></p>
		<div>
			<img src="<?=$path?>" alt="image" />
		</div>
	<?}else {?>
		<h2>Указанного изображения не найдено!</h2>
	<?}?>
	<p>
		<a href="index.php">Вернутся на главную</a>
	</p>
</body>
</html>