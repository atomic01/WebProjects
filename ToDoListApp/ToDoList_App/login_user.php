<!DOCTYPE html>
<html>
    <head>
        <title>ToDoListApp</title>
    </head>
    <body>
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

            $this->email=trim($_POST['email']);
            $this->password=trim($_POST['password']);            
        }
    }
    
    $user= new user();
    $_SESSION['email']=$user->email;
    $_SESSION['sort']='name';
    $_SESSION['tasksort']='name';

    $query="SELECT lozinka, authentication FROM korisnik WHERE email='".$user->email."';";    

    $result=@mysqli_query($db_connect, $query);

    if($result){
        $data=mysqli_fetch_array($result);
    }

    if($data[0]==$user->password){
        if($data[1]!=1)
            header('Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/login_failed_verify_email.php');
        else{
            mysqli_close($db_connect);

            header('Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/dashboard/logedin_user.php');
        }
    }
    else
        header('Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/login_failed.php');
    ?>
    </body>
</html>
