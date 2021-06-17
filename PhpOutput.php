<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
		<title> Save </title>
</head>
<body>
 <?php
include "include/DB.inc.php";   
 
if(isset($_POST['save'])){    
$E1 = $_POST['range1'];
$E2 = $_POST['range2'];
$E3 = $_POST['range3'];
$E4 = $_POST['range4'];
$E5 = $_POST['range5'];
$E6 = $_POST['range6'];


$sqll = "INSERT INTO `engines` (`id_position`, `Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`) VALUES (NULL, '$E1', '$E2', '$E3', '$E4', '$E5', '$E6');";

 $query_runn = mysqli_query($conn, $sqll);
     
			if($query_runn){
				 echo '<script type = text/javascript>alert("data has been added")</script>';	
                 echo ($E1." \n ");
                 echo ($E2." \n ");
                 echo ($E3." \n ");
                 echo ($E4." \n ");
                 echo ($E5." \n ");
                 echo ($E6." \n ");
			}
			else{
			echo '<script type = text/javascript>alert("data cannot be added")</script>';	
		     }  
}
   
else if(isset($_POST['start'])) {
    $sql = "INSERT INTO `operation` (`id_op`, `switchedOn`) VALUES (NULL, '1');";

    $query_run = mysqli_query($conn, $sql);
     
			if($query_run){
				
				echo '<script type = text/javascript>alert("data has been added")</script>';
                echo "1";
			}
			else{
			echo '<script type = text/javascript>alert("data cannot be added")</script>';	
			}  
    
}
           
else {
         echo '<script type = text/javascript>alert("Error:cannot define the action!")</script>';
         header("location:Control_interface.php");
 }   
     ?>
    
    </body>
</html>