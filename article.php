<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Merves Pharmaceutical</title>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
     <!-- Spinner Start -->
     <div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
     <div class="spinner-border " role="status" style="width: 3rem; height: 3rem;"></div>
     </div>
    <!-- Spinner End -->
    
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg sticky-top bg-white">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/logo.ico" alt="Logo" width="300px" height="80px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="img/menu.png" alt="menu" width="30px" height="30px"> 
          </button>
          <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.php">Home</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link " href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="article.php">Articles</a>   
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact.html">Contact Us</a>
                </li>
        </div>
      </nav>    
      <!-- Navbar End -->
      <h1 class="text-center pt-5 animated fadeInDown h-50">مقالاتنا</h1>
      <hr>
      <!--Article Start-->
        <!-- Blog section start -->
    <!-- <div class="container mt-5 ">
      <div class="row">
        <div class="col-md-8 col-12"> 
          <div class="text">
            <h1 class="mt-5">
              Responsive Design
            </h1>
            <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente rerum atque molestiae placeat! Voluptatibus omnis quia magnam, voluptate vero odio pariatur voluptates dolorum repellat, incidunt illum eligendi, modi doloremque adipisci fugit iste dignissimos itaque consectetur eveniet laudantium neque dolores. Modi est, corrupti distinctio inventore vero fuga unde harum perspiciatis deserunt!</p>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="photo">
            <img src="imgs/laptop.png" alt="" style="width: 500px; height: 300px;">
          </div>  
      </div>
      </div>
    </div> -->
    <?php
    echo "<div class='container mt-5 animated fadeInDown'>";
    echo "<div class='row'>";
       $i = 0;
       $conn = mysqli_connect("localhost","root","","merves");
       $sql = "SELECT * FROM articles";
       $result = mysqli_query($conn,$sql);
       $articles = mysqli_fetch_all($result,MYSQLI_ASSOC);
       if (count($articles) == 0) echo "<h1 class='face_text text-center'>لا يوجد مقالات</h1>";
       foreach($articles as $article):
        if ($i % 2 == 0) {
            echo "<div class='col-xl-6 col-md-8 col-12'>";
            echo "<div class='text-end '>";
            echo "<h1 class='mt-5'>"; $i++;
            echo " - " ;
            echo $i;
            echo "<br>";
            echo $article['name'];
            echo "</h1>";
            echo "<p class='mt-5'>";
            echo $article['description'];
            echo "</p>";
            echo "</div>";
            echo "</div>";
            echo "<div class='col-xl-6 col-md-4 col-12'>";
            echo "<div class='photo'>";
            $img = $article['src'];
            echo "<img src='$img' alt='' style='width:100%; height: 300px;'>";
            echo "</div>";
            echo "</div>";
        }
        else 
        {
            echo "<div class='col-xl-6 col-md-4 col-12 mt-3'>";
            echo "<div class='photo'>";
            $img = $article['src'];
            echo "<img src='$img' alt='' style='width:100%; height: 300px;'>";
            echo "</div>";
            echo "</div>";
            echo "<div class='col-xl-6 col-md-8 col-12'>";
            echo "<div class='text-end '>";
            echo "<h1 class='mt-5'>"; $i++;
            echo " - " ;
            echo $i;
            echo "<br>";
            echo $article['name'];
            echo "</h1>";
            echo "<p class='mt-5'>";
            echo $article['description'];
            echo "</p>";
            echo "</div>";
            echo "</div>";
        }
       
         endforeach;
        echo "</div>";
        echo "</div>";
    ?>
    <!-- Blog section end -->
    <!-- Footer Start -->
    <div class="container-fluid footer text-white-50 py-5 mt-5" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
            <div class="col-lg-6 pe-lg-5">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="mb-0">Mer<span class="text-white">vs</span></h1>
                    </a>
                    <p class="fs-5 mb-4">شركة ميرفس هي شريك رائد في سوق مستحضرات التجميل والأدوية في مصر، وتقدم منتجات عالية الجودة وبأسعار معقولة مصممة خصيصًا لتلبية احتياجات البشرة والشعر للمرأة المصرية. تتميز الشركة بمنتجات ذات جودة عالية والالتزام بالمسؤولية الاجتماعية والبيئية</p>
                    <p><i class="fa fa-map-marker-alt me-2"></i>Talbeya Faisal Street, Giza Governorate, Egypt</p>
                    <p><i class="fa fa-phone-alt me-2"></i>+201010880006</p>
                    <p><i class="fa fa-envelope me-2"></i>mi7khalil@gmail.com</p>
                    <div class="d-flex mt-4 icons">
                        <a class="btn btn-lg-square btn-primary me-2" href="https://www.facebook.com/mervsegypt?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="https://wa.me/201010880006"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Quick Links</h4>
                            <a class="btn btn-link" href="index.php">Home</a>
                        <a class="btn btn-link" href="contact.html">Contact Us</a>
                        <a class="btn btn-link" href="shop.php">Shop</a>
                        <a class="btn btn-link" href="article.php">Article </a>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Popular Links</h4>
                            <a class="btn btn-link" href="index.php">Home</a>
                        <a class="btn btn-link" href="contact.html">Contact Us</a>
                        <a class="btn btn-link" href="shop.php">Shop</a>
                        <a class="btn btn-link" href="article.php">Article </a>
                        </div>
                        <div class="col-sm-12">
                            <h4 class="text-light mb-4">Newsletter</h4>
                            <div class="w-100">
                            <form action="process.php" method="post">
                                <div class="input-group">
                                    <input type="text" name="email" class="form-control border-0 py-3 px-4" style="background: rgba(255, 255, 255, .1);" placeholder="Your Email Address" required><button class="btn btn-primary px-4" type="sumbit" name="submit">sign up </button> 
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn to-top btn-lg btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>



    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>