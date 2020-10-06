<?php
include('Connection.php');

//create table Teacher
try
{
    //Create Table Teacher
    $sql="create table teacher(
        teacher_id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name varchar(255),
        second_name varchar(255),
        third_name varchar(255),
        family_name varchar(255),
        gender enum('M','F'),
        date_of_birth date,
        email varchar(255),
        phone_number varchar(255),
        password varchar(255),
        password_text varchar(255)
    )";
    
    // use exec() because no results are returned
  $conn->exec($sql);
   echo "Table Teacher created successfully";
}
catch(PDOException $e)
{
   echo $sql."<br>".$e->getMessage();
}
 
$conn=null;

?>