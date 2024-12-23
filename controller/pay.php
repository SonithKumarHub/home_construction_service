<?php
include '../config.php';
$admin=new Admin();

$rid=$_POST['rid'];
$lid=$_POST['lid'];
$amt=$_POST['amt'];
$stmt=$admin->cud("INSERT INTO `tolpay`( `r_id`, `amount`, `l_id`) VALUES ('$rid','$amt','$lid')","ins");
$stmt=$admin->cud("UPDATE `request` SET `status`='7' WHERE `r_id`='$rid'","update");
		echo"<script> alert('Paid successfull');window.location='../admin/viewreq.php'</script>";

?>