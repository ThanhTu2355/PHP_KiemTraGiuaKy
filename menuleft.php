<?php
include_once "functions.php";
$kq = getAllTheLoai();
?>

<div class="col-md-3 ">
    <ul class="list-group" id="menu">
        <li href="#" class="list-group-item menu1 active">
            Danh sách thể loại
        </li>
        <?php while ($rowtl = mysqli_fetch_assoc($kq)) {
            $loaiTinTheoTheLoai = getLoaiTinByTheLoai($rowtl["id"]);
            if (mysqli_num_rows($loaiTinTheoTheLoai) > 0) {
                ?>
                <li href="#" class="list-group-item menu1">
                    <?php echo $rowtl["Ten"]; ?>
                </li>
                <ul>
                    <?php
                    while ($rowlt = mysqli_fetch_assoc($loaiTinTheoTheLoai)) {
                        ?>
                        <li class="list-group-item">
                            <a href="loaitin.php?idLT=<?php echo $rowlt["id"]; ?>"><?php echo $rowlt["Ten"]; ?></a>
                        </li>
                    <?php }
            } ?>
            </ul>
        <?php } ?>
    </ul>
</div>