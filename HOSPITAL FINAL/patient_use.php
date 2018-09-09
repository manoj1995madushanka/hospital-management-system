<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="admin.php" style="font-face:Khmer OS Battambang; font-size:16px;">ADMIN DASHBOARD</a></font>
<br><br>
<center><h1>UTILIZE PATIENTS' DATA</h1></center>
<br>

<a class="addnew" href="admin_patient.php" style="font-face:Khmer OS Battambang; font-size:16px;">BACK TO PATIENT VIEW</a></font>
<br><br>

    <form method="post" action="patient_use.php">
    <div>
        
        
        <div>
            <label for="patient_id">Patient ID :</label>
            <input type="text" name="patient_id" placeholder="PXXXX" id="patient_id" required>
        </div><br>
        
        <div>
            <label for="firstName">FIRST NAME :</label>
            <input type="text" name="firstName" id="firstName" >
        </div><br>
        
        <div>
            <label for="lastName">LAST NAME :</label>
            <input type="text" name="lastName" id="lastName">
        </div><br>
         
        <div>
            <label for="birth_day">DATE OF BIRTH :</label>
            <select name="txt_day" id="txt_day">
                        	<option>Day</option>
                            	<?php
                            		//Do Loop while
									$d=0;
									do{
										$d++;
										echo "<option>".$d."</option>";
									}while($d<=30);
								?>
                        </select>
                        <select name="txtmonth">
                        	<option>Month</option>
                            	<?php
                            		//Do Loop while
									$d=0;
									do{
										$d++;
										echo "<option>".$d."</option>";
									}while($d<=11);
								?>

                        </select>
                        <select name="txtyear">
                        	<option>Year</option>
                            	<?php
                            	//While Loop
									$y=2017;
									while($y>=1930){
										$y--;
										echo "<option>".$y."</option>";
									}
								?>
                        </select>
            </select>
        </div><br>
        
        <div>
            <label for="address">ADDRESS :</label>
            <input type="text" name="address" id="address">
        </div><br>
        
        <div>
            <label for="consultant">CONSULTANT :</label>
            <input type="text" name="consultant_id" placeholder="DXXXX" id="consultant">
        </div><br>

        <div>
            <label for="recommendation">RECOMMENDATION :</label>
            <input type="text" name="recomanded_DID" placeholder="DXXXX" id="recommendation">
        </div><br>
		
		
        <div>
            <label for="ward">WARD NO:</label>
            <input type="text" name="ward_no" placeholder="wXXXX" id="ward">
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
	
	$patient_id = $_POST['patient_id'];
	$f_name = $_POST['firstName'];
	$l_name = $_POST['lastName'];
	$birth_day = trim($_POST['txtyear']."-".$_POST['txtmonth']."-".$_POST['txtday']);
	$address = $_POST['address'];
	$consultant_id = $_POST['consultant_id'];
    $recomanded_DID = $_POST['recomanded_DID'];
	$ward_no = $_POST['ward_no'];

	
	$sql = "INSERT INTO `patient`(`patient_id`, `f_name`, `l_name`, `address`, `consultant_id`, 'recomanded_DID', `birth_day`, 'ward_no') VALUES ('$patient_id','$f_name','$l_name','$address','$consultant_id', '$recomanded_DID','$birth_day', '$ward_no')";
    if ($conn->query($sql) === TRUE) {
        ?>
NEW RECORD CREATED SUCESSFULLY!!!
<?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['update'])){
	
	$patient_id = $_POST['patient_id'];
	$f_name = $_POST['firstName'];
	$l_name = $_POST['lastName'];
	$birth_day = trim($_POST['txtyear']."-".$_POST['txtmonth']."-".$_POST['txtday']);
	$address = $_POST['address'];
	$consultant_id = $_POST['consultant_id'];
    $recomanded_DID = $_POST['recomanded_DID'];
	$ward_no = $_POST['ward_no'];
	
	$sql = "UPDATE `patient` SET `f_name`='$f_name',`l_name`='$l_name',`birth_day`='$birth_day',`address`='$address',`consultant_id`='$consultant_id',`recomanded_DID`='$recomanded_DID', `ward_no`='$ward_no'  WHERE `patient_id`='$patient_id'";
    if ($conn->query($sql) === TRUE) {
        ?>
RECORD UPDATED SUCESSFULLY!!!
<?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['delete'])){
	$patient_id = $_POST['patient_id'];
	
	
	$sql2 = "DELETE FROM `patient` WHERE patient_id='$patient_id'";
	
	if($conn->query($sql2)===TRUE){
        ?>
RECORD DELETED SUCESSFULLY!!!
<?php
	}else{
		echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
}


$conn->close();
?>
