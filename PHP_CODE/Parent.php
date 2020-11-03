<?php
 require_once '../Database/Connection.php';
 require_once '../PHP_CODE/Manager.php';

 $pa_ft_name=$_POST['parent_first_name'];
 $pa_sd_name=$_POST['parent_second_name'];
 $pa_td_name=$_POST['parent_third_name'];
 
 $pa_fy_name=$_POST['parent_family_name'];
 $pa_ph_number=$_POST['parent_phone'];
 $pa_sd_id=$_POST['student_id'];
 $pa_email=$_POST['parent_email'];
 $pa_password=$_POST['parent_password'];
$parent=new Manager();
$parent->AddParent($pa_ft_name,$pa_sd_name,$pa_td_name,$pa_fy_name,$pa_ph_number,$pa_email,$pa_password,$pa_sd_id);

 
?>