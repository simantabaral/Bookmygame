<?php
session_start();
error_reporting(0);
include '../database/db.php';
$query= "SELECT name ,time FROM book where name='".$_SESSION['u_name']."'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($query);
if ($total!==0){
 while ($result = mysqli_fetch_assoc($data)){
        echo "<table>
            <tr>
            <td>".$_SESSION['u_name']."</td>
            <td>".$result['time']."</td>
            </tr>
            </table>";
        }
}
?>

    