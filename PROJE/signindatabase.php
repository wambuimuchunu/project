<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$con=new mysqli("localhost","root","","project");
if(!$con)
{
echo "SORRY TRY AGAIN";
}
$sql="INSERT INTO signin VALUES('$name','$email','$password','$confirmpassword')";
$result=$con->query($sql);
echo "regestration successfully";
?>

