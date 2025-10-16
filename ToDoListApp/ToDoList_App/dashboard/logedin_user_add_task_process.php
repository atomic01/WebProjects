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
      $new_task=$_POST['newtaskname'];
      $new_priority=$_POST['priority'];
      $new_deadline=$_POST['deadline'];


      
      $query="INSERT INTO task VALUES(NULL,'".$new_task."','".$new_priority."','".$new_deadline."',".$_SESSION['listid'].",".$user->id.",0,CURDATE());";
      $result=@mysqli_query($db_connect, $query);
      if($result)
          header ("Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_list_preview.php");
     else
        header ("Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_add_task_failed.php");

    mysqli_close($db_connect);



?>