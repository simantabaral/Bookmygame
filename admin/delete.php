<?php
include("../database/db.php");
$time=$_GET['apw'];
$query = "DELETE FROM book where time ='$time'";
$data = mysqli_query($conn , $query);

if($data)
{
	header('Location:adminpanel.php');
}
else{
	echo "failed";
}
?>
