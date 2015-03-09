<?php
  // Connects to your Database
mysql_connect("localhost", "root", "root") or die(mysql_error()) ;
mysql_select_db("cms") or die(mysql_error()) ;

	$id =$_REQUEST['Id'];

	// sending query
	mysql_query("DELETE FROM GD WHERE Id = '$id'")
	or die(mysql_error());  	
	
	header("Location: imageUploadGD.php");
?>