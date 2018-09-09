<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="admin.php" style="font-face:Khmer OS Battambang; font-size:16px;">ADMIN DASHBOARD</a></font>
<br><br>
<center><h1>HOSPITAL DOCTOR TABLE</h1></center>
<br>

<a class="addnew" href="doctor_use.php" style="font-face:Khmer OS Battambang; font-size:16px;">ADD NEW RECORD</a></font>

<br><br>
	<div class="search">
	<form method="post" action="admin_doctor_search.php">
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
			<th>Option</th>
    	</tr>
	
        <?php
			mysql_connect("localhost","root","") or die (mysql_error());
			mysql_select_db ("hospital");
			$sql = "select * from hospitaldoctor";
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
			<td align="center"><a href="doctor_use.php? txtid=<?php echo $tr[0];?>">Delete</a> / <a href="doctor_use.php? txtid=<?php echo $tr[0];?>">Edit</a> </td>    
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