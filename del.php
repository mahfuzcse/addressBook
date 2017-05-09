<?php
include "db.php";
$id = $_GET['id'];

$del = mysqli_query($conn, "DELETE FROM users WHERE id = '$id'");

header("location:record.php");

?>