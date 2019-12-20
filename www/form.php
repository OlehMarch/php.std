<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Обработка форм</title>
</head>
<body>
	<form name="myform" action="script.php?id=17" method="post">
		<table>
			<tr>
				<td>Name:</td>
				<td>
					<input type="text" name="firstname" />
				</td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td>
					<input type="text" name="email" />
				</td>
			</tr>
			<tr>
				<td colspan="2">Message:</td>
			</tr>
			<tr>
				<td colspan="2">
					<textarea name="message" cols="40" rows="10"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="send" value="Send" />
				</td>
			</tr>
		</table>
	</form>
	<br />
	<a href="index.php">Назад</a>
</body>
</html>