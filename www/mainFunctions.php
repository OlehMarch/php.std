<?php

/*Функции для работы с типами переменных*/

	$x = 15;
	if (isset($x)) echo "variable exists<br />"; //функция isset позволяет узнать существует ли переменная
	else echo "variable does not exist<br />";
	unset($x); //Данная функция позволяет удалить переменную из памяти
	if (isset($x)) echo "variable exists<br />";
	else echo "variable does not exist<br />";
	$array = array(0, 3, 5);
	unset($array[1]);
	print_r($array);
	$x = 15;
	echo "<br />";
	echo "integer? - ".is_integer($x)."<br />";
	echo "double? - ".is_double($x)."<br />";
	echo "string? - ".is_string($x)."<br />";
	echo "numeric? - ".is_numeric($x)."<br />";
	echo "boolean? - ".is_bool($x)."<br />";
	echo "scalar? - ".is_scalar($x)."<br />";
	echo "null? - ".is_null($x)."<br />";
	echo "is_array? - ".is_array($x)."<br />";
	echo "is_array? - ".is_array($array)."<br />";
	echo "type = ".gettype($x)."<br />";
	echo "type = ".gettype($array)."<br /><br /><br /><br />";
	
/*Математические функции*/

	echo M_PI;
	echo "<br />";
	echo M_E;
	echo "<br />";
	$x = -15;
	echo abs($x)."<br />"; //модуль числа
	$x = 59.53921;
	echo round($x)."<br />"; //округление
	echo round($x, 2)."<br />"; //округление до определенного колличества знаков после запятой
	echo ceil($x)."<br />"; //ближайшее большее целое число
	echo floor($x)."<br />"; //ближайшее меньшее целое число
	echo mt_rand()."<br />"; //рандомное число
	echo mt_rand(0, 10)."<br />"; //рандомное число в диапазоне от 0 до 10
	echo min(0, 3, 7, 1, 39, -5, -10, 0)."<br />"; //минимальное число
	echo max(0, 3, 7, 1, 39, -5, -10, 0)."<br />"; //максимальное число
	$x = 1;
	echo ($x * 180) / M_PI."<br />"; //количество градусов в радиане
	echo sin($x)."<br />"; //значение не в градусах, а в радианах
	echo cos($x)."<br />";
	echo tan($x)."<br />";
	echo 1 / tan($x)."<br />"; //котангенс
	echo asin($x)."<br />"; //арксинус
	echo acos($x)."<br />";
	echo atan($x)."<br />";
	echo M_PI /2 - atan($x)."<br /><br /><br /><br />"; //арккотангенс
	
/*Строковые функции*/

	$str = "This is video";
	echo strlen($str)."<br />"; //длина строки
	echo strpos($str, "is")."<br />"; //поиск символа в строке
	echo strpos($str, "is", 3)."<br />"; //поиск символа в строке с определенного номера
	if (strpos($str, "T") == false) echo "Letter T haven't been found<br />";
	else echo "Letter T is found<br />"; //для корректного нахождения символов в слечае их нахождения
	if (strpos($str, "T") === false) echo "Letter T haven't been found<br />"; //под нулевым номером нужно
	else echo "Letter T is found<br />"; //не приравнивать к Фолсу, а проверять на еквивалентность
	echo substr($str, 3, 6)."<br />"; //обрезание строки с 3го номера до шестого символа после 3ьго
	echo substr($str, 3)."<br />"; //обрезание строки с 3го номера до конца строки
	echo substr($str, 3, -3)."<br />"; //обрезание строки с 3го номера до третьего с конца, не включая третий
	echo str_replace("video", "course", $str)."<br />"; //замена символов в строке str с video на course
	$search = array("is", "video");
	$replace = array("ab", "cd");	
	echo str_replace($search, $replace, $str)."<br />"; //замена может осуществлятся и массивами
	$str = "<html><head></head><body><h1>&Title&</h1></body></html>";
	echo $str;
	echo htmlspecialchars($str)."<br />"; //для отображения хтмл кода
	$str = "ThIs is ViDeO";
	echo strtolower($str)."<br />"; //все элементы строки в нижний регистр
	echo strtoupper($str)."<br />"; //все элементы строки в верхний регистр
	echo strcmp("abc", "Abc")."<br />"; //сравнивание строк (1 - если 1я больше 2й) по кодам ASCII
	echo strcmp("abc", "abc")."<br />"; //сравнивание строк (0 - если 1я = 2й)
	echo strcmp("abc", "bmw")."<br />"; //сравнивание строк (-1 - если 2я больше 1й)
	echo strcasecmp("abc", "Abc")."<br />"; //сравнивание строк без учета регистра
	echo md5("password")."<br />"; //Хеширование данных
	$str = "Строка";
	echo iconv("CP1251", "UTF-8", $str); //смена кодировки
	echo "<br />".chr(110)."<br />"; //ввод символа через его номер
	echo ord("n")."<br />"; //номер символа
	$str = "   String  \n";
	echo trim($str)."<br /><br /><br /><br />"; //удаление пробелов в начале и в конце, вклюая и переносы на следующую строку

