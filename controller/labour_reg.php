<?php
include '../config.php';
$admin=new Admin();

 $name=$_POST['username'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$designation=$_POST['designation'];
$cost=$_POST['cost'];
$image=$_FILES["image"]["name"];
move_uploaded_file($_FILES['image']['tmp_name'],"../image".$_FILES['image']['name']);




$abc=$admin->ret("SELECT * FROM `labour` WHERE `email`='$email'");
$def=$abc->fetch(PDO::FETCH_ASSOC);
$gfh=$abc->rowCount();
if($gfh > 0){
	
echo"<script> alert('email already exist');window.location='../registration/login/labour_login.php'</script>";
	}else{
		$ins=$admin->cud("INSERT INTO `labour`(`l_name`, `email`, `address`, `phone`, `image`, `password`, `designation`,`cost`) VALUES ('$name','$email','$address','$phone','$image','$password','$designation','$cost')","ins");

echo"<script> alert('registration successfull');window.location='../registration/login/labour_login.php'</script>";
	}





?>