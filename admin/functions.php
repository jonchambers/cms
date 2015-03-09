<?php

function connect(){
    $con = mysql_connect('localhost', 'root', 'root');
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db("cms", $con);
}


function gdlist(){
    $result = mysql_query("SELECT * FROM GD");


    while($row = mysql_fetch_array($result))
    {
        $id = $row['Id'];
        //echo "<div>".$row['Id']."</div>";
        echo "<img src= ../images/web/".$row['Img_id'].">";
        echo "<img src= ../images/web/".$row['Img_lg'].">";

        echo "<div class='new'>" .$row['Text']. "</div>";
        echo "<br><br>";

        echo "<a href ='viewGD.php?Id=$id'> Edit&nbsp;" .$row['Text']. "&nbsp;Title</a>";
        echo "<br><br>";


        echo "<a href ='delGD.php?Id=$id'>Delete&nbsp;" .$row['Text']. "</a>";
        echo "<br/>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }



    mysql_close($con);
}

function photolist(){

    $result = mysql_query("SELECT * FROM Photo");
//$result1 = mysql_query("SELECT Text FROM Site");

    while($row = mysql_fetch_array($result))
    {
        $id = $row['Id'];
        //echo "<div>".$row['Id']."</div>";
        echo "<img src= ../images/web/".$row['Img_id'].">";
        echo "<img src= ../images/web/".$row['Img_lg'].">";

        echo "<div class='new'>" .$row['Text']. "</div>";
        echo "<br><br>";
        echo "<a href ='viewPhoto.php?Id=$id'> Edit&nbsp;" .$row['Text']. "&nbsp;Title</a>";
        echo "<br><br>";
        echo "<a href ='delPhoto.php?Id=$id'>Delete&nbsp;" .$row['Text']. "</a>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }


    mysql_close($con);
}


?>



