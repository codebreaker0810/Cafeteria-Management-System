<?php

	include("dbcon.php");
	 $name=$_POST['name'];//here getting result from the post array after submitting the form. 
    $price=$_POST['price']; 
    $imgname=$_FILES['img']['name'];
    $tmpname=$_FILES['img']['tmp_name'];
    $id=$_POST['id'];
    move_uploaded_file($tmpname, "images/$imgname");
    
//update the emp into the database.  
    $sql="UPDATE `item` SET `idesc`='$name',`price`='$price',`img`='$imgname' WHERE `iid`=$id;";  
    
    $run=mysqli_query($con,$sql); 

    if($run==true)
    {  
        header("location:updateitem.php?update=1");
        
    }  
  
	
?>