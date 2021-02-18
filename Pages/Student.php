<link rel="stylesheet" href="http://localhost/E-School/css/bootstrap.min.css">
 
<link rel="stylesheet" href="http://localhost/E-School/css/font-awesome.min.css">
<link rel="stylesheet" href="http://localhost/E-School/css/index/all.css">
<link rel="stylesheet" href="http://localhost/E-School/css/index/flaticon.css">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
      <li class="nav-item dropdown" style="left: 1659px;">
      

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-user-circle"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">profile</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">logout</a>
        </div>
      </li>
    
    </ul>
   
  </div>
</nav>

<p>Student information</p>

<?php
require_once('../Database/Connection.php');
session_start();
$username=$_SESSION['username'];
//echo $username.'<br>';
$id=substr($username,8,7);
$username=substr($username, 3, -1);
echo "<label>Name-</label>Welcome ".$username."<br>";

$select_std_info="select * from student where student_id=:id";

$result_std_info=$conn->prepare($select_std_info);
$result_std_info->execute(array('id'=>$id));
$information=$result_std_info->fetchAll();

echo "<br>";

  echo $information[0][1];
  echo $information[0][2]; 
?>
<br><br>
<!-- https://bbbootstrap.com/snippets/bootstrap-edit-profile-87948053-->
<div class="bot-border"></div>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQF2psCzfbB611rnUhxgMi-lc2oB78ykqDGYb4v83xQ1pAbhPiB&usqp=CAU"><span class="font-weight-bold">Amelly</span><span class="text-black-50">amelly12@bbb.com</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile </h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><br> <?php echo $information[0][1];?></div>
                    <div class="col-md-6"><label class="labels">Second Name</label><br>  <?php echo $information[0][2];?></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" value=""></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>