<?php

/*Lesson 1*/
	echo "Hello World"; //to write some text use operator "echo"
	echo "<br /><br />";

/*Lesson 2*/	
	$i = 5; // integer
	$d = -3.7; // double
	$str = "Some string"; // string
	$b = true; //boolean (true == '1'; false == ' ')
	echo "Переменная i = $i<br />";
	echo 'Переменная i = $i<br />';
	echo "<br /><br />";

/*Lesson 3*/

/*Жесткие ссылки*/	
	$n_1 = -5;
	$n_2 = &$n_1;
	$n_2 = 4;
	echo "n_1 = $n_1<br />";
	echo "n_2 = $n_2<br />";
/*Символические ссылки*/
	$a = 10;
	$b = "a";
	echo $$b;
	echo "<br />";

/*Lesson 4*/

/*Константы*/
	echo "PHP_VERSION - ".PHP_VERSION;
	echo "<br />";
	echo "PHP_OS - ".PHP_OS;
	echo "<br />";
	define("PI", 3.1415926);
	echo PI;
	echo "<br />";
	echo defined("IP");
	echo "<br />";
	echo defined("PI");
	
/*Lesson 5*/

/*Арифметические операции*/
	echo "<br /><br />";
	$x = 20;
	$y = 15;
	$sum = $x + $y;
	$diff = $x - $y; 
	$mult = $x * $y;
	$div = $x / $y;
	$rem = $x % $y; //актуально только для целых чисел
	echo "Сумма $x и $y = $sum<br />Разность $x и $y = $diff<br />Произведение $x и $y = $mult<br />Деление $x на $y = $div<br />Остаток при делении $x на $y = $rem<br />";
	// синтаксис как у С++ ($x++, $x--, $x+=4, $x-=4 ...)

/*Lesson 6*/

/*Строковые операции*/
	echo "<br /><br />";
	$str_1 = "String 1";
	$str_2 = "String 2";
	echo $str_1." ".$str_2."<br />";
	echo " \" \\ <br />"; // like in C++
	$str = `attrib`; //Для команд (использовать не рекомендуется)
	echo $str;
	
/*Lesson 7*/

/*Логические операции*/
	// такие же как и в С++ (>, <, ==, !=, <=, >=, ||, &&, ^(исключающее или))
	
/*Lesson 8*/

/*Оператор эквивалентности "=== or !==" */
	echo "<br /><br />";
	$var_1 = "Something";
	$bool = $var_1 == true;
	echo "($var_1 == true) = $bool<br />";
	$var_2 = 0;
	$var_3 = "";
	$bool = $var_2 == $var_3;
	echo "($var_2 == $var_3) = $bool<br />";
	
	$bool = $var_1 === true;
	echo "($var_1 === true) = $bool<br />";
	$bool = $var_2 === $var_3;
	echo "($var_2 === $var_3) = $bool<br />";
	
	$var_4 = "String";
	$var_5 = "String";
	$bool = $var_4 === $var_5;
	echo "($var_4 === $var_5) = $bool<br /><br />";
	
/*Lesson 9*/

/*Оператор if-else*/
	//точно такой же как и в С++, но содним отличием - elseif пишется слитно, а не через пробел как в С++
	
/*Lesson 10*/

/*Циклы*/
	//точно такие же как и в С++ (for, while, do-while)
	echo "Use of operators <b>break</b> and <b>continue</b><br />";
	for ($i = 0; true; ) {
		$i++;
		if ($i == 20) {
			echo "On this iteration we have used operator <b>break</b>";
			break;
		};
		if ($i % 2 ==0) continue;
		echo "Iteration $i<br />";
	};
	echo "<br />";
	$x = 5;
	if ($x < 0) $f = "Factorial of number <b>$x</b> do not consist";
	else {
		$f = 1;
		if ($x > 0)
			for ($i = 1; $i <= $x; $i++)
				$f *= $i;
	};
	if ($f === "Factorial of number <b>$x</b> do not consist") echo $f;
	else echo "Factorial of number $x = ".$f;
	
/*Lesson 11*/

/*Оператор switch-case*/
	//точно такой же как и в С++ ( switch () { case 0: \n echo "smt"; \n break; ... } )
	
/*Lesson 12*/

/*Functions*/
	function printSum($x, $y) {
		$sum = getSum($x, $y);
		echo "Sum of $x and $y = $sum<br />";
	}//procedure
	
	function getSum($x, $y) {
		$sum = $x + $y;
		return $sum;
	}//function
	
	echo "<br /><br />";
	printSum(10, 7);
	
/*Lesson 13*/

/*Array*/
	//Списочные массивы (списки)
	echo "<br />";
	$list = array(15, "22", "My string", true);
	$list[] = "New element";//добавление элемента
	echo $list[4];
	$list[4] = "Change";//замена элемента
	echo "<br />";
	echo $list[4];
	echo "<br />";
	for ($i = 0; $i < count($list); $i++) {//count - предназначен для подсчета кол-ва элементов в массиве
		echo "Element with index $i equal: <b>".$list[$i]."</b><br />";
	}
	//Ассоциативные массивы
	echo "<br />";
	$array = array("name" => "Alex", "age" => 22, "student" => true);
	$array["a"] = "b";//добавление элемента
	$array["a"] = "c";//замена элемента
	foreach($array as $k => $v) {
		echo "$k = $v<br />";
	}
	
	print_r($array);//проверочная функция
	echo "<br />";
	print_r($list);//проверочная функция

	$list = array(5, 0, -10, 7, 2, 10, 5.2, 100);
	echo getAverageValue($list);
	echo"<br />";
	echo getAverageValue(array(15, 20, -5, 11));
	
	function getAverageValue($array) {
		$sum = 0;
		for ($i = 0; $i < count($array); $i++)
			$sum += $array[$i];
		$average = $sum / count($array);
		return $average;
	}
	
/*Lesson 14*/

/*two dimensional array*/
	echo"<br /><br />";
	$array = array(array(0, 5, -5), array("string", true), array(-5.2, "str"));
	for ($i = 0; $i < count($array); $i++) {
		for ($j = 0; $j < count($array[$i]); $j++) {
			echo "Array [".$i."][".$j."] = ".$array[$i][$j];
			echo "<br />";
		}
	}
	print_r($array);//проверочная функция
	echo "<br /><br />";
	
/*Lesson 15*/

/*Область видимости переменных*/
	$x = 5;
	echo "Variable X = $x<br />";
	function testGlobal() {
		//$GLOBALS["x"] += 2;
		global $x;
		$x += 7;
	}
	testGlobal();
	echo "Variable X = $x<br />";
	function testStatic() {
		static $id = 0;
		$id++;
		if ($id==1) echo "Function was called once<br />";
		elseif ($id==2) echo "Function was called twice<br />";
		elseif ($id>2) echo "Function was called <b>$id</b> times<br />";
		else echo "Function wasn't called<br />";
	}
	for ($i = 0; $i < 10; $i++) testStatic();
	echo "<br />";

/*Lesson 16*/

/*Подкдючение сторонних файлов*/
	//для подключения использую require, require_once, include, include_once.
	//разница между require и include в том, что если файл не найдем при include прга продолжает работать
	//приставка _once обозначает то, что код подключаемого файла будет выполнятся единожды
	
	echo "<a href=\"index.php\">Назад</a><br />";

?>