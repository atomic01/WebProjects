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
$list_name=$_POST['listnamedelete'];


$query="SELECT id_todoliste FROM todolista WHERE naziv_liste='".$list_name."';";    
$result=@mysqli_query($db_connect, $query);
if($result)
    $list_id=mysqli_fetch_array($result);

$query="DELETE FROM task WHERE todolista_id_todoliste=".$list_id[0].";";    
$result=@mysqli_query($db_connect, $query);

$query="DELETE FROM todolista WHERE id_todoliste=".$list_id[0].";";    
$result=@mysqli_query($db_connect, $query);

if($result)
    header("Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user.php");

mysqli_close($db_connect);


?>