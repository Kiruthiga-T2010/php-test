<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="Details";


include 'connect1.php';

$sql = "INSERT INTO Details (name, phone, email)
VALUES ('John',1778536345 , 'john@example.com');";
$sql .= "INSERT INTO Details (name, phone, email)
VALUES ('Mary', 1448373745, 'mary@example.com');";
$sql .= "INSERT INTO Details (name, phone, email)
VALUES ('Julie', 1888757453, 'julie@example.com');";

$sql .= "INSERT INTO Details (name, phone, email)
VALUES ('Jill',1778554643 , 'jill@example.com');";

$sql .= "INSERT INTO Details (name, phone, email)
VALUES ('Erica',1774567888 , 'erica@example.com');";
if (mysqli_multi_query($conn,$sql)) {
    echo "New records created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>