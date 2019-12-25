<?php
session_start();
error_reporting(0);
include './database/db.php';
$result = mysqli_query($conn,"SELECT time FROM book WHERE time='6:00-7:00'");
$data1=mysqli_fetch_array($result);
if($data1['time'] == "6:00-7:00"){
    $status1="Booked";
}
else{
    $status1="Available";
}
$result2 = mysqli_query($conn,"SELECT time FROM book WHERE time='7:00-8:00'");
$data2=mysqli_fetch_array($result2);
if($data2['time'] == '7:00-8:00'){
    $status2="Booked";
}
else{
    $status2="Available";
}
$result3 = mysqli_query($conn,"SELECT time FROM book WHERE time='8:00-9:00'");
$data3=mysqli_fetch_array($result3);
if($data3['time'] == '8:00-9:00'){
    $status3="Booked";
}
else{
    $status3="Available";
}
$result4 = mysqli_query($conn,"SELECT time FROM book WHERE time='9:00-10:00'");
$data4=mysqli_fetch_array($result4);
if($data4['time'] == '9:00-10:00'){
    $status4="Booked";
}
else{
    $status4="Available";
}
$result5 = mysqli_query($conn,"SELECT time FROM book WHERE time='10:00-11:00'");
$data5=mysqli_fetch_array($result5);
if($data5['time'] == '10:00-11:00'){
    $status5="Booked";
}
else{
    $status5="Available";
}
$result6 = mysqli_query($conn,"SELECT time FROM book WHERE time='11:00-12:00'");
$data6=mysqli_fetch_array($result6);
if($data6['time'] == '11:00-12:00'){
    $status6="Booked";
}
else{
    $status6="Available";
}
$result7 = mysqli_query($conn,"SELECT time FROM book WHERE time='12:00-1:00'");
$data7=mysqli_fetch_array($result7);
if($data7['time'] == '12:00-1:00'){
    $status7="Booked";
}
else{
    $status7="Available";
}
$result8 = mysqli_query($conn,"SELECT time FROM book WHERE time='1:00-2:00'");
$data8=mysqli_fetch_array($result8);
if($data8['time'] == '1:00-2:00'){
    $status8="Booked";
}
else{
    $status8="Available";
}
$result9 = mysqli_query($conn,"SELECT time FROM book WHERE time='2:00-3:00'");
$data9=mysqli_fetch_array($result9);
if($data9['time'] == '2:00-3:00'){
    $status9="Booked";
}
else{
    $status9="Available";
}
$result10 = mysqli_query($conn,"SELECT time FROM book WHERE time='3:00-4:00'");
$data10=mysqli_fetch_array($result10);
if($data10['time'] == '3:00-4:00'){
    $status10="Booked";
}
else{
    $status10="Available";
}
$result11 = mysqli_query($conn,"SELECT time FROM book WHERE time='4:00-5:00'");
$data11=mysqli_fetch_array($result11);
if($data11['time'] == '4:00-5:00'){
    $status11="Booked";
}
else{
    $status11="Available";
}
$result12 = mysqli_query($conn,"SELECT time FROM book WHERE time='5:00-6:00'");
$data12=mysqli_fetch_array($result12);
if($data12['time'] == '5:00-6:00'){
    $status12="Booked";
}
else{
    $status12="Available";
}



$userEmail=$_SESSION['user_email'];
if ($userEmail)
{

}
else {
    header('location:./login/userLogin.php');
    }
$result = mysqli_query($conn,"SELECT * FROM users WHERE email='$userEmail' ");
$data=mysqli_fetch_assoc($result);
$u_id= $data['id'];
$u_name= $data['name'];
$u_pass= $data['password'];
$u_phone= $data['phone'];
$u_email= $data['email'];
$u_address=$data['address'];

$_SESSION['u_name']=$u_name;
$_SESSION['u_id']=$u_id;
$_SESSION['u_pass']=$u_pass;
$_SESSION['u_phone']=$u_phone;
$_SESSION['u_email']=$u_email;
$_SESSION['u_address']=$u_address;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <!-- <script src="script.js"></script>  -->
    <script>
    function display()
    {
        return confirm("Are u sure u want to book the game");
    }
    </script>
    <link rel="shortcut icon" type="image/png" href="./images/fav.png" />
    <title>Book</title>
