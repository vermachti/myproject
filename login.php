<?php
/**
 * Formular na pridavanie poloziek do databazy
 * 
 * PHP version 7.2.5
 * 
 * @category PHP_Function
 * @package  Form_Action
 * @author   Michal Fedor <michal.rodef@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.en.html GPL
 * @link     https://github.com/vermachti/vermachti.github.io/blob/release/login.php
 */
$dbhost = 'localhost';
$username = 'root';
$heslo = fopen("password.txt", "r");
$password = fgets($heslo);
fclose($heslo);
$dbname = 'portfolio';
$conn = new mysqli($dbhost, $username, $password, $dbname);


$sql = "insert into prispevky (autor,obsah)values(1, '".$_POST["fileToUpload"]. "')";
$conn->query($sql);
$conn->close();
require "index.php";//namiesto echa to reloadne originalnu stranku

?>