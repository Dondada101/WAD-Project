<?php
// function check_login($mysqli){
//     if(isset($_SESSION["user_id"])){
//         $mysqli= require __DIR__ ."/connect.php";
//         $sql = "SELECT * FROM users
//                 WHERE id = {$_SESSION["user_id"]}";
//                 $result = $mysqli->query($sql);
//                 if($result && mysqli_num_rows($result)>0){
//                     $user=$result->fetch_assoc();
//                     return $user;
//                 }
                
//     }
//     //redirect
//     header("Location:index.php");
//     die;
// }