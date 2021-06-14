<?php 
$title = 'Success';
require_once 'includes/header.php';
require_once 'db/conn.php';


if(isset($_POST['submit'])){
 //extra values from the $_POST array

 $fname = $_POST['firstname'];
 $lname = $_POST['lastname'];
 $dob = $_POST['dob'];
 $email = $_POST['email'];
  $contact = $_POST['phone'];
  $speciality = $_POST['speciality'];
$isSuccess = $crud->insert($fname, $lname, $dob, $email, $contact, $speciality );

if($isSuccess){
  echo "<h1 class='text-success'>You Have Been Registerd!</h1>";
}else{
  echo "<h1 class='text-danger'>There was an error in processing</h1>";
}
}

?>

<h2 class="text-center text-success">You Have Been Successfuly Registered!</h2>

<!-- <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_GET['firstname'].' '.$_GET['lastname']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">
   <?php echo $_GET['speciality']; ?>
    </h6>
    <p class="card-text">
    Date of Birth: <?php echo $_GET['dob'];?></p>
    <p class="card-text">
    Email Adress: <?php echo $_GET['email'];?></p>
    <p class="card-text">
    Contect No: <?php echo $_GET['phone'];?></p>
    
    <a href="#" class="card-link">Card Link</a>
    <a href="#" class="card-link">Another Link</a>
  </div>
</div> -->

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['firstname'].' '.$_POST['lastname']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">
   <?php echo $_POST['speciality']; ?>
    </h6>
    <p class="card-text">
    Date of Birth: <?php echo $_POST['dob'];?></p>
    <p class="card-text">
    Email Adress: <?php echo $_POST['email'];?></p>
    <p class="card-text">
    Contect No: <?php echo $_POST['phone'];?></p>
    
    <a href="#" class="card-link">Card Link</a>
    <a href="#" class="card-link">Another Link</a>
  </div>
</div>




<br>
<br>
<br>
<br>
<br>


<?php require_once 'includes/footer.php'; ?>