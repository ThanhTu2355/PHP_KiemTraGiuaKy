<?php
//hàm kết nối
function connect(){
    return mysqli_connect("localhost", "root", "", "tintuc_c23s");
}
//hàm ngắt kết nối
function disConnect($conn){
    return mysqli_close($conn);
}
//hàm lấy các thông tin trên slider
function getAllSlides(){
    $conn = connect();
    $sql = "SELECT * FROM slide";
    $result = mysqli_query($conn, $sql);
    disConnect($conn);
    return $result;
}
//hàm lấy danh sách các thể loại
function getAllTheLoai(){
    $conn = connect();
    $sql = "SELECT * FROM theloai";
    $result = mysqli_query($conn, $sql);
    disConnect($conn);
    return $result;
}

//hàm lấy danh sách các loại tin theo thể loại
function getLoaiTinByTheLoai($idTL){
    $conn = connect();
    $sql = "SELECT * FROM loaitin WHERE idTheLoai = $idTL";
    $result = mysqli_query($conn, $sql);
    disConnect($conn);
    return $result;
}

//hàm đếm loại tin by the loại
function countTheLoai() {
    $conn = connect();
    $sql = "SELECT idTheLoai, COUNT(id) AS soLuong FROM loaitin GROUP BY idTheLoai";
    $result = mysqli_query($conn, $sql);
    disConnect($conn);
    return $result;
}


?>