<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="patient.php" style="font-face:Khmer OS Battambang; font-size:16px;">PATIENT DASHBOARD</a></font>
<br><br>
<center><h1>WARDS TABLE</h1></center>
<br>
	<div class="search">
	<form method="post" action="pat_ward_search.php">
    <select name="cbosearch">
    	<option>WARD NO</option>
    	<option>WARD NAME</option>
    </select>
	<br><br>
	<input type="text" name="txtsearch" placeholder="Type to Search" /><input type="submit" name="cmdsearch" value="Search" />
    </form>
    </div>
	<br>
	<center>
	<table>
    	<tr>
            <th>WARD NO</th>
            <th>WARD NAME</th>
    	</tr>
	
        <?php
			mysql_connect("localhost","root","") or die (mysql_error());
			mysql_select_db ("hospital");
			$sql = "select * from ward";
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