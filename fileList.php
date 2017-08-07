<?php
function List_My() {
  foreach (new DirectoryIterator(__DIR__ . '/snippets') as $file) {
    if ($file->isFile()) {
      $list = print_r('<a href="view.php?filename=' . $file->getFilename() . '"><li class="li-btn">' . $file->getFilename() . '</li></a>', TRUE);
      echo $list;
      $list_array[] = $file->getFilename();
      $GLOBALS['list_array'] = $list_array;
    }
  }
}
?>