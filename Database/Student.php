<?php
include('Connection.php');

//create table student
try
{

    //Create Table student
    $sql="create table student (
        student_id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name varchar(255),
        second_name varchar(255),
        third_name varchar(255),
        family_name varchar(255),
        gender enum('M','F'),
        date_of_birth date,
        nationality enum('1','2'),
        email varchar(255),
        area varchar(255),
        phone_number varchar(255),
        class_id int not null,
        section varchar(255),
        password varchar(255),
        password_text varchar(255),
        FOREIGN KEY(class_id) REFERENCES class(class_id),
        FOREIGN KEY(section) REFERENCES class(section)
       
    )";
    
    // use exec() because no results are returned
  $conn->exec($sql);
   echo "Table Student created successfully";
}
catch(PDOException $e)
{
   echo $sql."<br>".$e->getMessage();
}
 
$conn=null;

?>