<?php 
$dbhost = 'localhost';
$username = 'root';
$password = 'Ephesus clearness marshes breast';
$conn = mysqli_connect($dbhost, $username, $password);

if (!$conn) {
        die('Connection fialed: ');
}
echo 'Connected successfull';


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
$sql = "select * from prispevky";
$prispevok = $conn->query($sql);
$conn->close();
echo $prispevok[2];
?>
