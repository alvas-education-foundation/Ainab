<button style="position:absolute; right:0;" type="submit" onclick="location.href='Logout.php' ">Logout</button><br>
<?php
if (isset($_POST["vig"]) && isset($_POST["vig1"]) ){
    $m=$_POST["vig"];
    $v=$_POST["vig1"];
    $conn111= mysqli_connect('localhost','root','','assign2');
$sql111="update registration set confirmed=0 where user_id=$m and event_id=$v ";
$res111=mysqli_query($conn111,$sql111);
}

if (isset($_POST["vig"])){
    $id=$_POST["vig"];

$conn= mysqli_connect('localhost','root','','assign2');
     ?><center>
    <table border="3px" style="width: 25%">
        <tr>
      <td colspan="6">
     <h2> Request Under Process :</h2>
          </td>
    </tr><?php 
$sql="select event_id as nm from registration where confirmed=0 and user_id=$id";
$res=mysqli_query($conn,$sql);
   $count = mysqli_num_rows($res);
     if($count==0){ ?>
       <tr>
      <td colspan="6">
       NO data available
       </td>
    </tr>
   <?php } 
 while($row=mysqli_fetch_assoc($res)){
    
     $s=$row['nm'];
     
     $sql1="select * from events where id=$s";
$res1=mysqli_query($conn,$sql1);
 while($row1 = mysqli_fetch_array($res1)){
     $s1=$row1['name'];
     ?>
               <tr>
      <td colspan="6">
                    <strong ><?php 
     
                        
						echo $s1;
					?></strong>
           </td>
    </tr>

<?php
 }
 } ?>
        </table> <br> <br>
    
    <table border="3px" style="width: 25%">
        <tr>
      <td colspan="6">
     <h2> Request Accepted :</h2>
          </td>
    </tr><?php 
$sql="select event_id as nm from registration where confirmed=1 and user_id=$id";
$res=mysqli_query($conn,$sql);
   $count = mysqli_num_rows($res);
     if($count==0){ ?>
       <tr>
      <td colspan="6">
       NO data available
       </td>
    </tr>
   <?php } 
 while($row=mysqli_fetch_assoc($res)){
    
     $s=$row['nm'];
     
     $sql1="select * from events where id=$s";
$res1=mysqli_query($conn,$sql1);
 while($row1 = mysqli_fetch_array($res1)){
     $s1=$row1['name'];
     ?>
               <tr>
      <td colspan="6">
                    <strong ><?php 
     
                        
						echo $s1;
					?></strong>
           </td>
    </tr>

<?php
 }
 } ?>
        </table> <br> <br>
    
       <table border="3px" style="width: 25%">
        <tr>
      <td colspan="6" style="width: 100%">
     <h2> Request Deleted :</h2>
          </td>
    </tr><?php 
$sql="select event_id as nm from registration where confirmed=2 and user_id=$id";
$res=mysqli_query($conn,$sql);
   $count = mysqli_num_rows($res);
     if($count==0){ ?>
       <tr>
      <td colspan="6">
       NO data available
       </td>
    </tr>
   <?php } 
 while($row=mysqli_fetch_assoc($res)){
    
     $s=$row['nm'];
     
     $sql1="select * from events where id=$s";
$res1=mysqli_query($conn,$sql1);
 while($row1 = mysqli_fetch_array($res1)){
     $s1=$row1['name'];
     ?>
               <tr>
      <td colspan="6">
                    <strong ><?php 
     
                        
						echo $s1;
					?></strong>
           </td>
                   <td><form method="post" action="#">
		
            <input type="hidden"  name='vig' value='<?= $id ?>'/>
                       <input type="hidden"  name='vig1' value='<?= $s ?>'/>
            
            
        <input type="submit" value="Re-submit"/>
        </form>
                   
                   </td>
    </tr>

<?php
 }
 } ?>
  </table> <br><br><input type="button" value="Return to previous page" onClick="javascript:history.go(-1)" />  </center>
 <?php }
?>















<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>status</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="Style4.css" rel="stylesheet" type="text/css" />
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