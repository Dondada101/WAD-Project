<?php
if(empty($_POST["uname"])){
    die("Name is requiired");
}
if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    die("Valid email is required");
}
if(strlen($_POST["password"])<8){
    die("Password must atleast be 8 characters");
}
if (!preg_match("/[a-z]/i",$_POST["password"])){
    die("PAssword must contain a letter");
}
if (!preg_match("/[0-9]/" ,$_POST["password"])){
    die("PAssword must contain a number");
}
if($_POST["password"]!==$_POST["cpassword"]){
    die("Password don't match");
}

$upassword=password_hash($_POST["password"], PASSWORD_DEFAULT);
$mysqli=require __DIR__ ."/connect.php";
$sql="INSERT INTO users(uname,email,upassword) 
      VALUES (?,?,?)";
$stmt = $mysqli->stmt_init();
if(!$stmt-> prepare($sql)){
    die("SQL error :" .$mysqli->error);
}
$stmt->bind_param("sss",
                  $_POST["uname"],
                  $_POST["email"],
                  $upassword);
if($stmt->execute()){
    echo "Sign up successful";
    header("Location:index.php");
    exit;
}
else{
    if($mysqli->errno=== 1062){
        die("Email already exists");
    }else{
        die($mysqli->error ." " .$mysqli->errno);
    }
   
}
echo "SIgnup successful"; 

print_r($_POST);
var_dump($upassword);
?>
