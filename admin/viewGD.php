<?php
// Connects to your Database
$con = mysql_connect('localhost', 'root', 'root');
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("cms", $con);

$id =$_REQUEST['Id'];

$result = mysql_query("SELECT * FROM GD WHERE Id  = '$id'");
$row = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$Title=$row['Text'] ;


if(isset($_POST['save']))
{
	$title_save = $_POST['Text'];

	mysql_query("UPDATE GD SET Text ='$title_save'
	 WHERE Id = '$id'")
				or die(mysql_error());

    $result = mysql_query("SELECT * FROM GD WHERE Id  = '$id'");
    $row = mysql_fetch_array($result);
    $Title=$row['Text'] ;
	echo "<h3>Project Has Been Updated!</h3>";


}
mysql_close();
?>

<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/admin.css" />
    <title>Edit GD Project</title>
</head>

<body>
    <div id="wrapper">

        <div id="content">

            <form method="post">
                <p>
                <h1> Edit <?php echo $Title ?> </h1>
                <br>
                <br>
                <p>
                Title:
                </p>
                <input type="text" name="Text" id="Text" value="<?php echo $Title ?>">

                <input TYPE="submit" name="save" value="Save"/>
                <br>
                <br>
                <br>
                <a href="imageUploadGD.php">Back to GD Page</a>
            </form>

        </div>

    </div>

</body>
</html>
