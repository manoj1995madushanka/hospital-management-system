<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="patient.php" style="font-face:Khmer OS Battambang; font-size:16px;">PATIENT DASHBOARD</a></font>
<br><br>
<center><h1>PATIENT CONSULTATION TABLE</h1></center>
<br>

<br><br>

	<center>
	<table>
    	<tr>
            <th>Patient ID</th>
            <th>Doctor ID</th>
    	</tr>
	
        <?php
			mysql_connect("localhost","root","") or die (mysql_error());
			mysql_select_db ("hospital");
			$sql = "select patient_id, consultant_id from patient";
			$result = mysql_query($sql);
			
			if (!$result) {
				echo "An error has occured: ".mysql_error();
			} else {
				while($tr=mysql_fetch_array($result)) {
		?>
				
		<tr>
			<td align="center"><?php echo $tr[0]; ?></td>
			<td align="center"><?php echo $tr[1]; ?></td>
			</td>    
		</tr>
				
		<?php
				}
			}
		?>
		
    </table>
	</center>
	</div>
	<br><br>
</body>
</html>