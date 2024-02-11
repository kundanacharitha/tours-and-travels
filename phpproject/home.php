<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link-->
    <link rel="stylesheet"href="css/style.css?v=<?php echo time();?>">
</head>
<body>
    <!--header section starts-->

    <section class="header">
        <a href="home.php" class="logo">travel</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>            

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!--header section ends-->

    <!--home section starts-->
    <div id="SimpleCarouselExample" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/home-slide-1.jpg" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <h1>travel around the world</h1>
                    <a href="package.php" class="btn">Discover more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/home-slide-2.jpg" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <h1>discover the new places</h1>
                    <a href="package.php" class="btn">Discover more</a>
                </div>
            </div>
        </div>
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#SimpleCarouselExample" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#SimpleCarouselExample" data-bs-slide-to="1"></button>    
        </div>
    </div>
    <!--home section ends-->


    <!---service section starts-->

    <section class="services">
        <h1 class="heading-title">our services</h1>

        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.jpg" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>


    <!---services section ends-->

    <!--home about section starts-->
        <section class="home-about">
            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>
            <div class="content">
                <h3>about us</h3>
                <p>lorem ipsum dolor sit amet consectetur adipisicing elit.Expedia et,recusandae nobus fugit modi quibusdam ea assumenda,nulla quisqam repelllat rem aliquid sequi maxime sapiente autem ipsum?Nobis,provident voluptate?</p>
                <a href="about.php" class="btn">read more</a>
            </div>
        </section>
     <!--home about section ends-->
     <!--home packages section starts-->
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit,amet consectetur adipisicing elit.Eos,sint!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit,amet consectetur adipisicing elit.Eos,sint!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit,amet consectetur adipisicing elit.Eos,sint!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a> </div>
    </section>
     <!--home packages section ends-->

    
     <!-- home offer section starts-->
        <section class="home-offer">
            <div class="content">
                <h3>upto 50% off</h3>
                <p>Lorem ipsum dolor sit,amet consectetur adipisicing elit.Iure tempora assumenda,debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </section>

     <!-- home offer section ends-->
 
<!-- footer section starts-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i>qwerty@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>andhra pradesh,india</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>   
    </div>

    <div class="credit">created by <span>MS.kundana </span>| all rights reserved!</div>

</section>
<!-- footer section ends-->
<!-- custom js file link-->
<script src="js/script.js"></script>
</body>
</html>