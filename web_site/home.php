<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Pet Kingdom</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    


<!-- Header main--> 
<div class="header-main" id="header-main">
    
<!-- Log out-->

    <button  class="loginbtn3" ><a href="index.php"> Log out</a></button>

        
    </div>

    
    


<!--MAIN MENU-->
<div class="header" id="myHeader">

    
<nav class="menu">
        <ul class="nav-links">
        <li><a href="home.php"target="_blank">Home</a></li>
        <li><a href="src/aboutus.php"target="_blank">About us</a></li>
        <li><a href="src/pop.php"target="_blank">Pop Culture</a></li>
        <li><a href="src/cuty_puppyes.php" target="_blank">Cuty animals</a>
                <ul class="sub-menu">
                    <li><a href="#">Cat</a></li>
                    <li><a href="#">Dog</a></li>
                    <li><a href="#">Others</a></li>
                </ul>
        </li>
        <li><a href="src/animals.php" target="_blank">Animals</a></li>
            <a href="javascript:void(0)" id="button" class="closebtn" onclick="closeMenu()">&times;</a>
        </ul>
    </nav>

   <!-- menu Hamburguer-->
    <div class="hamburguer">
        <span style="font-size:30px;cursor:pointer" class="hamburguer-menu" onclick="hamburguerMenu()">&#9776; </span>
    
    </div>
</div>


<!--Carousel-->
<div class="slide-container">
    <div class="mySlide">
        <div class="numbertext">1 / 3</div>
        <img src="img/img9.jpg" alt="white fox">
        <a href="src/animals.php" target="_blank">
            <div class="text">Enjoy the Beauty </div>
        </a>
    </div>
    <div class="mySlide">
        <div class="numbertext">2 / 3</div>
        <img src="img/img32.jpg" alt="chow chow dog">
        <a href="src/cuty_puppyes.php" target="_blank">
            <div class="text">Do you like dogs?</div>
        </a>
    </div>
    <div class="mySlide">
        <div class="numbertext">3 / 3</div>
        <img src="img/img13.jpg" alt="certainly it is not a dog">
        <a href="src/funny_Moments.php" target="_blank">
            <div class="text">Try to not Laugh</div>
        </a>
        </div>
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>


<!-- If you can Make a Wacht-->
<!--TODO WHATCH HERE-->
<div class="watch"></div>

<!-- Who is this pokemon?-->
<!-- ADD A FILTER TO A RANDOM PHOTO AND WHEN CLIKED JUST REMOVE THE FILTER-->
<!--TODO POKEMON HERE-->

<script src="script/main.js"></script>
</body>
</html>