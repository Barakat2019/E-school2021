<?php
session_start();
require_once('../Database/Connection.php');


if(isset($_POST['login']))
{
  
   $username=$_POST['username'];
   $password=$_POST['password'];

   
   $username=stripslashes($username);
   $password=stripslashes($password);
   $password=md5($password);

  
   echo '<br>';
   //teacher page
   $select_user_teacher="select username,password from users where username=:username and password=:password and role_id=1";
   $result_teacher=$conn->prepare($select_user_teacher);
   $result_teacher->execute(array('username'=>$username,'password'=>$password));

   $count_teacher=$result_teacher->rowCount();
   
  //student page
  $select_user_student="select username,password from users where username=:username and password=:password and role_id=2";
  $result_student=$conn->prepare($select_user_student);
  $result_student->execute(array('username'=>$username,'password'=>$password));

  $count_student=$result_student->rowCount();

  if($count_teacher==0 || $count_student==0)
   {
       header('Location:http://localhost/E-School/Pages/login.php?message=Userdoesntexistinourdatabase');
       
   }
  if($count_student>0)
  {
    session_start();
    $_SESSION['username']=$username;
      header('Location:http://localhost/E-School/Pages/Student.php');

  }
  if($count_teacher>0)
  {
       header('Location:http://localhost/E-School/Pages/Teacher.php');
  }
  

}
 
?>