<?php
 
    require_once('../Database/Connection.php');
    require_once('../PHP_CODE/Manager.php');
    
    
    $section_name=$_POST['section_name'];
    $number_of_student=$_POST['num_of_stud'];
    $class_id=$_POST['class_id'];
    
    $man=new Manager();
    print_r($man->AddSection($section_name,$number_of_student,$class_id));
?>
