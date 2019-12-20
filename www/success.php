<?php

	session_start();
	if ($_GET["send"] == 1) {
		echo "Your message have been successfuly sent to ".$_SESSION["to"];
		echo "<br /><a href=\"sendmail.php\">Turn back</a>";
	}
	
?>