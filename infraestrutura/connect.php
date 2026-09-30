<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'crud_brinquedos';
$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Error connecting failed: " . mysqli_connect_error());

}
 ?>
