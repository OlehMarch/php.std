<?php
	function transformFromCommentsToArray() {
		$string = file_get_contents("lib/comments.txt");
		$array = explode("\n", $string);
		$result = array();
		for ($i = 0; $i < count($array); $i++) {
			$data = explode(";", $array[$i]);
			$result[$i]["name"] = $data[0];
			$result[$i]["comment"] = $data[1];
		}
		return $result;
	}
	function addComment($name, $comment) {
		$string = file_get_contents("lib/comments.txt")."\n$name;$comment";
		file_put_contents("lib/comments.txt", $string);
	}
?>