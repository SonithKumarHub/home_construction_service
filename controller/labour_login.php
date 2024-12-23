<?php 
include '../config.php';
$admin=new Admin();
 $email=$_POST['email'];
 $password=$_POST['password'];

$abc=$admin->ret("SELECT * FROM `labour` WHERE `email`='$email' AND `password`='$password'");
$def=$abc->fetch(PDO::FETCH_ASSOC);
$gfh=$abc->rowCount();
if($gfh > 0){
	if($def['status']==0){
echo"<script> alert('wait for approval');window.location='../registration/login/labour_login.php'</script>";
	}else{
		$lid=$def['l_id'];
		$_SESSION['lid']=$lid;
		echo"<script> alert('Login successfull');window.location='../labour/l_index.php'</script>";
	}

}else{

echo"<script> alert('something went wrong');window.location='../registration/login/labour_login.php'</script>";

}
?>