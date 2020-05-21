<?php

	if (isset($_POST["varname"]) && isset($_POST["varname1"])){
	$eventId = $_POST['varname'];
$userId='';

        $userId = $_POST['varname1'];
        
	
	
 $conne=mysqli_connect('localhost','root','','assign2');
        
	
		$querye = "INSERT INTO registration (user_id, event_id, confirmed) VALUES ('$userId', '$eventId', 0)";	
       $resulte = mysqli_query($conne, $querye);
    }
	

	
if (isset($_POST["email"]) && isset($_POST["password"])){
$email=$_POST["email"];
    $pass=$_POST["password"];
    $conn= mysqli_connect('localhost','root','','assign2');
    $sql="select * from users where email='$email' and password='$pass'";
    $res=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    if($count == 0){
        $sqlw = "SELECT * FROM admin WHERE name = '$email' and pass = '$pass'";
      $resultw=mysqli_query($conn,$sqlw);
    
      $roww = mysqli_fetch_row($resultw);
      $countw = mysqli_num_rows($resultw);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($countw == 1 && $roww[2]==1)
      {
header('location:admin.php');
} 
        else{

	header('location:login.php');
	
}

    }
    $rev=mysqli_fetch_assoc($res);
    $id=$rev['id'];

        $fname=$rev['firstname'];
        $lname=$rev['lastname'];
        $em=$rev['email'];

}
else{

	header('location:login.php');
	
}




?>

<!DOCTYPE html>
<html>
    <title>Profile Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="css/main.css" rel="stylesheet" />
<link href="css/animate.css" rel="stylesheet" />
<style>
		img{
			width:250px;
			height:250px;
		}
		#logout{
			float: right;
			transform: translateY(-120%);
			z-index: -1;
		}
</style>
    
	<div class="container">
	<h2 class = "animated fadeInDownBig"> Profile Page</h2>
        
	<a href = "Logout.php" class ="btn btn-default" id="logout">Logout</a>
        
	<hr>
	<h3 class = "animated fadeInRight name">Welcome, <?php echo $fname . ' ' . $lname;?></h3>
	<h4 class = "animated fadeInRight email"><?php echo $em;?></h4>
        <form method="post" action="status.php">
		
            <input type="hidden"  name='vig' value='<?= $id ?>'/>
            
            
        <input type="submit" value="view status of registration"/>
        </form>
	<hr>
	<h3 class = "animated fadeInRight event-header">Events</h3>
        
	<?php
		$found=0;
		$query = "SELECT * FROM events";
		$result = mysqli_query($conn, $query);
		while($row = mysqli_fetch_array($result)){
           	$n=$row['id'];
         $query1= "SELECT COUNT(*) as mvl FROM registration where event_id='$n'";
            $result1 = mysqli_query($conn, $query1);
            while($row1 = mysqli_fetch_array($result1)){
              $mrs=$row1['mvl'];
            }
             $query11= "SELECT COUNT(*) as mvl1 FROM registration where user_id='$id' and event_id='$n'";
            $result11 = mysqli_query($conn, $query11);
            while($row11 = mysqli_fetch_array($result11)){
              $mrs1=$row11['mvl1'];
            }
   if( $row['capacity']>$mrs && $mrs1==0){
	?> 	<form method="post" action="#">
		<p class = "animated fadeInRight event">
            <input type="hidden"  name='varname' value='<?= $row['id'] ?>'/>
            <input type="hidden"  name='varname1' value='<?= $id ?>'/>
            <input type="hidden"  name='varname2' value='<?= $email ?>'/>
            <input type="hidden"  name='varname3' value='<?= $pass ?>'/>
            <input type="hidden"  name='email' value='<?= $email ?>'/>
            <input type="hidden"  name='password' value='<?= $pass ?>'/>
           <?php $found=1; ?>
			<strong ><?php 
						echo $row['name'].":";
						
					?></strong>
			<span name='varname1'><?php echo "<br>On ".$row['date']."<br>" ?></span>
			<span name='varname2'><?php echo "Location: ".$row['location']."<br>" ?></span>
            
			
		</p>
        <input type="submit" value="register"/>
</form>
	<?php
        }
        } if ($found==0){?>
        <h2>No Events Available</h2>
        <?php }?>
	
</div>
</html>






























<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>profile</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="Style3.css" rel="stylesheet" type="text/css" />
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