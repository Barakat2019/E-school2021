<?php
include_once('Connection.php');

//create table Driver
try
{
    //Create Table Driver
    $sql="create table driver(
        driver_id int(10) UNSIGNED AUTO_INCREMENT,
        driver_first_name varchar(255),
        driver_middle_name varchar(255),
        driver_last_name varchar(255),
        phone_number varchar(255),
        bus_number varchar(10),
        area varchar(255),
        password varchar(255),
        password_text varchar(255)
        primary key(driver_id,phone_number)
    )";
    
    // use exec() because no results are returned
  $conn->exec($sql);
   echo "Table Driver created successfully";
}
catch(PDOException $e)
{
   echo $sql."<br>".$e->getMessage();
}
 
$conn=null;

?>