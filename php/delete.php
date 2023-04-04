<?php
if(isset($_POST['delete'])) {
    $a = $_POST['id'];
    $sql = mysqli_query($conn,"DELETE FROM `registration` WHERE id ='$a'");
    //  if($sql) {
    //     header("location:registration_form.php");

    //     } 
    header("location:registration_form.php");

}


?>