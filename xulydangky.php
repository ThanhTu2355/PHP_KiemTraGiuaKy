<?php
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordMD5 = md5($password);

include_once "functions.php";
$user = getUserByEmail($email);

if (mysqli_fetch_assoc($user) > 0) {
    echo false;
} else {
    $kq = addUser($name, $email, $passwordMD5);
    echo true;
}
?>