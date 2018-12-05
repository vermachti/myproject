<?php 
$dbhost = 'localhost';
$username = 'root';
$password = 'Ephesus clearness marshes breast';
$dbname = 'portfolio';
$conn = new mysqli($dbhost, $username, $password, $dbname);

if ($conn->connect_error) {
        die('Connection fialed: ');
}
echo 'Connected successfully';


$sql = "SELECT id, autor, obsah FROM prispevky";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["autor"]. " " . $row["obsah"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>
<html>
<b>HOME</b>
</br>
<a href="stiahni.php"><i>stiahni</i></a>
</br>
<form method="POST" ENCTYPE="multipart/form-data" action="login.php">
<input type="input" name="fileToUpload" id="fileToUpload">
</br>
<input type="submit" name="submit" value="Upload File"> 
</form>

</html>








