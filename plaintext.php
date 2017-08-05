<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Plain text</title>
</head>
<body>
<?php
$file = $_GET['filename'];
$destination = 'snippets/' . $file;
$fh = fopen("$destination",'r');
echo '<pre>';
	while ($line = fgets($fh)) {
	  echo htmlspecialchars($line);
	}
echo '</pre>';
fclose($fh);
?>
</body>
</html>
