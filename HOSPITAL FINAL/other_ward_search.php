<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<center><h1>SEARCH RESULT</h1></center>
<br>
<a class="addnew" href="other_ward.php" style="font-face:Khmer OS Battambang; font-size:16px;">BACK</a></font>
	<table>
    	<tr>
            <th>WARD NO</th>
            <th>WARD NAME</th>
        </tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text==""){
			echo "No Data....Please Try Again!!!"."<br>";
			echo '<a href="other_ward.php"><img src="images/Users_Group.png" title="Go Back"></a>';
		}
	?>
    <?php
		$cbo = $_POST['cbosearch'];
		$search = $_POST['txtsearch'];
		mysql_connect("localhost","root","") or die (mysql_error());
		mysql_select_db ("hospital");
	?>
    <?php
		if($cbo=="WARD NO")
		{
			$id = "SELECT * FROM ward WHERE ward_no='$search'";
			$result = mysql_query($id);
			
			if (!$result) {
				echo "INVALID SEARCH ".mysql_error();
			} else {
				while($di=mysql_fetch_array($result)) {
	?>
			<tr>
				<td><?php echo $di[0]; ?></td>
				<td><?php echo $di[1]; ?></td>
				</td>
			</tr>
    <?php
			}
			}
		
		} else if($cbo=="WARD NAME")
		{
			$na = mysql_query("SELECT * FROM ward WHERE ward_name like '".$search."%'");
	?>
    <?php
		while($an=mysql_fetch_array($na))
		{
	?>
			<tr>
				<td><?php echo $an[0]; ?></td>
				<td><?php echo $an[1]; ?></td>
				</td>
			</tr>
            <?php
				}
		}
			?>  

</table>
</body>
</html>