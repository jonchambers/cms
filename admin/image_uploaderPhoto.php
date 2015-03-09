<?php

//This is the directory where images will be saved
$target = "../images/web/";
$target = $target . basename( $_FILES['photo']['name']);

$pic=($_FILES['photo']['name']);

$target2 = "../images/web/";
$target2 = $target2 . basename( $_FILES['thumb']['name']);


//thumb image
$thumb=($_FILES['thumb']['name']);
// Connects to your Database
$con = mysql_connect('localhost', 'root', 'root');

if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("cms", $con);

if (isset($_POST['submit']))
	{	   

        $title=$_POST['Text'] ;

					
//Writes the information to the database
mysql_query("INSERT INTO Photo (Text, Img_id, Img_lg)
VALUES ('$title','$pic','$thumb')") ;

	}

//Writes the lg photo to the server
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {


}
else {

//Gives and error if its not
echo "Sorry, there was a problem uploading your file.";
}

//Writes Thumb Photo to server
if(move_uploaded_file($_FILES['thumb']['tmp_name'], $target2)) {

//Redirects after submitting
    header("Location: imageUploadPhoto.php");
}
else {

//Gives and error if its not
echo "Sorry, there was a problem uploading your file.";
}

?>

