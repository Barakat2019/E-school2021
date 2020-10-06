<?php
include('Connection.php');

try
{
    //Create Database
    $sql_created_db="create database eschool";
    $conn->exec($sql_created_db);
    echo "Database created successfully";
}
catch(PDOException $e)
{
    echo $sql."<br>".$e->getMessage();
}

$conn=null;
?>