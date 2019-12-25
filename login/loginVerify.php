<?php
session_start(); 
if(isset($_POST['submit']))
{ 
$email=$_POST['email'];
$password=$_POST['password'];

$password=md5($password);
}

include '../database/db.php';
//$st="select * from users where email='$em' and password ='$pass'";
//$res=mysqli_query($conn,$st);
 $result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST["email"] . "' and password = '". md5($_POST["password"])."'");
 
   
   $row=mysqli_num_rows($result);
   
   if ($row == true)
        
        {
         $_SESSION['user_email']=$email;
         header('Location: ../book.php');
        }
        else
         {
          //  echo"Error";
          //  $error="Enter correct Email / Password";
          header('location:userLogin.php');
          

         }

  
?>