<?php
include_once "functions.php";
$idTin = $_GET["idTin"];
$rowTin = getTinById($idTin);
$idLT = $rowTin["idLoaiTin"];
$tinLienQuan = getFourTinLienQuan($idLT, $idTin);
$rowLoaiTin = getIdTheLoaiByIdLoaiTin($idLT);
$idTL = $rowLoaiTin["idTheLoai"];
$tinNoiBat = getFourTinNoiBatByTheLoai($idLT, $idTin);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Chi tiết tin</title>

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

    <?php include_once "nav.php"; ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo $rowTin["TieuDe"]; ?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Thanh Tú</a>
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" src="img/tintuc/<?php echo $rowTin["Hinh"]; ?>" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>
                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $rowTin["NoiDung"]; ?></p>
                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                        commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                        nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                        commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                        nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <div class="panel-body">

                        <!-- item -->
                         <?php while ($rowTinLienQuan = mysqli_fetch_assoc($tinLienQuan)) { ?>:
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="chitiet.php?idTin=<?php echo $rowTinLienQuan["id"]; ?>">
                                    <img class="img-responsive" src="img/tintuc/<?php echo $rowTinLienQuan['Hinh']; ?>" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="chitiet.php?idTin=<?php echo $rowTinLienQuan["id"]; ?>"><b><?php echo $rowTinLienQuan["TieuDe"]; ?></b></a>
                            </div>
                            <p><?php echo $rowTinLienQuan["NoiDung"]; ?></p>
                            <div class="break"></div>
                        </div>
                        <?php } ?>
                        <!-- end item -->
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <div class="panel-body">

                        <!-- item -->
                        <?php while ($rowTinNoiBat = mysqli_fetch_assoc($tinNoiBat)) { ?>:
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="chitiet.php?idTin=<?php echo $rowTinNoiBat["id"]; ?>">
                                    <img class="img-responsive" src="img/tintuc/<?php echo $rowTinNoiBat['Hinh']; ?>" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="chitiet.php?idTin=<?php echo $rowTinNoiBat["id"]; ?>"><b><?php echo $rowTinNoiBat["TieuDe"]; ?></b></a>
                            </div>
                            <p><?php echo $rowTinNoiBat["NoiDung"]; ?></p>
                            <div class="break"></div>
                        </div>
                        <?php } ?>
                        <!-- end item -->
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->
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