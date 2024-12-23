<?php

include '../config.php';
$admin=new Admin();


session_destroy();
echo"<script> alert('Logged out successflly');window.location='../index/index.php'</script>";

 ?>