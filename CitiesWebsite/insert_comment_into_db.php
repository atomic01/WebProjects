<?php

    require_once('mysql_connect.php');

            
    $comment=$_POST['comment'];
    $username=$_POST['name'];
    $city_id=$_POST['city_id'];


    $query="INSERT INTO comments VALUES (NULL, '".$comment."',".$city_id.", '".$username."');";
    $stmt=mysqli_prepare($db_connect, $query);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($db_connect);

?>

