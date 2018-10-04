<?php
 
 session_start();
 if(!isset($_SESSION['mid'])){
    header('location:login.php');
 }
?>

<?php  
 
include("dbcon.php");

    $update_id=$_GET['eid'];  
    $sql="SELECT * FROM `employee` WHERE `eid`='$update_id'";//delete query  
    $run=mysqli_query($con,$sql);  

    $data=mysqli_fetch_assoc($run);
?>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">        </script>
      
    <title>Updation</title>  
</head>  
 
<body>  
<?php
    include("header.php");
    ?>
<div class="container pt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-5  ">
            <div class="card">
                <div class="card-body">  
                    <h3 class="panel-title">Update Employee details</h3>     
                    <form role="form" method="post" action="updatedata.php">  
                        <fieldset>  
                            <div class="form-group">  
                              Enter name: <input class="form-control" name="name" type="text" value=<?php echo $data['name']; ?> pattern="[A-Za-z ]+" title="Only Letters allowed" required autofocus>  
                            </div>  
                            <div class="form-group">  
                              Enter phone: <input class="form-control" name="phone" type="text" value=<?php echo $data['phone']; ?> pattern="[789][0-9]{9}" title="Enter valid Phone number" required>  
                            </div> 
                            <div class="form-group">  
                              Enter email: <input class="form-control" name="email" type="email" value=<?php echo $data['mail']; ?> required>  
                            </div>  
                            <div class="form-group">  
                              Enter password: <input class="form-control" name="pass" type="password" value=<?php echo $data['password']; ?> pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>  
                            </div>
                            <input name="eid" type="hidden" value=<?php echo $data['eid']; ?> >    
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Update" name="register" >  
  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</body>  
  
</html>  