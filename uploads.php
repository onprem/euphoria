<!DOCTYPE html>
<html>
<head>
	<title>Upload image | Euphoria</title>
	<link href="style.css" rel="stylesheet" />
	<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
</head>
<body>
<div class="trans" align="center" style="margin-left: 25%; margin-right: 25%;">
<form action="upload.php" method="post" enctype="multipart/form-data">
    <h2>Select image to upload:</h2><br>
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Upload Image" name="submit" style="font-size: 24px; color: white;">
</form>
</div>
</body>
</html>