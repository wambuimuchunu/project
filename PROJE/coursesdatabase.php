<?php
$searchcourses = $_POST['searchcourses'];
$searchtutors = $_POST['searchtutors'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$con=new mysqli("localhost","root","","project");
if(!$con)
{
echo "COULD NOT CONNECT TO THE DATABASE";
}
$sql="INSERT INTO courses VALUES('$searchcourses','$searchtutors','$fullname','$email')";
$result=$con->query($sql);
echo "record successfully added";
?>
