<?php
include_once "functions.php";
?>

<div class="container">

    <!-- slider -->
    <div class="row carousel-holder">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
                    $kq1 = getAllSlides();
                    while ($row1 = mysqli_fetch_assoc($kq1)) {
                        $active = $row1["id"] == 1 ? "active" : "";
                        ?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $row1["id"] - 1; ?>"
                            class="<?php echo $active; ?>">
                        </li>
                    <?php } ?>
                </ol>
                <div class="carousel-inner">
                    <?php
                    $kq2 = getAllSlides();
                    while ($row2 = mysqli_fetch_assoc($kq2)) {
                        $active = $row2["id"] == 1 ? "active" : "";
                        ?>
                        <div class="item <?php echo $active; ?>">
                            <img class="slide-image" src="img/slide/<?php echo $row2["Hinh"] ?>" alt="">
                        </div>
                    <?php } ?>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- end slide -->

    <div class="space20"></div>


    <div class="row main-left">
        <?php include_once "menuleft.php"; ?>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337AB7; color:white;">
                    <h2 style="margin-top:0px; margin-bottom:0px;"> Tin Tức</h2>
                </div>

                <div class="panel-body">
                    <!-- item -->
                    <div class="row-item row">
                        <h3>
                            <a href="#">Category</a> |
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                        </h3>
                        <div class="col-md-12 border-right">
                            <div class="col-md-3">
                                <a href="chitiet.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>

                            <div class="col-md-9">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima,
                                    inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-primary" href="chitiet.html">View Project <span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>

                        </div>

                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                    <!-- item -->
                    <div class="row-item row">
                        <h3>
                            <a href="#">Category</a> |
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                        </h3>
                        <div class="col-md-12 border-right">
                            <div class="col-md-3">
                                <a href="chitiet.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>

                            <div class="col-md-9">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima,
                                    inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-primary" href="chitiet.html">View Project <span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>

                        </div>

                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                    <!-- item -->
                    <div class="row-item row">
                        <h3>
                            <a href="#">Category</a> |
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                        </h3>
                        <div class="col-md-12 border-right">
                            <div class="col-md-3">
                                <a href="chitiet.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>

                            <div class="col-md-9">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima,
                                    inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-primary" href="chitiet.html">View Project <span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>

                        </div>

                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                    <!-- item -->
                    <div class="row-item row">
                        <h3>
                            <a href="#">Category</a> |
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                        </h3>
                        <div class="col-md-12 border-right">
                            <div class="col-md-3">
                                <a href="chitiet.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>

                            <div class="col-md-9">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima,
                                    inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-primary" href="chitiet.html">View Project <span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>

                        </div>

                        <div class="break"></div>
                    </div>
                    <!-- end item --><!-- item -->
                    <div class="row-item row">
                        <h3>
                            <a href="#">Category</a> |
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                        </h3>
                        <div class="col-md-12 border-right">
                            <div class="col-md-3">
                                <a href="chitiet.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>

                            <div class="col-md-9">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima,
                                    inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-primary" href="chitiet.html">View Project <span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>

                        </div>

                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                    <!-- item -->
                    <div class="row-item row">
                        <h3>
                            <a href="#">Category</a> |
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                            <small><a href="loaitin.html"><i>subtitle</i></a>/</small>
                        </h3>
                        <div class="col-md-12 border-right">
                            <div class="col-md-3">
                                <a href="chitiet.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>

                            <div class="col-md-9">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima,
                                    inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-primary" href="chitiet.html">View Project <span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>

                        </div>

                        <div class="break"></div>
                    </div>
                    <!-- end item -->

                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>