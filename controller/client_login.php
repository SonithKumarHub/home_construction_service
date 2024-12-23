<?php 
include '../config.php';
$admin=new Admin();
 $email=$_POST['email'];
 $password=$_POST['password'];

$abcd=$admin->ret("SELECT * FROM `client` WHERE `email`='$email' AND `password`='$password'");
$defg=$abcd->fetch(PDO::FETCH_ASSOC);
$gfhi=$abcd->rowCount();
if($gfhi > 0){
	if($defg['status']==0){
echo"<script> alert('wait for approval');window.location='../registration/login/client_login.php'</script>";
	}else{
		$cid=$defg['c_id'];
		$_SESSION['cid']=$cid;
		echo"<script> alert('Login successfull');window.location='../index/index.php'</script>";
	}

}else{

echo"<script> alert('something went wrong');window.location='../registration/login/client_login.php'</script>";

}
?>