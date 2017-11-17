<?php 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // The request is using the POST method
        if ($_POST['username'] == "user" && $_POST['password'] == "password"){
            header("Location: dashboard.php");
        }
        else{
            $error = "Username atau password salah";
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

    <title>e-Learning Pemodelan Basis Data</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/logo-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Content -->

        <div class="row ayam">
            <div class="col-lg-7 gbr">
                    <div class="logo"></div>
                    <div class="tulisan">
                        <p class="judul">Without Data, You're  just another person </p>
                        <p class="motion">With an Opinion</p>
                        <p class="tahun"> - W. Edwards Deming </p>
                        <div class="lbr_grs grs">

                        </div>
                    </div>
            </div>
            <div class="col-lg-5 formlogin">
                <div class="row">
                    <div class="col-lg-8 formulir">
                        <p class="signin">Sign In</p>
                        <div class="grs_sign"></div>

                        <form method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password"  placeholder="Password">
                            </div>
                            <p class="text-center"><?php if (!empty($error)) echo $error; ?></p>
                            <button type="submit" class="btn btn-primary btn-lg btn-block tombol-login">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.container -->


<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>