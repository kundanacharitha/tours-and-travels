<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

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

    <div class="heading" style="background:url(images/header-bg-1.jpeg) center center fixed">
        <h1>book now</h1>
    </div>
    <!--booking section starts-->
    <section class="booking">
        <h1 class="heading-title">Book your trip</h1>
        <form name="myform" action="book_form.php" method="post" class="book-form" onsubmit="name()||email()||phone()||validate()">
            <div class="flex">
                <div class="inputBox">
                    <span>name:</span>
                    <input type="text" placeholder="enter your name" name="name" required>
                </div>
                <div class="inputBox">
                    <span>email:</span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>
                <div class="inputBox">
                    <span>phone:</span>
                    <input type="tel" placeholder="enter your phone num" name="phone" required>
                </div>
                <div class="inputBox">
                    <span>Address:</span>
                    <input type="text" placeholder="enter your address" name="address" required>
                </div>
                <div class="inputBox">
                    <span>Destination:</span>
                    <input type="text" placeholder="place where you want to visit" name="location" required>
                </div>
                <div class="inputBox">
                    <span>how many:</span>
                    <input type="number" placeholder="enter no.of members" name="guests" required>
                </div>
                <div class="inputBox">
                    <span>arrivals:</span>
                    <input type="date" name="arrival" min="2024-01-01"required>
                </div>
                <div class="inputBox">
                    <span>leaving:</span>
                    <input type="date" name="leaving" min="2024-01-01" required>
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>
    <!--booking section ends-->
    <script>
    forms.addEventListener('submit',(e)=>{
    name();
    email();
    phone();
    location();
    validate();
})
function name(){
    var name=document.myform.name.value.trim();
    let name_pattern= /^[a-z A-Z]+$/;
    if(name==null||name==""){
        alert("Name Can't be Empty!!! ");
        return false;
    }
    else if(name.length<4){
        alert("Name contains atleast 3 letters!!!");
        return false;
    }
    else if(!(name_pattern.test(name))){
        alert("Name Only Contains Alphabets")
     }
}
function email(){
    var email=document.myform.email.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(email==null||email==""){
       alert("Email is Required!!");
       return false;
    }
    else if(!(emailRegex.test(email))){
        alert("Invalid Email!!");
        return false;
    }
}
function phone(){
    var number=document.myform.phone.value.trim();
    var pattern=/^(0|91)?[6-9][0-9]{9}$/;
    if(number==null||number==""||number.length!=10){
            alert("number can't be empty and must contains 10 digits");
            return false;
    }
    else if(!(pattern.test(number))){
        alert("Invalid Phone Number!!");
        return false;
    }
}
function location(){
       var location=document.myform.location.value.trim();
       let name_pattern= /^[a-z A-Z]+$/;
    if(location==null||location==""){
        alert("Location Can't be Empty!!! ");
        return false;
    }
    else if(!(name_pattern.test(location))){
        alert("Location Only Contains Alphabets")
     } 
}  
function validate(){
    var arrival=document.myform.arrivals.value;
    var leaving=document.myform.leaving.value;
    if(arrival==null||leaving==null){
        alert("can't be empty");
        return false;
    }

}
</script>
 
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








