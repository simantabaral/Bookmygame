<?php
session_start();
error_reporting(0);
include("../database/db.php");
error_reporting(0);
$userName=$_SESSION['user_name'];
if ($userName)
{

}
else {
    header('location:adminLogin.php');
    }
$query = "SELECT * FROM book ORDER BY name ASC";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total!==0){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="shortcut icon" type="image/png" href="../images/fav.png" />
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="../css/style.css"> 
    <!-- <script src="delete.js"></script>  -->
</head>
    <body>
    <header>
        <div class="header_box">
            <div class="logo">
                <h1><span class ="hightlight">Book</span> My Game</h1>
            </div>
            <nav>
                <ul>
                    <!-- <li><a href="./login/userLogin.php">Login</a></li> -->
                    <li><a href="adminLogin.php">Logout</a></li>
                </ul>
            </nav>
        </div>
        </header>
    <div class="bg">
        <h1>Bookings</h1>
    <table style="border-radius:0%;">
        <tr>
            <th class="nam">Name</th>
            <th class="ti">Time</th>
        </tr>
<td>
    <?php

    while ($result = mysqli_fetch_assoc($data)){
        echo "<tr>
            <td>".$result['name']."</td>
            <td>".$result['time']."</td>
            <td><a href='delete.php?an=$result[name]&apw=$result[time]'><button style=\"        display: inline-block;
            padding: 15px 25px;
            font-size: 20px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;\">Cancel</button></a></a></td>
         </tr>";
        //  header('Content-type: text/css');
        // echo "button{ background:red; }";
    }
} else{
    // echo "no bookings found";
    header('location:nobook.php');
}
//echo $result['name']." ".$result['Time']."</br>";
?>
</td>
</div>
</table>
<button class="available" style="text-decoration:none;color:#fff;position:absolute;left:60px;float:left;margin-top:1rem;display:block;"><a href='deleteall.php'>Delete All</a></button>
</body>
</html>