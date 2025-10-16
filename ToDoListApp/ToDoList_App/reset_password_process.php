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

            $this->email=trim($_POST['email']);
            $this->password=trim($_POST['password']);            
        }
    }
    
    $passsword_check=trim($_POST['password2']);       
    $user= new user();

    if($user->password==$passsword_check){

        $query="SELECT id_korisnika FROM korisnik WHERE email='".$user->email."';";    
        $result=@mysqli_query($db_connect, $query);
        if($result)
            $user->id=mysqli_fetch_array($result);

        if($user->id[0]){            
            $query="UPDATE korisnik SET lozinka='".$user->password."' WHERE id_korisnika=".$user->id[0].";";
            $result=@mysqli_query($db_connect, $query);
            mysqli_close($db_connect);

            header('Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/reset_password_success.php'); 
        }
        else
            header('Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/reset_password_failed.php');     
    }
    else
        header('Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/reset_password_failed.php');
       
    ?>
    </body>
</html>
