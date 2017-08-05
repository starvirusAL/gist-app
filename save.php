<?php
	$recievedInfo = $_POST['content'];
	$saveto = $_GET['filename'];
	$destination = 'snippets/' . $saveto;
	$fp = fopen("$destination", 'w');
	fwrite($fp, "$recievedInfo");
	fclose($fp);
?>