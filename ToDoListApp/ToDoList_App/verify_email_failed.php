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
      
      
          <h1>ToDoListApp</h1>
          
          <form action="http://todolistapp.epizy.com/locastic/Drugi%20dio/ToDoList_App_Locastic/verification_process.php" method="POST">
                      <div class="field-wrap">
              <label>
                Verification code<span class="req">*</span>
              </label>
              <input type="tel" required autocomplete="off" name="code"/>
            </div>
                   
            
            <button type="submit" class="button button-block" name="submit"/>Verify email</button>

            <h3>Verification process failed.</h3>
          
          </form>       

        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
