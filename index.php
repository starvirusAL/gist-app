<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container-fluid">
	<h2>GIST-APP, v.04.08</h2>
		<div class="row">
        <div class="col-md-2">
        <h4>Choose file:</h4>
        	<ul>
        		<!-- printing the list of files in /snippets -->
        		<?php
						foreach (new DirectoryIterator(__DIR__.'/snippets') as $file) {
						  if ($file->isFile()) {
						      $list = print_r("<li>" . $file->getFilename() . "</li>", true);
						      echo $list;
						  }
						}
						?>
						<!-- //printing the list of files in /snippets -->
        	</ul>
        </div>
        <div class="col-md-10">
        	<button id="editBtn" type="button" class="btn btn-success">EDIT</button>
					<button id="openBtn" type="button" class="btn btn-info">OPEN <img src="img/n-tab.png" width="16"></button>
					<h3 id="filename">index.html</h3>
					<textarea class="form-control top-buffer" rows="10" style="min-width: 100%"></textarea>
					<button id="saveBtn" type="button" class="btn btn-primary pull-right mt-5 top-buffer">Save</button> 
        </div>
      </div>
	</div>

	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</body>
</html>