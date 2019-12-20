<? ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Хостинг изображений</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<style>
		h1, p {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Ошибка при загрузке изображения</h1>
	<?php
		require_once "show_error.php";
	?>
	<p>Код ошибки: <b><?=$code?></b></p>
	<p>Текст ошибки: <b><?=$text?></b></p>
	<p>
		<a href="index.php">Вернутся на главную</a>
	</p>
</body>
</html>