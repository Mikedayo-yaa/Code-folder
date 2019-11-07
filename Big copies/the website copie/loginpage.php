
<doctype html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="css/login.css" />
</head>
<body>
<div class="login-box">
<h1>Login</h1>

<form action="includes/login.php" method="post">
    <div class="textbox">
            <input type="text" placeholder="Username" name="mailuid" value="" />
    </div>

    <div class="textbox">
       
        <input type="password" placeholder="Password" name="" value="" />
    </div>
    <input class="btn" type="submit" name="login-submit" value="Sign in" />
</form>
    <div class="mbText1">
    <p><h3>Click to register</h3></p>
<a href="register.php"><h3>Register</h3></a>
          </div>
</div>

</body>
</html>

