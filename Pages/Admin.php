<?php
require_once('../PHP_CODE/Manager.php');
include_once('../Pages/Nav-Bar.php');
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Manager-<?php echo "Manager"; ?></title>
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="http://localhost/E-School/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="http://localhost/E-School/css/admin_student.css">
    <link rel="stylesheet" href="http://localhost/E-School/css/add_driver.css">

    <link rel="stylesheet" href="http://localhost/E-School/css/admin.css">
    <link rel="stylesheet" href="http://localhost/E-School/css/navigation-bar/style.css">
  <link rel="stylesheet" href="http://localhost/E-School/css/admin_class.css">

 
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
    $(function(){
    $("#datepicker").datepicker();
});
$(function(){
    $("#datepicker_st").datepicker();
});

    </script>
 <style>
 #map {
   width: 100%;
   height: 400px;
   background-color: grey;
 }
</style>
 
</head>
<body>
  <!-- tab Manager ,Teacher,Student -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="man-tab" data-toggle="tab" href="#manager" role="tab" aria-controls="home" aria-selected="true">Manager</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab" aria-controls="profile" aria-selected="false">Teacher</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="contact" aria-selected="false">Student</a>
  </li>
</ul>


<div class="tab-content" id="myTabContent">
  <!-- #region Manager -->
      <div class="tab-pane fade show active" id="manager" role="tabpanel" aria-labelledby="man-tab">manager
      <div class="row">
      <div class="col-2">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-class-tab" data-toggle="pill" href="#v-pills-class" role="tab" aria-controls="v-pills-home" aria-selected="true">Add Class</a>
          <a class="nav-link" id="v-pills-teacher-tab" data-toggle="pill" href="#v-pills-teacher" role="tab" aria-controls="v-pills-teacher" aria-selected="false">Add Teacher</a>
          <a class="nav-link" id="v-pills-student-tab" data-toggle="pill" href="#v-pills-student" role="tab" aria-controls="v-pills-student" aria-selected="false">Add Student</a>
          <a class="nav-link" id="v-pills-driver-tab" data-toggle="pill" href="#v-pills-driver" role="tab" aria-controls="v-pills-driver" aria-selected="false">Add Driver</a>
          <a class="nav-link" id="v-pills-parent-tab" data-toggle="pill" href="#v-pills-parent" role="tab" aria-controls="v-pills-parent" aria-selected="false">Add Parent</a>

        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-class" role="tabpanel" aria-labelledby="v-pills-class-tab">Add Class
             <!-- start Add class-->
              <form action="../PHP_CODE/class.php" method="POST">
                <div class="form-row">

                  <label class="col-2">Class Name</label>
                  <input type="text" name="class_name" id="class_name" class="class_name col-2">
                </div>
              
                <div class="form-row">
                  <label class="col-2">section</label>
                  <input type="text" name="section" id="section" class="class_name col-2">
                </div>

                <div class="form-row">
                  <label class="col-2">number of student</label>
                  <input type="text" name="num_of_stud" id="num_of_student" class="class_name col-2">
                </div>
                
                <div class="form">
                  <input type="submit" class="btn btn-primary" value="add class">
                </div>
                

              </form>     
             <!-- end class-->

          </div>
          <div class="tab-pane fade" id="v-pills-teacher" role="tabpanel" aria-labelledby="v-pills-teacher-tab">
            <!-- start Teacher-->
            <div class="bg-contact2" style="background-image:url('../image/bg-01.jpg');">
            <div class="container-contact2">
               <div class="wrap-contact2">
                 <form class="contact2-form validate-form needs-validation" action="../PHP_CODE/Teacher.php" method="POST" novalidate>
                    <span class="contact2-form-title">Add Teacher</span>
                   
                    <div class="wrap-input2 validate-input" data-validate="Name is required">
                      <input type="text" class="input2 has-val" name="first_name" id="validationTooltipFirstname" required>
                      <div class="invalid-tooltip">Please Type a first name</div>
                      <span class="focus-input2" data-placeholder="FIRST_NAME"></span>
                    </div>
                    

                    <div class="wrap-input2 validate-input" data-validate="Name is required">
                      <input type="text" class="input2 has-val" name="middle_name" id="validationTooltip02" required>
                      <div class="invalid-tooltip">Please Type a middle name</div>
                      <span class="focus-input2" data-placeholder="MIDDLE_NAME"></span>
                      
                    </div>

                    <div class="wrap-input2 validate-input" data-validate="Name is required">
                      <input type="text" class="input2 has-val" name="third_name" id="validationTooltip03" required>
                      <div class="invalid-tooltip">Please Type a third name</div>
                      <span class="focus-input2" data-placeholder="Third Name"></span>

                    </div>

                    <div class="wrap-input2 validate-input" data-validate="Name is required">
                      <input type="text" class="input2 has-val" name="family_name" id="validationTooltip04" required>
                      <div class="invalid-tooltip">Please Type a family name</div>
                      <span class="focus-input2" data-placeholder="Family Name"></span>
                    </div>


                    <div class="wrap-input2 validate-input" data-validate="Name is required">
                      <input type="password" class="input2 has-val" name="teacher_password" id="validationTooltip17" maxlength="10" required>
                      <div class="invalid-tooltip">Please Type a password</div>
                      <span class="focus-input2" data-placeholder="Password"></span>
                    </div>

          <div class="form-row">
             <label for="Gender" class="col-2">Gender</label>
             
             <div class="form-check-inline">
            
             <input class="form-check-input" type="radio" name="gender" id="gender" value="1" checked>
                <label class="form-check-label" for="gender">
                  Male
                </label>
                &nbsp;&nbsp;
               
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="2" checked>
                    <label class="form-check-label" for="gender">
                      Female
                    </label>
             </div>
          </div>
        

          <div class="form-row">
                 <label for="DOB" class="col-2">Date of Birth</label>
                 <input type="date"  name="teacher_dob" id="validationTooltip05" required>
                 <div class="invalid-tooltip" style="position: relative;">Please Select Date</div>
          </div>
          <div class="form-row">
                 <label for="email" class="col-2">Email</label>
                 <input type="email" name="teacher_email" class="form-control col-6" id="validationTooltip06" required>
                 <div class="invalid-tooltip" style="top: 0px;position: relative;">Please Enter Email</div>  
          </div>
         <br>
          <div class="form-row">
              <label for="phone">Phone Number</label>   
              <input type="text" name="teacher_phone" id="teacher_phone" class="form-control col-4" id="validationTooltip07" maxlength="10" onkeypress="javascript:return isNumber(event)" required>
              <div class="invalid-tooltip" style="position:relative">Please Enter phone number</div>
         </div>
            
        <br><br><br>

             <div class="container-contact2-form-btn">
					    	<div class="wrap-contact2-form-btn">
						   	<div class="contact2-form-bgbtn"></div>
						   	<button class="contact2-form-btn">
							    	Add Teacher
						   	</button>
						 </div>
					  </div>
                 </form>

               </div>
            </div>

          </div>
            <!-- end Teacher-->
          </div>

          <div class="tab-pane fade" id="v-pills-student" role="tabpanel" aria-labelledby="v-pills-student-tab">
            <!-- start form Add Student -->
            <div class="background">
          <div class="content-agileits">
              <h1 class="title">student registration Form</h1>
              <div class="left">                                                           
                <form class="contact2-form validate-form needs-validation" action="../PHP_CODE/Student.php" method="post" novalidate>
                  <div class="form-group">
                    <label for="firstname" class="control-label">First Name:</label>
                    <input id="validationTooltip07" class="form-control" type="text"  name="firstname" placeholder="First Name"  required>
                    <div class="invalid-tooltip" style="position: relative;">Please Enter first name</div>
                     <br>
                    <label for="secondname" class="control-label">Second Name:</label>
                    <input type="text" class="form-control" name="secondname" id="validationTooltip08" placeholder="Enter Second Name"  required>
                    <div class="invalid-tooltip" style="position: relative;">Please Enter Second Name</div>

                    <label for="thirdname" class="control-label">Third Name:</label>
                    <input type="text" class="form-control" name="thirdname" id="thirdname" placeholder="Enter Third Name" id="validationTooltip09" required>
                    <div class="invalid-tooltip" style="position: relative;">Please Enter Third Name</div>

                    <label for="familyname" class="control-label">Family Name:</label>
                    <input type="text" class="form-control" name="familyname" id="familyname" placeholder="Enter Family Name" id="validationTooltip10" required>
                    <div class="invalid-tooltip" style="position: relative;">Please Enter Family Name</div>

                    <label for="gender" class="control-label">Gender:</label>
                    <input type="radio" name="gender" value="1" id="validationTooltip11" required>male
                    <input type="radio" name="gender" value="2" id="validationTooltip12" required>female
                    <div class="invalid-tooltip" style="position:relative;">Please Select Gender</div>
                    <br>
                    <label for="dob">Date of Birth:-</label>
                    <input type="date" name="dob" id="dob"><br>
                    <br>
                    <label>Nationality</label>
                    <select name="nationality" id="nationality">
                      <option value="1">Jordanian</option>
                      <option value="2">Non-Jordanian</option>
                     </select>
                    <br>
                    <label>Email</label>
                    <input type="email" class="form-control" name="std_email" id="validationTooltip13" required>
                    <div class="invalid-tooltip" style="position:relative;">Please Enter Email</div>

                    <label>Area</label>
                    <input type="text" class="form-control" name="std_area" id="validationTooltip14" required>
                    <div class="invalid-tooltip" style="position: relative;">Plase Enter Area</div>
                    <br>
                    <label>Mobile No.</label>
                    <input type="text" class="form-control" name="std_mobile" onkeypress="javascript:return isNumber(event)" id="validationTooltip15" maxlength="10" required>
                    <div class="invalid-tooltip" style="position: relative;">Plase Enter Mobile</div>
                       <br>
                    <label for="">Class</label>
                    <select name="std_class" id="std_class">
                      <option value="1">class 1</option>
                      <option value="2">class 2</option>
                    </select>
                    <br>
                    <label>Section</label>
                    <select name="std_section" id="">
                      <option value="1">section 1</option>
                      <option value="2">section 2</option>
                    </select>
                    <br>
                    <label>Password</label>
                     <input type="password" name="student_password" id="student_password" maxlength="10">
                    <br>
                    <button class="btn btn-primary" type="submit">Add Student</button>
                  </div>
                  <br>
                  
                </form>
              </div>

        </div>
          <div class="right"></div>
        </div>
      
            <!-- End Add student-->  

          </div>
          <div class="tab-pane fade" id="v-pills-driver" role="tabpanel" aria-labelledby="v-pills-driver-tab">

            <!-- Add Driver-->
            <div class="login-wrap login-body">
             	<div class="login-html">
               <form action="../PHP_CODE/Driver.php" method="post">
                    <input id="tab-2" type="radio" name="tab" class="sign-up">
                     <label for="tab-2" class="tab">Add Driver</label>
                  
	                	<div class="login-form">
                      <br>
                      <div class="sign-up-htm">
                        <div class="group">
                          <label for="firstname" class="label">First Name</label>
                          <input id="validationCustom01" name="firstname" type="text" class="input" required>
                          <div class="invalid-feedback">Please First Name</div>
                        </div>
                        <br>
                        <div class="group">
                          <label for="mid_name" class="label">Middle Name</label>
                          <input id="mid_name" name="mid_name" type="text" class="input" required>
                          <div class="invalid-tooltip">Please First Name</div>

                        </div>
                        <div class="group">
                          <label for="last_name" class="label">Last Name</label>
                          <input id="last_name" name="last_name" type="text" class="input">
                        </div>
                        <div class="group">
                          <label for="phone" class="label">Phone Number</label>
                          <input id="phone"  name="phone" type="text" onkeypress="return isNumber(event)" class="input" maxlength="10">
                        </div>

                        <div class="group">
                          <label for="bus_number" class="label">Bus Number</label>
                          <input id="bus" name="bus" type="text" class="input">
                        </div>

                        <div class="group">
                          <label for="area" class="label">Area</label>
                          <input id="area" name="area" type="text" class="input">
                        </div>


                        <div class="group">
                          <input type="submit" class="button" value="Add driver">
                        </div>
                    </form>
                        
		           	</div>
		          </div>
	</div>
