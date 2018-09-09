<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br><br>
<a class="addnew" href="doctor.php" style="font-face:Khmer OS Battambang; font-size:16px;">DOCTOR DASHBOARD</a></font>
<br>
<center><h1>SEARCH RESULT</h1></center>
<br>
<a class="addnew" href="doc_ex_phy_records.php" style="font-face:Khmer OS Battambang; font-size:16px;">BACK</a></font>
	<table>
    	<tr>
            <th>DoctorID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>REG-NO.</th>
        </tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text==""){
			echo "No Data....Please Try Again!!!"."<br>";
			echo '<a href="doc_ex_phy_records.php"><img src="images/Users_Group.png" title="Go Back"></a>';
		}
	?>
    <?php
		$cbo = $_POST['cbosearch'];
		$search = $_POST['txtsearch'];
		mysql_connect("localhost","root","") or die (mysql_error());
		mysql_select_db ("hospital");
	?>
    <?php
		if($cbo=="DoctorID")
		{
			$id = "SELECT * FROM externalphysican WHERE d_id='$search'";
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
                <td><?php echo $di[3]; ?></td>
				</td>
			</tr>
    <?php
			}
			}
		
		}
		
	?>
	</table>
	<br><br>
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
			$g = mysql_query("SELECT * FROM patient WHERE recomanded_DID = '$search'");
			?>  
			<?php
				while($ge=mysql_fetch_array($g))
				{			
			?>
            <tr>
				<td><?php echo $ge[0]; ?></td>
				<td><?php echo $ge[1]; ?></td>
                <td><?php echo $ge[2]; ?></td>
                <td><?php echo $ge[4]; ?></td>
                <td><?php echo $ge[5]; ?></td>
                <td><?php echo $ge[6]; ?></td>
                <td><?php echo $ge[7]; ?></td>
				</td>
			</tr>
            
			<?php
				}
			?>
	</table>
	<br><br>
	</body>
	</html>