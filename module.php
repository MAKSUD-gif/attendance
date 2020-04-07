<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="lightblue">
<center>
	<table>
		<tr>
			<th>ID</th>
			<th>First name</th>
			<th>Last name</th>
			<th>UID</th>
		</tr>
		<?php
$conn = mysqli_connect("localhost", "root", "", "advancaed");
if ($conn-> connect_error) {
	die("Connection failed:".$conn-> connect_error);
}
$sql = "SELECT id, fname, lname, uid from module";
$result = mysqli_query($conn,$sql);

if ($row = mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>". $row['id']."</td><td>" . $row['fname']. "</td><td>". $row['lname']. "</td><td> ". $row['uid'];
	}
	echo "</table>";
}
else {
	echo "0 result";
}
		?>
	</table>
</center>

</body>
</html>