<?php
include '../config.php';
$admin=new Admin();

$date=date('Y-m-d');

$amount=$_POST['amount'];
$method='UPI';
$cid=$_SESSION['cid'];
$rid=$_POST['rid'];
$and=$admin->cud("INSERT INTO `payment`(`p_date`,`amount`, `p_method`, `c_id`,`rid`) VALUES ( '$date', '$amount', '$method', '$cid','$rid')","ins");


echo"<script>alert('payment successfull');window.location='../index/index.php'</script>";

?>