<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
    <link rel="shortcut icon" type="image/png" href="../images/fav.png" />
    <link rel="stylesheet" href="../css/login2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
  <div class="sub-container">
    <div class="banner-img">
      <picture>
        <source media="(min-width: 501px)" srcset="../images/1.jpg">
        <source media="(max-width: 500px)" srcset="../images/1.jpg">
        <img src="../images/1.jpg" alt="image">
      </picture>
    </div>
    <div class="login-form">
      <div class="title">
          Login
      </div>
      <form method="POST" action="loginVerify.php">
      <div class="input-fields">
        <label class="label"></label>
        <input type="email" class="input" name="email" placeholder="E-mail" required/>
      </div>
      <div class="input-fields">
        <label class="label"></label>
        <input type="password" class="input" name="password" placeholder="Password"/>
      </div>
      <div>
      <input class= "button-login" type="submit" name="submit" value="Login"/><br>
      </div>      
      <div class="forgot">
        <a href="../register/register.php">Don't have an account?</a>
      </div></form>
    </div>
  </div>
</div>	
	
</body>
</html>