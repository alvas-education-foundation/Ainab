

<?php
if(isset($_POST["imran"]) && isset($_POST["im1"]) && isset($_POST["im2"]) && isset($_POST["im3"])){
    $name=$_POST["imran"];
        $date=$_POST["im1"];
        $loc=$_POST["im2"];
        $cap=$_POST["im3"];
    $conne=mysqli_connect('localhost','root','','assign2');
        
	
		$querye = "INSERT INTO events (name, date, location, capacity) VALUES ('$name', '$date', '$loc',$cap)";	
       $resulte = mysqli_query($conne, $querye);
    echo " Added success";
}
?>
<button style="position:absolute; right:0;" type="submit" onclick="location.href='Logout.php' ">Logout</button>
<center><div>
    <br><br><br><br>
<form method="post" action="#">
    <b><font color='white'>NAME:</font></b><input type='text' name='imran' size='35' value=''/>
<br><br>
<b><font color='white'>DATE:</font></b><input type='text' name='im1' size='35' value=''/>
<br><br>
    <b><font color='white'>LOCATION:</font></b><input type='text' name='im2' size='35' value=''/>
<br><br>
    <b><font color='white'>CAPACITY:</font></b><input type='text' name='im3' size='35' value=''/>
<br><br>

<input type="submit" value="UPLOAD"/>
</form>s
</div>
<button  type="submit" onclick="location.href='admin.php' ">BACK</button></center>




























<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>event</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="style.css" rel="stylesheet" type="text/css" />
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

