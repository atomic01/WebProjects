<?php
session_start();
require_once('mysql_connect.php');
    class user{
        public $first_name;
        public $last_name;
        public $email;
        public $password;
        public $ver_code;
        
        function __construct(){          
        }
    }
    
$user= new user();
$user->id=$_SESSION['id_korisnika'];
$list_name=$_POST['newlistname'];


$query="INSERT INTO todolista VALUES (NULL,'".$list_name."','".$user->id."',CURDATE());";    
$result=@mysqli_query($db_connect, $query);
if($result)
    header("Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user.php");

mysqli_close($db_connect);


?>