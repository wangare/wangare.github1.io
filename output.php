<!DOCTYPE html>
<html>
<head>
	<title>Transcript</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body{
			background-color: White;
			font-family: Chiller; 
			font-size: 30px;
			padding: 50px;
			color: Green;
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
				<li><a href="transcriptrequest.php">Transcript Request</a></li>			
				<li><a href="schoolSystem.php">Contact Us</a></li>												
			</ul>
		</div>
	</nav>	
</div>	
<div>
<?php 
	$firstname = $_POST["firstname"];
	$surname = $_POST["surname"];
	$index = $_POST["index"];
	$maths = $_POST["maths"];
	$english = $_POST["english"];
	$chemistry = $_POST["chemistry"];
	$socialstudies = $_POST["socialstudies"];
	$biology = $_POST["biology"];
	$kiswahili = $_POST["kiswahili"];
	$CRE = $_POST["CRE"];
		echo "$firstname $surname <br>";
		echo "STUDENTIDNUMBER- $index";
		echo "<h1><u>RESULTS</u></h1>";
		$sum = $maths + $english + $kiswahili + $chemistry + $biology + $socialstudies + $CRE;
		echo "<table border='2px'> 
		<tr>
			<th>FIRST NAME</th> 
			<th>SURNMAME</th> 
			<th>STUDENTIDNUMBER</th> 
			<th>MATHS</th> 
			<th>ENGLISH</th> 
			<th>KISWAHILI</th> 
			<th>CHEMISTRY</th> 
			<th>BIOLOGY</th> 
			<th>SOCIALSTUDIES</th> 
			<th>CRE</th> 
			<th>TOTAL SUM</th>
		 </tr>
		 <tr>
		 	<th>$firstname</th> 
		 	<th>$surname</th> 
		 	<th>$index</th>
		 	<th>$maths</th> 
		 	<th>$english</th> 
		 	<th>$kiswahili</th> 
		 	<th>$chemistry</th> 
		 	<th>$biology</th> 
		 	<th>$socialstudies</th> 
		 	<th>$CRE</th> 
		 	<th>$sum</th> 
		 	</tr> 
	</table>";
		$average = $sum/7;
		echo "YOUR AVERAGE IS <u>$average</u>";
		if ($average < "40") {
			# code...
			echo "AND THEREFORE HAVE A GRADE OF <u>F</u>. YOU NEED TO WORK HARDER.";
		}
		elseif ($average < "50") {
			# code...
			echo "AND THEREFORE HAVE A GRADE OF <u>E</u>";
		}
		elseif ($average < "60") {
			# code...
			echo "AND THEREFORE HAVE A GRADE OF <u>D</u>";
		}
		elseif ($average < "70") {
			# code...
			echo "AND THEREFORE HAVE A GRADE OF <u>C</u>";
		}
		elseif ($average < "80") {
			# code...
			echo "AND THEREFORE HAVE A GRADE OF <u>B</u>";

		}
		else{
			echo "AND THEREFORE HAVE A GRADE OF <u>A. CONGRATULATIONS</u>";
		}
?>
</div>
<footer class="fa" style="background-color: Black; color: White;">
	Copyright&copy; Techperson;<br>
	&reg; KOBANGOLOSHE SECONDARY SCHOOL;<br>
	contact us at 0704118837;
	email: murayaflorence@gmail.com
</footer>
</body>
</html>