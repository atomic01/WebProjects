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

  echo '<h2 style="display: inline">'.$user->first_name.'</h2><br/><br/>
        <h1 style="display: inline">ToDoListApp</h1><br/><br/>
        <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_list_preview.php" >
           <button class="button">Back To List</button>
       </form><br/><br/>';


  ?>

  <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_add_task_process.php" method="POST">
  <div class="field-wrap">
        <label>
            Name the new task<span class="req">*</span>
        </label>
    <input type="text" required autocomplete="off" name="newtaskname"/>
</div>
<div class="field-wrap">
        <label>
            Priority: Low, Medium, High<span class="req">*</span>
        </label>
    <input type="text" required autocomplete="off" name="priority"/>
</div>
<div class="field-wrap">
        <label>
            YYYY-MM-DD<span class="req">*</span>
        </label>
    <input type="text" required autocomplete="off" name="deadline"/>
</div>
  
  
      <button class="button" style="display: inline">Add new task</button>
      <h3 style="display: inline">Failed to add new task</h3>
    </form>
  
    
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/js/index.js"></script>

</body>
</html>









?>