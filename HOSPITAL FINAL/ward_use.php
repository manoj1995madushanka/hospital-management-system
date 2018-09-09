<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="admin.php" style="font-face:Khmer OS Battambang; font-size:16px;">ADMIN DASHBOARD</a></font>
<br><br>
<center><h1>UTILIZE WARDS' DATA</h1></center>
<br>

<a class="addnew" href="admin_ward.php" style="font-face:Khmer OS Battambang; font-size:16px;">BACK TO WARDS VIEW</a></font>
<br>
<br>

    <form method="post" action="ward_use.php">
    <div class="main-top" >
        
        
        <dev>
            <label for="wardNo">Ward No :</label>
            <input type="text" name="wardNo"  placeholder="wXXXX" id="wardNo" required>
        </dev>
        
        <dev>
            <label for="wardName">Ward Name :</label>
            <input type="text" name="wardName" id="wardName" >
        </dev>
                  
        <div>
            <input type=submit name=add id=add value=Add>
            <input type=submit name=update id=update value=Update>
            <input type=submit name=delete id=delete value=Delete>
        </div>
        
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
	$wardNo = $_POST['wardNo'];
	$wardName = $_POST['wardName'];
	
	$sql1 = "INSERT INTO ward(`ward_no`, `ward_name`) VALUES ('$wardNo','$wardName')";
	
	if($conn->query($sql1)===TRUE){
		echo "new record created successfully...";
	}else{
		echo "Error: " . $sql1 . "<br>" . $conn->error;
	}
}
if(isset($_POST['update'])){
	$wardNo = $_POST['wardNo'];
	$wardName = $_POST['wardName'];
	
	$sql3 = "UPDATE `ward` SET `ward_name`='$wardName' WHERE `ward_no`='$wardNo'";
	
	if($conn->query($sql3)===TRUE){
		echo "'$wardNo' updated successfully...";
	}else{
		echo "Error: " . $sql3 . "<br>" . $conn->error;
	}
}

if(isset($_POST['view'])){
	$wardNo = $_POST['wardNo'];
	$wardName = $_POST['wardName'];
	
	$sql4 = "SELECT * FROM ward";
	
	$result = $conn->query($sql4);
if ($result->num_rows > 0) {
    ?>
<table>
    <tr>
    <th>Ward No</th>
    <th>Ward Name</th>
  </tr>
</table>
    
<?php
    while($row = $result->fetch_assoc()) {
        ?>
            <table>
                <tr>
                    <td><?php echo $row['ward_no']?></td>
                    <td><?php echo $row['ward_name']?></td>
                </tr>
            </table>
            
        
        <?php
    }
} else {
    echo "0 results";
}
}

if(isset($_POST['delete'])){
	$wardNo = $_POST['wardNo'];
	$wardName = $_POST['wardName'];
	
	$sql2 = "DELETE FROM `ward` WHERE ward_no='$wardNo'";
	
	if($conn->query($sql2)===TRUE){
		echo "'$wardNo' deleted successfully...";
	}else{
		echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
}


?>
