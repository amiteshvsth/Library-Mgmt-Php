<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Online Library Management System | </title>
  <!-- BOOTSTRAP CORE STYLE  -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- CUSTOM STYLE  -->
  <link href="assets/css/contact.css" rel="stylesheet" >
  <link href="assets/css/style.css" rel="stylesheet" >
  <!-- GOOGLE FONT -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <style>
    body {
      background-image: url("assets/img/11.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      overflow-x: hidden;
    }

    .hr {
      border-width: 7px;
      color: solid #db6868;
      ;
    }
  </style>
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <div class="elfsight-app-3339763a-e6bd-46ac-bad6-f474d7207bb0"></div>
</head>
<body>
  <!------MENU SECTION START-->
  <?php include('includes/header.php');?>
  <!-- MENU SECTION END-->
  <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>
          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>amitesh.rwl543@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>9352473062</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" method="post" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

  <div class="container">
    <ul class="pager">
      <li><a href="#">Previous</a></li>
      <li><a href="signup.php">Next</a></li>
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
  <script src="assets/js/contact.js"></script>

</body>

</html>