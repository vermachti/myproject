<?php
$dbhost = 'localhost';
$username = 'root';
<<<<<<< HEAD
$password = 'ww';
=======
$heslo = fopen("password.txt", "r");
$password = fgets($heslo);
fclose($heslo);
>>>>>>> 76aca295e3b6357dc5c0b5e704b89139dae285e6
$dbname = 'portfolio';
$conn = new mysqli($dbhost, $username, $password, $dbname);


$sql = "insert into prispevky (autor, obsah) values (1, '" . $_POST["fileToUpload"] . "')";
$conn->query($sql);
$conn->close();
require("index.php");//namiesto echa to reloadne originalnu stranku

?>