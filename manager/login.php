<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin for manager</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.1.3-dist\css\bootstrap.min.css" rel="stylesheet">

    <link href="signin.css" rel="stylesheet">
  </head>

<body class="text-center">
  <div class="container">
    <?php
    if(isset($_GET['error'])==true)
    {
    ?>
    <div class="alert alert-danger">
      <a href="login.php" class="close" data-dismiss="alert">&times;</a>
        <strong>Sorry!</strong>Username or password is incorrect !!
    </div>
    <?php
    }
  ?>
  <?php
    if(isset($_GET['err'])==1)
    {
    ?>
    <div class="alert alert-danger">
      <a href="login.php" class="close" data-dismiss="alert">&times;</a>
        <strong>Sorry!</strong>You Must Login First !!
    </div>
    <?php
    }
  ?>
   <form class="form-signin"  action="login.php"  method="post">
      <img class="mb-4" src="images\u1.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <div class="form-group"> 
      <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
      </div>
      <div class="form-group"> 
      <input type="password" name="password" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"  required>
    </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; MITCOE_2018-2019</p>
    </form>
    </div>
  </body>
</html>

<?php

include("dbcon.php");
if (isset($_POST['login']))
{
session_start();

$con=mysqli_connect('localhost','root');
if($con==false){
  echo"no connection";
}
else{
  echo"connection ok";
}

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
    header("location:login.php?error=1");
  }
}
?>