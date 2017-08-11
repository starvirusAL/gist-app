<?php
function List_My() {
  foreach (new DirectoryIterator(__DIR__ . '/snippets') as $file) {
    if ($file->isFile()) {
      $list = print_r('<a href="view.php?filename=' . $file->getFilename() . '"><li class="li-btn">' . $file->getFilename() . '</li></a>', TRUE);
      echo $list;
    }
  }
};

function list_array_function() {
  foreach (new DirectoryIterator(__DIR__ . '/snippets') as $file) {
    if ($file->isFile()) {
      $list_array[] = $file->getFilename();
      $GLOBALS['list_array'] = $list_array;
    }
  }
}

function custom() {
    $connect = mysqli_connect('localhost', 'root', '', 'mytestdatabase');
    $select = "SELECT * FROM filelist";
    $result = mysqli_query($connect, $select);
    $super = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($super as $name) {
    $list = print_r('<a href="view.php?filename=' . $name['name'] . '"><li class="li-btn">' . $name['name'] . '</li></a>', TRUE);
    echo $list;
}
};