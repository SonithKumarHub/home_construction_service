<?php
include '../config.php';
$admin=new Admin();

$asd=$_GET['id'];
$status=$_GET['status'];
$fgh=$admin->cud("UPDATE `labour` SET `status`='$status' WHERE labour.l_id='$asd'","UPDATED");
		echo"<script> alert('status updated successfull');window.location='../admin/manage_labour.php'</script>";


?>