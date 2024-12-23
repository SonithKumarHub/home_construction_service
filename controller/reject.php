<?php 


include('../config.php');
$admin=new Admin();
$id=$_GET['id'];

$t=$admin->cud("UPDATE request SET status=2 where r_id='$id'","dd");	
echo"<script> alert('Approved successfully');window.location='../labour/view_request.php';</script>";

?>