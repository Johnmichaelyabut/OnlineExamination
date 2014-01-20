<html>
	<head>
		<title>Online Examination</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php include_once 'validate.php'; ?>
	<body>
		<?php include "Banner.php"; ?>
			<div id = "back-end" class = "container well span">
				<form name = "examinee" method = "POST" action = "incode.php">
					<div id = "title"><center><h1><font face = "tolkien">Registration Form</font></h1></center></div>

					<div class = "page-header"></div>

					<div id = "input">
						<input type = "text" id = "fname" name = "fname" placeholder = "First name..." onblur ="name()">
						<input type = "text" id = "lname" name = "lname" placeholder = "Last name..." onblur ="name()">
						<span id = "fullname"></span>
					</div>

					<div id = "input1">
	               		<input type = "text" name = "email" id = "email" placeholder = "Enter your Email/Username..." onblur = "check_email();"/>
	               		<span id = "help_email"></span>
	                </div>

					<div id = "input1">
						<input type = "password" id = "pass" name = "pass" placeholder = "Enter your Password not less than 8 characters.." onblur = "check_password()"/>
						<span id = "password"></span>
					</div>

					<div id = "input1">
						<input type = "password" id = "pass1" name = "pass1" placeholder = "Confirm Password.." onblur = "validate_password()"/>
						<span id = "confirm"></span>
					</div>
						
						<input class = "btn btn-primary" id = "submit" type = "submit" name = "save" value = "Submit" onclick = "return validate()">
				</form>
			</div>
   
  </div>
		<script type="text/javascript" src = "validation.js"></script>
		<script src="js/js/jquery.1.10.2.js"></script>
	    <script src="js/js/bootstrap.min.js"></script>
	</body>
	<?php include 'footer.php'; ?>
</html>