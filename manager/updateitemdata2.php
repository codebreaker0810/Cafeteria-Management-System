<?php

	include("dbcon.php");
	 $name=$_POST['name'];//here getting result from the post array after submitting the form. 
    $price=$_POST['price']; 
    $imgname=$_FILES['img']['name'];
    $tmpname=$_FILES['img']['tmp_name'];
    $id=$_POST['id'];
    move_uploaded_file($tmpname, "images/$imgname");
    
    $check_query="select * from item WHERE idesc='$name'";  
    $run_query=mysqli_query($con,$check_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
        echo "<script>alert('Item $name is already exist in our database, Please try another one!')</script>";  
        exit();  
    } 
//update the emp into the database.  
    $sql="UPDATE `item` SET `idesc`='$name',`price`='$price',`img`='$imgname' WHERE `iid`=$id;";  
    
    $run=mysqli_query($con,$sql); 

    if($run==true)
    {  
        ?>
    	<script>
    	alert('Data updated successfully');
    	window.open('updateitemdata.php?id=<?php echo $id; ?>','_self');
    	</script>
    	<?php
    }  
  
	
?>