<?php 
include '../config.php';
$admin=new Admin();
 $email=$_POST['email'];
 $password=$_POST['password'];

$abcd=$admin->ret("SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'");
$defg=$abcd->fetch(PDO::FETCH_ASSOC);
$gfhi=$abcd->rowCount();
if($gfhi > 0){
	
		echo"<script> alert('Login successfull');window.location='../admin/index_dashboard.php'</script>";
	

}else{

echo"<script> alert('Invalid email and password');window.location='../admin/admin_login.php'</script>";

}
?>