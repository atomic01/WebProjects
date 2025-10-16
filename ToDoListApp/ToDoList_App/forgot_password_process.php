<!DOCTYPE html>
<html>
    <head>
        <title>ToDoListApp</title>
    </head>
    <body>
    <?php

    require_once('mysql_connect.php');

    class user{
        public $first_name;
        public $last_name;
        public $email;
        public $password;
        public $ver_code;
        
        function __construct(){

            $this->email=trim($_POST['email']);           
        }
    }
    
    $user= new user();

    $query="SELECT id_korisnika FROM korisnik WHERE email='".$user->email."';";    
    $result=@mysqli_query($db_connect, $query);
    if($result)
        $user->id=mysqli_fetch_array($result);

    if($user->id[0]){

        $to=$user->email;
        $subject='Password reset';
        $body='Click on the link to reset your password: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/reset_password.php';
        $from='noreply@todolistapp.website';

        mail($to,$subject,$body,$from);

        header('Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/forgot_password_success.php');
    }
    else
        header('Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/forgot_password_failed.php');
  
    mysqli_close($db_connect);  
    ?>  
    </body>
</html>
