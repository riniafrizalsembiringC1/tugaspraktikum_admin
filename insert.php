<?php
include('dbconnect.php');

$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$paswd = password_hash($_POST['paswd'], PASSWORD_DEFAULT);

$query = "INSERT INTO users (username, nama, email, paswd) VALUES ('$username', '$nama', '$email', '$paswd')";
$k->query($query);

header('Location: index.php');
?>
