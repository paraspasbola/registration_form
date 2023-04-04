<?php
$servername="localhost";
$db_user="root";
$db_pass="";
$db_name="userdata";

$conn = mysqli_connect($servername,$db_user,$db_pass,$db_name);
if(!$conn){
    die("connection failed". mysqli_connect_error());
}
else{
    echo "";
}
?>