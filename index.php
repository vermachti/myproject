<?php 
/**
 * Formular na pridavanie poloziek do databazy
 * 
 * PHP version 7.2.5
 * 
 * @category PHP
 * @package  PHP_CodeSniffer
 * @author   Michal Fedor <michal.rodef@gmail.com>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 */
$dbhost = 'localhost';
$username = 'root';
$heslo = fopen("password.txt", "r");
$password = fgets($heslo);
fclose($heslo);
$dbname = 'portfolio';
$conn = new mysqli($dbhost, $username, $password, $dbname);

if ($conn->connect_error) {
        die('Connection fialed: ' . $conn->connect_error);
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
//$iterator = count($result->num_rows);
if ($result->num_rows > 0) {
    //function rekurzia(){
    //if ($row[){
    // echo "id: " . $i["id"]. " - autor: " . $i["autor"]. " " . $i["obsah"]. "<br>";
    //  }else{
    //$row = $result->fetch_assoc();
    //}

    while ($row = $result->fetch_assoc()) {
        echo "id: ".$row["id"]. " - autor: ".$row["autor"]." ".$row["obsah"]."<br>";
        //pole
    }
} else {
    echo "0 results";

}
$row = $result->fetch_assoc();
$conn->close();
?>
