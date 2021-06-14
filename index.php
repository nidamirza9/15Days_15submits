<?php 
$title = 'Index';

require_once 'includes/header.php';
require_once 'db/conn.php';

?>

 <!-- 
   - First name
   - Last Name
   - Date of Birth(use DatePicker)
   - Specialty (Database Admin, Software Developer, Web Administrator, other)
   - Email Address
   - Contact Number
  -->
   
   
    <h1 class="text-center">Registration for IT Conference </h1>
    $crud->
    <form method="post" action="success.php">
    <div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3">
    <label for="dob" class="form-label">Date Of Birth</label>
    <input type="text" class="form-control" id="dob" name="dob" aria-describedby="emailHelp">
    
  </div>

  <!-- <div class="mb-3">
    <label for="speciality" class="form-label">Area of Experitise</label>
    <select class="form-control" id="speciality" name="speciality" >
     <option selected>Select Speciality</option> 
  <option value="1">Database Admin</option>
  <option value="2">Software Developer</option>
  <option value="3">Web Administrator</option>
  <option value="4">other</option>
</select> -->
<div class="mb-3">
<label for="" class="form-label">Area of Experties</label>
<select class="form-control" id="speciality" name="speciality" >
     <option selected>Select Speciality</option> 
  <option value="1">Database Admin</option>
  <option >Software Developer</option>
  <option >Web Administrator</option>
  <option >other</option>
</select>
</div>






  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Contect Number</label>
    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
    <div id="phoneHelp" class="form-text">please enter your valid phone number!!</div>
  </div>

  
  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
</form>
<br>
<br>
<br>
<br>
<br>


<?php require_once 'includes/footer.php'; ?>

    