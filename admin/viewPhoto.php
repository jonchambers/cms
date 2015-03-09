<?php
// Connects to your Database
$con = mysql_connect('localhost', 'root', 'root');
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("cms", $con);
$id =$_REQUEST['Id'];

$result = mysql_query("SELECT * FROM Photo WHERE Id  = '$id'");
$row = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$Title=$row['Text'] ;

if(isset($_POST['save']))
{	
	$title_save = $_POST['Text'];

	mysql_query("UPDATE Photo SET Text ='$title_save'
	 WHERE Id = '$id'")
				or die(mysql_error());
    $result = mysql_query("SELECT * FROM Photo WHERE Id  = '$id'");
    $row = mysql_fetch_array($result);
    $Title=$row['Text'] ;
	echo "<h3>Project Has Been Updated!</h3>";

				
}
mysql_close();
?>

<!doctype html>
<html>

<head>
    <title>Edit Photo Project</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css" />
</head>

<body>
    <div id="wrapper">

        <div id="content">

            <form method="post">
                <p>
                <h1> Edit <?php echo $Title ?> </h1>
                <p>
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
                <a href="imageUploadPhoto.php">Back to Photography Page</a>
            </form>

        </div>

    </div>

</body>
</html>
