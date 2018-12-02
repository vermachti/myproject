<?php
//echo $_POST["fileToUpload"]; //namiesto toho requirenem originalnu stranku
$string = $_POST["fileToUpload"];
$fp = fopen ("test.txt", "a+"); 
fwrite ($fp, $_POST["fileToUpload"] . "\r\n"."</br>"); 
fclose ($fp); 
require("index.php");//namiesto echa to reloadne originalnu stranku
?>