</head>
<body>
    <header>
        <div class="header_box">
            <div class="logo">
                <h1><span class ="hightlight">Book</span> My Game</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="./reserve/reserve.php"><?php echo $data['name']?></a></li>
                    <li><a href="./logout/logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
        <section>
            <h1 class="available-heading">
                Available Time
            </h1>
            <div class="availabletime">
                <table>
                    <tr class="table-heading">
                        <th>Time</th>
                        <th class="status">Status</th>
                    </tr>
                    <tr>
                        <td>6:00 - 7:00 AM</td>
                        <td>
                            <form onsubmit = "return display()" method="post" action="book.php">
                                <input type="hidden" name="bookingTime" value="6:00-7:00" >
                                <button  class="available" type="submit" id="6-7"><?php echo"$status1";?></button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>7:00 - 8:00 AM</td>
                        <td>
                        <form method="post" action="book.php">
                                <input type="hidden" name="bookingTime" value="7:00-8:00" >
                                <button onclick="myFunction()" class="available" type="submit" id="7-8"><?php echo"$status2";?></button>
                            </form>                            
                        </td>
                    </tr>
                    <tr>
                        <td>8:00 - 9:00 AM</td>
                        <td>
                        <form method="post" action="book.php">
                                <input type="hidden" name="bookingTime" value="8:00-9:00" >
                                <button onclick="myFunction()" class="available" type="submit" id="8-9" value="8:00-9:00"><?php echo"$status3";?></button>
                            </form>                            
                        </td>
                    </tr>
                    <tr>
                        <td>9:00 - 10:00 AM</td>
                        <td>
                        <form method="post" action="book.php">
                                <input type="hidden" name="bookingTime" value="9:00-10:00" >
                                <button onclick="myFunction()" class="available" type="submit" id="9-10" value="9:00-10:00"><?php echo"$status4";?></button>
                            </form>                            
                        </td>
                    </tr>
                    <tr>
                        <td>10:00 - 11:00 AM</td>
                        <td>
                        <form method="post" action="book.php">
                                <input type="hidden" name="bookingTime" value="10:00-11:00"  >
                                <button onclick="myFunction()"  class="available" type="submit" id="10-11" value="10:00-11:00"><?php echo"$status5";?></button>
                            </form>                            
                        </td>
                    </tr>
                    <tr>
                        <td>11:00 - 12:00 AM</td>
                        <td>
                        <form method="post" action="book.php">
                                <input type="hidden" name="bookingTime" value="11:00-12:00" >
                                <button onclick="myFunction()" class="available" type="submit" id="11-12" value="11:00-12:00"><?php echo"$status6";?></button>
                            </form>                            
                        </td>
                    </tr>
                    <tr>
                        <td>12:00 - 1:00 PM</td>
                        <td>
                        <form method="post" action="book.php">
                                <input type="hidden" name="bookingTime" value="12:00-1:00" >
                                <button onclick="myFunction()" class="available" type="submit" id="12-1" value="12:00-1:00"><?php echo"$status7";?></button>
                            </form>                            
                        </td>
                    </tr>
                    <tr>
                        <td>1:00 - 2:00 PM</td>
                        <td>
                        <form method="post" action="book.php">
                                <input type="hidden" name="bookingTime" value="1:00-2:00" >
                                <button onclick="myFunction()" class="available" type="submit" id="1-2" value="1:00-2:00"><?php echo"$status8";?></button>
                            </form>                            
                        </td>
                    </tr>
                    <tr>
                        <td>2:00 - 3:00 PM</td>
                        <td>
                        <form method="post" action="book.php">
                                <input type="hidden" name="bookingTime" value="2:00-3:00" >
                                <button onclick="myFunction()" class="available" type="submit" id="2-3" value="2:00-3:00"><?php echo"$status9";?></button>
                            </form>                            
                        </td>
                    </tr>
                    <tr>
                        <td>3:00 - 4:00 PM</td>
                        <td>
                        <form method="post" action="book.php">
                                <input type="hidden" name="bookingTime" value="3:00-4:00" >
                                <button onclick="myFunction()" class="available" type="submit" id="3-4" value="3:00-4:00"><?php echo"$status10";?></button>
                            </form>                            
                        </td>
                    </tr>
                    <tr>
                        <td>4:00 - 5:00 PM</td>
                        <td>
                        <form method="post" action="book.php">
                                <input type="hidden" name="bookingTime" value="4:00-5:00" >
                                <button onclick="myFunction()" class="available" type="submit" id="4-5" value="4:00-5:00"><?php echo"$status11";?></button>
                            </form>                            
                        </td>
                    </tr>
                    <tr>
                        <td>5:00 - 6:00 PM</td>
                        <td>
                        <form method="post" action="book.php">
                                <input type="hidden" name="bookingTime" value="5:00-6:00" >
                                <button onclick="myFunction()" class="available" type="submit" id="5-6" value="5:00-6:00"><?php echo"$status12";?></button>
                            </form>                            
                        </td>
                    </tr>
                    </table>
            </div>
        </section>
        <footer style="margin-top:1rem;">
                <p>Book My Game , &copy;2019 </p> 
        </footer>
</body>
</html>
<?php

function reload(){
    header('Location:redirect.php');
}
if(isset($_POST['bookingTime']))
{
    $time= $_POST['bookingTime'];
  
    $first="INSERT INTO book (id, name,time) VALUES('$u_id','$u_name','$time')";
    $result_1=mysqli_query($conn,$first);
    header('location:redirect.php');
    // if($result_1)
        // {
        // header('Location:book.php');

        // }    
    }
?>