/*Функции для работы с массивами*/

	$list = array(10, 5, -10, 12);
	echo count($list)."<br />"; //количество элементов массива
	sort($list)."<br />"; //сортировка массива от меньшего к большему, мин элемент будет первым
	print_r($list);
	echo "<br />";
	rsort($list)."<br />"; //сортировка массива от большего к меньшему, макс элемент будет первым
	print_r($list);
	echo "<br />";
	$list = array(10, 5, -10, 12);
	asort($list)."<br />"; //сортировка массива без смены порядкового номера от меньшего к большему
	print_r($list);
	echo "<br />";
	arsort($list)."<br />"; //сортировка массива без смены порядкового номера от большего к меньшему
	print_r($list);
	echo "<br />";
	$array = array("b" => 1, "a" => 12, "c" => -10);
	ksort($array)."<br />"; //сортировка по "кеям" по алфавиту
	print_r($array);
	echo "<br />";
	krsort($array)."<br />"; //сортировка по "кеям" инверсия ↑
	print_r($array);
	echo "<br />";
	shuffle($array); //убирает все "кеи" создавая обычный массив если использовать перемешивание на асоциативном массиве
	shuffle($list); //перемешивание массива
	print_r($array);
	echo "<br />";
	print_r($list);
	echo "<br />";
	echo in_array(10, $list); //проверка на наличие символа в массиве, если есть то - 1
	echo "<br />";
	echo in_array(1, $list); //если нету то - " "
	echo "<br />";
	$array_1 = array(1, 10);
	$array_2 = array(15, 10, 5);
	$array = $array_1 + $array_2; //такой метод сложения строк неправильный
	print_r($array);
	echo "<br />";
	$array = array_merge($array_1, $array_2); //правильный метод сложения строк
	print_r($array);
	echo "<br />";
	$array = array(1, 2, 3, 4, 5);
	print_r($array);
	echo "<br />";
	print_r(array_slice($array, 1, 3)); //вырезание 3х элементов массива начиная с 1го
	echo "<br />";
	print_r(array_slice($array, 1)); //вырезание всех элементов массива начиная с 1го
	echo "<br />";
	print_r(array_slice($array, 1, -2)); //вырезание элементов массива начиная с 1го и до 2го с конца, не включая его
	echo "<br />";
	$array = array(3, 4, 3, 3, 5, 6, 7, 8, 7, 9);
	$array = array_unique($array); //удаление повторяющихся элементов массива
	print_r($array);
	echo "<br /><br /><br /><br />";

/*Функции для работы с датой и временем*/

	$start = microtime(true);
	echo time()."<br />"; //возвращает количество секунд с начала эпохи UNiX (01.01.1970)
	echo microtime()."<br />"; //возвращает количество секунд и милисекунд
	echo microtime(true)."<br />"; //возвращает секунды и милисекунды с точьностью до сотой
	echo date("Y-m-d H:i:s")."<br />"; //Вывод даты и времени, возможны разные форматы записи
	echo date("H:i:s Y-m-d", 9564684163)."<br />"; //Вывод даты и времени по прошествии 9564684163 секунд с 01.01.1970
	$time = mktime(23, 23, 23, 23, 05, 1995); //подсчет количества секунд с 01.01.1970 до введенной даты в функции
	echo date("H:i:s Y-m-d", $time)."<br />";
	$array = getdate($time); //полная информация о дате ивремени
	print_r($array);
	echo "<br />".checkdate(2, 28, 2012)."<br />"; //проверка на правильность даты, 1 - если правильно
	echo checkdate(2, 29, 2012)."<br />"; // " " - ксли не правильно
	echo "Working time of script is - ".(microtime(true) - $start)." seconds<br /><br /><br /><br />";

