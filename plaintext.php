<?php
$d =$_GET["filename"];
$f = 'snippets/' . $d;
$myfile = fopen("$f", "r") ;

echo '<pre>';
while ($line = fgets($myfile)) {
	echo htmlspecialchars($line);
}
echo '</pre>';
fclose($myfile);

?>