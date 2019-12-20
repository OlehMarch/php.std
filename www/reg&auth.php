<?php
	require_once "lib/user_class.php";
	$user = User::getObject();
	$auth = $user->isAuth();
	if (isset($_POST["reg"])) {
		$login = $_POST["login"];
		$password = $_POST["password"];
		$reg_success = $user->regUser($login, $password);
	}
	else if (isset($_POST["auth"])) {
		$login = $_POST["login"];
		$password = $_POST["password"];
		$auth_success = $user->login($login, $password);
		if ($auth_success) {
			header("Location: reg&auth.php");
			exit;
		}
	}
?>
<html>
<head>
	<title>Registration and Authorization</title>
</head>
<body>
	<?php
		if ($auth) {
			echo "Здравствуйте, ".$_SESSION["login"]." (<a href='lib/logout.php'>Выход</a>)";
		}
		else {
			if ($_POST["reg"]) {
				if ($reg_success) echo "<span style='color: red;'>Регистрация прошла успешно!</span>";
				else echo "<span style='color: red;'>Ошибка при регистрации!</span>";
			}
			elseif ($_POST["auth"]) {
				if (!$auth_success) echo "<span style='color: red;'>Неверные имя пользователя и/или пароль!</span>";
			}
		}
	?>
	<h1>Registration</h1>
	<form name="reg" action="reg&auth.php" method="post">
		<table>
			<tr>
				<td>Login:</td>
				<td>
					<input type="text" name="login" />
				</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td>
					<input type="password" name="password" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="reg" value="Registration" />
				</td>
			</tr>
		</table>
	</form>
	<h1>Authorization</h1>
	<form name="auth" action="reg&auth.php" method="post">
		<table>
			<tr>
				<td>Login:</td>
				<td>
					<input type="text" name="login" />
				</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td>
					<input type="password" name="password" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="auth" value="Log in" />
				</td>
			</tr>
		</table>
	</form>
	<br /><br /><br /><a href="index.php">Назад</a>
</body>
</html>