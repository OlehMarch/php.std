<?php

	session_start(); //начало работы с сессиями, как и с куки нельзя ничего выводить до этой функции
	$count = (isset($_SESSION["count"]))? $_SESSION["count"]: 0; // краткая форма if-else
	$count++;
	$_SESSION["count"] = $count;
	$_SESSION["count1"] = 15;
	if ($count == 1) echo "Page updates: once";
	else if ($count == 2) echo "Page updates: twice";
	else if ($count == 3) echo "Page updates: thrice";
	else if ($count > 33) session_destroy(); //удаления файла сессии с сервера
	else echo "Page updates: $count times";
	

	echo "<br /><br /><br /><a href=\"index.php\">Назад</a><br />";

?>