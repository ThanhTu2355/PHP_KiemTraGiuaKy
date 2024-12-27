<?php
$dangNhap = true;
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Tin Tức</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="gioithieu.html">Giới thiệu</a>
                </li>
                <li>
                    <a href="lienhe.html">Liên hệ</a>
                </li>
            </ul>

            <form class="navbar-form navbar-left" role="search" action="timkiem.php" method="POST">
                <div class="form-group">
                    <input type="text" name="txtTim" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Tìm</button>
            </form>

            <ul class="nav navbar-nav pull-right">
                <?php if (!$dangNhap) { ?>
                    <li>
                        <a href="dangki.html">Đăng ký</a>
                    </li>
                    <li>
                        <a href="dangnhap.html">Đăng nhập</a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a>
                            <span class="glyphicon glyphicon-user"></span>
                            Thanh Tú
                        </a>
                    </li>

                    <li>
                        <a href="#">Đăng xuất</a>
                    </li>
                <?php } ?>
            </ul>
        </div>



        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>