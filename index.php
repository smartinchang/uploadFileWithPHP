<!DOCTYPE html>
<html>
	<head>
		<title>Tải ảnh lên website</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</head>
	<body>
		<form id="uploadForm" enctype="multipart/form-data">
			<input type="file" name="image" id="image">
			<button type="submit">Tải lên</button>
		</form>
		<div id="result"></div>
		<script src="script.js"></script>
	</body>
</html>
<?php
	require_once("analytic.inc");
?>