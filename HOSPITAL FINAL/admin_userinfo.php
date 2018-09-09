<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="admin.php" style="font-face:Khmer OS Battambang; font-size:16px;">ADMIN DASHBOARD</a></font>
<br><br>
<center><h1>CMS USERS TABLE</h1></center>
<br>

<a class="addnew" href="userinfo_use.php" style="font-face:Khmer OS Battambang; font-size:16px;">ADD NEW RECORD</a></font>

<br>
	<br>
	<center>
	<table>
    	<tr>
            <th>USER ID</th>
            <th>USER TYPE</th>
			<th>FIRST NAME</th>
			<th>Option</th>
    	</tr>
	
        <?php
			mysql_connect("localhost","root","") or die (mysql_error());
			mysql_select_db ("hospital");
			$sql = "select * from userinfo";
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
			<td align="center"><a href="userinfo_use.php? txtid=<?php echo $tr[0];?>">Delete</a> / <a href="userinfo_use.php? txtid=<?php echo $tr[0];?>">Edit</a> </td>    
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