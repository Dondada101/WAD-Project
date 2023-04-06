<?php
require_once("connect.php");
if(isset($_POST['submit'])){
    $hname= $_POST['hname'];
    $illness=$_POST['illness'];
    $tprice=$_POST['tprice'];
    $hlvl=$_POST['hlvl'];
    var_dump($_POST);
    // if($_FILES['hIcon']['error']===4) {
    //     echo "<script>alert('Image doesnot exist');</script>";
    // } else{
    //     $fileName=$_FILES["hIcon"]["name"];
    //     $fileSize=$_FILES["hIcon"]["size"];
    //     $fileTmpName=$_FILES["hIcon"]["tmp_name"];
    //     $alloweExtension=['jpeg','jpg','png'];
    //     $imgExt=explode('.',$fileName);
    //     $imgExt=strtolower(end($imgExt));
    //     if(in_array($imgExt,$alloweExtension)){
    //         echo "<script>alert('Unaccepted image extension');</script>";
    //     }elseif($fileSize > 1000000){
    //         echo "<script>alert('Image size is too big!');</script>";
    //     }else{
    //         $newimgName=uniqid();
    //         $newimgName .='.' .$imgExt;
    //         move_uploaded_file($fileTmpName,'img/' .$newimgName);
    //         $query= "INSERT INTO hospital VALUES('$newimgName','$hname','$illness','tprice','$hlvl')";
    //         $result=$mysqli->query($sql);
    //         echo "<script>alert('Insertion was Succesful');</script>";
    //     }
    // }
    $query= "INSERT INTO hospitals (hname,illness,tprice,hlvl)VALUES('$hname','$illness','$tprice','$hlvl')";
    $result=$mysqli->query($query);
    echo "<script>alert('Insertion was Succesful');</script>";
}else{
    echo "Error occured";
}