<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{ 
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from tblbooks  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$_SESSION['delmsg']="Category deleted scuccessfully ";
header('location:manage-books.php');

}


    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Manage Books</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
      <!-- ICON LIBRARY -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-image: url("assets/img/11.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            overflow-x: hidden;
        }
        .text-box h1{
  font-size: 50px;
    color: transparent;
    -webkit-text-stroke:1px black ;
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
    <div class="content-wrapper" >
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12 text-box"style="font-family: Garamond, serif;";>
                    <h1 class="header-line">Manage Books</h1>
                </div>



            </div>
            <div class="row"style="background-color:rgb(113, 193, 224)" ;>
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Books Listing
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead style="background-color:rgb(130, 130, 194)" ;>
                                        <tr>
                                            <th>#</th>
                                            <th>Book Name</th>
                                            <th>Category</th>
                                            <th>Author</th>
                                            <th>ISBN</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sql = "SELECT tblbooks.BookName,tblcategory.CategoryName,tblauthors.AuthorName,tblbooks.ISBNNumber,tblbooks.BookPrice,tblbooks.id as bookid,tblbooks.bookImage from  tblbooks join tblcategory on tblcategory.id=tblbooks.CatId join tblauthors on tblauthors.id=tblbooks.AuthorId";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>
                                        <tr class="odd gradeX">
                                            <td class="center">
                                                <?php echo htmlentities($cnt);?>
                                            </td>
                                            <td class="center" width="300">
                                                <img src="bookimg/<?php echo htmlentities($result->bookImage);?>"
                                                    width="100">
                                                <br /><b>
                                                    <?php echo htmlentities($result->BookName);?>
                                                </b>
                                            </td>
                                            <td class="center">
                                                <?php echo htmlentities($result->CategoryName);?>
                                            </td>
                                            <td class="center">
                                                <?php echo htmlentities($result->AuthorName);?>
                                            </td>
                                            <td class="center">
                                                <?php echo htmlentities($result->ISBNNumber);?>
                                            </td>
                                            <td class="center">
                                                <?php echo htmlentities($result->BookPrice);?>
                                            </td>
                                            <td class="center">

                                                <a
                                                    href="edit-book.php?bookid=<?php echo htmlentities($result->bookid);?>"><button
                                                        class="btn btn-primary"><i class="fa fa-edit "></i>
                                                        Edit</button>
                                                    <a href="manage-books.php?del=<?php echo htmlentities($result->bookid);?>"
                                                        onclick="return confirm('Are you sure you want to delete?');"" >  <button class="
                                                        btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
                                            </td>
                                        </tr>
                                        <?php $cnt=$cnt+1;}} ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>



        </div>
    </div>
    <div class="container">                 
  <ul class="pager">
    <li><a href="add-book.php">Previous</a></li>
    <li><a href="issue-book.php">Next</a></li>
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
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>

</html>
<?php } ?>