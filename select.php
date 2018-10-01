<?php
include 'connect1.php';
$sql = "SELECT name,phone,email FROM Details";
$result = $conn->query($sql);
if($result->num_rows > 0) {
	echo "<h1>DETAILS IN DATABASE <h1>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Phone</th>";
	echo "<th>Email</th>";
	echo "</tr>";
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>";
	echo $row["name"];
	echo "<td>";
	echo $row["phone"];
	echo "<td>";
	echo $row["email"];
	echo "</td>";
	}
	echo "</table>";
}
else {
	echo "No results";
}
$sql = "SELECT name,phone,email FROM Details WHERE name = 'John' ";
$result = $conn->query($sql);
if($result->num_rows > 0) {
		echo "<h1> SPECIFIC DETAILS  <h1>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Phone</th>";
	echo "<th>Email</th>";
	echo "</tr>";
	while($row = $result->fetch_assoc()) {
				echo "<tr>";
		echo "<td>";
	echo $row["name"];
	echo "<td>";
	echo $row["phone"];
	echo "<td>";
	echo $row["email"];
	echo "</td>";
	}
}
else {
	echo "0 results";
}


$conn->close();
?>
