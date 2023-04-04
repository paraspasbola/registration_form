<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>getdata</title>
    <style>
        table{
            width:100%;
            text-align:center;
            margin-top:40px;
        }
        table,tr,td,th{
         border: 2px solid black;
         border-collapse: collapse;
         height:30px;
        }
        table td{
            width:10%;
            text-align:center;
        }
        
        </style>
</head>
<body>
    <table>
    <tr>
    <th>Student Id</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Phone no</th>
    <th>address</th>
    <th colspan="2">Operations</th>
    </tr>
    
<?php

$show_data="SELECT * FROM `registration`";

if($result=mysqli_query($conn,$show_data))
{
while($row=$result->fetch_assoc()){
$id=$row['id']; 
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$email=$row['email'];
$phno=$row['phno'];
$address=$row['address'];


?>

<tr>
<td><?php echo "$id" ?></td>
<td><?php echo "$firstname" ?></td>
<td><?php echo "$lastname" ?></td>
<td style=width:20%;><?php echo "$email" ?></td>
<td><?php echo "$phno" ?></td>
<td><?php echo "$address" ?></td>
<form action="registration_form.php" method="post">
<input type="hidden" name="id" value="<?php echo "$id"; ?>">
<td><input type="submit" name="delete" value="delete"></td>
</form>
<form action="update_form.php" method="post">
<input type="hidden" name="update_id" value="<?php echo "$id"; ?>">
<td><input type="submit" name="update" value="update"></td>
</form>
</tr>
<?php
}
}
?>
</table>
</body>
</html>
