<?php
 
 session_start();
 if(!isset($_SESSION['mid'])){
    header('location:login.php');
 }
?>

<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-4.1.3-dist\css\bootstrap.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
    <title>View Users</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 20px;  
  
    }  
  
</style>  
  
<body>  
    <?php
    include("header.php");
    ?>
    <div class="container">
        <br>
    <?php
    if(isset($_GET['update'])==true)
    {
    ?>
    <div class="alert alert-success">
      <a href="viewemp.php" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong>user has been updated!!
    </div>
    <?php
    }
  ?>
<div align="center">  
<h3 class="panel-title">Update Employee details</h3> <br> 
    <div class="panel-body">  
        <form role="form" method="post" action="update.php">  
            <div class="form-group">  
                Enter employee name: <input  placeholder="Enter name" name="name" type="text" required autofocus> &nbsp
                <input class="btn btn-primary" type="submit" name="submit" value="Search"> 
            </div> 
    </form>
    </div>
  </div>   

<div class="table-scrol">  
    <h3 align="center">All the Employee</h3>  
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
            <thead>  
            <tr> 
                <th>User Id</th>  
                <th>User Name</th>  
                <th>User E-mail</th>
                <th>User Phone</th>  
                <th>User Pass</th>  
                <th>Update User</th>  
            </tr>  
            </thead>  

<?php
    if(isset($_POST['submit']))
    {
        include("dbcon.php");
     
        $name=$_POST['name'];

        $sql="SELECT * FROM `employee` WHERE `name` LIKE '%$name%' AND mid=".$_SESSION['mid'];
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
                <td><?php echo $count;  ?></td>  
                <td><?php echo $data['name'];  ?></td>  
                <td><?php echo $data['mail'];  ?></td>  
                <td><?php echo $data['phone'];  ?></td>
                <td><?php echo $data['password'];  ?></td>
                <td><a href="updateemp.php?eid=<?php echo $data['eid'];?>"><button class="btn btn-warning"><span class="fa fa-edit"></span> Update</button></a></td>  
           </tr>
           <?php
            }
             
  
        }

    }
?>
    </table>
    </div>
</div>
</div>
<?php
    include("footer.php");
?>
</body>
</html>

