<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:username and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'admin/dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<!-- ICON LIBRARY -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    body{
     background-image: url("assets/img/1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    overflow-x:hidden;
    }
    .text-box h1{
  font-size: 50px;
    color: transparent;
    -webkit-text-stroke:1px #fff ;
    background: url("assets/img/back.png");
    -webkit-background-clip: text;
    background-position: 0 0;
    animation: back 20s linear infinite;
}
@keyframes back{
    100%{
        background-position: 2000px 0; 
    }
}
</style>
<body  >
  
    <!------MENU SECTION START-->
    <?php include('includes/header.php');?>
    <!-- MENU SECTION END-->

    <div class="content-wrapper" >
        <div class="container"  >
            <div class="row pad-botm" >
                <div class="col-md-12 text-box" >
                    <h1 class="header-line" style="font-family: Garamond, serif;" >ADMIN LOGIN FORM</h1>
                </div>
            </div>

            <!--LOGIN PANEL START-->
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                          ADMIN LOGIN FORM
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post">

                                <div class="input-group" >
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input class="form-control" id="email" placeholder="Email" type="text" name="username" autocomplete="off"
                                        required />
                                </div>
                                <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input class="form-control" id="password" placeholder="Password" type="password" name="password" autocomplete="off"
                                        required />
                                </div>

                                <button type="submit" name="login" class="btn btn-info"><span class="glyphicon glyphicon-log-in"></span> LOGIN </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!---LOGIN PANEL END-->
        </div>
    </div>
    <div class="container">                 
  <ul class="pager">
    <li><a href="signup.php">Previous</a></li>
    <li><a href="team2.php">Next</a></li>
  </ul>
</div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php');?>
    <!-- FOOTER SECTION END-->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
    </script>
</body>

</html>