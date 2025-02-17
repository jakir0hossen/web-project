<?php 
session_start();
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

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
    <script src="https://kit.fontawesome.com/eaa4609b2f.js" crossorigin="anonymous"></script>


  </head>

  <body>
  <nav>
        <div class="container">
            <div class="logo">
                <img src="./logo.png" alt="">
            </div>
            

            <div class="navbar">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="#">LU</a>
                     <ul>
                        <li><a href="./blog.php">Blogs</a></li>
                        <li><a href="./books.php">Book</a></li>
                        
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
                    <li><a href="./logout.php"><i class="fa-solid fa-right-to-bracket"></i>logout</a></li> 
                </ul>
                
            </div>

        </div>
    </nav>

    <header class="showcase">
        <div class="container">
            <div class="text-content">
              
                <h1>some LU Magazine article</h1>
                <p>
                    The university's annual science fair, a showcase of student research and innovation, captivated attendees with projects ranging from sustainable energy solutions to cutting-edge medical advancements. The event highlighted the university's commitment to fostering creativity and academic excellence.
                </p>
                <!-- <a href="#">Read More</a> -->
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <h1 class="editor-h1">Latest News</h1>
            <div class="articles">
                <a href="#" class="card">
                    <img src="./images/articles/EN1.jpg" alt="" />
                    <article>
                        <p class="entertainment-category">Entertainment</p>
                        <h1>Leading University Social Services Club 
                        </h1>
                        <p>
                        Established in the spring of 2015, Leading University Social Services Club 
 (LUSSC) is one of the oldest clubs of Leading University and also the only club whose main objective is to offer assistance to the underprivileged and the unfortunate in society. LUSSC believes that it is a moral duty as citizens of Bangladesh, more importantly as human beings, to help out the people in need.It tries its best to contribute and offer a helping hand to these people in whatever way possible.

                        </p>
                    </article>
                </a>

                <a href="#" class="card">
                <img src="./images/articles/dr.jpg" alt="" />
                    <article>
                        <p class="sports-category">Blog</p>
                        <h1>Danobir Dr.Syed Ragib Ali</h1>
                        <p>
                        I’m thrilled to celebrate the incredible achievements of our University Computer Club. Your dedication to innovation, collaboration, and learning is truly inspiring. Through hackathons, workshops, and groundbreaking projects, you’ve fostered an environment that encourages creativity and problem-solving. Each of you, regardless of background, contributes to shaping the future of technology in meaningful ways. Your collective efforts highlight the power of teamwork and determination. Keep pushing boundaries, exploring new ideas, and making a lasting impact. The future of technology is bright, thanks to your hard work and passion!
                        </p>
                    </article>
                </a>

                <a href="#" class="card">
                   
                    <img src="./images/articles/tech1.jpg" alt="" />
                    <article>
                        <p class="technology-category">Technology</p>
                        <h1>Top 11 New Technologies in AI: Exploring the Latest Trends
                        </h1>
                        <p>
                        Nowadays, when the technological industry is developing every month, artificial intelligence (AI) stands as the major force that is progressing every minute and revolutionizing the way we live and work. Some difficult tasks that seemed impossible only a few years ago are now becoming an integral part of our reality. While scientists and engineers are arguing whether these rapid changes are good or bad, businesses should stay ahead of the curve in adopting the new technologies in AI in order to survive and grow in today’s constantly changing landscape.
                        </p>
                    </article>
                </a>

                <a href="#" class="card">
                <img src="./images/articles/SP1.jpg" alt="" />
                
                    <article>
                        <p class="sports-category">Sports</p>
                        <h1>Leading University Sports Club</h1>
                        <p>
                        A Sport Club is a registered student organization dedicated to promoting and developing interest in a specific sport or physical activity. It offers students the opportunity to engage in recreational or competitive play while fostering teamwork, discipline, and leadership. Through practices, events, and competitions, Sport Clubs provide a platform for students to enhance their skills, stay active, and connect with others who share similar interests. These clubs encourage a balanced, healthy lifestyle and contribute to building a vibrant campus community focused on physical wellness and athletic growth.

                        </p>
                    </article>
                   
                </a>

                <a href="#" class="card">
                    <img src="./images/articles/event.jpg" alt="" />
                    <article>
                        <p class="technology-category">Event</p>
                        <h1>Upcoming Events</h1>
                        <p>
                        The university event was a fantastic gathering that brought students, faculty, and staff together to celebrate academic and extracurricular achievements. From engaging workshops to live performances, attendees had the chance to participate in a variety of activities that showcased the diverse talents within the campus community. The event fostered connections, encouraged collaboration, and promoted school spirit. It highlighted the importance of both intellectual and personal growth, creating an atmosphere of excitement and unity that left everyone feeling motivated and proud to be part of the university.

                        </p>
                    </article>
                </a>

                <a href="#" class="card">
                <img src="./images/articles/club.jpg" alt="" />
                    <article>
                        <p class="sports-category">Lu Club</p>
                        <h1>Unlock Your Potential, Join the Club.</h1>
                        <p>
                        IEEE LU Student Branch
                        Leading University Computer Club (LUCC)
                        CE Family of Leading University (LUCEF)
                        Leading University Electronics Club (LUEC)
                        Leading University Social Service Club (LUSSC)
                        Leading University Cultural Club (LUCC)
                        Leading University Photographic Society (LUPS)
                        Leading University Sports Club (LUSC)
                        Leading University BNCC
                        LU Rover Scout Group
                        Leading University Debating Club (LUDC)
                        Leading University Research Society (LURS)
                        BANNED COMMUNITY
                        ORPHEUS
                        Leading University Model United Nation (LUMUN)
                        Leading University Tourist Club (LUTC)
                        </p>
                    </article>
                </a>

             
            </div>
        </div>
    </section>



    
    
    
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

    
        <div class="col-md-8">

          
<?php 
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


        $query=mysqli_query($con,
        "select tblposts.id as pid,
        tblposts.PostTitle as posttitle,
        tblposts.PostImage,
        tblcategory.CategoryName as category,
        tblcategory.id as cid,
        tblsubcategory.Subcategory as subcategory,
        tblposts.PostDetails as postdetails,
        tblposts.PostingDate as postingdate,
        tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
        while ($row=mysqli_fetch_array($query)) {
        ?>

        <div class="card mb-4">
          <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
                 <p><!--category-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="category.php?catid=<?php echo htmlentities($row['cid'])?>" style="color:#fff"><?php echo htmlentities($row['category']);?></a>
                    <!--Subcategory--->
                     <a class="badge bg-secondary text-decoration-none link-light"  style="color:#fff"><?php echo htmlentities($row['subcategory']);?></a></p>
       
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

        </div>

       
      <?php include('includes/sidebar.php');?>
      </div>
      

          </div>
  

 
      <?php include('includes/footer.php');?>


 
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
     </head>
  </body>

</html>
