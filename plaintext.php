<?php
require_once "fileList.php";
list_array_function();
$d =  $_GET["filename"];
$f = 'snippets/' . $d;
$check  = strpos($d, '..');
if ($check!==false or !$d or in_array($d, $list_array)!==true) {
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