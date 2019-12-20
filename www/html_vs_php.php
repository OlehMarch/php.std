<html>
<head>
	<title>The simpliest way to connect HTML with PHP</title>
</head>
<body>
	<h1>Статья</h1>
	<p>Текст статьи...</p>
	<h2>Комментарии</h2>
	<?php
		function transformFromCommentsToArray() {
			$string = file_get_contents("lib\comments.txt");
			$array = explode("\n", $string);
			$result = array();
			for ($i = 0; $i < count($array); $i++) {
				$data = explode(";", $array[$i]);
				$result[$i]["name"] = $data[0];
				$result[$i]["comment"] = $data[1];
			}
			return $result;
		}
		$array = transformFromCommentsToArray();
		if (count($array) != 0) {
			echo "<table>";
			for ($i = 0; $i < count($array); $i++) {
				echo "<tr>";
				echo "<td><b>".$array[$i]["name"].":</b></td>";
				echo "<td>".$array[$i]["comment"]."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td colspan='2'><hr /></td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	?>
	<br /><br /><br /><a href="index.php">Назад</a><br />
</body>
</html>
