<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<center><h1>SEARCH RESULT</h1></center>
<br>
<a class="addnew" href="admin_patient.php" style="font-face:Khmer OS Battambang; font-size:16px;">BACK</a></font>
	<table>
    	<tr>
            <th>Patient ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
			<th>ADDRESS</th>
			<th>CONSULTANT</th>
			<th>RECOMMENDATION</th>
			<th>WARD</th>
			<th>OPTION</th>
        </tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text==""){
			echo "No Data....Please Try Again!!!"."<br>";
			echo '<a href="admin_patient.php"><img src="images/Users_Group.png" title="Go Back"></a>';
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
				<td align="center"><a href="patient_use.php? txtid=<?php echo $di[0];?>">Delete</a> / <a href="patient_use.php? txtid=<?php echo $di[0];?>">Edit</a></td>
			</tr>
    <?php
			}
			}
		
		} else if($cbo=="FIRST NAME")
		{
			$na = mysql_query("SELECT * FROM patient WHERE f_name like '".$search."%'");
	?>
    <?php
		while($an=mysql_fetch_array($na))
		{
	?>
			<tr>
				<td><?php echo $an[0]; ?></td>
				<td><?php echo $an[1]; ?></td>
                <td><?php echo $an[2]; ?></td>
				<td><?php echo $an[4]; ?></td>
				<td><?php echo $an[5]; ?></td>
				<td><?php echo $an[6]; ?></td>
				<td><?php echo $an[7]; ?></td>
				<td align="center"><a href="patient_use.php? txtid=<?php echo $an[0];?>">Delete</a> / <a href="patient_use.php? txtid=<?php echo $an[0];?>">Edit</a></td>
			</tr>
            <?php
				}
			?>  
     <?php
		}else if($cbo=="LAST NAME")
				{
        $add = mysql_query("SELECT * FROM patient WHERE l_name like '".$search."%'");
     ?>
		<?php
		while($dda=mysql_fetch_array($add))
		{
		?>
			<tr>
				<td><?php echo $dda[0]; ?></td>
				<td><?php echo $dda[1]; ?></td>
                <td><?php echo $dda[2]; ?></td>
				<td><?php echo $dda[4]; ?></td>
				<td><?php echo $dda[5]; ?></td>
				<td><?php echo $dda[6]; ?></td>
				<td><?php echo $dda[7]; ?></td>
				<td align="center"><a href="patient_use.php?txtid=<?php echo $dda[0];?>">Delete</a> / <a href="patient_use.php?txtid=<?php echo $dda[0];?>">Edit</a></td>
			</tr>
            <?php
				}
			}else if($cbo=="ADDRESS")
			{
			$g = mysql_query("SELECT * FROM patient WHERE address like '".$search."%'");
			?>  
			<?php
				while($gu=mysql_fetch_array($g))
				{			
			?>
            <tr>
				<td><?php echo $gu[0]; ?></td>
				<td><?php echo $gu[1]; ?></td>
                <td><?php echo $gu[2]; ?></td>
				<td><?php echo $gu[4]; ?></td>
				<td><?php echo $gu[5]; ?></td>
				<td><?php echo $gu[6]; ?></td>
				<td><?php echo $gu[7]; ?></td>
				<td align="center"><a href="patient_use.php?txtid=<?php echo $gu[0];?>">Delete</a> / <a href="patient_use.php?txtid=<?php echo $gu[0];?>">Edit</a></td>
			</tr>
            
            <?php
				}
			} else if($cbo=="CONSULTANT")
			{
			$g = mysql_query("SELECT * FROM patient WHERE consultant_id like '".$search."%'");
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
				<td align="center"><a href="patient_use.php?txtid=<?php echo $ge[0];?>">Delete</a> / <a href="patient_use.php?txtid=<?php echo $ge[0];?>">Edit</a></td>
			</tr>
            
            <?php
				}
			} else if($cbo=="RECOMMENDATION")
			{
			$g = mysql_query("SELECT * FROM patient WHERE recomanded_DID like '".$search."%'");
			?>  
			<?php
				while($gi=mysql_fetch_array($g))
				{			
			?>
            <tr>
				<td><?php echo $gi[0]; ?></td>
				<td><?php echo $gi[1]; ?></td>
                <td><?php echo $gi[2]; ?></td>
                <td><?php echo $gi[4]; ?></td>
                <td><?php echo $gi[5]; ?></td>
                <td><?php echo $gi[6]; ?></td>
                <td><?php echo $gi[7]; ?></td>
				<td align="center"><a href="patient_use.php?txtid=<?php echo $gi[0];?>">Delete</a> / <a href="patient_use.php?txtid=<?php echo $gi[0];?>">Edit</a></td>
			</tr>
            
            <?php
				}
			} else if ($cbo=="WARD"){
			$g = mysql_query("SELECT * FROM patient WHERE ward like '".$search."%'");
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
				<td align="center"><a href="patient_use.php?txtid=<?php echo $ge[0];?>">Delete</a> / <a href="patient_use.php?txtid=<?php echo $ge[0];?>">Edit</a></td>
			</tr>
            
            <?php
				}
			}
			?>
</table>
</body>
</html>