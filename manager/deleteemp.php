<?php  
 
include("dbcon.php");  
$delete_id=$_GET['del'];  
$delete_query="delete from employee WHERE eid='$delete_id'";//delete query  
$run=mysqli_query($con,$delete_query);  
if($run)  
{  
    header("location:viewemp.php?deleted=1");  
}  
  
?>