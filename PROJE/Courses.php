<html>
<head>
<title>SELECT COURSES AND TUTORS</title>
<link rel="stylesheet" href="Courses.css">
</head>
<body>
<div class="form-container">
<form method="post" action="coursesdatabase.php">
<fieldset>
<legend> COURSE</legend>
<p>select course: 
<select input type id="searchcourses" name="searchcourses" required>
					<option value="">Select One</option>
					<option value="Mathematics">Mathematics</option>
					<option value="English">English</option>
					<option value="Science">Science</option>
					<option value="Homescience">Homescience</option>
					<option value="Kiswahili">Kiswahili</option>
				</select>
  </p>
  </p>
<p>select Tutor: 
<select input type id="searchtutors" name="searchtutors" required>
					<option value="">Select One</option>
					<option value="Grace Kamau">Grace Kamau</option>
					<option value="Kimbaliy Osoro">Kimbaliy Osoro</option>
					<option value="Handson Levi">Handson Levi</option>
					<option value="Peter Chomba">Peter Chomba</option>
					<option value="Emily Jane">Emily Jane</option>
				</select>
  </p>
  <p>Enter Full Name: 
  <input type="text" size= "100" name="fullname">
  </p>
  <p>Enter Email: 
  <input type="email" size= "100" name="email">
  </p>
  </p>
<p>
  <input type="submit" value="SAVE" />
  </centre>
</p>
</fieldset>
</form>
</div>
</body>
</html>

