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
      $newdeadline=$_POST['newtaskdeadline'];
      
         
      $query="UPDATE task SET rok_izvrsenja='".$newdeadline."'WHERE id_taska=".$_SESSION['taskeditid'].";";
      $result=@mysqli_query($db_connect, $query);
      if($result)
          header ("Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_list_preview.php");
     

    mysqli_close($db_connect);



?>