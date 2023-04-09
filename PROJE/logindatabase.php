<?php
$username = $_POST['username'];
$password = $_POST['password'];
$con=new mysqli("localhost","root","","project");
if(!$con)
{
echo "COULD NOT CONNECT TO THE DATABASE";
}
$sql="INSERT INTO log VALUES('$username','$password')";
$result=$con->query($sql);
echo "record successfully added";
?>

