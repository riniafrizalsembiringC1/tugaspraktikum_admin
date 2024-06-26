<?php
include('dbconnect.php');

$id = $_GET['id'];
$query = "DELETE FROM users WHERE id='$id'";
$k->query($query);

header('Location: index.php');
?>
