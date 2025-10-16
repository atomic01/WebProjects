<?php
session_start();
$_SESSION['sort']='name';

header("Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user.php");


?>