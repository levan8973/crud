<?php

require_once("db.php");

$user_id = $_POST['delid'];

$sql = "DELETE FROM users WHERE id=".$user_id;

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('location: /');

?>
