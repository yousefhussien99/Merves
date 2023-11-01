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
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel = "stylesheet" href = "owl_carousel/owl.carousel.css">
    <link rel = "stylesheet" href = "owl_carousel/owl.theme.default.css">


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
                <a class="nav-link active" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="article.php">Articles</a>   
            </li>
           
            <li class="nav-item">
                <a class="nav-link " href="contact.html">Contact Us</a>
            </li>
    </div>
  </nav>    
  <!-- Navbar End -->
    <div class = "container wow fadeIn " data-wow-delay = "0.1s">
        <div class = "row my-5">
            <h1 class = "text-center animated fadeInDown"> منتجاتنا المميزه </h1>
            <p class = "fw-light w-75 mx-auto text-center">لرؤيه منتجاتما عليك التنقل افقيا  </p>
            <div id="alert">
            <div class = "alert2 alert-danger w-50 d-block  m-auto d-none" role = "alert" >
                <h1 class = "text-center text-black-50 my-2">
                العنصر موجود بالفعل في السله
            </h1>
            </div>
            <div class = "alert3 alert-warning w-50 d-block  m-auto d-none" role = "alert" >
                <h1 class = "text-center text-black-50 my-2">
                تم اضافه العنصر بنجاح
            </h1>
            </div>
    
    
            </div>
         
        </div>
        <?php
            $sql = "SELECT * FROM products";
            $conn = mysqli_connect("localhost","root","","merves");
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn,$sql); 
            $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
            if (count($products) == 0) echo "<h1 class='text-center'>لا يوجد منتجات</h1>";
            else {
                echo  "<div class = 'row g-4 my-5 mx-auto owl-carousel owl-theme'>";
                foreach($products as $product){
                    echo "<div class = 'col product-item mx-auto text-end'>
                    <div class = 'product-img'>
                        <img src = '".$product['src']."' alt = '' class = 'img-fluid d-block mx-auto'>
                        <span class = 'heart-icon'>
                            <i class = 'far fa-heart'></i>
                        </span>
                        <div class = 'row btns w-100 mx-auto'>
                            <button type = 'button' class = 'col-6 py-2') '>
                                <i class = 'fa fa-cart-plus'></i> Add to Cart
                        </button>       
                        </div>
                    </div>
                    <div class = 'product-info p-3'>
                        <span class = 'product-type'>".$product['name']."</span>
                        <a href = '#' class = 'd-block text-dark text-decoration-none py-2 product-name'>".$product['descrption']."</a>
                        <span class = 'product-price'>".$product['price']. " EGP</span>
                        <div class = 'rating d-flex mt-1'>";
                        for ($i = 0; $i <5; $i++) echo "<span><i class = 'fa fa-star'></i></span>";
                        echo "</div>
                    </div>
                </div>";
            }
        }
    ?>
    <!-- when click on add to cart button -->
    <script>
        function addToCart(id){
            var alert = document.querySelector(".alert3");
            var alert2 = document.querySelector(".alert2");
            $.ajax({
                type: "POST",
                url: "add_to_cart.php",
                data: { product_id: id },
                success: function (response) {
                    window.href = "shop.php#alert";
                    if (response === "success") {
                
                        alert.classList.remove("d-none");
                        set = setTimeout(() => {
                            alert.classList.add("d-none");
                        }, 2000);
                        


                    } else {
                        alert2.classList.remove("d-none");
                        set = setTimeout(() => {
                            alert2.classList.add("d-none");
                        }, 2000);
                    }
                }
            });
        }
    </script>
    </div>
    <p class = "text-center my-5 fs-5 text-black-50">
     لطلب منتجاتنا ارسلنا رساله علي الواتس اب او علي الفيس بوك </p>
    </p>
    </div>
<!-- Footer Start -->
<div class="container-fluid footer  text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
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
 <!-- JavaScript Libraries -->

<script>
  
</script>
<a href="#" class="btn to-top btn-lg btn-lg-square rounded-circle back-to-top "><i class="bi bi-arrow-up"></i></a>
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- owl carousel -->
    <script src = "owl_carousel/owl.carousel.js"></script>
    <script src = "js/script.js"></script>
    <script src = "js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
</body>
</html>