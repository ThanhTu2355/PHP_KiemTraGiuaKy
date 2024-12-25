<?php
//hàm kết nối
function connect()
{
    return mysqli_connect("localhost", "root", "", "tintuc_c23s");
}
//hàm ngắt kết nối
function disConnect($conn)
{
    return mysqli_close($conn);
}
//hàm lấy các thông tin trên slider
function getAllSlides()
{
    $conn = connect();
    $sql = "SELECT * FROM slide";
    $result = mysqli_query($conn, $sql);
    disConnect($conn);
    return $result;
}
//hàm lấy danh sách các thể loại
function getAllTheLoai()
{
    $conn = connect();
    $sql = "SELECT * FROM theloai";
    $result = mysqli_query($conn, $sql);
    disConnect($conn);
    return $result;
}

//hàm lấy danh sách các loại tin theo thể loại
function getLoaiTinByTheLoai($idTL)
{
    $conn = connect();
    $sql = "SELECT * FROM loaitin WHERE idTheLoai = $idTL";
    $result = mysqli_query($conn, $sql);
    disConnect($conn);
    return $result;
}

//hàm danh sách các tin theo loại tin truyền vào
function getTinByLoaiTin($idLT)
{
    $conn = connect();
    $sql = "SELECT * FROM tintuc WHERE idLoaiTin = $idLT";
    $result = mysqli_query($conn, $sql);
    disConnect($conn);
    return $result;
}

//hàm danh sách các tin theo loại tin truyền vào
function getTinByLoaiTinPhanTrang($idLT, $from, $st1t)
{
    $conn = connect();
    $sql = "SELECT * FROM tintuc WHERE idLoaiTin = $idLT LIMIT $from, $st1t";
    $result = mysqli_query($conn, $sql);
    disConnect($conn);
    return $result;
}

//lấy một tin nổi bật theo thể loại truyền vào
function getTinNoiBatByTheLoai($idTL)
{
    $conn = connect();
    $sql = "SELECT tintuc.* from loaitin INNER JOIN tintuc ON loaitin.id = tintuc.idLoaiTin
            WHERE NoiBat = 1 AND idTheLoai = $idTL LIMIT 0,1";
    $result = mysqli_query($conn, $sql);
    disConnect($conn);
    return $result;
}

?>