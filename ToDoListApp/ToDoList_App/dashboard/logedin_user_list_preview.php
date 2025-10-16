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
      $user->email=$_SESSION['email'];

      $query="SELECT ime, id_korisnika FROM korisnik WHERE email='".$user->email."';";    
      $result=@mysqli_query($db_connect, $query);
      if($result)
          $data=mysqli_fetch_array($result);

      $user->first_name=$data[0];
      $user->id=$data[1];
      $_SESSION['id_korisnika']=$user->id;
      $_SESSION['ime']=$user->first_name;
      $listid=$_SESSION['listid'];
      $i=0;

      $query=" SELECT naziv_liste FROM todolista WHERE id_todoliste=".$listid.";";
      $result=@mysqli_query($db_connect, $query);
      if($result)
          $list_name=mysqli_fetch_array($result);

    $query="SELECT count(*) FROM task WHERE todolista_id_todoliste=".$listid.";";
    $result=@mysqli_query($db_connect, $query);
    if($result)
        $alltasks=mysqli_fetch_array($result);
    else
        $alltasks[0]=0;

    $query="SELECT count(*) FROM task WHERE todolista_id_todoliste=".$listid." && status=1;";
    $result=@mysqli_query($db_connect, $query);
    if($result)
        $notdonetasks=mysqli_fetch_array($result);
    else
        $notdonetasks[0]=0;
    
    if($alltasks[0]==0)        
        $percentage=100;
    else
    $percentage=$notdonetasks[0]/$alltasks[0]*100;

      echo '<h2 style="display: inline">'.$user->first_name.'</h2><br/><br/>
            <h1 style="display: inline">ToDoListApp</h1><br/>
            <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user.php" >
                <button class="button">Back To dashboard</button>
            </form>
            <h2 class="sort_button" style="display: inline" ><br/>Sort by:</h2>
            <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_sort_task_by_name.php" style="display: inline">
              <button class="listinfo" href ="" style="display: inline">name</button>
            </form>            
            <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_sort_task_by_status.php" style="display: inline">
              <button class="listinfo" href ="" style="display: inline">status</button>
            </form>
            <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_sort_task_by_priority.php" style="display: inline">
                <button class="listinfo" href ="" style="display: inline">priority</button>
              </form>  
              <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_sort_task_by_date.php" style="display: inline">
                <button class="listinfo" href ="" style="display: inline">date</button>
              </form>  
            <h2>List name: '.$list_name[0].'----'.$notdonetasks[0].'/'.$alltasks[0].'---'.round($percentage).'%</h2>';

    if($_SESSION['tasksort']=='name')
        $query=" SELECT * FROM task WHERE todolista_korisnik_id_korisnika=".$user->id." && todolista_id_todoliste=".$listid." ORDER BY naziv_zadatka ASC;";
    elseif($_SESSION['tasksort']=='status')
        $query=" SELECT * FROM task WHERE todolista_korisnik_id_korisnika=".$user->id." && todolista_id_todoliste=".$listid." ORDER BY status ASC;";
    elseif($_SESSION['tasksort']=='priority')
        $query=" SELECT * FROM task WHERE todolista_korisnik_id_korisnika=".$user->id." && todolista_id_todoliste=".$listid." ORDER BY prioritetnost DESC;";
    elseif($_SESSION['tasksort']=='date')
        $query=" SELECT * FROM task WHERE todolista_korisnik_id_korisnika=".$user->id." && todolista_id_todoliste=".$listid." ORDER BY rok_izvrsenja ASC;";

    $result=@mysqli_query($db_connect, $query);
    if($result){
                while($data=mysqli_fetch_array($result))
        {   
            date("y-m-d");
            $datetime1 = strtotime($data[3]);
            $datetime2 = strtotime(date("y-m-d"));
            $dif=($datetime1-$datetime2)/(60*60*24);
            $i++;
            echo '<p style="display: inline">'.$i.'</p>
            <p style="display: inline">'.$data[1].'</p>  
            <p style="display: inline">Creation date: '.$data[7].'</p>
            <p style="display: inline">Deadline: '.$data[3].'</p>   
            <p style="display: inline">Difference: '.$dif.'  days</p>  
            <p style="display: inline; margin-left:20px">Status: '.$data[6].'</p>
            <p style="display: inline; margin-left:20px"">Priority: '.$data[2].'</p><br/><br/><br/>';            
          }

    }
    mysqli_close($db_connect);
  ?>
  
    <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_add_task.php" style="display: inline">
      <button class="button" >Add new task</button>
    </form>
    <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_delete_task.php" style="display: inline">
      <button class="button" style="display: inline">Delete task</button>
    </form>
    <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_edit_task.php" style="display: inline">
      <button class="button" style="display: inline">Edit task</button>
    </form>
    
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/js/index.js"></script>

</body>
</html>







