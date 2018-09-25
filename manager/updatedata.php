<?php  
  
include("dbcon.php");//make connection here  

    $name=$_POST['name'];//here getting result from the post array after submitting the form. 
    $phone=$_POST['phone']; 
    $pwd=$_POST['pass'];//same  
    $email=$_POST['email'];//same 
    $id=$_POST['eid'];  
  
//here query check weather if emp already registered so can't register again.  
    $check_email_query="select * from employee WHERE mail='$email'";  
    $run_query=mysqli_query($con,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
 

    $sql="UPDATE `employee` SET `name`='$name',`phone`='$phone',`mail`='$email',`password`='$pwd' WHERE `eid`=$id;";  
    $run=mysqli_query($con,$sql); 

    if($run==true)
    { 
    	?>
    	<script>
    	alert('Data updated successfully');
    	window.open('updateemp.php?eid=<?php echo $id; ?>','_self');
    	</script>
    	<?php
    }   
  
?>