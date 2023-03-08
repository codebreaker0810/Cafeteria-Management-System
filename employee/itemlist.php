<?php
 
 session_start();
 if(!isset($_SESSION['eid'])){
    header('location:login.php');
 }
 ?>

<html>  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">  
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
    <div align="center">
<div class="container">
    <div class="panel-body">  
        <form role="form" method="post" action="itemlist.php">  
            <div class="form-group">  
                Enter item name: <input  placeholder="Enter name" name="name" type="text" required autofocus> &nbsp
                <input class="btn btn-primary" type="submit" name="submit" value="Search"> 
            </div> 
    </form>
    </div>

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
    <div class="table-scrol">  
        <h1 align="center">All the Items</h1>  
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
            <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
            <thead>  
  
            <tr>  
                <th>Item Id</th>  
                 <th>Image</th> 
                <th>Item Name</th>  
                <th>Item Price</th>
                 
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
<?php
    include("footer.php");
?>
</body>  
</html>