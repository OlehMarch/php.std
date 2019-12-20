<?php

	$im = imageCreateTrueColor(400, 500); //создание холста
	$c = imageColorAllocate($im, 120, 220, 100); //создание цвета
	imageLine($im, 0, 0, imageSX($im), imageSY($im), $c); //создание линии
	imageLine($im, 0, imageSX($im), imageSY($im), 0, $c);
	imageFilledRectangle($im, 100, 200, 300, 400, $c); //создание закрашеного прямоугольника
	$c = imageColorAllocate($im, 255, 255, 255);
	imageRectangle($im, 99, 199, 301, 401, $c); //создание незакрашеного прямоугольника
	imageSetThickness($im, 5); //толщина линии в пикселах
	$c = imageColorAllocate($im, 255, 0, 0);
	imageRectangle($im, 95, 196, 305, 404, $c);
	imageSetThickness($im, 2);
	imageArc($im, 20, 30, 200, 400, 0, 30, $c); //создание дуги первые 2 координаты указывают центр окружности, 3я и 4я - радиусы по Х и У, 5яи 6я - в градусах откуда начинать и где заканчивать
	imageArc($im, 40, 300, 50, 50, 0, 360, $c);
	$c = imageColorAllocate($im, 255, 255, 0);
	imageFill($im, 45, 305, $c); //заполнение по указаным координатам
	imageArc($im, 240, 80, 150, 100, 0, 360, $c); 
	$texture = imageCreateFromPng("texture.png"); //выбор текстуры для заливки вместо цвета
	imageSetTile($im, $texture); //загрузка текстуры 
	imageFill($im, 245, 85, IMG_COLOR_TILED); //IMG_COLOR_TILED требуется для использования текстуры
	$array = array(10, 20, 30, 40, 59, 39, 10, 70); //для многоугольника требуется координаты указывать в массиве
	imageFilledPolygon($im, $array, 4, IMG_COLOR_TILED); //функция создающая многоугольник (4 - это количество точек записанных в массиве)
	for ($i = 0; $i < 1000; $i++) {
		$x = mt_rand(0, imageSX($im));
		$y = mt_rand(0, imageSY($im));
		imageSetPixel($im, $x, $y, $c); //указанную точку закрасить в определенный цвет
	}
	$new_im = imageCreateTrueColor(100, 200);
	imageCopyResized($new_im, $im, 0, 0, 50, 50, imageSX($new_im), imageSY($new_im), 70, 70); //указываем куда сохранять, откуда, начало координат в новом холсте, координаты в изначальном холсте, конец координат в новом холсте(если указать больше чем вырезаный кусок в старом, то изображение растянется), конец координат в старом холсте для вырезки
	
	$c = imageColorAllocate($im, 0, 0, 0);
	$string_1 = "Курс РНР";
	$string_2 = "MyRusakov.ru";
	imageString($im, 5, 100, 200, $string_2, $c); //вывод строки, но максимальный размер 5 (100, 200 - координаты начала строки)
	imageString($im, 5, 100, 220, $string_1, $c); //вывод строки написанной на кирилице нормально не получается
	imageTtfText($im, 20, -10, 100, 260, $c, "Verdana.ttf", $string_2); //20 - размер, -10 - угол наклона, 100,260 - начало текста - отображает любой текст который поддерживает шрифт
	imageTtfText($im, 20, 0, 100, 340, $c, "Verdana.ttf", $string_1);
	
	header("Content-type: image/png");
	imagePng($im);
	imagePng($new_im, "image_new.jpg");
	imageDestroy($new_im);
	imageDestroy($im);
	imageDestroy($texture);
	
?>