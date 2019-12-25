<?php
include("../database/db.php");
$query = "DELETE  FROM book ";
$data = mysqli_query($conn , $query);
$total = mysqli_num_rows($data);

if($total !==0)
{
	header('Location:adminpanel.php');
}
else{
    header('location:nobook.php');
}

?>