<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="admin.php" style="font-face:Khmer OS Battambang; font-size:16px;">ADMIN DASHBOARD</a></font>
<br><br>
<center><h1>UTILIZE USERS' DATA</h1></center>
<br>

<a class="addnew" href="admin_userinfo.php" style="font-face:Khmer OS Battambang; font-size:16px;">BACK TO USERS VIEW</a></font>
<br><br>

    <form method="post" action="userinfo_use.php">
    <div>
        
        
        <div>
            <label for="USERID">USER ID:</label>
            <input type="text" name="USERID" id="USERID" required>
        </div><br>

		
		<div>
            <label for="USERTYPE">USER TYPE :</label>
            <select name="USERTYPE" id="USERTYPE">
                <option value="ADMIN">ADMIN</option>
				<option value="DOCTOR">DOCTOR</option>
				<option value="PATIENT">PATIENT</option>
            </select>
        </div><br>
		     		
		<div>
            <label for="first">FIRST NAME :</label>
            <input type="text" name="first" id="first" >
        </div><br>
		   
        <div>
            <label for="pwd">PASSWORD :</label>
            <input type="password" name="pwd" id="pwd" >
        </div><br>
		
        <div style="position:relative;left:10px;top:5px;">
            <input type=submit name=add id=add value=Add>
            <input type=submit name=update id=update value=Update>
            <input type=submit name=delete id=delete value=Delete>
        </div><br>
        
    </div>
    </form>
</body>
</html>

<?php
	$conn = mysqli_connect("localhost", "root", "", "hospital");

	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}

?>
<?php
if(isset($_POST['add'])){
	$USERID = $_POST['USERID'];
	$first = $_POST['first'];
	$pwd = $_POST['pwd'];
	$USERTYPE = $_POST['USERTYPE'];
	
	$sql1 = "INSERT INTO userinfo(`userid`, `first`, `pwd`, `usertype`) VALUES ('$USERID','$first', '$pwd', '$USERTYPE')";
	
	if($conn->query($sql1)===TRUE){
		echo "NEW RECORD CREATED SUCESSFULLY!!!";
	}else{
		echo "Error: " . $sql1 . "<br>" . $conn->error;
	}
}
if(isset($_POST['update'])){
	$USERID = $_POST['USERID'];
	$first = $_POST['first'];
	$pwd = $_POST['pwd'];
	$USERTYPE = $_POST['USERTYPE'];
	
	$sql3 = "UPDATE `userinfo` SET `pwd`='$pwd', `first`='$first', `usertype`='$USERTYPE' WHERE `userid`='$USERID'";
	
	if($conn->query($sql3)===TRUE){
		echo "RECORD UPDATED SUCESSFULLY!!!";
	}else{
		echo "Error: " . $sql3 . "<br>" . $conn->error;
	}
}


if(isset($_POST['delete'])){
	$USERID = $_POST['USERID'];
	$first = $_POST['first'];
	$pwd = $_POST['pwd'];
	$USERTYPE = $_POST['USERTYPE'];
	
	$sql2 = "DELETE FROM `userinfo` WHERE userid ='$USERID'";
	
	if($conn->query($sql2)===TRUE){
		echo "RECORD DELETED SUCESSFULLY!!!";
	}else{
		echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
}


?>

