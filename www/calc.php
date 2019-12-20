<?php
	if (isset($_POST["calc"])) {
		//print_r($_POST);
		require_once "lib/functions.php";
		$n_1 = $_POST["n_1"];
		$n_2 = $_POST["n_2"];
		$operation = $_POST["operation"];
		switch ($operation) {
			case "add":
				$result = "$n_1 + $n_2 = ".add($n_1, $n_2);
				break;
			case "sub":
				$result = "$n_1 - $n_2 = ".sub($n_1, $n_2);
				break;
			case "mult":
				$result = "$n_1 * $n_2 = ".mult($n_1, $n_2);
				break;
			case "div": {
				$result = div($n_1, $n_2);
				if ($result === false) $result = "Деление на ноль!";
				else $result = "$n_1 / $n_2 = $result";
				break;
			}
			case "fact": {
				$result = factorial($n_1);
				if ($result === false)	$result = "Факториала не существует";
				else $result = "$n_1! = $result";
				break;
			}
			default:
				$result = "Неизвестная операция";
		}
	} //конструкция позволяющая только после отправки формы получать содержимое
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Calculator</title>
</head>
<body>
	<?php
		if (isset($result)) echo "<p>Вычисление: $result</p>";
	?>
	<form name="myForm" action="calc.php" method="post">
		<p>
			<input type="text" name="n_1" value="<?php echo $n_1; ?>" />
			<select name="operation">
				<?php
					$operations = array("add" => "+", "sub" => "-", "mult" => "*", "div" => "/", "fact" => "!");
					foreach ($operations as $key => $value) {
						if ($operation == $key) echo "<option value='$key' selected='selected'>$value</option>";
						else echo "<option value='$key'>$value</option>";
					}
				?>
			</select>
			<input type="text" name="n_2" value="<?php echo $n_2; ?>" />
			<br />
			<input type="submit" name="calc" value="Calculate" />
		</p>
	</form>
	<a href="index.php">Назад</a>
</body>
</html>