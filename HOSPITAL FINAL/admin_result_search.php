<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<center><h1>SEARCH RESULT</h1></center>
<br>
<a class="addnew" href="admin_result.php" style="font-face:Khmer OS Battambang; font-size:16px;">BACK</a></font>
	<table>
    	<tr>
            <th>Patient ID</th>
            <th>Test No</th>
            <th>TEST RESULT</th>
			<th>Option</th>
        </tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text==""){
			echo "No Data....Please Try Again!!!"."<br>";
			echo '<a href="admin_result.php"><img src="images/Users_Group.png" title="Go Back"></a>';
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
			$id = "SELECT * FROM results WHERE pid='$search'";
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
				<td align="center"><a href="result_use.php? txtid=<?php echo $di[0];?>">Delete</a> / <a href="result_use.php? txtid=<?php echo $di[0];?>">Edit</a></td>
			</tr>
    <?php
			}
			}
		
		} else if($cbo=="Test No")
		{
			$na = mysql_query("SELECT * FROM results WHERE test_no like '".$search."%'");
	?>
    <?php
		while($an=mysql_fetch_array($na))
		{
	?>
			<tr>
				<td><?php echo $an[0]; ?></td>
				<td><?php echo $an[1]; ?></td>
                <td><?php echo $an[2]; ?></td>
				<td align="center"><a href="result_use.php? txtid=<?php echo $an[0];?>">Delete</a> / <a href="result_use.php? txtid=<?php echo $an[0];?>">Edit</a></td>
			</tr>
            <?php
				}
			?>  
     <?php
		}else if($cbo=="TEST RESULT")
				{
        $add = mysql_query("SELECT * FROM results WHERE TestResult like '".$search."%'");
     ?>
		<?php
		while($dda=mysql_fetch_array($add))
		{
		?>
			<tr>
				<td><?php echo $dda[0]; ?></td>
				<td><?php echo $dda[1]; ?></td>
                <td><?php echo $dda[2]; ?></td>
				<td align="center"><a href="result_use.php?txtid=<?php echo $dda[0];?>">Delete</a> / <a href="result_use.php?txtid=<?php echo $dda[0];?>">Edit</a></td>
			</tr>
            <?php
				}
			}
			?>
</table>
</body>
</html>