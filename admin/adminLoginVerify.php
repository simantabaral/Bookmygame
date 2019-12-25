<?php 
session_start();
if(isset($_POST['login']))
{ 
$an=$_POST['name'];
$apw=$_POST['password'];
//$a_time = $_POST['time'];
//echo $a_name ;
}
include '../database/db.php';
$res = mysqli_query($conn,"SELECT * FROM admin WHERE admin_name='" . $_POST["name"] . "' and password = '". $_POST["password"]."'");
 
   
   $rows=mysqli_num_rows($res);
   
   if ($rows == true)
        
        {
         //   echo"Hello";
         $_SESSION['user_name']=$an;
         header('Location:adminpanel.php');
        
        }
        else
         {
            echo " login failed";
            // header('Location:register.php');

            //header('Location:register.php');
         }
?>