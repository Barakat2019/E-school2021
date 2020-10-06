<?php
  include('Connection.php');
//create table Class
try
{
    //Create Table Class
    $sql="create table class(
        class_id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        class_name varchar(255),
        section varchar(255),
        number_of_student integer
    )";
    
    // use exec() because no results are returned
  $conn->exec($sql);
   echo "Table Class created successfully";
}
catch(PDOException $e)
{
   echo $sql."<br>".$e->getMessage();
}
 
$conn=null;

?>