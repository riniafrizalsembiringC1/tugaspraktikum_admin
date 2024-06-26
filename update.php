<?php
include('dbconnect.php');

$id = $_POST['id'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];

if(!empty($_POST['paswd'])) {
    $paswd = password_hash($_POST['paswd'], PASSWORD_DEFAULT);
    $query = "UPDATE users SET username='$username', nama='$nama', email='$email', paswd='$paswd' WHERE id='$id'";
} else {
    $query = "UPDATE users SET username='$username', nama='$nama', email='$email' WHERE id='$id'";
}

$k->query($query);

header('Location: index.php');
?>
