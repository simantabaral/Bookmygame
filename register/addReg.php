<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password= md5($password);
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    require  '../database/db.php';

$sql = "INSERT INTO users  VALUES('','$name','$email','$password','$address','$phone')";
$result = mysqli_query($conn,$sql);
if ($result)
{
   echo"HEllo";
    header('Location:../login/userLogin.php');
} 

?>
