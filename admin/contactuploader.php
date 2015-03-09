<?php
// Connects to your Database
$con = mysql_connect('localhost', 'root', 'root');
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("cms", $con);

if(isset($_POST['save']))
{
    $title_save = $_POST['content'];

    mysql_query("UPDATE Contact SET contact ='$title_save' WHERE Id = '1'")
    or die(mysql_error());
    header("Location: contact.php");
}
mysql_close();
?>