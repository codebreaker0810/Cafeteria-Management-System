<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin for manager</title>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">        </script>
 <link href="signin.css" rel="stylesheet">
  </head>

  <body>
   

  <div class="container pt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-4  ">
              <?php
      if(isset($_GET['error'])==true)
      {
        ?>
   <div class="alert alert-danger">
      <a href="log.php" class="close" data-dismiss="alert">&times;</a>
    <strong>Sorry!</strong>Username or password is incorrect !!
  </div>
 <?php
      }
    ?>
      
            
                <form class="form-signin"  action="log.php"  method="post">
                  <div class="text-center">
                <img class="mb-4" src="images\u1.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                </div>
                 <div class="form-group"> 
                  <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
                  </div>
                  <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
            <div class="checkbox mb-3">
        <center>
          <input type="checkbox" value="remember-me" > Remember me
        </center>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted" align="center">&copy; MITCOE_2018-2019</p>
    </form>

           
    </div>  
</div>
</div>

<?php

include("dbcon.php");
if (isset($_POST['login']))
{
session_start();

mysqli_select_db($con,'cafemgmt');

$name=$_POST['user'];
$pass=$_POST['password'];

$sql="select * from manager where name='$name' AND password='$pass'";

$result = mysqli_query($con,$sql);

  if(mysqli_num_rows($result)==1){
    $res=mysqli_fetch_array($result);
    $_SESSION['username']=$name;
    $_SESSION['mid']=$res['mid'];
    header('location:home.php');
  }
  else{
  header("location:log.php?error=1");
  }
}
?>
</body></html>