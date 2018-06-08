<!DOCTYPE html>
<html>
<head>
	<title>Transcript Request</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">		
		form{
			padding: 30px;
			margin-left: 100px;
		}
		input[type=text]{
			display: inline-block;
	 		border-radius: 15px;
	 		width: 80%;
	 		display: inline-block;
	 		text-align: center;
		}
		input[type=submit]{
	 	width:80%;
	 	background-color: green;
	 	color:grey;
	 	padding: 20px;
	 	border-radius: 5px;
	 	cursor: pointer;
	 }
	 input[type=submit]hover
	{
	background-color: #00001a;
	}
		li a{
			list-style-type: none;
			padding: 7px;
		}
		ul{
			list-style-type: none;
		}
		.af{
			font-family: Bernard MT Condensed;
			text-align: center;	
			color: Black;
			font-size: 33px;
			background-color: White;		
		}
		.fa{
			font-family: Bernard MT Condensed;
			text-align: center;	
			color: Black;
			font-size: 33px;
			background-color: White;		
		}
	</style>
</head>
<body>
<div>
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #990000; color: White;">
		<div class="container-fluid">
		<div class="navbar-header">	
			<a class="navbar-brand" href="#"> Kobangoloshe Secondary Schoo</a>
		</div>
			<ul class="navbar-nav">
				<li><a href="schoolSystem.php">Home</a></li>
				<li><a href="schoolSystem.php">About Kobangoloshe</a></li>	
				<li><a href="schoolSystem.php"> Mission</a></li>
				<li><a href="schoolSystem.php"> Vision</a></li>
				<li class="active"><a href="#">Transcript Request</a></li>			
				<li><a href="schoolSystem.php">Contact Us</a></li>												
			</ul>
		</div>
	</nav>	
</div>	<br><br>
<form action="output.php" method="POST">
	<label for="firstname">First name:-</label>
	<input type="text" name="firstname" placeholder="enter first name"><br>
	<label for="surname">Surname:-</label>
	<input type="text" name="surname" placeholder="enter surname"><br>
	<label for="studentidnumber">studentidnumber:-</label>
	<input type="text" name="index" placeholder="enter Students's ID number"><br>
	<h3><u><strong>Input marks</strong></u></h3>
	<label for="maths">Maths</label><br>
	<input type="text" name="maths" placeholder="enter maths marks"><br>
	<label for="english">English</label><br>
	<input type="text" name="english" placeholder="enter english marks"><br>
	<label for="kiswahili">Kiswahili</label><br>
	<input type="text" name="kiswahili" placeholder="enter kiswahili marks"><br>
	<label for="socialstudies">Social studies</label><br>
	<input type="text" name="socialstudies" placeholder="enter socialstudies marks"><br>
	<label for="CRE">CRE</label><br>
	<input type="text" name="CRE" placeholder="enter CRE marks"><br>
	<label for="chemistry">Chemistry</label><br>
	<input type="text" name="chemistry" placeholder="enter chemistry marks"><br>
	<label for="biology">Biology</label><br>
	<input type="text" name="biology" placeholder="enter biology marks"><br>
	<button type="submit" class="btn btn-info">Submit</button>
	<button type="reset" class="btn btn-danger">Clear</button>
</form>
<footer class="fa" style="background-color: Black; color: White;">
	Copyright&copy; Techperson;<br>
	&reg; KOBANGOLOSHE SECONDARY SCHOOL;<br>
	contact us at 0704118837;
	email: murayaflorence@gmail.com
</footer>
</body>
</html>