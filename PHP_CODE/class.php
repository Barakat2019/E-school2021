<?php
 
    require_once('../Database/Connection.php');
    require_once('../PHP_CODE/Manager.php');
    
    $classname=$_POST['class_name'];
        $man1=new Manager();
        print_r($man1->AddClass($classname));    

    $section_name=$_POST['section_name'];
    $number_of_student=$_POST['num_of_stud'];
    $class_id=$_POST['class_id'];
    
    $man2=new Manager();
    print_r($man2->AddSection($section_name,$number_of_student,$class_id));
?>