/*Функции для работы с файлами*/

	/*$file = fopen("a.txt", "a+t");
	fwrite($file, "String\nNext\nNext");
	fclose($file);*/
	$file = fopen("a.txt", "r+t");
	while (!feof($file)) { //!feof - позволяет остановить цикл после нахождения последнего элемента массива, строки или файла
		echo fread($file, 20); //считывание файла по 20 символов
		echo "<br />";
	}
	echo fread($file, 1)."<br />"; //после полного считывания файла курсор остался в конце
	fseek($file, 0); //переместить курсор в самое начало
	echo fread($file, 1)."<br />";
	fclose($file);
	file_put_contents("b.txt", "file file file")."<br />";
	echo file_get_contents("b.txt")."<br />";
	echo file_exists("a.txt")."<br />";
	echo file_exists("c.txt")."<br />";
	echo filesize("a.txt")."<br /><br /><br /><br />";
	//rename("a.txt", "c.txt"); //переименование файла с именем "а" в "с"
	//unlink("b.txt"); //удаление файла с именем "b"
	
/*Чтение INI-файлов*/

	$array = parse_ini_file("config.ini", true);
	print_r($array);
	echo "<br />Кодировка: ".$array["Main Settings"]["charset"]."<br />";
	$array = parse_ini_file("config.ini");
	print_r($array);
	echo "<br />Адрес сайта: ".$array["address"]."<br /><br /><br /><br />";

/*Права доступа файлу*/

	echo __FILE__."<br />"; //вывод расположения главного файла
	echo fileperms(__FILE__)."<br /><br /><br />"; //вывод прав доступа
	chmod(__FILE__, 0777); //изменить права доступа (не работает на Windows)
	/*
	 ___________________________
	|	| Owner | Group | Users |
	|---|-------|-------|-------|
	| R |   1   |   1   |   1   |  R - read (4)
	| W |   1   |   0   |   0   |  W - write (2)
	| E |   1   |   1   |   0   |  E - execute (1)
	|___|_______|_______|_______|
	*/
	
/*Функции для работы с каталогами*/

	mkdir("tempdir"); //создание директории
	chdir("tempdir"); //перемещение точки создания фалов в указаную директорию
	file_put_contents("a.txt", "String");
	file_put_contents("b.txt", "String");
	mkdir("newdir");
	chdir("newdir");
	file_put_contents("c.txt", "String");
	chdir(".."); //возврат на директорию вверх
	file_put_contents("d.txt", "String");
	require_once "lib/functionsForDir.php";
	printAllFiles("."); //смотреть описание в functionsForDir.php
	chdir("..");
	deleteAllFiles("tempdir"); //смотреть описание в functionsForDir.php
	echo "<br /><br /><br />";
	
/*Функция phpinfo() и $_SERVER*/

	//phpinfo(); //вся информация о PHP, подключенные модули и т.д.
	echo $_SERVER["HTTP_HOST"]."<br />"; //перечень всех переменных находится в phpinfo()
	echo $_SERVER["SERVER_ADDR"]."<br /><br /><br />";
	/*Для изменения настроек в РНР можно изменять файл php.ini, если же нету доступак нему
	то можно изменять параметры в .htaccess(в нем пишется php_value и далее название параметра 
	который нужно изменить)*/
	
/*Работа с фото*/

	$info = getimagesize("image.jpg"); //вывод информации о картинке
	print_r($info);
	$im = imageCreateFromJpeg("image.jpg"); //получение изображения
	echo imageSX($im)."<br />"; //размер по иксу
	echo imageSY($im)."<br />"; //размер по игрику
	$color = imagecolorat($im, 400, 800); //узнать цвет в точке 400 по иксу и 800 по игрику
	echo $color."<br />";
	$r = ($color >> 16) & 0xFF; //один из вариантов перевода кода цвета в приемлемый вид, т.е. ргб
	$g = ($color >> 8) & 0xFF;
	$b = $color & 0xFF;
	echo "Color of choosen point is: ($r,$g,$b)<br />";
	$color = imagecolorsforindex($im, $color); //более простой вариант перевода кода цвета в приемлемый вид
	print_r($color);
	imageJpeg($im, "image_new.jpg"); //если указывается 2й параметр то картинка сохраняется с новым именем
	echo "<br /><a href=\"image_p1.php\">Look for Image 1</a><br />";
	imageDestroy($im); //всегда заканчивая работу с картинкой необходимо заканчивать этой функцией
	echo "<a href=\"image_p2.php\">Look for Image 2</a><br />";
	echo "<a href=\"image_p3.php\">Look for Image 3</a><br /><br /><br /><br />";

