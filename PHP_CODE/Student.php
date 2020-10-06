<?php
 require_once('../Database/Connection.php');
 require_once('../PHP_CODE/Manager.php');


 
$std_first_name=$_POST['firstname'];
$std_sec_name=$_POST['secondname'];
$std_third_name=$_POST['thirdname'];
$std_family_name=$_POST['familyname'];
$std_gender=$_POST['gender'];
$std_dob=date('Y-m-d',strtotime($_POST['dob']));
$std_email=$_POST['std_email'];
$std_area=$_POST['std_area'];
$std_nationality=$_POST['nationality'];
$std_email=$_POST['std_email'];
$std_area=$_POST['std_area'];
$std_mobileno=$_POST['std_mobile'];
$std_class=$_POST['std_class'];
$std_section=$_POST['std_section'];
$std_password=$_POST['student_password'];

    $student=new Manager();
    print_r($student->AddStudent($std_first_name,$std_sec_name,$std_third_name,$std_family_name,$std_gender,$std_dob,$std_nationality,$std_email,$std_area,$std_mobileno,$std_class,$std_section,$std_password));
    
 




?>