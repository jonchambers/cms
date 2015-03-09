<?php
include($root."functions.php");
connect();
?>

<!doctype html>
<html>
<head>
    <title>Add GD Project</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css" />
</head>

<body>

    <div id="wrapper">

        <div id="content">

            <form method="post" action="image_uploaderGD.php" enctype="multipart/form-data">

                <p>
                <h1>Add and Edit a Graphic Design Project</h1>
                <br>
                <h2><a href="index.php">Back to admin index</a></h2>
                <br>
                <h3>Add A New Project</h3>
                <p>
                    Thumbnail Image (Width = 100px):
                </p>
                <input type="file" name="photo" />

                <br>
                <br>
                <p>
                    Large Image (Width = 360px):
                </p>
                <input type="file" name="thumb"/>

                <br>
                <br>
                <p>
                    Title:
                </p>
                <input type="text" name="Text" id="Text">

                <input TYPE="submit" name="upload" title="Add data to the Database" value="Add Image"/>

            </form>
            <br>
            <br>
            <h3>Edit/Delete A Project</h3>
            <br>
            <?php
            //load the projects
            gdlist();
            ?>

        </div>

    </div>

</body>
</html>
