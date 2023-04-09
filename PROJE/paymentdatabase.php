<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$modeofpayment = $_POST['modeofpayment'];
$nameofcard = $_POST['nameofcard'];
$creditcardnumber = $_POST['creditcardnumber'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];
$con=new mysqli("localhost","root","","project");
if(!$con)
{
echo "SORRY TRY AGIAN";
}
$sql="INSERT INTO payment VALUES('$fullname','$email','$address','$city',
'$country','$modeofpayment','$nameofcard','$creditcardnumber','$expmonth','$expyear','$cvv')";
$result=$con->query($sql);
echo "payment successful";
?>

