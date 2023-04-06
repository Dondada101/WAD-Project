<?php
require_once("login.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Page</title>
    <script src="https://kit.fontawesome.com/333c1941e5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div id="menubar" class="fas fa-bars"></div>
        <a href="#" class="logo"><span>Health</span>Service Info</a>
        <nav class="navbar">
            <!-- <a href="#home">Home</a> -->
            <!-- <a href="tprice.php">Treatment Price</a> -->
            <a href="treatments.php">Treatments</a>
            <a href="insurance.php">Insurance</a>
        </nav>
        <div class="icons">
            <i class="fas fa-search" id="searchbtn"></i>
            <i class="fas fa-user" id="loginbtn"></i>
        </div>
        <form action="" class="searchbarcon">
            <input type="search" id="search-bar" placeholder="search here">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>
    <div class="loginformcon">
        
        <i class="fas fa-times" id="fclose"></i>

        <form action="login.php" method="post">
            <h3>login</h3>
            <?php if($is_invalid);?>
             <em>Invalid login</em>
             <?php T_ENDIF; ?>
            <input type="email" name="email" class="box" placeholder="Enter your email" value="<?= htmlspecialchars($_POST["email"]??"")?>">
            <input type="password" name="password" class="box" placeholder="Enter password">
            <input type="submit" value="Login" class="lbtn">
            <p>Forgot Password?<a href="">Change Password</a></p>
            <p>Dont have an Acccount?<a href="">Register</a></p>
        </form>
    </div>




    
    <section class="home" id="home">
        <div class="content">
            <h3>Hospital Services Info</h3>
            <p>Access information on insurance and treatment</p>
            <a href="#" class="btn">Discover more</a>
        </div>
        <div class="getStarted"><p>Click here to register</p><a href="#"  id="gStarted">Get Started</a></div>
       <div class="controls">
        <span class="slider active"  src="hpage.jpeg"></span>
        <span class="slider"  src="treatment.jpeg"></span>
        <span class="slider"  src="insurance.jpeg"></span>
       </div>
       <div class="imgcon">
        <img src="hpage.jpeg" alt="" id="imgSlider" >
       </div>
       <div class="signupformcon">
        
        <i class="fas fa-times" id="sclose"></i>

        <form action="signup.php" method="post">
            <h3>login</h3>
            <!-- <?php if($is_invalid);?>
             <em>Invalid login</em>
             <?php T_ENDIF;?> -->
             <input type="text" name="uname"  class="box" placeholder="Enter Username">
            <input type="email" name="email" class="box" placeholder="Enter your email" >
            <input type="password" name="password" class="box" placeholder="Enter password">
            <input type="password" name="cpassword" class="box" placeholder="Enter password">
            <input type="submit" value="Sign Up" class="sbtn">
            <p>Forgot Password?<a href="">Change Password</a></p>
            <p>Dont have an Acccount?<a href="">Register</a></p>
        </form>
    </div>
    </section>
    <script type="" src="response.js"></script>
</body>
</html>