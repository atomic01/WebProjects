<!DOCTYPE html>
<html>
    <head>
        <title>ToDoListApp</title>
    </head>
    <body>
    <?php

    require_once('mysql_connect.php');

    class user{
        public $id;
        public $first_name;
        public $last_name;
        public $email;
        public $password;
        public $ver_code;
        
        function __construct(){
            $this->ver_code=trim($_POST['code']);
        }
    }


    
    $user= new user();

    $query="SELECT id_korisnika FROM korisnik WHERE authentication_code=".$user->ver_code.";";    

    $result=@mysqli_query($db_connect, $query);
    if($result){
        $user->id=mysqli_fetch_array($result);
    }
    else
        header('Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/verify_email_failed.php');

   $query="UPDATE korisnik SET authentication=1 WHERE id_korisnika=".$user->id[0].";";
   
    if(mysqli_query($db_connect,$query)){

        mysqli_stmt_close($query);
        mysqli_close($db_connect);

        header('Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/verify_email_success.php');
    }
    else
        header('Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/verify_email_failed.php');


    ?>
    </body>
</html>
