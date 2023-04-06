<?php
require("connect.php");
session_start();
if(isset($_SESSION["user_id"])){
    $mysqli= require __DIR__ ."/connect.php";
    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION["user_id"]}";
            $result = $mysqli->query($sql);
            $user=$result->fetch_assoc();
}
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treatment</title>
    <script src="https://kit.fontawesome.com/333c1941e5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div id="menubar" class="fas fa-bars"></div>
        <a href="#" class="logo"><span>Health</span>Service Info</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <!-- <a href="tprice.php">Treatment Price</a> -->
            <a href="insurance.php">Insurance</a>
        </nav>
        <div class="icons">
            <i class="fas fa-search" id="searchbtn"></i>
            <!-- <i class="fas fa-user" id="loginbtn"></i> -->
        </div>
        <form action="" method="POST" class="searchbarcon">
            <input type="search" id="search-bar" placeholder="search here" name="find">
            <button type="submit" name="searchbtn"><label for="search-bar" class="fas fa-search"></label></button>
        </form>
         <div class="logout"> 
                <p>Click here to: <a href="logout.php">log Out</a></p>
            </div>
    </header>
    <section class="treatmentPage">
        
    <div class="content">
        <?php if(isset($user)): ?>
            <h3>Hello <?=htmlspecialchars($user["uname"])?></h3>
           
            <?php else:  
                header("Location:index.php");
                ?>
                <script>alert('Try signing up or log in');</script>
                <?php endif;?>
    </div>
    <div class="treatmentcon">
    <?php
        if(isset($_POST['searchbtn']) && isset($_POST['find'])){
            $search= $mysqli->real_escape_string($_POST['find']);
            $sql="SELECT * FROM hospitals WHERE hname LIKE '%$search%' OR illness LIKE '%$search%'";
            $result=$mysqli->query($sql);
            $queryResult = mysqli_num_rows($result);
            echo "Results found ".$queryResult." ";
            if($queryResult>0){
                while($row=mysqli_fetch_assoc($result)){
                    echo "<br><div class='treatmentbox'>
                    <h3>".$row['hname']."</h3>
                    <p><span>Illness</span>:".$row['illness']."</p>
                    <p><span>Treatment Price</span>:".$row['tprice']."</p>
                    <p><span>Hospital Lvl</span>:".$row['hlvl']."</p><br><br>
                </div>";
                }
            }
        }
        ?>
        <!-- <?php
        $sql="SELECT * FROM hospitals";
        $result=$mysqli->query($sql);
        $QueryResults=mysqli_num_rows($result);
        if($QueryResults){
            while($rows=mysqli_fetch_assoc($result)){
                echo "<div class='treatmentbox'>
                   <h3>".$rows['hname']."</h3>
                    <p>".$rows['illness']."</p>
                    <p>".$rows['tprice']."</p>
                    <p>".$rows['hlvl']."</p>
                </div>";
            }
        }
        ?> -->
        <!-- <?php
        if(isset($_POST['searchbtn'])){
            $search= $mysqli->real_escape_string($_POST['find']);
            $sql="SELECT * FROM hospitals WHERE hname LIKE '%$search%' OR illness LIKE '%$search%";
            $result=$mysqli->query($sql);
            $queryResult = $mysqli->num_rows($result);
            echo "There are".$queryResult. "results";
            if($queryResult>0){
                while($row=$mysqli->fetch_assoc($result)){
                    echo "<div class='treatmentbox'>
                   <h3>".$rows['hname']."</h3>
                    <p>".$rows['illness']."</p>
                    <p>".$rows['tprice']."</p>
                    <p>".$rows['hlvl']."</p>
                </div>";
                }
            }
        }
        ?> -->
    </div>
    </section>
    <script type="" src="response.js"></script>
</body>
</html>