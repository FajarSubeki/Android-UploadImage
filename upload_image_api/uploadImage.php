<?php
 
 require_once('config.php');

 
$image_name = $_POST['image_name'];
$image = $_POST['image'];

$path = "upload/$image_name.jpg";
$actualpath = "http://192.168.100.42/uploadImage/$path";
 
$sql = "insert into imagetable(img_name,img_path) values('$image_name','$actualpath');";
 
if(mysqli_query($con,$sql))
{
file_put_contents($path,base64_decode($image));
echo json_encode(array('response'=>"Successfully Uploaded..."));
}
else
{
echo json_encode(array('response'=>"Failed..."));
}
mysqli_close($con);
 
?>