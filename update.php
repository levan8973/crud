<?php

require_once("db.php");



$newName = $_POST['newname'];
$id = $_POST['id'];

$sql = "UPDATE users SET name='".$newName."' WHERE id=".$id;

if($conn->query($sql)===TRUE){
    echo "Данные обновлены";
}else{
    echo "данные обновить не удалось ";
}

header('location: /');

?>