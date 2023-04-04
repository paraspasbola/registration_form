

<?php
  include "connect.php";
  if(isset($_POST['update']))
{

  $id = $_POST['update_id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $address=$_POST['address'];


    $query = mysqli_query($conn,"UPDATE registration SET `firstname`='$firstname',
  `lastname`='$lastname',`email`='$email',`phno`='$phno',`address`='$address' WHERE id='$id'");
     
  if(!$query)
  {
    echo 'error';    
  }
  else{
    header("loacation:registration_form.php");
    
  }

 } 
 ?>