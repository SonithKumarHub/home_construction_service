<?php
include '../config.php';
$admin = new Admin();
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
$cid=$_SESSION['cid'];
$jkl=$admin->cud("INSERT INTO `review`(`c_name`,`email`,`review`,`c_id`)VALUES('$name','$email','$feedback','$cid')","feed");
echo"<script> alert('Feedback Sent Successfully');window.location='../index/index.php'</script>";
?>