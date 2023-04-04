<!-- Registration form -->
<?php
require_once('connect.php');
$id = $_POST['update_id'];
$record = mysqli_query($conn, "SELECT * FROM registration where id ='$id'");
while ($row=$record->fetch_assoc()) {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>update</title>
    <link rel="stylesheet" href="../css/external.css">
</head>
<body>
<b><h1>Update Form</h1></b>
    <div class="container">
    <fieldset>
    <legend><h3> Fill This Form Carefully</h3></legend>
        <form action="registration_form.php" method="POST">

            <label for="firstname"></label>
            <input type="text" id="fname" placeholder="First Name*" name="firstname" class="line" value="<?php echo $row['firstname'];?>"><br><br>
            <label for="lastname"></label>
            <input type="text" id="lname" placeholder="Last Name*" name="lastname" class="line" value="<?php echo $row['lastname'];?>"><br><br>
            <label for="email"></label>
            <input type="text" id="email" placeholder="Your Email Address*" name="email" class="line" value="<?php echo $row['email'];?>"><br><br>
            <label for="phno"></label>
            <input type="number" id="phone" placeholder="Phone Number*" name="phno"class="line" value="<?php echo $row['phno'];?>"><br><br>
           
            <label for="address"></label>
            <input type="text" id="address" placeholder="Address*" name="address"class="line" value="<?php echo $row['address'];?>"><br><br>
            
            <input type="hidden" name="update_id" value="<?php echo "$id";?>">
            <button class="btn" name="update" value="update">update</button>
        </form>
    </fieldset>
    </div>
</body>
</html>
<?php 
} 

?>