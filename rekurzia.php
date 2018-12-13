<?php
/**
 * Adresa databazoveho servru
 * 
 * PHP version 7.2.5
 * 
 * @category PHP
 * @package  PHP_CodeSniffer
 * @author   Michal Fedor <michal.rodef@gmail.com>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 */
$dbhost = "localhost";
$username = "root";
$password = "ww";
$dbname = "portfolio";
$conn = new mysqli($dbhost, $username, $password, $dbname);
$sql = "SELECT id, autor, obsah FROM prispevky";
$result = $conn->query($sql);
/**
 * Rekurzivne fetchovanie databazy
 * 
 * PHP version 7.2.5
 * 
 * @category PHP
 * @package  PHP_CodeSniffer
 * @author   Michal Fedor <michal.rodef@gmail.com>
 * @return   void
 */
function rekurzia()
{
    $row = $result->fetch_assoc();
    if ($row == 0) {
        return;
    } else {
        echo "id: " . $row["id"]. " - autor: " . $row["autor"]. " " . $row["obsah"]. "<br>";
        rekurzia();
    }
}
rekurzia();

$conn->close();
?>

