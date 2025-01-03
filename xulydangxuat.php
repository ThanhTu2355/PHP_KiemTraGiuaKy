<?php
session_start();
//Đăng xuất => xóa thông tin seesion
if (isset($_SESSION["name"])){
    //xoá seesion
    unset($_SESSION["name"]);
    header("location: index.php");
}
?>