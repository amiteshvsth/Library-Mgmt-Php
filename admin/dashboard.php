<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
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
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Online Library Management System | Admin Dash Board</title>
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
    body{
     background-image: url("assets/img/bg3.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    overflow-x:hidden;
     font-weight:bold;
    }
    .hover-line::after{
    content: '';
    display: block;
    width:0%;
    height:2px;
    background-color:yellow;
    transition:width .3;
}
.hover-line:hover::after{
    width:100%;
    transition: width .6s;
}
.text-box h1{
  font-size: 50px;
    color: transparent;
    -webkit-text-stroke:1px black ;
    background: url("assets/img/mam.jpeg");
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
                <h1 class="header-line"style="font-weight:bold";>ADMIN DASHBOARD</h1>
                
                            </div>

        </div>
             
             <div class="row">
<a href="manage-books.php">
 <div class="col-md-3 col-sm-3 col-xs-6">
 <div class="alert alert-success  text-center">
 <i class="fa fa-book fa-5x"></i>
<?php 
$sql ="SELECT id from tblbooks ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$listdbooks=$query->rowCount();
?>
<h3 style="font-weight:bold";><?php echo htmlentities($listdbooks);?></h3>
Books Listed
</div></div></a>

            
       
             <a href="manage-issued-books.php">
               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-warning  text-center">
                            <i class="fa fa-recycle fa-5x"></i>
<?php 
$sql2 ="SELECT id from tblissuedbookdetails where (RetrunStatus='' || RetrunStatus is null)";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$returnedbooks=$query2->rowCount();
?>

                            <h3 style="font-weight:bold";><?php echo htmlentities($returnedbooks);?></h3>
                          Books Not Returned Yet
                        </div>
                    </div>
                </a>

  <a href="reg-students.php">
               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-danger text-center">
                            <i class="fa fa-users fa-5x"></i>
                            <?php 
$sql3 ="SELECT id from tblstudents ";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$regstds=$query3->rowCount();
?>
                            <h3 style="font-weight:bold";><?php echo htmlentities($regstds);?></h3>
                           Registered Users
                        </div>
                    </div></a>


  <a href="manage-authors.php">
 <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success  text-center">
                            <i class="fa fa-user fa-5x"></i>
<?php 
$sq4 ="SELECT id from tblauthors ";
$query4 = $dbh -> prepare($sq4);
$query4->execute();
$results4=$query4->fetchAll(PDO::FETCH_OBJ);
$listdathrs=$query4->rowCount();
?>
<h3 style="font-weight:bold";><?php echo htmlentities($listdathrs);?></h3>
Authors Listed
</div>
</div></a>
</div>



 <div class="row">



  <a href="manage-categories.php">            
<div class="col-md-3 col-sm-3 rscol-xs-6">
<div class="alert alert-info  text-center">
<i class="fa fa-file-archive-o fa-5x"></i>
<?php 
$sql5 ="SELECT id from tblcategory ";
$query5 = $dbh -> prepare($sql5);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$listdcats=$query5->rowCount();
?>

                            <h3 style="font-weight:bold";><?php echo htmlentities($listdcats);?> </h3>
                           Listed Categories
                        </div>
                    </div></a>
             

        </div>             
            
    </div>
    </div>
    <div class="container">                 
  <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li><a href="add-category.php">Next</a></li>
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
