<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guides</title>

    <!-- Favicon -->
 <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="assets/css/team.css" rel="stylesheet">
<!-- <link href="assets/css/style.css" rel="stylesheet"> -->

<!-- GOOGLE FONT -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<style>
    body{
     background-image: url("assets/img/11a.jpg") ;
    background-size: cover;
    overflow-x:hidden;
    /* color:white;
    font-weight:bold; */
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
.icon{
      margin-top: 11px;
  }
</style>



</head>
<body>


<!-- MENU SECTION -->

<!-- Navbar Start -->
<div >
        <div>
           
            <nav class=" navbar-expand-lg  navbar-light  p-lg-0 ">
              
                <div class="collapse navbar-collapse " id="navbarCollapse">
                    <div class="navbar-nav ml-auto ">
                    <div class="icon ">
            <a href="#" ><img src="assets/img/f.gif" alt="" class="icon" height="40px" width="40px"></a>
                    <a href="#" ><img src="assets/img/t.gif" alt="" class="icon" height="40px" width="40px"></a>
                    <a href="#" ><img src="assets/img/i.gif" alt="" class="icon" height="40px" width="40px"></a>
                    <a href="#" ><img src="assets/img/w.gif" alt="" class="icon" height="70em" width="70em"></a>
                    <a href="#" ><img src="assets/img/m.gif" alt="" class="icon" height="40px" width="40px"></a>
            </div>
                    <a href="index.php" class="nav-item nav-link" style="font-weight:bold" ;><img src="assets/img/home1.gif" alt="" height="45px" width="50px"></a>
                        <a href="index.php" class="nav-item nav-link"style="font-weight:bold" ;><img src="assets/img/user.gif" alt="" height="45px" width="50px">Login</a>
                        <a href="signup.php" class="nav-item nav-link" style="font-weight:bold" ;><img src="assets/img/user.gif" alt="" height="45px" width="50px">signup</a>
                        <a href="adminlogin.php" class="nav-item nav-link" style="font-weight:bold" ;><img src="assets/img/a.gif" alt="" height="45px" width="50px">admin</a>
                        <a href="team.php" class="nav-item nav-link" style="font-weight:bold" ;><img src="assets/img/l.gif" alt="" height="45px" width="50px">contact</a>
                        <a href="guides.php" class="nav-item nav-link" style="font-weight:bold" ;><img src="assets/img/user.gif" alt="" height="45px" width="50px">Guides</a>
                        <a href="gallery.php" class="nav-item nav-link" style="font-weight:bold" ;><img src="assets/img/g.gif" alt="" height="45px" width="50px"></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->





     <!-- Testimonial Start -->
     <div class=" py-5">
        <div >
            <div >
                <div class="text-box" style="font-family: Garamond, serif;">
                    <h1 class="  text-center mb-5 b" >Our Guides</h1>
                </div>
            </div>
            <div class="row justify-content-center" style="color:white";>
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <h4 class=" mb-4"style="color:white";>I cannot teach anybody anything; I can only make them think.</h4>
                            <img class=" mx-auto mb-3" src="assets/img/mam.jpeg" alt="">
                            <h5 class="font-weight-bold m-0 "style="color:white"; >Ms. Simran Sharma</h5>
                            <span>Professor</span>
                        </div>
                        <div class="text-center">
                            <h4 class=" mb-4"style="color:white";>Tell me and I forget. Teach me and I remember. Involve me and I learn</h4>
                            <img class=" mx-auto mb-3" src="assets/img/testimonial-2.jpg" alt="">
                            <h5 class="font-weight-bold m-0"style="color:white";>Mr. Sunil Sharma</h5>
                            <span>Professor</span>
                        </div>
                        <div class="text-center">
                            <h4 class=" mb-4"style="color:white";> If you are planning for a year, sow rice; if you are planning for a decade, plant trees; if you are planning for a lifetime, educate people.</h4>
                            <img class=" mx-auto mb-3" src="assets/img/sir.jpeg" alt="">
                            <h5 class="font-weight-bold m-0"style="color:white";>Mr. Sanjeev Sharma</h5>
                            <span>Professor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="lib/isotope/isotope.pkgd.min.js"></script>
     <script src="lib/lightbox/js/lightbox.min.js"></script>
 
     <!-- Template Javascript -->
     <script src="assets/js/team.js"></script>
     <script src="assets/js/custom.js"></script>
     <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>


     <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
</body>
</html>