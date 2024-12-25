<?php
include_once "functions.php";
$idLT = $_GET["idLT"];
$tinsTheoLoaiTin = getTinByLoaiTin($idLT);
$p = isset($_GET["p"]) ? $_GET["p"] : 1;

$ts1t = 10;
$tongSoTin = mysqli_num_rows($tinsTheoLoaiTin);
$tongSoTrang = ceil($tongSoTin / $ts1t);
$from = ($p - 1) * $ts1t;
$tinsTheoLoaiTinPhantrang = getTinByLoaiTinPhanTrang($idLT, $from, $ts1t);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Tin theo loại </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php include_once "nav.php"; ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <?php include_once "menuleft.php"; ?>


            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Panel heading without title</b></h4>
                    </div>
                    <?php
                    while ($rowTin = mysqli_fetch_assoc($tinsTheoLoaiTinPhantrang)) {
                        ?>
                        <div class="row-item row">
                            <div class="col-md-3">

                                <a href="detail.html">
                                    <br>
                                    <img width="200px" height="200px" class="img-responsive"
                                        src="img/tintuc/<?php echo $rowTin["Hinh"]; ?>" alt="">
                                </a>
                            </div>

                            <div class="col-md-9">
                                <h3><?php echo $rowTin["TieuDe"]; ?></h3>
                                <p><?php echo $rowTin["TomTat"]; ?></p>
                                <a class="btn btn-primary" href="detail.html"> Xem thêm <span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                            <div class="break"></div>
                        </div>
                    <?php } ?>


                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination">
                                <li>
                                    <a href="loaitin.php?idLT=<?php echo $idLT; ?>&p=1">&laquo;</a>
                                </li>
                                <?php
                                for ($i = 1; $i <= $tongSoTrang; $i++) {
                                    $active = $p == $i ? "active" : "";
                                    ?>
                                    <li class="<?php echo $active; ?>">
                                        <a
                                            href="loaitin.php?idLT=<?php echo $idLT; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php } ?>
                                <li>
                                    <a
                                        href="loaitin.php?idLT=<?php echo $idLT; ?>&p=<?php echo $tongSoTrang; ?>">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
            </div>

        </div>

    </div>
    <!-- end Page Content -->

    <?php include_once "footer.php"; ?>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

</body>

</html>