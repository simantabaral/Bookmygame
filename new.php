
<?php
session_start();
include './database/db.php';
 error_reporting(0);
$query= "SELECT name, time FROM book where name='".$_SESSION['u_name']."'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($query);
if ($total!==0){
	?>

<!DOCTYPE html>
<html>
<head>
	<title>simple model</title>
</head>

<style>
.button{
	background:coral;
	padding:1em 2em;
	color:white;
	border:0;
}
.button:hover{
	background:#white;

}
.modal{
	display:none;
	position:fixed;
	z-index:2;
	left:0;
	top:0;
	height:100%;
	width:100%;
	overflow:auto;
	background-color:rgba(0,0,0,0);

}
.modal-content{
	background-color: grey;
	margin:20% auto;
	/*padding:20px;*/
	width:60%;
	box-shadow: 0 5px 8px 0
	rgba(0,0,0.2),0 7px 20px 0 rgba(0,0,0.2);
	animation-name:modalopen;
	animation-duration:5s;

}
.modal-header h2{
	margin:0;


}
.modal-header{
	text-align: center;
	background-color:darkblue;
	color:black;


}
.modal-body{
	padding:15px 20px;
}
.closeBtn{
	color:#ccc;
	float:right;
	font-size:30px;
	margin-top:0%;
	margin-right:1.5%;

}
.closeBtn:hover,closeBtn:focus{
	color:#0000;
	cursor:pointer;
}

#simpleModal
{
	display: none ;
}
@keyframes modalopen{
form{opacity :0}
to{opacity :1}
}


</style>
<body>

	


	<form onsubmit="return demo()">
		<input id="modalBtn" class="button" name="btn-reserve" type="submit" value="My reservations" >
	</form>

	<div id="simpleModal">
	<div class="modal-content">
		<div class="modal-header">
		<span id="close" class="closeBtn">&times;</span>
		<h2>your bookings are:</h2>
		
	</div>
	<div class ="modal-body">
	<table   border ="1" width="30%" align="center">
        <tr>
            <th class="nam">Name</th>
            <th class="ti">Time</th>
        </tr>
<td align="center">
    <?php

    while ($result = mysqli_fetch_assoc($data)){
        echo "<tr>
            <td>".$result['name']."</td>
            <td>".$result['time']."</td>
         </tr>";
    }
} else{
    echo "no bookings found";
}
?>
</td>
</div>
</div>
</div>


	<script>
	const simpleModal = document.querySelector('#simpleModal');
	function demo()
	{
		// console.log('popup');
		simpleModal.style.display = "block" ;
		return false ;
	}

	const closeBtn = document.querySelector('#close');
	closeBtn.addEventListener('click' , ()=>{
		// console.log('close');
		simpleModal.style.display = "none";
	});
    </script>
    

</body>
</html>