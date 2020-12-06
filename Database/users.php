<?php
include('Connection.php');

//create table Teacher
try
{
    //Create Table Teacher
    $sql="create table users(
        username varchar(255) PRIMARY KEY,
        password varchar(255)
    )";
    
    // use exec() because no results are returned
  $conn->exec($sql);
   echo "Table Users created successfully";
}
catch(PDOException $e)
{
   echo $sql."<br>".$e->getMessage();
}
 
$conn=null;

?>