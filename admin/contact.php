<?php
include($root."functions.php");
// Connects to your Database
connect();

$id =$_REQUEST['Id'];

$result = mysql_query("SELECT * FROM Contact WHERE Id  = '1'");
$row = mysql_fetch_array($result);

        if (!$result) {
		die("Error: Data not found..");
		}

$Title=$row['contact'] ;
?>

<!doctype html>
<html>
<head>
    <title>Edit Contact Info</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css" />
</head>


<body>
    <h1 style="text-align: center;">Edit Your Contact Information</h1>
    <br>
    <a href="index.php">Back to admin index</a>
    <br>
    <br>

    <form method="post" action="contactuploader.php" enctype="multipart/form-data">

        <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
        tinymce.init({
            plugins: "anchor,preview,media,link,image,table,spellchecker",
            selector: "textarea",
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | image | anchor | fontsizeselect"

         });
        </script>

        <textarea name="content" id='content' style="width:800px; height:500px;" ><?php echo $Title ?></textarea>
        <input TYPE="submit" name="save" value="Submit"/>
    </form>
</body>
</html>