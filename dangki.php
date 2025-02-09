<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Đăng ký</title>

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
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
				  	<div class="panel-heading">Đăng ký tài khoản</div>
				  	<div class="panel-body">
				    	<form>
				    		<div>
				    			<label>Họ tên</label>
							  	<input type="text" class="form-control" placeholder="Username" id="userName" name="name" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" id="email" name="email" aria-describedby="basic-addon1"
							  	>
							</div>
							<br>	
							<div>
				    			<label>Nhập mật khẩu</label>
							  	<input type="password" class="form-control" id="password" name="password" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Nhập lại mật khẩu</label>
							  	<input type="password" class="form-control" id="passwordAgain" name="passwordAgain" aria-describedby="basic-addon1">
							</div>
							<br>
                            <div id="kq" style="color: red"></div>
							<button id="btnDangKy" type="button" class="btn btn-success">Đăng ký</button>

				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

    <script>
        $(document).ready(function(){
            $("#btnDangKy").click(function(){
                var username = $("#userName").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var passwordAgain = $("#passwordAgain").val();
                if(password != passwordAgain){
                    $("#kq").html("Mật khẩu không trùng khớp");
                }else{
                    $.post("xulydangky.php", {name: username, email: email, password: password}, function(data){
                        if(data){
                            window.location.href = "dangnhap.php";
                            window.close();
                        }else{
                            $("#kq").html("Đăng ký thất bại");
                        }
                    })
                }
            })
        })
    </script>

</body>

</html>
