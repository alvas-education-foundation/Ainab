<?php
//keep count of how many fields in the forms are valid 


if (isset($_POST["submit"])) {
    $e=$_POST["email"];
    $f=$_POST["firstname"];
    $l=$_POST["lastname"];
    $p=$_POST["password"];
    $conne=mysqli_connect('localhost','root','','assign2');
        
	
		$querye = "INSERT INTO users (password,firstname,lastname,email)  VALUES ('$p', '$f', '$l','$e')";	
       $resulte = mysqli_query($conne, $querye);
    header('location:login.php');
    
    
    
    
    
    
	
}		
?>

<!DOCTYPE html>
<html>
<head>	
	<title>Create Profile</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="css/animate.css" rel="stylesheet" />
<link href="css/main.css" rel="stylesheet" />
</head>
<body>
	<div class="container">
		<h2 class = "animated fadeInDownBig"> Create Profile</h2>
		<hr>
		<form action ='#' method = 'post'   class = "animated fadeIn form">
			<div class="form-group">
                <label><font color='white'>USN:</font></label><br>
			    <input type="text"  name = 'email' value = "">
	        </div>
			<div class="form-group">
				<label><font color='white'>First Name:</font></label><br>
				<input type="text"  name = 'firstname' value = "">
			</div>				  
		    <div class="form-group">
				<label><font color='white'>Last Name:</font></label><br>
				<input type="text" name = 'lastname' value = "">
		    </div>
		    <div class="form-group">
				<label><font color='white'>Set Password:</font></label><br>
				<input type="password" name = 'password' value = "">
		    </div>
		    <button type ="submit" name ="submit"class="btn btn-default">Submit</button> 
		    <button type ="submit" class ="btn btn-default" formaction ="index.php">Back</button>
		</form>		
	</div>
</body>
</html>












<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>create</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="Style1.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	color: #FFFF99;
}
.style12 {
	color: #FF00FF;
	font-size: 18px;
}
.style14 {
	color: #663333;
	font-size: 14px;
}
.style15 {
	color: #660033;
	font-size: 14px;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
body {
	margin-left: 1cm;
	margin-top: 0.5cm;
}
.style19 {
	color: #660000;
	font-size: 20px;
}
-->
    </style>
    </head>
</html>










