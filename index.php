<?php
/**
 * @author Linards Ramza <linuks5@inbox.lv>
 */
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TEST Linards Ramza</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="teststyle.css">

</head>

<body>
              
   <div class="behinddiv">


  <div class="leftdiv">
  	
  <h3 class="h3left">Don't have an account?</h3>
   <hr class="hrleft">
   <p class="pleft">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
   <button id="signupbtn1" class="btn btn-primary behinddivbutton">SIGN UP</button>
   
                    
  </div>
  

  <div class="rightdiv">
 <h3 class="h3right">Have an account?</h3>
    <hr class="hrright">
    <p class="pright">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <button id="loginbtn1" class="btn btn-primary behinddivbutton">LOGIN</button>
                    
  </div>
  </div>


  <div class="middlediv">
  	

               <div class="logindiv">

                <h3 class="magebitlogo">Login</h3>


                <hr class="hrmiddle">
                <form action="login.php" method="POST">
                    
                    <div class="form-group">
                        
                        <input type="email" name="email" class="form-control input" id="email"  required>
                        <label for="email" class="emaillogo">Email<sup>*</sup></label>
                    </div>
                    <div class="form-group">
                        
                        <input type="password" name="password" class="form-control input" id="password"  required>
                        <label for="password" id="passwordlogo" class="passwordlogo">Password<sup>*</sup>
                        </label>
                    </div><br>
                    <button type="submit" name="login" class="btn btn-warning frontdivbutton frontdivbuttonlogin">LOGIN</button>
                    
                    <a class="forgotlink" href="forgotpassword.php">Forgot?</a>
                </form>
            </div>


            <div class="signupdiv">
                <h3 class="magebitlogo">Sign Up</h3>

                
                
                <hr class="hrmiddle">
             <form action="signup.php" method="POST">
                    <div class="form-group">
                        
                        <input type="text" name="name" class="form-control input" id="name" required>
                        <label for="name" class="namelogo">Name<sup>*</sup></label>
                    </div>
                    <div class="form-group">
                        
                        <input type="email" name="email" class="form-control input" id="email" required>
                        <label for="email" class="emaillogo">Email<sup>*</sup></label>
                    </div>
                    <div class="form-group">
                        
                        <input type="password" name="password" class="form-control input" id="password" required>
                        <label for="password" class="passwordlogo">Password<sup>*</sup>
                        </label>
                    </div><br>
                    <button type="submit" name="signup" class="btn btn-warning frontdivbutton frontdivbuttonsignup">SIGN UP</button>
                    
                </form>
            </div>
  </div>
  
  <footer class="footer">ALL RIGHTS RESERVED "MAGEBIT" <?php echo @date("Y"); ?> .</footer>




 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script type="text/javascript" src="animation.js"></script>


</body>