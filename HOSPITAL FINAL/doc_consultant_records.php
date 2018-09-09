<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="doctor.php" style="font-face:Khmer OS Battambang; font-size:16px;">DOCTOR DASHBOARD</a></font>
<br><br>
<center><h1>CONSULTANT COMPLETE RECORD</h1></center>
<br>

<br><br>
	<div class="search">
	<form method="post" action="doc_consultant_records_search.php">
    <select name="cbosearch">
    	<option>DoctorID</option>
    </select>
	<br><br>
	<input type="text" name="txtsearch" placeholder="Type to Search" /><input type="submit" name="cmdsearch" value="Search" />
    </form>
	</div>
	<br><br>
	</body>
	</html>