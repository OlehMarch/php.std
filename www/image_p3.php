<?php

	$im = imageCreateTrueColor(90, 50);
	$rand = mt_rand(1000, 9999);
	$c = imageColorAllocate($im, 255, 255, 255);
	imageTtfText($im, 20, -10, 10, 30, $c, "Verdana.ttf", $rand);	
	header("Content-type: image/png");
	imagePng($im);
	imageDestroy($im);

?>