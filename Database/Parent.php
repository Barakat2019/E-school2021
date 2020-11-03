<?php
include('Connection.php');
//create parent table
try
{
    //create parent table
    $sql_create_table="create table parent(
        parent_id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        parent_first_name varchar(255),
        parent_second_name varchar(255),
        parent_third_name varchar(255),
        parent_family_name varchar(255),
        parent_phone_number varchar(255),
        email varchar(255),
        password varchar(255),
        password_text varchar(255),
        student_id int(10) not null,
        foreign key(student_id) references student(student_id)
    )";
    // use exec() because no results are returned
  $conn->exec($sql_create_table);
  echo "Table Parent created successfully";
}
catch(PDOException $e)
{
   echo $sql_create_table."<br>".$e->getMessage();
}
?>