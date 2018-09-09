<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="patient.php" style="font-face:Khmer OS Battambang; font-size:16px;">PATIENT DASHBOARD</a></font>
<br><br>
<center><h1>EXTERNAL DOCTOR TABLE</h1></center>
<br>

<br>
	<div class="search">
	<form method="post" action="pat_externalphysician_search.php">
    <select name="cbosearch">
    	<option>DoctorID</option>
    	<option>FIRST NAME</option>
        <option>LAST NAME</option>
        <option>REG-NO.</option>
    </select>
	<br><br>
	<input type="text" name="txtsearch" placeholder="Type to Search" /><input type="submit" name="cmdsearch" value="Search" />
    </form>
    </div>
	<br>
	<center>
	<table>
    	<tr>
            <th>DoctorID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>REG-NO.</th>
    	</tr>
	
        <?php
			mysql_connect("localhost","root","") or die (mysql_error());
			mysql_select_db ("hospital");
			$sql = "select * FROM externalphysican";
			$result = mysql_query($sql);
			
			if (!$result) {
				echo "An error has occured: ".mysql_error();
			} else {
				while($tr=mysql_fetch_array($result)) {
		?>
				
		<tr>
			<td align="center"><?php echo $tr[0]; ?></td>
			<td align="center"><?php echo $tr[1]; ?></td>
			<td align="center"><?php echo $tr[2]; ?></td>
			<td align="center"><?php echo $tr[3]; ?></td>
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