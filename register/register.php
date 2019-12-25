<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
    <link rel="shortcut icon" type="image/png" href="../images/fav.png" />
    <link rel="stylesheet" href="../css/register.css">
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
        Register
      </div>
      <form name ="RegForm" method="post"  onsubmit="return validate()"action="addReg.php">
      <div class="input-fields">
        <label class="label"></label>
        <input type="text" class="input" name="name" placeholder="Name"/>
      </div>
      <div class="input-fields">
        <label class="label"></label>
        <input type="email" class="input" name="email" placeholder="E-mail" required/>
      </div>
      <div class="input-fields">
        <label class="label"></label>
        <input type="password" class="input" name="password" placeholder="Password"/>
      </div>
      <div class="input-fields">
        <label class="label"></label>
        <input type="text" class="input" name="address" placeholder="Address"/>
      </div>
      <div class="input-fields">
        <label class="label"></label>
        <input type="text" class="input" pattern="^\d{10}$" name="phone" placeholder="Phone No"/>
      </div>
      <div class="agree"><input type="checkbox" id="checkbox" name="agree" value="1" required>
        I agree to the <a href="" >terms of service</a><br></div>
      <div >
        <input class= "button-login" type="submit" name="register" value="Register"/><br>
        </div>
      <div class="forgot">
        <a href="../login/userLogin.php">Already have an account?</a>
      </div>
    </form>
    </div>
  </div>
</div>	
	
</body>
</html>

