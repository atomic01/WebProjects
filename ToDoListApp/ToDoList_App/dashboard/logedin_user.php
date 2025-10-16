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
      $i=0;

    $query=" UPDATE korisnik SET status='Online' WHERE id_korisnika=".$user->id." ;";
    $result=@mysqli_query($db_connect, $query);

    $query="UPDATE korisnik SET datum_zadnjeg_logina=NOW() WHERE id_korisnika=".$user->id." ;";
    $result=@mysqli_query($db_connect, $query);

      echo '<h2 style="display: inline">'.$user->first_name.'</h2><br/><br/>
            <h1 style="display: inline">ToDoListApp</h1>
            <h2 class="sort_button" style="display: inline" ><br/><br/>Sort by:</h2>
            <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_sort_by_name.php" style="display: inline">
              <button class="listinfo" href ="" style="display: inline">name</button>
            </form>            
            <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_sort_by_date.php" style="display: inline">
              <button class="listinfo" href ="" style="display: inline">date</button>
            </form>
            <h2><br/>Your ToDo lists:</h2>';

      if($_SESSION['sort']=='name')
        $query=" SELECT * FROM todolista WHERE korisnik_id_korisnika=".$user->id." ORDER BY naziv_liste ASC;";
      elseif($_SESSION['sort']=='date')
        $query=" SELECT * FROM todolista WHERE korisnik_id_korisnika=".$user->id." ORDER BY datum_izrade ASC;";

      $result=@mysqli_query($db_connect, $query);
      if($result)
         while($data=mysqli_fetch_array($result))
         {
          $query="SELECT count(*) FROM task WHERE todolista_id_todoliste=".$data[0].";";
          $response=@mysqli_query($db_connect, $query);
          if($response)
              $alltasks=mysqli_fetch_array($response);
          else
            $alltasks[0]=0;

      
          $query="SELECT count(*) FROM task WHERE todolista_id_todoliste=".$data[0]." && status=1;";
          $response=@mysqli_query($db_connect, $query);
          if($response)
              $notdonetasks=mysqli_fetch_array($response);
          else
              $notdonetasks[0]=0;
          


          $i++;
            echo '<p style="display: inline"><br/>'.$i.'</p>
            <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_list_preview_process.php" style="display: inline" method="POST">
              <button class="listinfo"  style="display: inline" >'.$data[1].'</button>                 
              <p style="display: inline; margin-left:20px">Deadline: '.$data[3].'</p>
              <p style="display: inline">Tasks: '.$notdonetasks[0].'/'.$alltasks[0].'</p><br/><br/><br/>
              <div class="field-wrap">
              <input type="hidden"  name="listid" value="'.$data[0].'"/>
              </div>
            </form>';                

        }      

    mysqli_close($db_connect);
  ?>
  
    <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_add_list.php" style="display: inline">
      <button class="button" >Add new list</button>
    </form>
    <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user_delete_list.php" style="display: inline">
      <button class="button" style="display: inline">Delete list</button>
    </form>';
  
    
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/js/index.js"></script>

</body>
</html>







