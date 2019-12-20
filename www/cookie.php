<?php

	//setcookie("count", 5); - создание куки файла
	//unset($_COOKIE["count"]); - удаление куки файла
	$count = (isset($_COOKIE["count"]))? $_COOKIE["count"]: 0; // краткая форма if-else
	$count++;
	setcookie("count", $count, time() + 5);
	if ($count == 1) echo "Page updates: once";
	else if ($count == 2) echo "Page updates: twice";
	else if ($count == 3) echo "Page updates: thrice";
	else echo "Page updates: $count times";

	echo "<br /><br /><br /><a href=\"index.php\">Назад</a><br />";

?>