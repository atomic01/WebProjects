<?php
    session_start();
    require_once('mysql_connect.php');

    $query=" UPDATE korisnik SET status='Offline' WHERE id_korisnika=".$_SESSION['id_korisnika']." ;";
    $result=@mysqli_query($db_connect, $query);

    $_SESSION=array();
    session_destroy();

    header("Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/index.php");

?>