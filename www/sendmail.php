<?php
	session_start(); 
	if (isset($_POST["send"])) {
		$from = $_POST["from"];
		$to = $_POST["to"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];
		$_SESSION["from"] = $from;
		$_SESSION["to"] = $to;
		$_SESSION["subject"] = $subject;
		$_SESSION["message"] = $message;
		$error_from = "";
		$error_to = "";
		$error_subject = "";
		$error_message = "";
		$error = false;
		if (!preg_match("/[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i", $from)) {
			$error_from = "Incorrect e-mail";
			$error = true;
		}
		if (!preg_match("/[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i", $to)) {
			$error_to = "Incorrect e-mail";
			$error = true;
		}
		if (strlen($subject) == 0) {
			$error_subject = "The topic haven't been written";
			$error = true;
		}
		if (strlen($message) == 0) {
			$error_message = "Message haven't been written";
			$error = true;
		}
		if (!$error) {
			$subject = "=?utf-8?B?".base64_encode."?=";
			$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
			mail($to, $subject, $message, $headers);
			header("Location: success.php?send=1");
			exit;
		}
	}
?>
<html>
<head>
	<title>Mailing service</title>
</head>
<body>
	<h1>Send mail!</h1>
	<form name="myform" action="sendmail.php" method="post">
		<table>
			<tr>
				<td>From:</td>
				<td>
					<input type="text" name="from" value="<?php echo $_SESSION["from"]; ?>" />
				</td>
				<td>
					<span style="color: red;"><?php echo $error_from; ?></span>
				</td>
			</tr>
			<tr>
				<td>To:</td>
				<td>
					<input type="text" name="to" value="<?php echo $_SESSION["to"]; ?>" />
				</td>
				<td>
					<span style="color: red;"><?php echo $error_to; ?></span>
				</td>
			</tr>
			<tr>
				<td>Subject:</td>
				<td>
					<input type="text" name="subject" value="<?php echo $_SESSION["subject"]; ?>" />
				</td>
				<td>
					<span style="color: red;"><?php echo $error_subject; ?></span>
				</td>
			</tr>
			<tr>
				<td>Message:</td>
				<td>
					<textarea name="message" cols="15" rows="10"><?php echo $_SESSION["message"]; ?></textarea>
				</td>
				<td>
					<span style="color: red;"><?php echo $error_message; ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="send" value="Send!" /></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php echo "<br /><br /><br /><a href=\"index.php\">Назад</a><br />"; ?>