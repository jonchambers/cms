<?php

function connect(){
    $con = mysql_connect('localhost', 'root', 'root');
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db("cms", $con);
}

function indexdisplay(){

    $resultGD = mysql_query("SELECT Img_lg FROM GD ORDER BY RAND() LIMIT 1");
    $resultPhoto = mysql_query("SELECT Img_lg FROM Photo ORDER BY RAND() LIMIT 1");


    while( ($rowGD = mysql_fetch_array($resultGD)) &&  ($rowPhoto = mysql_fetch_array($resultPhoto))   )
    {
        $randsGD = array_rand($rowGD, 1);

        $randsPhoto = array_rand($rowPhoto, 1);


        echo "<div id=indexGD>";

        echo "<img src= images/web/".$rowGD['Img_lg'].">";

        echo "</div>";


        echo "<div id=indexPhoto>";
        echo "<img src= images/web/".$rowPhoto['Img_lg'].">";
        echo "</div>";
    }



    mysql_close($con);
}

function about(){
    $result = mysql_query("SELECT * FROM About");
    while($row = mysql_fetch_array($result)) {
        echo $row['about'];

    }
    mysql_close($con);
}

function contact(){
    $result = mysql_query("SELECT * FROM Contact");
    while($row = mysql_fetch_array($result))


    {

        echo $row['contact'];

    }
    mysql_close($con);
}

function graphicdesign(){
    $result = mysql_query("SELECT Img_id, Img_lg, Text FROM GD");
    while($row = mysql_fetch_array($result))


    {
        echo "<li>";


        echo "<a class='thumb' name='leaf' href= images/web/".$row['Img_lg']." >";
        echo "<img src= images/web/".$row['Img_id']." />";
        echo "</a>";
        echo "<div class='caption'>";

        echo "<div class='image-title'>".$row['Text']."</div>";

        echo "</div>";
        echo "</li>";
    }
    mysql_close($con);
}

function photo(){
    $result = mysql_query("SELECT Img_id, Img_lg, Text FROM Photo");
    while($row = mysql_fetch_array($result))


    {
        echo "<li>";


        echo "<a class='thumb' name='leaf' href= images/web/".$row['Img_lg']." >";
        echo "<img src= images/web/".$row['Img_id']." />";
        echo "</a>";
        echo "<div class='caption'>";

        echo "<div class='image-title'>".$row['Text']."</div>";

        echo "</div>";
        echo "</li>";
    }
    mysql_close($con);
}

?>