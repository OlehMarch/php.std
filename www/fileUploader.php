<?php
	require_once "lib/uploadtext_class.php";
	require_once "lib/uploadimage_class.php";
	if ($_POST["upload"]) {
		$upload_text = new UploadText();
		$upload_image = new UploadImage();
		$success_text = $upload_text->uploadFile($_FILES["text"]);
		$success_image = $upload_image->uploadFile($_FILES["image"]);
	}
?>
<html>
<head>
	<title>Service of uploading</title>
</head>
<body>
	<h1>Upload Files</h1>
	<?php
		if ($_POST["upload"]) {
			if ($success_text) echo "Text file was succsessfully downloaded";
			else echo "Error while downloading the text file";
			echo "<br />";
			if ($success_image) echo "Image was succsessfully downloaded";
			else echo "Error while downloading the image";
			echo "<br /><br />";
		}
	?>
	<form name="myform" action="fileUploader.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Image:</td>
				<td>
					<input type="file" name="image" />
				</td>
			</tr>
			<tr>
				<td>Text:</td>
				<td>
					<input type="file" name="text" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<br /><input type="submit" name="upload" value="Upload files" />
				</td>
			</tr>
		</table>
	</form>
<br /><br /><a href="index.php">Назад</a><br />
</body>
</html>