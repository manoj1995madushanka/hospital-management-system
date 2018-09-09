<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="admin.php" style="font-face:Khmer OS Battambang; font-size:16px;">ADMIN DASHBOARD</a></font>
<br><br>
<center><h1>UTILIZE RESULTS' DATA</h1></center>
<br>

<a class="addnew" href="admin_result.php" style="font-face:Khmer OS Battambang; font-size:16px;">BACK TO RESULTS VIEW</a></font>
<br>
<br>

    <form method="post" action="result_use.php">
    <div class="main-top" >
        
        
        <div>
            <label for="pid">Patient ID:</label>
            <input type="text" name="pid"  placeholder="PXXXX" id="pid" required>
        </div><br>
        
        <div>
            <label for="test_no">Test No :</label>
            <input type="text" name="test_no" placeholder="TXXXX" id="test_no" >
        </div><br>
		
		<div>
            <label for="TestResult">TEST RESULT :</label>
            <select name="TestResult" id="TestResult">
                <option value="POSITIVE">POSITIVE</option>
				<option value="NEGATIVE">NEGATIVE</option>
				<option value="NORMAL">NORMAL</option>
            </select>
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
	$pid = $_POST['pid'];
	$test_no = $_POST['test_no'];
	$TestResult = $_POST['TestResult'];
	
	$sql1 = "INSERT INTO result(`pid`, `test_no`, `TestResult`) VALUES ('$pid','$test_no', '$TestResult')";
	
	if($conn->query($sql1)===TRUE){
		echo "NEW RECORD CREATED SUCESSFULLY!!!";
	}else{
		echo "Error: " . $sql1 . "<br>" . $conn->error;
	}
}
if(isset($_POST['update'])){
	$pid = $_POST['pid'];
	$test_no = $_POST['test_no'];
	$TestResult = $_POST['TestResult'];
	
	$sql3 = "UPDATE `result` SET `TestResult`='$TestResult' WHERE `pid`='$pid' AND `test_no`='$test_no'";
	
	if($conn->query($sql3)===TRUE){
		echo "RECORD UPDATED SUCESSFULLY!!!";
	}else{
		echo "Error: " . $sql3 . "<br>" . $conn->error;
	}
}


if(isset($_POST['delete'])){
	$pid = $_POST['pid'];
	$test_no = $_POST['test_no'];
	$TestResult = $_POST['TestResult'];
	
	$sql2 = "DELETE FROM `result` WHERE pid='$pid' AND test_no='$test_no'";
	
	if($conn->query($sql2)===TRUE){
		echo "RECORD DELETED SUCESSFULLY!!!";
	}else{
		echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
}


?>
