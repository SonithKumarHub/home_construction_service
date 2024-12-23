<?php
include '../config.php';
$admin=new Admin();

$asd=$_GET['id'];
$status=$_GET['status'];
$fgh=$admin->cud("UPDATE `client` SET `status`='$status' WHERE client.c_id='$asd'","UPDATED");
		echo"<script> alert('status updated successfull');window.location='../admin/manage_client.php'</script>";


?>