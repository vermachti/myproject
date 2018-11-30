<?php
echo $_POST["fileToUpload"];
$string = $_POST["fileToUpload"];
$fp = fopen ("test.txt", "a+"); 
fwrite ($fp, $_POST["fileToUpload"] . "\r\n"); 
fclose ($fp); 

?>