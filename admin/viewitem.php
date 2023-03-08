<?php
 
 session_start();
 if(!isset($_SESSION['mid'])){
    header('location:login.php');
 }
 ?>

<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-4.1.3-dist\css\bootstrap.css"> <!--css file link in bootstrap folder--> 
    <title>View Items</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>  
    <?php
    include("header.php");
    ?>
<div class="container">
    <div class="table-scrol">  
        <h1 align="center">All the Items</h1>  
        <?php
    if(isset($_GET['delete'])==true)
    {
    ?>
    <div class="alert alert-success">
      <a href="viewitem.php" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong>Item has been deleted!!
    </div>
    <?php
    }
  ?>
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
            <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
            <thead>  
  
            <tr>  
                <th>Item Id</th>  
                <th>Item Name</th>  
                <th>Item Price</th>
                <th>Image</th> 
                <th>Delete Item</th>  
            </tr>  
            </thead>  
            <?php  
            include("dbcon.php");  
            $view_query="select * from item";//select query for viewing users.  
            $run=mysqli_query($con,$view_query);//here run the sql query.  
      
            while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
            {  
                $id=$row[0];  
                $name=$row[1];
                $price=$row[2];  
                $img=$row[3];      
            ?>  
      
            <tr>  
            <!--here showing results in the table -->  
            <td><?php echo $id;  ?></td>  
            <td><?php echo $name;  ?></td>   
            <td><?php echo $price;  ?></td>
            <td><img src="images/<?php echo $img; ?>"  style="max-width:100px;max-height:100px;"></td>

            <td><a href="deleteitem.php?del1=<?php echo $id ?>"><button class="btn btn-danger"><span class="fa fa-trash"></span> Delete</button></a></td> 
            </tr>  
      
            <?php } ?>  
      
        </table>  
        </div>
    </div>
</div>  
<?php
    include("footer.php");
?>
</body>  
</html>