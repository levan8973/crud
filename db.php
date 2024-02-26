<?php
$host = 'localhost';
$login = 'root';
$pass = 'root';
$db = 'crud';

$conn = mysqli_connect($host,$login,$pass,$db);

if($conn->connect_error){
    die("произошла ошибка ".$conn->connect_error);

}
?>