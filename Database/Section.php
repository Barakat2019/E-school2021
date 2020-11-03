<?php
   include_once('Connection.php');
try
{
//create section table
        $sql_create_section="create table section(
            section_id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            section_name varchar(255),
            number_of_student integer,
            class_id int,
            foreign key(class_id) references class(class_id)
            )";
        $conn->exec($sql_create_section);
      echo "Table Class created successfully";
}
catch(PDOException $e)
{
   echo $sql."<br>".$e->getMessage();
}
 
$conn=null;
   
?>