<?php

	function printAllFiles($dir) {
		$list = glob($dir."/*"); //glob($dir."/*") - поиск по всей директории файлов любого типа(/*)
		for ($i = 0; $i < count($list); $i++) {
			if (is_dir($list[$i])) printAllFiles($list[$i]);
			else echo $list[$i]."<br />";
		}
	}
	
	function deleteAllFiles($dir) {
		$list = glob($dir."/*"); //glob($dir."/*") - поиск по всей директории файлов любого типа(/*)
		for ($i = 0; $i < count($list); $i++) {
			if (is_dir($list[$i])) deleteAllFiles($list[$i]);
			else unlink($list[$i]);
		}
		rmdir($dir); //функция удаления директории(удаляет только пустую директорию)
	}

?>