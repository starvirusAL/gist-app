<?php
$d =  $_GET["filename"];
$f = 'snippets/' . $d;
$check  = strpos($d, '..');
if ($check!==false or !$d) {
  http_response_code(404);
  exit;
};
$myfile = fopen("$f", "r") ;

echo '<pre>';
while ($line = fgets($myfile)) {
	echo htmlspecialchars($line);
}
echo '</pre>';
fclose($myfile);

?>