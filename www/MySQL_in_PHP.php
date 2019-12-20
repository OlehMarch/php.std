<?php
	
/*Подключение к базе данных*/

	$mysqli = new mysqli("localhost", "root", "", "mybase"); //создание нового подключения к БД по адресу "localhost"
	//с именем пользователя "Admin", паролем "4815162342" к таблице по имени "mybase"
	$mysqli->query("SET NAME 'utf8'"); //обязательно писать для нормального отображения кирилицы в таблице

/*Управление базами данных и таблицами*/

	$mysqli->query("CREATE DATABASE `temp`"); //желательно писать служебные слова капсом
	$mysqli->query("CREATE TABLE `temp`.`cities` ( 
		`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`title` VARCHAR(255) character set utf8 collate utf8_general_ci NOT NULL
	) ENGINE=MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci"); //создание таблицы как и в phpMyAdmin, если не указывать `temp` то таблица создастся по умолчанию в `mybase`
	$mysqli->query("ALTER TABLE `temp`.`cities` ADD `utc` TINYINT(2) NOT NULL"); //добавление в БД столюца с именем `utc`
	$mysqli->query("ALTER TABLE `temp`.`cities` DROP `utc`"); //удаление столбца `utc`
	$mysqli->query("DROP TABLE `temp`.`cities`"); //удаление таблицы `cities`
	$mysqli->query("DROP DATABASE `temp`"); //удаление БД `temp`

/*Управление записями в таблице*/

	/*$success = $mysqli->query("INSERT INTO `users` (`login`, `password`, `regdate`) VALUES ('User1', '".md5("123")."', '".time()."')");
	echo $success."<br />";
	for ($i = 2; $i < 10; $i++) {
		$mysqli->query("INSERT INTO `users` (`login`, `password`, `regdate`) VALUES ('User$i', '".md5("$i($i+1)($i+2)")."', '".time()."')");
	}
	$insert_id = $mysqli->insert_id;
	echo $insert_id;
	$mysqli->query("UPDATE `users` SET `regdate`='0'"); //предназначено для изменения строк в таблице
	$mysqli->query("UPDATE `users` SET `regdate`='1', `password`='f7b16af5588f9654862e4aefcec8b0de' WHERE `id` > '5' OR `id` = '1'");
	$mysqli->query("UPDATE `users` SET `regdate`='2' WHERE `login` = 'MyUser' OR (`id` > '5' AND `id` < '7')");
	$mysqli->query("DELETE FROM `users` WHERE `id` < '".($insert_id - 5)."'");*/

/*Выборка записей из таблицы*/

	function printResultSet($result_set) {
		echo "Количество записей: ".$result_set->num_rows."<br />";
		while (($row = $result_set->fetch_assoc()) != false) {
			print_r($row);
			echo "<br />";
		}
		echo "-----------------------<br />";
	}
	$result_set = $mysqli->query("SELECT * FROM `users`"); //выбрать все записи из таблицы
	printResultSet($result_set);
	$result_set = $mysqli->query("SELECT `login`, `password` FROM `users`"); //выбрать только логины и пароли
	printResultSet($result_set);
	$result_set = $mysqli->query("SELECT * FROM `users` WHERE `id` >='71' ORDER BY `login` DESC LIMIT 1, 2"); //выбрать все записи где `id` больше либо равен 71 при этом сортирвка по логину инвертированая(обратная), лимит на количество выводимых элементов - начиная с 1го вывести 2 элемента
	printResultSet($result_set);
	$result_set = $mysqli->query("SELECT COUNT(`id`) FROM `users`"); //посчитать каличество строк у столбца `id`
	printResultSet($result_set);
	$result_set = $mysqli->query("SELECT * FROM `users` WHERE `login` LIKE '%ser%'"); //выбрать все записи где в логине есть "ser"
	printResultSet($result_set);

	$mysqli->close(); //всегда нужно закрывать работу юзер с БД для предотвращения ошибок связанных с количеством подключений

?>