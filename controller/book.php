<?php
include '../config.php';
$admin = new Admin();
$name=$_POST['c_name'];
 $address=$_POST['address'];
 $phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$day=$_POST['days'];
$req=$_POST['req'];
$id=$_POST['lid'];
$cid=$_SESSION['cid'];

$str=$admin->ret("SELECT * FROM `labour` WHERE `l_id`='$id'");
$def=$str->fetch(PDO::FETCH_ASSOC);

$cost=$def['cost']*$day;
$jkl=$admin->Rcud("INSERT INTO `request`(`request`, `l_id`, `c_id`, `date`, `time`, `address`, `days`, `c_name`, `phone`) VALUES ('$req','$id', '$cid', '$date', '$time', '$address', '$day', '$name', '$phone')","sent");

$fgh=$admin->cud("UPDATE `labour` SET `status`='3' WHERE labour.l_id='$id'","UPDATED");

echo"<script> alert('Booked successfully');window.location='../index/payment.php?amt=$cost&rid=$jkl'</script>";

?>
