<?php
      session_start();
      require_once('mysql_connect.php');
      
          class user{
              public $id;
              public $first_name;
              public $last_name;
              public $email;
              public $password;
              public $ver_code;
              
              function __construct(){          
              }
          }
          
      $user= new user();
      $user->first_name=$_SESSION['ime'];
      $user->id=$_SESSION['id_korisnika'];
      $task_name=$_POST['deletetask'];
    
    
      $query="SELECT id_taska FROM task WHERE naziv_zadatka='".$task_name."' && todolista_korisnik_id_korisnika=".$user->id.";";
      $result=@mysqli_query($db_connect, $query);

      $task_id=mysqli_fetch_array($result);
      
      $query="DELETE FROM task WHERE id_taska=".$task_id[0].";";
      $result=@mysqli_query($db_connect, $query);
      if($result)
          header ("Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_list_preview.php");
     else
        header ("Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_delete_task_failed.php");

    mysqli_close($db_connect);



?>