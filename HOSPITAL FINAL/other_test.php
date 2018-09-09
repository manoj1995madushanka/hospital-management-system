<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="doctor.php" style="font-face:Khmer OS Battambang; font-size:16px;">DOCTOR DASHBOARD</a></font>
<br><br>
<center><h1>TESTS TABLE</h1></center>

<br><br>
	<div class="search">
	<form method="post" action="other_test_search.php">
    <select name="cbosearch">
    	<option>Test ID</option>
    	<option>TEST NAME</option>
    </select>
	<br><br>
	<input type="text" name="txtsearch" placeholder="Type to Search" /><input type="submit" name="cmdsearch" value="Search" />
    </form>
    </div>
	<br>
	<center>
	<table>
    	<tr>
            <th>Test ID</th>
            <th>TEST NAME</th>
    	</tr>
	
        <?php
			mysql_connect("localhost","root","") or die (mysql_error());
			mysql_select_db ("hospital");
			$sql = "select * from test";
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