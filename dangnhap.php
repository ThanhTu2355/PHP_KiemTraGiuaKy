<?php
if(isset(($_POST["btnDangNhap"]))){
    session_start();
    include_once "functions.php";
    $email = $_POST["email"];
    $passwordMD5 = md5($_POST["password"]);
    
    $checkUser = checkUser($email, $passwordMD5);
    if(mysqli_num_rows($checkUser) > 0){
        $rowUser = mysqli_fetch_array($checkUser);
        $_SESSION["name"] = $rowUser["name"];
        header("location:index.php"); // chuyển hướng về trang chủ trong php
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Đăng nhập</title>

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
    <?php include 'nav.php'; ?>

    <!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
    		<div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default">
				  	<div class="panel-heading">Đăng nhập</div>
				  	<div class="panel-body">
				    	<form action="" method="POST">
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" 
							  	>
							</div>
							<br>	
							<div>
				    			<label>Mật khẩu</label>
							  	<input type="password" class="form-control" placeholder="Password" name="password">
							</div>
							<br>
							<button type="submit" class="btn btn-success" name="btnDangNhap">Đăng nhập</button>
				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

</body>

</html>
