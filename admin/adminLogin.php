<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Admin Login</title>
    <link rel="shortcut icon" type="image/png" href="../images/fav.png" />
    <link rel="stylesheet" href="../css/login.css">
</head>
<body class="login">
    <div id="loginbox">
        <img src="../images/person.png">
        <form method="post" action="adminLoginVerify.php">
            <input type="text" name="name" placeholder="Admin Name" required/>
            <input type="password" name="password" placeholder="Pasword"required/>
            <input class ="button-admin" type="submit" name="alogin" value="Login"> <br>
        </form>
    </div>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
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
          Admin Login
      </div>
      <form method="post" action="adminLoginVerify.php">
      <div class="input-fields">
        <label class="label"></label>
        <input type="text" class="input" name="name" placeholder="Admin Name" required/>
      </div>
      <div class="input-fields">
        <label class="label"></label>
        <input type="password" class="input" name="password" placeholder="Password"/>
      </div>
      <div>
      <input class= "button-login" type="submit" name="login" value="Login"/><br>
      </div>      
     </form>
    </div>
  </div>
</div>	
	
</body>
</html>