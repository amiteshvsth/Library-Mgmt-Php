<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Online Library Management System | User Dash Board</title>
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
  <style>
    body {
      background-image: url("assets/img/bg7.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      overflow-x: hidden;
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
</head>

<body>
  <!------MENU SECTION START-->
  <?php include('includes/header.php');?>
  <!-- MENU SECTION END-->
  <div class="content-wrapper">
    <div class="container">
      <div class="row pad-botm">
        <div class="col-md-12 text-box" style="font-family: Garamond, serif;">
          <h1 class="header-line" >User DASHBOARD</h1>
        </div>
      </div>
      <div class="row">
        <a href="listed-books.php">
          <div class="col-md-4 col-sm-4 col-xs-6">
            <div class="alert alert-success  text-center">
              <i class="fa fa-book" style="font-size: 5em";></i>
              <?php 
$sql ="SELECT id from tblbooks ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$listdbooks=$query->rowCount();
?>
            
              <h4>Books Listed</h4>
            </div>
          </div>
        </a>

        <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="alert alert-warning  text-center">
            <i class="fa fa-recycle"style="font-size: 5em";></i>
            <?php 
$rsts=0;
 $sid=$_SESSION['stdid'];
$sql2 ="SELECT id from tblissuedbookdetails where StudentID=:sid and (RetrunStatus=:rsts || RetrunStatus is null || RetrunStatus='')";
$query2 = $dbh -> prepare($sql2);
$query2->bindParam(':sid',$sid,PDO::PARAM_STR);
$query2->bindParam(':rsts',$rsts,PDO::PARAM_STR);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$returnedbooks=$query2->rowCount();
?>

            <h4>Books Not Returned Yet</h4>
          </div>
        </div>

        <a href="issued-books.php">
          <div class="col-md-4 col-sm-4 col-xs-6">
            <div class="alert alert-success  text-center">
              <i class="fa fa-book "style="font-size: 5em";></i>
              
             <h4> Issued Books</h4>
            </div>
          </div>
        </a>





      </div>
    </div>
  </div>
  <div class="container">                 
  <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li><a href="issued-books.php">Next</a></li>
  </ul>
</div>
  <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('includes/footer.php');?>
  <!-- FOOTER SECTION END-->
  <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
  <!-- CORE JQUERY  -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS  -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- CUSTOM SCRIPTS  -->
  <script src="assets/js/custom.js"></script>
</body>

</html>
<?php } ?>