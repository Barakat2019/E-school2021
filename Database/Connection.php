<?php
$servername="localhost";
$username="root";
$password="";
$dbname="eschool";
 
//create connection
try
{
    global $conn;
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return "Connected Successfully";

}

catch(PDOException $e)
{
    echo "Connection failed: ".$e->getMessage();
}
?>