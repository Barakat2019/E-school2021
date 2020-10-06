<?php
 
    require_once('../Database/Connection.php');
    require_once('../PHP_CODE/Manager.php');
    
    $classname=$_POST['class_name'];
    $section=$_POST['section'];
    $num_of_student=$_POST['num_of_stud'];
    
    

        $man1=new Manager();
        print_r($man1->AddClass($classname,$section,$num_of_student));
       
  
    
          
    
    
 


 
 
?>
