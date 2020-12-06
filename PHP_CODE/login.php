<?php
session_start();
require_once('../Database/Connection.php');


if(isset($_POST['login']))
{
   echo 'login successfully';
   $email=$_POST['email'];
   $password=$_POST['password'];

   $email=stripslashes($email);
   $password=stripslashes($password);
   $password=md5($password);
   echo '<br>';
   $select_user="select email,password from student where email=:email and password=:password";
   $result=$conn->prepare($select_user);
   $result->execute(array('email'=>$email,'password'=>$password));

   $count=$result->rowCount();
   
   if($count>0)
   {
       header('Location:http://localhost/E-School/Pages/Student.php');
   }
   else
   {
       echo 'This student not exist in our databse';
   }
   //check teacher
   //select email,password from teacher where email=:email and password=:password 
   $select_teacher="select email,password from teacher where email=:email and password=:password";
   $result_teacher=$conn->prepare($select_user);
   $result_teacher->execute(array('email'=>$email,'password'=>$password));

   $count_teacher=$result->rowCount();
   echo $count_teacher;
   
   if($count_teacher>0)
   {
       header('Location:http://localhost/E-School/Pages/Teacher.php');
   }
   else
   {
       echo 'This Teacher not exist in our databse';
   }


}






 
 
 
?>