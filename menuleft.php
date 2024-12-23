<?php
include_once "functions.php";
$kq = getAllTheLoai();
?>

<div class="col-md-3 ">
    <ul class="list-group" id="menu">
        <li href="#" class="list-group-item menu1 active">
            Danh sách sinh viên
        </li>
        <?php while ($rowtl = mysqli_fetch_assoc($kq)) { ?>
            <li href="#" class="list-group-item menu1">
                <?php if(countTheLoai($rowtl["id"]) > 0){
                    echo $rowtl["Ten"];
                }else{
                    echo "";
                } ?>
            </li>
            <ul>
                <?php
                $kqlt = getLoaiTinByTheLoai($rowtl["id"]);
                while ($rowlt = mysqli_fetch_assoc($kqlt)) {
                    ?>
                    <li class="list-group-item">
                        <a href="loaitin.html"><?php echo $rowlt["Ten"]; ?></a>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </ul>
</div>