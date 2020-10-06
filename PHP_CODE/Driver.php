<?php
require_once('../Database/Connection.php');
require_once('../PHP_CODE/Manager.php');

$dr_first_name=$_POST['firstname'];
$dr_mid_name=$_POST['mid_name'];
$dr_last_name=$_POST['last_name'];
$dr_phone_number=$_POST['phone'];
$dr_bus_number=$_POST['bus'];
$dr_area=$_POST['area'];

$driver=new Manager();
$driver->AddDriver($dr_first_name,$dr_mid_name,$dr_last_name,$dr_phone_number,$dr_bus_number,$dr_area);

?>