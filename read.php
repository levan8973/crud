<?php

require_once("db.php");



$sql = "SELECT * FROM `users`";
$result= $conn->query($sql);

if($result->num_rows>0===TRUE){
    while($row=$result->fetch_assoc()){
        echo "id: ".$row['id']." name ".$row['name']." email ".$row['email'];
    }
} else {
    echo "0 results";
}


?>
