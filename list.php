<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doc</title>
</head>
<body>
	<?php
	if ($dir = opendir(".")) {
	  echo "Pointeur: ".$dir."<br>\n";
	  echo "Chemin: ".getcwd()."<br>\n";
	  while($file = readdir($dir)) {
	    echo "$file<br>\n";
	  }
	  closedir($dir);
	}
	function list_dir($name) {
	  if ($dir = opendir($name)) {
	    while($file = readdir($dir)) {
	      echo "$file<br>\n";
	      if(is_dir($file) && !in_array($file, array(".",".."))) {
	        list_dir($file);
	      }
	    }
	    closedir($dir);
	  }
	}
	list_dir(".");
	?>
</body>
</html>

     <!-- if ($Fichier != "." && $Fichier != "..") -->
