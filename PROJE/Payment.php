<html>
<head>
<title>mode of Payment</title>
</head>
<body backgroundcolor="pupler">
<form method="post" action="paymentdatabase.php">
<fieldset>
<legend> PAYMENT</legend>
<p>Enter Full Name: 
  <input type="text" size= "100" name="fullname">
  </p>
  </p>
<p>Enter Email: 
  <input type="email" size= "100" name="email">
  </p>
  <p>Enter Address: 
  <input type="text" size= "100" name="address">
  </p>
  <p>Enter City: 
  <input type="text" size= "100" name="city">
  </p>
  <p>Enter Country: 
  <input type="text" size= "100" name="country">
  </p>
  <p>Select Card:
  <select input type id="modeofpayment" name="modeofpayment" required>
                        <option value="">Select One</option>
                        <option value="equity">Equity</option>
                        <option value="kbc">KBC</option>
                        <option value="coperative">Coperative</option>
                    </select>
  </p>
  <p>Enter Name on Card: 
  <input type="text" size= "100" name="nameofcard">
  </p>
  <p>Enter Credit Card Number: 
  <input type="number" size= "100" name="creditcardnumber">
  </p>
  <p>Enter Expiry Month: 
  <input type="text" size= "100" name="expmonth">
  </p>
  <p>Enter Expiry Year: 
  <input type="number" size= "100" name="expyear">
  </p>
  <p>Enter CVV: 
  <input type="number" size= "100" name="cvv">
  </p>
  <center>
  </p>
<p>
  <input type="submit" value="pay now" />
  </centre>
</p>
</fieldset>
</form>
</body>
</html>

