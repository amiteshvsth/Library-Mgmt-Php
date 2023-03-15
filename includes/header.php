<style>
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
        font-weight: bold;
    }
  .icon2{
      margin-top: 28px;
  }
</style>

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
                        <li><a href="dashboard.php" class="menu-top-active hover-line" style="font-weight:bold" ;>DASHBOARD</a>
                        </li>
                        <li><a href="issued-books.php" style="font-weight:bold" class="hover-line";>Issued Books</a></li>
                        <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"
                            style="font-weight:bold" ;> Account <i class="fa fa-angle-down "></i></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php"
                                    style="font-weight:bold" ;>My Profile</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php"
                                    style="font-weight:bold" ;>Change Password</a></li>
                        </ul>
                      

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
                    <a href="#" ><img src="assets/img/png/f.png" alt="" class="icon2" height="40px" width="40px"></a>
                    <a href="#" ><img src="assets/img/png/t.png" alt="" class="icon2" height="40px" width="40px"></a>
                    <a href="#" ><img src="assets/img/png/i.png" alt="" class="icon2" height="40px" width="40px"></a>
                    <a href="#" ><img src="assets/img/png/w.png" alt="" class="icon2" height="40px" width="40px"></a>
                    <a href="#" ><img src="assets/img/png/m.png" alt="" class="icon2" height="40px" width="40px"></a>
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="index.php" class="hover-line " style="font-weight:bold" ;><img src="assets/img/png/h.png" alt="" height="45px" width="50px"></a></li>
                        <li><a href="index.php#ulogin" class="hover-line"style="font-weight:bold" ;><img src="assets/img/png/u.png" alt="" height="45px" width="50px">Login</a></li>
                        <li><a href="signup.php" class="hover-line" style="font-weight:bold" ;><img src="assets/img/png/u.png" alt="" height="45px" width="50px">signup</a></li>
                        <li><a href="adminlogin.php" class="hover-line" style="font-weight:bold" ;><img src="assets/img/png/a.png" alt="" height="45px" width="50px">admin</a></li>
                        <li><a href="team.php" class="hover-line" style="font-weight:bold" ;><img src="assets/img/png/c.png" alt="" height="45px" width="50px">contact</a></li>
                        <li><a href="guides.php" class="hover-line" style="font-weight:bold" ;><img src="assets/img/png/a.png" alt="" height="45px" width="50px">Guides</a></li>
                        <li><a href="gallery.php" class="hover-line" style="font-weight:bold" ;><img src="assets/img/png/g.png" alt="" height="45px" width="50px"></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<?php } ?>