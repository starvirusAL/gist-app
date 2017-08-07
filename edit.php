<?php
require_once "fileList.php";
list_array_function();
$d =  $_GET["filename"];
$check  = strpos($d, '..');
if ($check!==false or !$d or in_array($d, $list_array)!==true) {
  http_response_code(404);
  exit;
};
function Read() {
    $filename = $_GET["filename"];
    $file = 'snippets/' . $filename;
    $out =  file_get_contents($file);
    echo htmlspecialchars($out);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>GIST app</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
</head>
<body>
<script type="text/javascript">
    function saveFile() {
        var info = $('#content').val();
      $.ajax({
           type: "POST",
           url: "<?php echo 'save.php?filename=' . $_GET['filename']; ?>",
           data:{content: info},
           success:function(html) {
             alert('File was saved!');
             window.location.replace("<?php echo 'view.php?filename=' . $_GET['filename']; ?>");
           }

      });
 }
</script>
    <div class="container-fluid">
    <a href="index.php" id="title"><h2>GIST-APP, v.05.08</h2></a>
        <div class="row">
        <div class="col-md-3">
        <h4>Choose file:</h4>
            <ul class="list-unstyled">
                <!-- printing the list of files in /snippets -->
                <?php
                        List_My();
                        ?>
            </ul>
        </div>
        <div class="col-md-9">
            <button id="editBtn" type="button" class="btn btn-success" disabled>EDIT</button>
                    <a target="_blank" href="<?php echo 'plaintext.php?filename=' . $_GET["filename"]; ?>"><button id="openBtn" type="button" class="btn btn-info">OPEN <img src="img/n-tab.png" width="16"></button></a>
                    <h3 id="filename"><?php echo $_GET["filename"]; ?></h3>
                    <textarea class="form-control top-buffer" rows="10" style="min-width: 100%" id="content"><?php Read(); ?></textarea>
                    <button id="saveBtn" type="button" class="btn btn-primary pull-right mt-5 top-buffer" onclick="saveFile()">Save</button>

        </div>
      </div>
    </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>