<?php
  include_once  'includes/dbh.inc.php';
?>

<doctype html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="css/register.css" />
</head>
<body>
    <main>
    
    <form class="login-box" action="includes/signup.inc.php" method="POST">
    <h1>Register</h1>

        
     <div class="textbox">
      <input type="text" placeholder="Username" name="uid" value="" />
      </div>


     <div class="textbox">      
      <input type="text" placeholder="E-mail" name="email" value="" />
     </div>


     <div class="textbox">   
      <input type="password" placeholder="Password" name="pwd" value="" />
     </div>

     <div class="textbox">
      <input type="password" placeholder="Repeat Password" name="pwd" value="" />
     </div>

      <div>
        <input class="btn" type="submit" name="signup-submit" value="Register" />      
      </div>
    
   
    </form>
   
    
</main>
   
</body>
</html>

