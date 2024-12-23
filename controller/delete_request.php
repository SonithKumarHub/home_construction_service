<?php
include '../config.php';
$admin=new Admin();

$sda=$_GET['id'];
$erw=$admin->cud("DELETE FROM `request` WHERE `r_id`='$sda'","delete");
		echo"<script> alert('deleted successfull');window.location='../admin/manage_request.php'</script>";

?>