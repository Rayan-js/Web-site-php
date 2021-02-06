<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="header-main">
        <div class="nav-links">
            <li ><a href="../home.php">Home</a></li>
        </div>
           <!-- Log out-->
    
           <button  class="loginbtn3" ><a href="index.php"> Log out</a></button>
    
            
    </div>
</div>
<!--text a bit about the site-->

<h1> Questions</h1>
    <p>If you have some question, please let us know, by send us a message!
    </p>
    </div>
    <!--text a bit about the site-->

    
    <!--contact send email--> 
    <div class="forC">
        <H1 class="question">Any Question? Contact us</H1>
        <form action="" class="formContact">
            <label for="Cname">Name:</label>
            <br>
            <input type="text" placeholder="Name" name="Cname" id="Cname">
            <br>
            <label for="Cemail">Email:</label>
            <br>
            <input type="text"placeholder="email" name="Cemail" id="Cemail">
            
            <br>
            <label for="cText">Text here:</label><br>
            <textarea name="cText" id="cText" cols="30" rows="10"></textarea>
            <br>
            
            <input type="submit" value="Submit" id="submitContact">

        </form>
    </div>
    <script src="../script/main.js"></script>
</body>
</html>