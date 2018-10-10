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

    <div align="center">
<div class="container">
    

    <?php
        if(isset($_POST['submit']))
        {
            include("dbcon.php");
            
            $name=$_POST['name'];

            $sql="SELECT * FROM `item` WHERE `idesc` LIKE '%$name%'";
            $run=mysqli_query($con,$sql);

            if(mysqli_num_rows($run)<1)
            {
                echo "NO record found";
            }
            else
            {
                $count=0;
                while($data=mysqli_fetch_assoc($run))
                {
                    $count++;
                ?>     
                <tr>  
                    <td><?php echo $count; ?></td>  
                    <td><?php echo $data['idesc'];  ?></td>  
                    <td><?php echo $data['price'];  ?></td>  
                    <td><img src="../manager/images/<?php echo $data['img']; ?>"  style="max-width:100px;"></td>
                      
                </tr>
                <?php
                }
            }
        }
    ?>
    <div class="table-scrol" style="background: white">  
        <h1 align="center">Our Menu</h1>  
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
            <table class="table table-bordered table-hover table-striped" style="table-layout: fixed ">  
            <thead>  
  
            <tr>  
                <th>Item Id</th>  
                 <th>Image</th> 
                <th>Item Name</th>  
                <th>Item Price</th>
                 
            </tr>  
            </thead>  
            <?php  
            include("../employee/dbcon.php");  
            $view_query="select * from item";//select query for viewing users.  
            $run=mysqli_query($con,$view_query);//here run the sql query.  
            $count=0;
            while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
            {  
                $count++;
                $id=$row[0];  
                $name=$row[1];
                $price=$row[2];  
                $img=$row[3];      
            ?>  
      
            <tr>  
            <!--here showing results in the table -->  
            <td><?php echo $count;  ?></td> 
            <td><img src="../manager/images/<?php echo $img; ?>"  style="max-width:100px;max-height:100px;"></td>  
            <td><?php echo $name;  ?></td>   
            <td><?php echo $price;  ?></td>
            
            </tr>  
      
            <?php } ?>  
      
        </table>  
        </div>
    </div>
</div>  
</div>
</body>  
</html>