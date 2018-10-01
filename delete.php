<?php
include 'connect1.php';
$sql="DELETE FROM Details WHERE email = 'erica@example.com'";
if($conn->query($sql) === TRUE) {
	echo "Record deleted successfully";
} else {
	echo "Error deleting record " . $conn->error;
}
$conn->close();
?>