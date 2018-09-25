<?php
 
 session_start();
 if(!isset($_SESSION['username'])){
    header('location:login.php');
 }
 ?>

<?php  
 
include("dbcon.php");

    $update_id=$_GET['id'];  
    $sql="SELECT * FROM `item` WHERE `iid`='$update_id'";//delete query  
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
  
<div class="container pt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-5  ">
            <div class="card">
                <div class="card-body"> 
                    <h3 class="panel-title">Insert Item details</h3>  
                    <form role="form" method="post" action="updateitemdata2.php" enctype="multipart/form-data">  
                        <fieldset>  
                            <div class="form-group">  
                               Enter Item desc/name: <input class="form-control" name="name" type="text" value=<?php echo $data['idesc']; ?> pattern="[A-Za-z ]{1-32}" title="Only Letters and spaces allowed" required autofocus>
                            </div>  
                            <div class="form-group">  
                               Enter Item price: <input class="form-control" name="price" type="text" value=<?php echo $data['price']; ?> pattern="\d+(\.\d+)?" required>  
                            </div> 
                            <div class="form-group">  
                               Upload image: <input class="form-control" name="img" type="file" required>  
                            </div>   
                            <input name="id" type="hidden" value=<?php echo $data['iid']; ?> >
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="submit" name="submit" >  
  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  