/*Регулярные выражения*/

	echo "<h3>Регулярные выражения</h3><br />";
	$reg = "/th/"; //для создания регулярного выражения требуется написать спец символ (/, \, ! и т.д.)
	$str = "Something";
	echo preg_match($reg, $str)."<br />"; //функция проверки на совпадения у строки с регулярным выражением
	$reg = "/S.m/"; // "." - означает любой символ
	echo preg_match($reg, $str)."<br />";
	$reg = "/S.t/";
	echo preg_match($reg, $str)."<br />";
	/*Символы классы*/
	echo "<h4>Символы классы</h4><br />";
	$reg = "/\sab\Scd\w\W\d ad \D/"; // "\s" - любой пробeльный символ; "\S" - любой непробельный сивол; "\W" - любой символ который небуква и нецифра; "\w" - любая буква или цифра; "\d" - Любая цифра; "\D" - любой символ только не цифра;
	echo preg_match($reg, "\nab9cd9/0 ab X")."<br />";
	echo preg_match($reg, "some \nab9cd9/0 ab X some")."<br />";
	echo preg_match($reg, "\nab9cd9/0 1b X")."<br />";
	echo preg_match($reg, " ab9cd9/0 ab X")."<br />";
	/*Альтернативы*/
	echo "<h4>Альтернативы</h4><br />";
	$reg = "/a[012]b/"; // "[012] или [0-9]" - интервал указывается в квадратных скобках
	echo preg_match($reg, "a0b")."<br />";
	echo preg_match($reg, "a1b")."<br />";
	echo preg_match($reg, "abb")."<br />";
	echo preg_match($reg, "a3b")."<br />";
	echo preg_match($reg, "a1c")."<br />";
	$reg = "/a[a-z0-8]b/";
	echo preg_match($reg, "aa1b")."<br />";
	echo preg_match($reg, "a1vb")."<br />";
	echo preg_match($reg, "a1b")."<br />";
	/*Отрицание*/
	echo "<h4>Отрицание</h4><br />";
	$reg = "/a[^012]b/"; // "^" - символ отрицания
	echo preg_match($reg, "a4b")."<br />";
	echo preg_match($reg, "a1b")."<br />";
	$reg = "/a[^0-8]b/";
	echo preg_match($reg, "a9b")."<br />";
	echo preg_match($reg, "aab")."<br />";
	/*Вывод спецсимволов*/
	echo "<h4>Вывод спецсимволов</h4><br />";
	$reg = "/a\/b\\\c\./"; //для вывода точки или слэша требуется так называемый экран, такой же как и в С++, это - "\"
	echo preg_match($reg, "a/b\\c.")."<br />";
	echo preg_match($reg, "a/b\\c")."<br />";
	echo preg_match($reg, "a/b\\cd")."<br />";
	/*Квантификаторы повторений*/
	echo "<h4>Квантификаторы повторений</h4><br />";
	$reg = "/ab.*c/"; //любое количество любых символов между ab и с, от 0 - до бесконечности
	echo preg_match($reg, "absomesomec")."<br />";
	echo preg_match($reg, "abc")."<br />";
	echo preg_match($reg, "absomesome")."<br />";
	$reg = "/ab.+c/"; //любое количество любых символов между ab и с, от 1 - до бесконечности
	echo preg_match($reg, "absomesomec")."<br />";
	echo preg_match($reg, "abc")."<br />";
	echo preg_match($reg, "absomesome")."<br />";
	$reg = "/ab.?c/"; //любое количество любых символов между ab и с, от 0 - 1
	echo preg_match($reg, "absomesomec")."<br />";
	echo preg_match($reg, "abc")."<br />";
	echo preg_match($reg, "absomesome")."<br />";
	echo "----------<br />";
	$reg = "/ab\d{1,2}/"; // "\d{1,2}" - одна или две любые цифры
	echo preg_match($reg, "ab3")."<br />";
	echo preg_match($reg, "ab34")."<br />";
	echo preg_match($reg, "ab")."<br />";
	echo preg_match($reg, "ab345")."<br />";
	echo "----------<br />";
	$reg = "/ab\d{2}/"; // "\d{2}" - две любые цифры (на соответствие проверяется только до 2й цифры, т.е. если есть третяя то все равно будет истина)
	echo preg_match($reg, "ab3")."<br />";
	echo preg_match($reg, "ab34")."<br />";
	echo preg_match($reg, "ab")."<br />";
	echo preg_match($reg, "ab345")."<br />";
	echo "----------<br />";
	$reg = "/ab\d{2,}/"; // "\d{2,}" - от двух до бесконечности любых цифр
	echo preg_match($reg, "ab3")."<br />";
	echo preg_match($reg, "ab34")."<br />";
	echo preg_match($reg, "ab")."<br />";
	echo preg_match($reg, "ab345")."<br />";
	/*Мнимые символы*/
	echo "<h4>Мнимые символы</h4><br />";
	$reg = "/^ab\d{2}$/"; //"^" - начало строки; "$" - конец строки;
	echo preg_match($reg, "ab3")."<br />";
	echo preg_match($reg, "ab34")."<br />";
	echo preg_match($reg, "ab")."<br />";
	echo preg_match($reg, "ab345")."<br />";
	echo "----------<br />";
	$reg = "/^ab\d{2}/";
	echo preg_match($reg, "xab34")."<br />";
	echo preg_match($reg, "ab345")."<br />";
	/*Группирующие скобки*/
	echo "<h4>Группирующие скобки</h4><br />";
	$reg = "/(\d{2})-(\d{2})-(\d{4})/";
	echo preg_match($reg, "23-03-2023")."<br />";
	preg_match_all($reg, "23-03-2023", $matches);
	print_r($matches);
	echo "<br />".$matches[3][0]."<br />";
	echo "----------<br />";
	$reg = "/.*?(\d+)\D.*/"; //обращение к скобке идет с помощью '$1', где цифра - номер скобки
	echo "Ege: ".preg_replace($reg, '$1', "I'm almost 99 years old")."<br />";
	/*Модификаторы*/
	echo "<h4>Модификаторы</h4><br />";
	$reg = "/ab.*c/";
	echo preg_match($reg, "abcc")."<br />";
	echo preg_match($reg, "ABcc")."<br />";
	$reg = "/ab.*c/i"; //модификатор і - отвечает за регистр, если он стоит, то регистр не учитывается
	echo preg_match($reg, "abcc")."<br />";
	echo preg_match($reg, "ABcc")."<br />";
	echo "----------<br />";
	$reg = "/a b c/";
	echo preg_match($reg, "a b c")."<br />";
	echo preg_match($reg, "abc")."<br />";
	$reg = "/a b c/x"; //модификатор x - отвечает за пробельные символы, если он стоит, то пробелы не учитывается
	echo preg_match($reg, "abc")."<br />";
	echo "----------<br />";
	$reg = "/^\d/s"; //модификатор который стоит по умолчанию
	echo preg_match($reg, "string\n9")."<br />";
	$reg = "/^\d/m"; //модификатор который учитывает преренос, то есть все что после переноса считается второй строкой, и проверяется на совпадение
	echo preg_match($reg, "string\n9")."<br />";
	
	$text = "Hello everyone! redactors@site.ua, please mail me at redactors@site.ua";
	function replaceEmail($text) {
		$reg = "/[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i";
		return preg_replace($reg, "<b>there was an email</b>", $text);
	}
	echo replaceEmail($text)."<br /><br /><br />";

/*Создание редиректа*/

	//header("Location: http://google.com.ua"); - это и есть перенаправление на другой сайт, или внутренюю страницу
	//exit;

/*Отправка e-mail*/

	$message = "Text of message\n\nNew string";
	$to = "molegs@meta.ua";
	$from = "ghhosted@gmail.com";
	$subject = "Theme of message";
	$subject = "=?utf-8?B?".base64_encode."?="; //специально для некоторых почтовых ящиков, без этого возможно не получения письма или искривление его содержимого
	$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
	//mail($to, $subject, $message, $headers);
	$message = "Message with <b>HTML</b> <i>code</i>";
	$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/html; charset=utf-8\r\n";
	//mail($to, $subject, $message, $headers);

	echo "<br /><a href=\"index.php\">Назад</a><br />";

?>