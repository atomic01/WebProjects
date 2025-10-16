<!DOCTYPE html>
    <html >
    <head>
      <meta charset="UTF-8">
      <title>ToDoListApp - Loged in</title>
      <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
      
          <link rel="stylesheet" href="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/css/style_two.css">
    
      
    </head>
    
    <body background="back.jpg">
      <div class="form">
    
      <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logout_process.php" style="display: inline">
        <button class="button">Log out</button>
     </form>
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
      $user->first_name=$_SESSION['ime'];
      $taskname=$_POST['taskname'];

      $query="SELECT id_taska FROM task WHERE naziv_zadatka='".$taskname."';";
      $result=@mysqli_query($db_connect, $query);
      $taskid=mysqli_fetch_array($result); 
      if($taskid[0]>0 && $taskid[0]!=null && $taskid[0]!="" ){

        $query="SELECT * FROM task WHERE id_taska='".$taskid[0]."';";
        $result=@mysqli_query($db_connect, $query);
        $data=mysqli_fetch_array($result); 
                  
          $_SESSION['taskeditid']=$taskid[0];      
          $_SESSION['taskname']=$taskname;
          $_SESSION['taskdeadlineforecho']=$data[3];
          $_SESSION['taskstatusforecho']=$data[6];
          $_SESSION['taskpriorityforecho']=$data[2];

      echo  '<h2 style="display: inline">'.$user->first_name.'</h2><br/><br/>
             <h1 style="display: inline">ToDoListApp</h1><br/><br/>
             <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_list_preview.php" >
              <button class="button">Back To List</button>
             </form><br/><br/>
             <p style="display: inline">Task name: '.$data[1].'</p>
             <p style="display: inline">Task deadline: '.$data[3].'</p>  
             <p style="display: inline">Task status: '.$data[6].'</p>
             <p style="display: inline">Task priority: '.$data[2].'</p><br/><br/>';
             
      }
      else
        header("Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_edit_task_failed.php");   


      ?>

    <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_edit_task_name.php" style="display: inline">
      <button class="button" >Edit task name</button>
    </form>
    <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_edit_task_deadline.php" style="display: inline">
      <button class="button" style="display: inline">Edit task deadline</button>
    </form>
    <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_edit_task_status.php" style="display: inline">
      <button class="button" style="display: inline">Edit task status</button>
    </form>
    <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_edit_task_priority.php" style="display: inline">
      <button class="button" style="display: inline">Edit task priority</button>
    </form>
      
        
    </div> <!-- /form -->
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    
        <script  src="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/js/index.js"></script>
    
    </body>
    </html>
    
    
    
    
    
    
    
    

?>