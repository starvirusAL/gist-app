<?php
foreach (new DirectoryIterator(__DIR__.'/snippets') as $file) {
	if ($file->isFile()) {
    $list = print_r('<button type="button" class="btn btn-primary list-btn"><a href="view.php?filename=' . $file->getFilename() . '"><li class="list-el">' . $file->getFilename() . '</li></a></button><br>', true);
    echo $list;
	}
}
?>