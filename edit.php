<?php
function Read() {
	 $filename = $_GET["filename"];
   $file = 'snippets/' . $filename;
   echo file_get_contents( $file);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>GIST app</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container-fluid">
	<a href="index.php" id="title"><h2>GIST-APP, v.04.08</h2></a>
		<div class="row">
        <div class="col-md-2">
        <h4>Choose file:</h4>
        	<ul>
        		<!-- printing the list of files in /snippets -->
        		<?php
						include_once "fileList.php";
						?>
        	</ul>
        </div>
        <div class="col-md-10">
        	<button id="editBtn" type="button" class="btn btn-success" disabled>EDIT</button>
					<button id="openBtn" type="button" class="btn btn-info">OPEN <img src="img/n-tab.png" width="16"></button>
					<h3 id="filename"><?php echo $_GET["filename"]; ?></h3>
					<textarea class="form-control top-buffer" rows="10" style="min-width: 100%"><?php Read(); ?></textarea>
					<button id="saveBtn" type="button" class="btn btn-primary pull-right mt-5 top-buffer">Save</button> 
        </div>
      </div>
	</div>

	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</body>
</html>