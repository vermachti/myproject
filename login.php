<?php
$dbhost = 'localhost';
$username = 'root';
$password = 'Ephesus clearness marshes breast';
$dbname = 'portfolio';
$conn = new mysqli($dbhost, $username, $password, $dbname);


$sql = "insert into prispevky (autor, obsah) values (1, '" . $_POST["fileToUpload"] . "')";
$conn->query($sql);
$conn->close();
require("index.php");//namiesto echa to reloadne originalnu stranku

?>