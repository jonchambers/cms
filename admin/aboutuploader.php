<?php
// Connects to your Database
$con = mysql_connect('localhost', 'root', 'root');
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("cms", $con);


//redirect after submitting
if(isset($_POST['save']))
{
    $title_save = $_POST['content'];

    mysql_query("UPDATE About SET about ='$title_save' WHERE Id = '1'")
    or die(mysql_error());

    header("Location: about.php");

}
mysql_close();
?>