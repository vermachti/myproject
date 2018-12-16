<?php 
$soubor = "README.md"; 

header("Content-Description: File Transfer"); 
header("Content-Type: application/force-download"); 
header("Content-Disposition: attachment; filename=\"$soubor\""); 

readfile ($soubor); 
?>