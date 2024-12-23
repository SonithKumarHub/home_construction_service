<?php
include '../config.php';
$admin=new Admin();

 $name=$_POST['username'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$image=$_FILES["image"]["name"];
$password=$_POST['password'];

move_uploaded_file($_FILES['image']['tmp_name'],"../image".$_FILES['image']['name']);




$abcd=$admin->ret("SELECT * FROM `client` WHERE `email`='$email'");
$defg=$abcd->fetch(PDO::FETCH_ASSOC);
$gfhi=$abcd->rowCount();
if($gfhi > 0){
	
echo"<script> alert('email already exist');window.location='../registration/login/client_login.php'</script>";
	}else{
		$ins=$admin->cud("INSERT INTO `client`( `c_name`, `email`, `address`, `phone`, `image`, `password`) VALUES ('$name','$email','$address','$phone','$image','$password')","ins");

echo"<script> alert('registration successfull');window.location='../registration/login/client_login.php'</script>";
	}





?>