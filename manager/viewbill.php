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
    <title>View Bill</title>  
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
    <h1 align="center">Bills</h1> 
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>Bill Id</th>  
            <th>Customer Name</th>  
            <th>Amount</th>
            <th>Date & Time</th>  
               
        </tr>  
        </thead>  
  
        <?php  
        include("dbcon.php");  
        $view_users_query="select * from bill natural join customer";//select query for viewing users.  
        $run=mysqli_query($con,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $name=$row['name'];  
            $bid=$row['bid'];
            $amount=$row['amount'];  
            $time=$row['btime'];  
           
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $bid;  ?></td>  
            <td><?php echo $name;  ?></td>  
            <td><?php echo $amount;  ?></td>  
            <td><?php echo $time;  ?></td>
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