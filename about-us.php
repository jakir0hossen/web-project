<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

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
                    <li><a href="./index.php">Home</a></li>
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

<?php 
$pagetype='aboutus';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
      <h1 class="mt-4 mb-3"><?php echo htmlentities($row['PageTitle'])?>
  
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><?php echo $row['Description'];?></p>
        </div>
      </div>
      <!-- /.row -->
<?php } ?>
    
    </div>
    <!-- /.container -->

    <!-- Footer -->
 <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
