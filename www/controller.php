<?php
	require_once "model.php";
	if (isset($_POST["addcomment"])) addComment($_POST["name"], $_POST["comment"]);
	$array = transformFromCommentsToArray();
	require_once "view.html";
?>