<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>ToDoListApp - Login or Sign UP</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body background="back.jpg">
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Sign Up For Free</a></li>
      </ul>
      
      <div class="tab-content">      
        <div id="login">   
          <h1>ToDoListApp</h1>
          
          <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/login_user.php" method="POST">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/forgot_password.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login"/>Log In</button>
          <h3>Password reset successful!</h3>
          
          </form>

        </div>

        <div id="signup">   
          <h1>ToDoListApp</h1>
          
          <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/register_user.php" method="POST">
          
            <div class="top-row">
              <div class="field-wrap">
                <label>
                  First Name<span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off" name="first_name"/>
              </div>
          
              <div class="field-wrap">
                <label>
                  Last Name<span class="req">*</span>
                </label>
                <input type="text"required autocomplete="off" name="last_name"/>
              </div>
            </div>

            <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="email"required autocomplete="off" name="email"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password"required autocomplete="off" name="password"/>
            </div>
            
            <button type="submit" class="button button-block" name="submit"/>Get Started</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
