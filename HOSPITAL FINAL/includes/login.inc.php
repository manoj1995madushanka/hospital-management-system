<?php

session_start();
include '../dbcon.php';

$userid = $_POST['userid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM userinfo WHERE userid = '$userid' AND pwd = '$pwd'";
$result = mysqli_query($conn,$sql);

if(!$row = mysqli_fetch_assoc($result)) {
	echo "Your creditials are INVALID!!!";
} else {	

$_SESSION['userid'] = $row['userid'];
$sql = "SELECT usertype FROM userinfo WHERE userid = '$userid'";
$result_type = mysqli_query($conn,$sql);
$row_type = mysqli_fetch_assoc($result_type);

			if ($row_type['usertype'] == 'ADMIN') {
				header("Location: ../admin.php");
			} else if ($row_type['usertype']== 'DOCTOR'){
				header("Location: ../doctor.php");  
			} else {
				header("Location: ../patient.php");  
			}
}
