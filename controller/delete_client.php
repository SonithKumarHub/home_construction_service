<?php
include '../config.php';
$admin=new Admin();

$sda=$_GET['id'];
$erw=$admin->cud("DELETE FROM `client` WHERE `c_id`='$sda'","delete");
		echo"<script> alert('deleted successfull');window.location='../admin/manage_client.php'</script>";

?>