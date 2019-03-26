<?php

/**
 * Adresa databazoveho servru
 * 
 * PHP version 7.2.5
 * 
 * @category PHP_Function
 * @package  Form_Action
 * @author   Michal Fedor <michal.rodef@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.en.html GPL
 * @link     https://github.com/vermachti/vermachti.github.io/blob/release/login.php
 */
$dbhost = "localhost";
$username = "root";
$heslo = fopen("password.txt", "r");
$password = fgets($heslo);
fclose($heslo);
$dbname = "portfolio";
$conn = new mysqli($dbhost, $username, $password, $dbname);
$sql = "SELECT id, autor, obsah FROM prispevky";
$result = $conn->query($sql);
/**
 * Rekurzivne fetchovanie databazy
 * 
 * PHP version 7.2.5
 * 
 * @category PHP_Function
 * @package  Form_Action
 * @author   Michal Fedor <michal.rodef@gmail.com>
 * @return   void
 */
function rekurzia()
{
    $row = $result->fetch_assoc();
    if ($row == 0) {
            return;
    } else {
        echo "id: ".$row["id"]. " - autor: ".$row["autor"]." ".$row["obsah"]."<br>";
        rekurzia();
    }
}
     rekurzia();
     
     
     
     $conn->close();
     
?>
