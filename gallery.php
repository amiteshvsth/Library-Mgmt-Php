<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['login']!=''){
$_SESSION['login']='';
}
if(isset($_POST['login']))
{
$email=$_POST['emailid'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password,StudentId,Status FROM tblstudents WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
 foreach ($results as $result) {
 $_SESSION['stdid']=$result->StudentId;
if($result->Status==1)
{
$_SESSION['login']=$_POST['emailid'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else {
echo "<script>alert('Your Account Has been blocked .Please contact admin');</script>";

}
}
} 
else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

<style>

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/

.section-title {
  text-align: center;
  padding-bottom: 30px;
}
.section-title h2 {
  margin: 15px 0 0 0;
  font-size: 32px;
  font-weight: 700;
  color: #5f5950;
}
.section-title h2 span {
  color: #ffb03b;
}
.section-title p {
  margin: 15px auto 0 auto;
  font-weight: 300;
}

/*--------------------------------------------------------------
# Gallery
--------------------------------------------------------------*/

.gallery .gallery-item {
  overflow: hidden;
  border-right: 3px solid #fff;
  border-bottom: 3px solid #fff;
}
.gallery .gallery-item img {
  transition: all ease-in-out 0.4s;
}
.gallery .gallery-item:hover img {
  transform: scale(1.1);
}
.icon{
      margin-top: 11px;
  }
.hover-line::after{
    content: '';
    display: block;
    width:0%;
    height:2px;
    background-color:black;
    transition:width .3;
}
.hover-line:hover::after{
    width:100%;
    transition: width .6s;
}
body {
        font-weight: 500;
    }
</style>
</head>
<body>


    <?php if($_SESSION['login'])
        {
        ?>
    <div class="right-div">
        <a href="logout.php" class="btn btn-danger pull-right">LOG ME OUT</a>
    </div>

<?php }?>
       
<!-- LOGO HEADER END-->
<?php if($_SESSION['login'])
{
?>
<section class="menu-section">

    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="dashboard.php" class="menu-top-active hover-line" style="font-size: 14px" ;>DASHBOARD</a>
                        </li>
                        <li><a href="issued-books.php" style="font-size: 14px" class="hover-line";>Issued Books</a></li>
                        <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"
                            style="font-size: 14px" ;> Account <i class="fa fa-angle-down hover-line"></i></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php"
                                    style="font-size: 14px" ;>My Profile</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php"
                                    style="font-size: 14px" ;>Change Password</a></li>
                        </ul>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<?php } else { ?>
<section class="menu-section" >
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                <a href="#" ><img src="assets/img/f.gif" alt="" class="icon" height="40px" width="40px"></a>
                    <a href="#" ><img src="assets/img/t.gif" alt="" class="icon" height="40px" width="40px"></a>
                    <a href="#" ><img src="assets/img/i.gif" alt="" class="icon" height="40px" width="40px"></a>
                    <a href="#" ><img src="assets/img/w.gif" alt="" class="icon" height="70em" width="70em"></a>
                    <a href="#" ><img src="assets/img/m.gif" alt="" class="icon" height="40px" width="40px"></a>
                    <ul id="menu-top" class="nav navbar-right">
                        <li><a href="index.php" class="hover-line " style="font-weight:bold" ;><img src="assets/img/home1.gif" alt="" height="45px" width="50px"></a></li>
                        <li><a href="index.php#ulogin" class="hover-line"style="font-weight:bold" ;><img src="assets/img/user.gif" alt="" height="45px" width="50px">Login</a></li>
                        <li><a href="signup.php" class="hover-line" style="font-weight:bold" ;><img src="assets/img/user.gif" alt="" height="45px" width="50px">signup</a></li>
                        <li><a href="adminlogin.php" class="hover-line" style="font-weight:bold" ;><img src="assets/img/a.gif" alt="" height="45px" width="50px">admin</a></li>
                        <li><a href="team.php" class="hover-line" style="font-weight:bold" ;><img src="assets/img/l.gif" alt="" height="45px" width="50px">contact</a></li>
                        <li><a href="guides.php" class="hover-line" style="font-weight:bold" ;><img src="assets/img/user.gif" alt="" height="45px" width="50px">Guides</a></li>
                        <li><a href="gallery.php" class="hover-line" style="font-weight:bold" ;><img src="assets/img/g.gif" alt="" height="45px" width="50px"></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<?php } ?>

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <br>
    <div class="container-fluid">
      <div class="section-title">
        <h2>Some Photos <span>Gallery </span>From Happy Students (: </h2>
        <br>
      </div>

      <div class="row g-0">
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/bg15.jpg" class="gallery-lightbox">
              <img src="assets/img/bg15.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/bg14.jpg" class="gallery-lightbox">
              <img src="assets/img/bg14.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/11.jpg" class="gallery-lightbox">
              <img src="assets/img/11.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/15.jpg" class="gallery-lightbox">
              <img src="assets/img/15.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/8.jpg" class="gallery-lightbox">
              <img src="assets/img/8.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/22.jpg" class="gallery-lightbox">
              <img src="assets/img/22.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/33.jpg" class="gallery-lightbox">
              <img src="assets/img/33.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/444.jpg" class="gallery-lightbox">
              <img src="assets/img/444.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/bg6.jpg" class="gallery-lightbox">
              <img src="assets/img/bg6.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/bg5.jpg" class="gallery-lightbox">
              <img src="assets/img/bg5.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/bg4.jpg" class="gallery-lightbox">
              <img src="assets/img/bg4.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/kiran.jpg" class="gallery-lightbox">
              <img src="assets/img/kiran.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        
      </div>
    </div>
  </section><!-- End Gallery Section -->
  <?php include('includes/footer.php');?>
  <!-- FOOTER SECTION END-->
  <!-- Vendor JS Files -->
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script>
    (function() {
      "use strict";
      /**
       * Initiate gallery lightbox 
       */
      const galleryLightbox = GLightbox({
        selector: '.gallery-lightbox'
      });
    
    })()</script>
</body>

</html>