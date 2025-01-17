<!--
Martin O'Sullivan
C00227188
Lecturer : Catherine Moloney
-->

<?php
 	include '../db.inc.php';
	$sql = "SELECT SupplierID, Street, Town, Country, Name, Email, WebSite, PhoneNumber FROM Supplier WHERE DeletionFlag = 0";

	echo "<h2>List of Suppliers</h2>";

	if (!$result = mysqli_query($con, $sql) )
	{
		die("Error in querying the database: ".mysqli_error($con) );
	}

	echo "<br><select name ='listbox' id = 'listbox' onclick = 'populate()'>";

	while( $row = mysqli_fetch_array($result) ) 
	{
		$id = $row['SupplierID'];
		$street = $row['Street'];
		$town= $row['Town'];
		$country = $row['Country'];
		$name = $row['Name'];
		$email = $row['Email'];
		$website = $row['WebSite'];
		$phoneNumber = $row['PhoneNumber'];

		$allText = "$id,$street,$town,$country,$name,$email,$website,$phoneNumber";

		echo "<option value='$allText'>$id. $name - $country </option>";
	}	

	echo "</select>";

	mysqli_close($con);
?>