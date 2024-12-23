<?php
include '../config.php';
$admin=new Admin();

 $quotation=$_POST['quatation'];
 $rid=$_POST['rid'];
 $cid=$_POST['cid'];

$date=date('Y-m-d');
$l_id=	$_SESSION['lid'];
$stmt=$admin->cud("INSERT INTO `quotation`( `quotation`, `l_id`, `c_id`, `date`, `r_id`) VALUES ('$quotation','$l_id','$cid','$date','$rid')","ins");


		echo"<script> alert('quatation send successfull');window.location='../labour/quatation.php'</script>";

?>