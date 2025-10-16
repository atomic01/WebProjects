<?php
session_start();
$_SESSION['tasksort']='priority';

header("Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_list_preview.php");


?>