<?php
$dbhost = 'localhost';
$username = 'root';
$password = 'Ephesus clearness marshes breast';
$dbname = 'portfolio';
$conn = new mysqli($dbhost, $username, $password, $dbname);


if ($conn->connect_error ) {
	die("Connection fialed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "insert into prispevky (autor, obsah) values (1, 'toto je obsah')";
if ($conn->query($sql) === TRUE) {
	echo "New record created succcessfully";
} else {
	echo "Error: " . $sql . "</br>" . $conn->error;
}
$conn->close();

?>