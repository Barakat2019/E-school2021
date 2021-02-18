<?php
   include_once('Connection.php');
try
{
//create section table
        $sql_create_section="create table role(
            role_id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            role_name varchar(50)
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