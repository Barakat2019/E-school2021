<?php
require_once('../Database/Connection.php');
session_start();

class Manager
{
   
    private $FirstName;
    Private $SecondName;
    Private $ThirdName;
    private $FamilyName;
    Private $gender;
    private $dob;
    private $nationality;
    private $area;
    private $class;
    private $phone_number;
    private $email;

    private $dr_first_name;
    private $dr_mid_name;
    private $dr_last_name;
    private $dr_phone_number;
    private $dr_bus_number;
    private $dr_area;

    private $ClassName;
    private $Section;
    Private $Number_of_Student;



    
    public function getClassName()
    {
        return $this->ClassName;
    }

    public function SetClassName($ClassName)
    {
        $this->ClassName=$ClassName;
    }

    public function getSection()
    {
        return $this->Section;
    }
    public function setSection($section)
    {
        $this->section=$section;
    }

    public function getNumberOfStudent()
    {
        return $this->Number_of_Student;
    }

    public function setNumberOfStudent($value)
    {
        if($value>0)
        {
            $this->Number_of_Student=$value;
        }
        
    }


    public function get_dr_first_name()
    {
        return $this->dr_first_name;
    }
    public function set_dr_first_name($firstname)
    {
      $this->FirstName=$firstname;
    }

    public function get_dr_mid_name()
    {
        return $this->dr_mid_name;
    }
    public function set_dr_mid_name($midname)
    {
      $this->dr_mid_name=$midname;
    }


    public function get_dr_last_name()
    {
        return $this->dr_last_name;
    }
    public function set_dr_last_name($lastnameval)
    {
      $this->dr_last_name=$lastnameval;
    }

    public function get_dr_phone_number()
    {
        return $this->dr_last_name;
    }
    public function set_dr_phone_number($phone_num_val)
    {
      $this->dr_phone_number=$phone_num_val;
    }
    public function get_dr_bus_number()
    {
        return $this->dr_bus_number;
    }
    public function set_dr_bus_number($busnumval)
    {
      $this->dr_last_name=$busnumval;
    }

    public function get_dr_area()
    {
        return $this->dr_area;
    }
    public function set_dr_area($area)
    {
      $this->dr_area=$area;
    }

    public function AddClass($ClassName,$section,$Number_of_Student)
    {
             
            if(isset($ClassName)&&isset($section)&&isset($Number_of_Student))
            {
                if($Number_of_Student>0)
                {
                    try
                    {
                       global $conn;
                        $sql = "INSERT INTO class(class_name,section,number_of_student)VALUES ('$ClassName','$section','$Number_of_Student')";
           
                        $conn->exec($sql);
                      
                    // use exec() because no results are returne
                   }
                   catch(PDOException $e) 
                    {
                      echo $sql . "<br>" . $e->getMessage();
                    }
             
                   $conn = null;
               
                 return header('Location:../Pages/Admin.php')."Class  Added successfully";            
                }
                else
                {
                     return "Number of student must be greater than 0";
                }
                
            }
            else
            {
                echo  "<p>Please fill the field info</p>";
            }
    

    }


    public function getFirstName()
    {
        return $this->FirstName;
    }
    public function setFirstName($fname)
    {
      $this->FirstName=$fname;
    }

    public function getSecondName()
    {
        return $this->SecondName;
    }

    public function setSecondName($sname)
    {
        $this->SecondName=$sname;
    }

    public function getThirdName()
    {
        return $this->ThirdName;
    }

    public function setThirdName($thname)
    {
        $this->ThirdName=$thname;
    }

    public function getFamilyName()
    {
        return $this->FamilyName;
    }

    public function setFamilyName($familyname)
    {
         $this->FamilyName=$familyname;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender=$gender;
    }

    public function getdob()
    {
       return $this->dob;
    }

    public function setdob($dob)
    {
        $this->dob=$dob;
    }

    public function getNationality()
    {
        return $this->nationality;
    }
    public function setNationality($nationality)
    {
        $this->nationality=$nationality;
    }

    public function getArea()
    {
        return $this->area;
    }
    public function setArea($area)
    {
        $this->area=$area;
    }

    public function getClass()
    {
        return $this->class;
    }
    public function setClass($class)
    {
        $this->class=$class;
    }

    public function getPhoneNumber()
    {
        return $this->phone_number;
    }
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number=$phone_number;
    }

    public function AddStudent($firstname,$secondname,$thirdname,$familyname,$gender,$dob,$nationality,$email,$area,$phone_number,$class_id,$section,$password)
    {
        
            
             try
             {
                global $conn;
                $query="select max(student_id) as `maxnumber` from `student`";
                $rows=$conn->query($query);
                $result=$rows->fetchAll();

                $result1=$result[0]['maxnumber']+1;
                
                if(is_numeric($phone_number))
                {
                    $value_phone_number=$phone_number;
                }
                else
                {
                     header('location:http://localhost/E-School/PHP_CODE/Student.php?message=invalid phone number');
                }
                $hash_std_pass=md5($password);

               
                $sql_insert_student = "INSERT INTO student(student_id,first_name,second_name,third_name,family_name,gender,date_of_birth,nationality,email,area,phone_number,class_id,section,password,password_text)VALUES 
                ('$result1','$firstname','$secondname','$thirdname','$familyname','$gender','$dob','$nationality','$email','$area','$value_phone_number','$class_id','$section','$hash_std_pass','$password');";

              $conn->exec($sql_insert_student);
                
                
                
             }
             catch(PDOException $e) 
             {
                 echo "Not pass";
             }
          
             return header('Location:../Pages/Admin.php')."Student  Added successfully";
      
         


    }

    //Add Teacher function
    public function AddTeacher($teacher_first_name,$teacher_sec_name,$teacher_third_name,$teacher_family_name,$teacher_gender,$teacher_dob,$teacher_email,$teacher_phone_number,$teacher_password)
    {
        try
        {
            global $conn;
            $query_teacher="select max(teacher_id) as `maxnumber` from `teacher`";
            $rows=$conn->query($query_teacher);
            $result=$rows->fetchAll();
            $result1=$result[0]['maxnumber']+1;
            $hash_tech_pass=md5($teacher_password);

            //Add Teacher
            $sql_insert_teacher="INSERT INTO teacher(teacher_id,first_name,second_name,third_name,family_name,gender,date_of_birth,email,phone_number,password,password_text)VALUES 
            ('$result1','$teacher_first_name','$teacher_sec_name','$teacher_third_name','$teacher_family_name','$teacher_gender','$teacher_dob','$teacher_email','$teacher_phone_number','$hash_tech_pass','$teacher_password');";
            $conn->exec($sql_insert_teacher);

        }
        catch(PDOException $e)
        {
            
            echo "Not Inserted".$e->getMessage();
        }
        return header('Location:../Pages/Admin.php',"Teacher  Added successfully");

    }
    //Add driver
    public function AddDriver($dr_first_name,$dr_mid_name,$dr_last_name,$dr_phone_number,$dr_bus_number,$dr_area)
    {

       try {
        global $conn;

        $query_driver="select max(driver_id) as `maxnumber` from `driver`";
        $sql = "INSERT INTO driver (driver_first_name,driver_middle_name,driver_last_name,phone_number,bus_number,area)
        VALUES ('$dr_first_name','$dr_mid_name','$dr_last_name','$dr_phone_number','$dr_bus_number','$dr_area')";
        // use exec() because no results are returned
        $conn->exec($sql);
         
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      
      $conn = null;
    
    }
    
}


?>