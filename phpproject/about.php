<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link-->
    <link rel="stylesheet"href="css/style.css">
</head>
<body>
    <!--header section starts-->

    <section class="header">
        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>            

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!--header section ends-->

    <div class="heading" style="background:url(images/header-bg-1.png) center center fixed">
        <h1>about us</h1>
    </div>

    <!--about section starts-->
    <section class="about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>why choose us</h3>
            <p>lorem ipsum dolor sit amet consectetur adipisicing elit.Iure numquam nulla iusto corporis dolor commodi liberoo,
                vitae obcacaecati optio rerum ab culpa nesciunt,earum mollitia quasi ipsam non.Aliquid,iure.</p>
            <p>lorem ipsum dolor sit amet consectetur adipisicing elit.Aliquid rerum,delectus voluptate aliquan quaerat iusto repellendus error nulla ab atque.</p>
           <div class="icons-container">
             <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinations</span>
             </div>
             <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable prices</span>
             </div>
             <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 guide services</span>
             </div>
           </div>
        </div>
    </section>
    <!--about section ends-->
         <!--reviews section starts-->
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="5" aria-label="Slide 6"></button>    
            </div>
            <h1>CLIENT REVIEWS</h1>
            <div class="carousel-inner">
               
                <div class="carousel-item active" data-bs-interval="1000">
                    <div class="card">
                        <img src="images/pic-1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>    
                            </div>
                            <h3 class="card-title">john deo</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam saepe, laboriosam magnam cum aspernatur
                            voluptatem commodi nihil? Repudiandae dolorum exercitationem vitae vel nemo corporis natus molestias. 
                            Autem est distinctio quod?</p>
                            <span>traveler</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="card">
                        <img src="images/pic-2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>    
                            </div>
                            <h3 class="card-title">christy</h3>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas dolorum commodi ipsam fugiat id nulla fuga ipsum totam?
                             Tempore quos nisi rerum magnam, 
                                provident necessitatibus sunt deserunt quidem commodi? Nemo, 
                            ab dolorem! Amet earum officia ducimus autem numquam, facere hic!</p>
                            <span>traveler</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div class="card">
                        <img src="images/pic-3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                  
                            </div>
                            <h3 class="card-title">tommy</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Officia non sit commodi cum quos rerum, eveniet architecto voluptatem accusantium quod?</p>
                            <span>traveler</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <div class="card">
                        <img src="images/pic-4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                  
                            </div>
                            <h3 class="card-title">martin</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Quod in fugiat soluta vel iure asperiores repellendus ex quisquam iusto. 
                                Quod dolor deleniti voluptatibus accusantium tempore inventore iusto placeat possimus, quas, facilis sed? 
                                Mollitia, ut expedita saepe cum, aperiam dolorum optio et ea repudiandae recusandae nobis praesentium atque 
                                reprehenderit obcaecati rem.</p>
                            <span>traveler</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <div class="card">
                        <img src="images/pic-5.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                
                                  
                            </div>
                            <h3 class="card-title">sandy</h3>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, sunt?</p>
                            <span>traveler</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="card">
                        <img src="images/pic-6.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                  
                            </div>
                            <h3 class="card-title">Nick</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <span>traveler</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--reviews section ends-->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

<!-- custom js file link-->
<script src="js/script.js"></script>
</body>
</html>