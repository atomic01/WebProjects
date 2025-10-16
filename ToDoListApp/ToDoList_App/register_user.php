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

            $this->first_name=trim($_POST['first_name']);
            $this->last_name=trim($_POST['last_name']);
            $this->email=trim($_POST['email']);
            $this->password=trim($_POST['password']);
            $this->ver_code=rand(100000,999999);
        }
    }
    
    $new_user= new user();

    $query="INSERT INTO korisnik VALUE (NULL,?,?,?,?,CURDATE(),NULL,
            'Offline',0,?);";
   
    $stmt=mysqli_prepare($db_connect, $query);
    mysqli_stmt_bind_param($stmt,"ssssi", $new_user->email,
                            $new_user->password,$new_user->first_name,
                            $new_user->last_name,$new_user->ver_code);

    if(mysqli_stmt_execute($stmt)){
    
        $to=$new_user->email;
        $subject='Account authentication';
        $body='Click on the link below and enter the authentication code: '. $new_user->ver_code . ' <br><br>
               Authentication link: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/verify_email.php';
        $from='noreply@todolistapp.website';

        mail($to,$subject,$body,$from);

        mysqli_stmt_close($stmt);
        mysqli_close($db_connect);

        header('Location: http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/registration_success.php');

    }
    ?>
    </body>
</html>
