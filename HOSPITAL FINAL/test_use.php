<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="admin.php" style="font-face:Khmer OS Battambang; font-size:16px;">ADMIN DASHBOARD</a></font>
<br><br>
<center><h1>UTILIZE TESTS' DATA</h1></center>
<br>

<a class="addnew" href="admin_test.php" style="font-face:Khmer OS Battambang; font-size:16px;">BACK TO TESTS VIEW</a></font>
<br>
<br>

    <form method="post" action="test_use.php">
    <div class="main-top" >
        
        
        <div>
            <label for="testNo">Test No :</label>
            <input type="text" name="testNo"  placeholder="TXXXX" id="wardNo" required>
        </div><br>
        
        <div>
            <label for="testName">TEST NAME :</label>
            <input type="text" name="testName" id="testName" >
        </div><br>
                  
        <div>
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
	$testNo = $_POST['testNo'];
	$testName = $_POST['testName'];
	
	$sql1 = "INSERT INTO test(`test_id`, `name`) VALUES ('$testNo','$testName')";
	
	if($conn->query($sql1)===TRUE){
		echo "NEW RECORD CREATED SUCESSFULLY!!!";
	}else{
		echo "Error: " . $sql1 . "<br>" . $conn->error;
	}
}
if(isset($_POST['update'])){
	$testNo = $_POST['testNo'];
	$testName = $_POST['testName'];
	
	$sql3 = "UPDATE `test` SET `name`='$testName' WHERE `ward_id`='$testNo'";
	
	if($conn->query($sql3)===TRUE){
		echo "RECORD UPDATED SUCESSFULLY!!!";
	}else{
		echo "Error: " . $sql3 . "<br>" . $conn->error;
	}
}


if(isset($_POST['delete'])){
	$testNo = $_POST['testNo'];
	$testName = $_POST['testName'];
	
	$sql2 = "DELETE FROM `test` WHERE test_id='$testNo'";
	
	if($conn->query($sql2)===TRUE){
		echo "RECORD DELETED SUCESSFULLY!!!";
	}else{
		echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
}


?>
