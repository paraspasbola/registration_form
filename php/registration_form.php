<?php
require_once('connect.php');
require_once('insert.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Registration Form</title>
    <link rel="stylesheet" href="../css/external.css">
</head>
<body>
<b><h1>Student Registration Form</h1></b>
    <div class="container">
    <fieldset>
    <legend><h3> Fill This Form Carefully</h3></legend>
        <form action="registration_form.php" method="POST">

            <label for="firstname"></label>
            <input type="text" id="fname" placeholder="First Name*" name="firstname" class="line"><br><br>
            <label for="lastname"></label>
            <input type="text" id="lname" placeholder="Last Name*" name="lastname" class="line"><br><br>
            <label for="email"></label>
            <input type="text" id="email" placeholder="Your Email Address*" name="email" class="line"><br><br>
            <label for="phno"></label>
            <input type="number" id="phone" placeholder="Phone Number*" name="phno"class="line"><br><br>
           
            <label for="address"></label>
            <input type="text" id="address" placeholder="Address*" name="address"class="line"><br><br>
            
            <button class="btn" name="submit" value="submit" >Submit</button>
        </form>
    </fieldset>
    </div>
</body>
</html>
<?php

require_once('get_data.php');
require_once('delete.php');
require_once('update.php');
?>
