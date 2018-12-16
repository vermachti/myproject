<?php

/**
 * Nazov 
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
$username="root";
$password="Ephesus clearness marshes breast";
$dbname="portfolio";
$conn = new mysqli($dbhost, $username, $password, $dbname);
$sql = "SELECT id, autor, obsah FROM prispevky";
$result = $conn->query($sql);

/**
 * Adresa databazoveho servru
 * 
 * PHP version 7.2.5
 * 
 * @cathegory PHP
 * @package   PHP_CodeSniffer
 * @author    Michal Fedor <michal.rodef@gmail.com>
 * @licence
 * @return    void
 */
function rekurzia()
{


}




?>
