<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="admin.php" style="font-face:Khmer OS Battambang; font-size:16px;">ADMIN DASHBOARD</a></font>
<br><br>
<center><h1>UTILIZE EXTERNAL PHYSICIANS' DATA</h1></center>
<br>


<a class="addnew" href="admin_externalphysician.php" style="font-face:Khmer OS Battambang; font-size:16px;">BACK TO EXTERNAL PHYSICIAN VIEW</a></font>


<br><br>
    <form method="POST" action="doctor_use_external.php">
    <div class="contact_form" >
        <div>
            <label for="doctorId">Doctor ID :</label>
            <input type="text" name="doctorId" placeholder="DXXXX" id="doctorId" required>
        </div><br>
        <div>
            <label for="fName">First Name :</label>
            <input type="text" name="firstName" id="firstName" >
        </div><br>
        <div>
            <label for="lName">Last Name :</label>
            <input type="text" name="lastName" id="lastName">
        </div><br>
        <div>
            <label for="regNo">Reg No :</label>
            <input type="text" name="regNo" id="regNo">
        </div><br>
        <div>
            <label for="type">Type :</label>
            <select name="type" id="type">
                <option value="External Physician">External Physician</option>
            </select><br>
        </div> <br>
        <div style="position:relative;left:150px;top:5px;">
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
	
	$d_id = $_POST['doctorId'];
	$f_name = $_POST['firstName'];
	$l_name = $_POST['lastName'];
	$regNo = $_POST['regNo'];
	$type = $_POST['type'];

	$sql = "INSERT INTO `doctor`(`d_id`) VALUES ('$d_id')";
    
    if($type='External Physician'){
        $sql1 = "INSERT INTO `externalphysican`(`d_id`, `reg_no`, `d_f_name`, `d_l_name`) VALUES ('$d_id','$regNo','$f_name','$l_name')";
    }
    if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
  ?>      NEW RECORD CREATED SUCESSFULLY!!!
<?php  } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['update'])){
	
	$d_id = $_POST['doctorId'];
	$f_name = $_POST['firstName'];
	$l_name = $_POST['lastName'];
	$regNo = $_POST['regNo'];
	$type = $_POST['type'];

	$sql2 = "UPDATE `externalphysican` SET `reg_no`='$regNo',`d_l_name`='$l_name',`d_f_name`='$f_name' WHERE `user_id`='$user_id'";
    
    if ($conn->query($sql2) === TRUE) {
?>        
RECORD UPDATED SUCESSFULLY!!!
<?php
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
}

if(isset($_POST['delete'])){
	$d_id = $_POST['doctorId'];
	
	
	$sql3 = "DELETE FROM `externalphysican` WHERE d_id='$d_id'";
	$sql4 = "DELETE FROM `doctor` WHERE d_id='$d_id'";
	
	if($conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE){
        ?>
RECORD DELETED SUCESSFULLY!!!
<?php
	}else{
		echo "Error: " . $sql3 . "<br>" . $conn->error;
	}
}


$conn->close();
?>
