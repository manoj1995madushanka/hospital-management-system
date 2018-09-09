<?php

session_start();
include '../dbcon.php';

$userid = $_POST['userid'];
$usertype = $_POST['usertype'];
$first = $_POST['first'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO userinfo (userid, usertype, first, pwd) 
VALUES('$userid', '$usertype', '$first', '$pwd')";
$result = mysqli_query($conn,$sql);

header("Location: ../index.php");