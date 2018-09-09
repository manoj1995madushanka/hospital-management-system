<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br><br>
<a class="addnew" href="doctor.php" style="font-face:Khmer OS Battambang; font-size:16px;">DOCTOR DASHBOARD</a></font>
<br>
<br>
<center><h1>SEARCH RESULT</h1></center>
<br>
<a class="addnew" href="doc_patient_records.php" style="font-face:Khmer OS Battambang; font-size:16px;">BACK</a></font>
	<table>
    	<tr>
            <th>Patient ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
			<th>ADDRESS</th>
			<th>CONSULTANT</th>
			<th>RECOMMENDATION</th>
			<th>WARD</th>
        </tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text==""){
			echo "No Data....Please Try Again!!!"."<br>";
			echo '<a href="doc_patient_records.php"><img src="images/Users_Group.png" title="Go Back"></a>';
		}
	?>
    <?php
		$cbo = $_POST['cbosearch'];
		$search = $_POST['txtsearch'];
		mysql_connect("localhost","root","") or die (mysql_error());
		mysql_select_db ("hospital");
	?>
    <?php
		if($cbo=="Patient ID")
		{
			$id = "SELECT * FROM patient WHERE patient_id='$search'";
			$result = mysql_query($id);
			
			if (!$result) {
				echo "INVALID SEARCH ".mysql_error();
			} else {
				while($di=mysql_fetch_array($result)) {
	?>
			<tr>
				<td><?php echo $di[0]; ?></td>
				<td><?php echo $di[1]; ?></td>
                <td><?php echo $di[2]; ?></td>
				<td><?php echo $di[4]; ?></td>
				<td><?php echo $di[5]; ?></td>
				<td><?php echo $di[6]; ?></td>
				<td><?php echo $di[7]; ?></td>
				</td>
			</tr>
    <?php
			}
			}
		
		} 

	?>	</table>
		<br><br><br>
		<table>
			<tr>
            <th>Patient ID</th>
            <th>Test No</th>
            <th>TEST RESULT</th>
        </tr>
		
	<?php
			$ix = "SELECT * FROM results WHERE pid='$search'";
			$result = mysql_query($ix);
			
			if (!$result) {
				echo "INVALID SEARCH ".mysql_error();
			} else {
				while($di=mysql_fetch_array($result)) {
	?>
			<tr>
				<td><?php echo $di[0]; ?></td>
				<td><?php echo $di[1]; ?></td>
                <td><?php echo $di[2]; ?></td>
				</td>
			</tr>
    <?php
			}
			}
		
	?>
</table>
</body>
</html>