<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $image = $_POST['image'];
 
 require_once('config.php');
 
 $sql ="SELECT id FROM tb_image_user ORDER BY id ASC";
 
 $res = mysqli_query($con,$sql);
 
 
 $milisecond = round(microtime(true) * 1000);

 $path = "uploads/$milisecond.png";
 
 $actualpath = "http://192.168.100.42/uploadImage/$path";
 
 $sql = "INSERT INTO tb_image_user (image) VALUES ('$actualpath')";
 
 if(mysqli_query($con,$sql)){
 file_put_contents($path,base64_decode($image));
 echo "Successfully Uploaded";
 }
 
 mysqli_close($con);
 }else{
 echo "Error";
 }