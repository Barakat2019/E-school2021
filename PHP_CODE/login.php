<?php
session_start();
require_once('../Database/Connection.php');


if(isset($_POST['login']))
{
    if(empty($email)||empty($password))
    {
        $message='<lable>All field is required</label>';
    }
    else
    {
        $query="select * from student where email=".$email."and password=".$password;
        $result=$conn->prepare($query);
        $result->execute(
            array('email'=>$email,'password'=>$password)
        );
        $count=$result->rowCount();
        if($count>0)
        {
            $_SESSION['email']=$email;
            header("location:login_success.php");
        }
        else
        {
            $message='<label>Username or password is wrong</label>';
        }
        
    }
}






 
 
 
?>