</div>

            
            <!-- End add driver-->
          </div>

          <!-- use this form for parent form 
          file:///D:/Design%20page/colorlib-regform-1/colorlib-regform-1/index.html
        -->
          <div class="tab-pane fade" id="v-pills-parent" role="tabpanel" aria-labelledby="v-pills-parent-tab">
             
                <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
                    <div class="wrapper wrapper--w680">
                        <div class="card card-1">
                            <div class="card-heading"></div>
                            <div class="card-body">
                               <h2 class="title">Registration Info</h2>
                               <form method="POST">
                                  <div class="input-group">
                                      <input class="input--style-1" type="text" placeholder="NAME" name="name">
                                   </div>
                                   <div class="row row-space">
                                      <div class="col-2">
                                      </div>
                                   </div>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
             
  
             
        </div>
      
    </div>
  </div>
<!-- #End region Manager -->

  <div class="tab-pane fade" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">Teacher
    <!-- start Teacher Tab-->
    <p>Add homework to class</p><br>
    <p>Reach to all class and</p>

    <!-- end Teacher Tab-->

  </div>
  <div class="tab-pane fade" id="student" role="tabpanel" aria-labelledby="student-tab">student
    <!-- start student Tab-->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Course Name</th>
      <th scope="col">First/25</th>
      <th scope="col">Second/25</th>
      <th scope="col">Final/50</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Math</th>
      <td>25</td>
      <td>25</td>
      <td>50</td>
    </tr>
    <tr>
      <th scope="row">English</th>
      <td>15</td>
      <td>30</td>
      <td>45</td>
    </tr>
    <tr>
      <th scope="row">Science</th>
      <td>24</td>
      <td>20</td>
      <td>35</td>
    </tr>
  </tbody>
</table>

   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1745896.4671946412!2d36.0014957928257!3d31.27736655702831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15006f476664de99%3A0x8d285b0751264e99!2sJordan!5e0!3m2!1sen!2sjo!4v1588191325101!5m2!1sen!2sjo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</div>

    <!-- end student tab-->



  </div>
</div>
    
    





</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }    
</script> 
</html>