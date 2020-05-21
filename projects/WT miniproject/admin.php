<button style="position:absolute; right:0;" type="submit" onclick="location.href='Logout.php' ">Logout</button>
<button  type="submit" onclick="location.href='event.php' ">Add Event</button>


<?php
if (isset($_POST["vname"])){
$eidd=$_POST["vname"];
    $conn111= mysqli_connect('localhost','root','','assign2');
$sql111="update registration set confirmed=1 where id=$eidd";
$res111=mysqli_query($conn111,$sql111);
}

if (isset($_POST["dd"])){
$eidd1=$_POST["bvc"];
    $conn1111= mysqli_connect('localhost','root','','assign2');
$sql1111="update registration set confirmed=2 where id=$eidd";
$res111=mysqli_query($conn1111,$sql1111);
}
 $found=0;   
$conn= mysqli_connect('localhost','root','','assign2');
$sql="select * from registration where confirmed=0";
$res=mysqli_query($conn,$sql);
 while($row = mysqli_fetch_array($res)){
     $found=1;
     $ui=$row['user_id'];
     $ei=$row['event_id'];
     $id=$row['id'];
     $query = "SELECT name FROM events where id=$ei";
		$result = mysqli_query($conn, $query);
     while($row1 = mysqli_fetch_array($result)){
         $ename=$row1['name'];
     }
     $query1 = "SELECT firstname,lastname FROM users where id=$ui";
		$result1 = mysqli_query($conn, $query1);
     while($row11 = mysqli_fetch_array($result1)){
         $fname=$row11['firstname'];
         $lname=$row11['lastname'];
     }
     ?>
	
<center>
     <form method="post" action="#">
		<p class = "animated fadeInRight event">
            <input type="hidden"  name='vname' value='<?= $id ?>'/>
            <strong ><?php 
						echo $ename.":";
						
					?></strong><br>
            
			<strong ><?php 
						echo $fname." ";
						
					?></strong>
            <strong ><?php 
						echo $lname."";
						
					?></strong>
            
			
			
		</p>
        <input type="submit" value="ACCEPT"/>
         <form method="post" action="#">
		
            <input type="hidden"  name='bvc' value='<?= $id ?>'/>
            
        <input type="submit" name="dd" value="Reject"/>
</form>
</form>
    
    </center>
<?php
 }
 
if ($found==0){?><br>
<br>
<br>
<br>
<br>
<center> <h2><font color='white'>No One Registerd</font></h2></center>
        <?php }?>
    








<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>admin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="Style5.css" rel="stylesheet" type="text/css" />
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