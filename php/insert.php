<?php

if(isset($_POST['submit'])){

    $firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $email =$_POST['email'];
    $phno =$_POST['phno'];
    $address =$_POST['address'];

    $result = mysqli_query($conn, "INSERT INTO registration (`firstname`,`lastname`,`email`,`phno`,`address`)
    VALUES('$firstname','$lastname','$email','$phno','$address')");

    if($result)
    {
        header('location:registration_form.php');
    }


}

?>