<?php
$dbhost = "localhost";
$username = "root";
$password = "Ephesus clearness marshes breast";
$dbname = "portfolio";
$conn = new mysqli($dbhost, $username, $password, $dbname);
$sql = "SELECT id, autor, obsah FROM prispevky";
$result = $conn->query($sql);
function rekurzia(){
 $row = $result->fetch_assoc();
 if ($row == 0) {
  return;
  }else{
   echo "id: " . $row["id"]. " - autor: " . $row["autor"]. " " . $row["obsah"]. "<br>";
   rekurzia();
  }
}
rekurzia();

$conn->close();
?>
