<?php
foreach (new DirectoryIterator(__DIR__.'/snippets') as $file) {
	if ($file->isFile()) {
	    $list = print_r('<a href="view.php?filename=' . $file->getFilename() . '"><li>' . $file->getFilename() . '</li></a>', true);
	    echo $list;
	}
}
?>