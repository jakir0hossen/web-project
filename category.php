<?php 
session_start();
error_reporting(0);
include('includes/config.php');
 ?>

    <head>

  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>LU Magazine</title>
    <script src="https://kit.fontawesome.com/eaa4609b2f.js" crossorigin="anonymous">
        
    </script><script src="https://kit.fontawesome.com/eaa4609b2f.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/79d1bfb033.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="./home.css" />

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="css/modern-business.css" rel="stylesheet"> -->
    <script src="https://kit.fontawesome.com/eaa4609b2f.js" crossorigin="anonymous"></script>


  </head>

  <body>

    <!-- Navigation -->
    <nav>
        <div class="container">
            <div class="logo">
                <img src="./logo.png" alt="">
            </div>
            

            <div class="navbar">
                <ul>
                    <li><a href="../Home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">LU</a>
                     <ul>
                        <li><a href="./blog.php">Blogs</a></li>
                        <li><a href="./books.php">Book</a></li>
                        <li><a href="./event.php">Event</a></li>
                        <li><a href="./#">Lu Club</a>
                            <ul>
                                <li><a href="./lucc.php">LUCC</a></li>
                                <li><a href="./lussc.php">LUSSC</a></li>
                                <li><a href="./luec.php">LUEC</a></li>
                                <li><a href="./ieee.php">IEEE</a></li>
                                <li><a href="./ludc.php">LUDC</a></li>
                                <li><a href="./lumuna.php">LUMUNA</a></li>
                                <li><a href="./bncc.php">LU BNCC</a></li>
                                <li><a href="./lutc.php">LUTC</a></li>
                            </ul>
                        </li>
                     </ul>
                    </li>
                    <li><a href="./news.php">News</a></li>
                    <li><a href="#">Gallery</a>
                        
                        <ul>
                            <li><a href="./photo.php">Photo & Video</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="./contact.php">Contact</a></li>
                    <!-- <li><a href="./logout.php"><i class="fa-solid fa-right-to-bracket"></i>logout</a></li> -->
                </ul>
                
            </div>

        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php 
        if($_GET['catid']!=''){
$_SESSION['catid']=intval($_GET['catid']);
}
             






     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId='".$_SESSION['catid']."' and tblposts.Is_Active=1 order by tblposts.id desc LIMIT $offset, $no_of_records_per_page");

$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
echo "No record found";
}
else {
while ($row=mysqli_fetch_array($query)) {


?>
<h1><?php echo htmlentities($row['category']);?> News</h1>
          <div class="card mb-4">
       <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
           
              <a href="blog-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-success">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
          </div>
<?php } ?>

    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>
<?php } ?>
       

      

          <!-- Pagination -->




        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>

</html>
