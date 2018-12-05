<?php 
$dbhost = 'localhost';
$username = 'root';
$password = '';
$dbname = 'portfolio';
$conn = new mysqli($dbhost, $username, $password, $dbname);

if ($conn->connect_error) {
        die('Connection fialed: ');
}
echo 'Connected successfully';
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

<?php

$sql = "SELECT id, autor, obsah FROM prispevky ORDER BY id DESC";
$result = $conn->query($sql);
$iterator = count($result->num_rows);
if ($result->num_rows > 0) {
//function rekurzia(){
//if ($row[){
//        echo "id: " . $i["id"]. " - autor: " . $i["autor"]. " " . $i["obsah"]. "<br>";
//    }else{
//	$row = $result->fetch_assoc();
//}

    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - autor: " . $row["autor"]. " " . $row["obsah"]. "<br>";
//	  pole
    }
} else {
    echo "0 results";
}
$conn->close();


?>








