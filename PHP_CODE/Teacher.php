<?php
session_start();
 
require_once('../Database/Connection.php');
require_once('../PHP_CODE/Manager.php');

$teacher_first_name=$_POST['first_name'];
$teacher_mid_name=$_POST['middle_name'];
$teacher_third_name=$_POST['third_name'];
$teacher_family_name=$_POST['family_name'];
$teacher_gender=$_POST['gender'];
$teacher_dob=date('Y-m-d',strtotime($_POST['teacher_dob']));
$teacher_email=$_POST['teacher_email'];
$teacher_phone_number=$_POST['teacher_phone'];
$teacher_password=$_POST['teacher_password'];
 
$teacher=new Manager();
$teacher->AddTeacher($teacher_first_name,$teacher_mid_name,$teacher_third_name,$teacher_family_name,$teacher_gender,$teacher_dob,$teacher_email,$teacher_phone_number,$teacher_password);

?>