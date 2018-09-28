 <?php
 
 session_start();
 //echo $_SESSION['mid'];
 if(!isset($_SESSION['mid'])){
	header('location:login.php?err=1');
 }
 ?>
 <html>
 <head>
	<title></title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	include("header.php");
	?>
<div class="container">
       
    <h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2>
               <!-- <div class="col-sm-6">
                    <h4 align="right"><a href="logout.php">LogOut</a></h4>
					</div>
						-->	
	<br><br>
	
	<a href="insertemp.php" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-user"></span> ADD Employee</a>&nbsp&nbsp&nbsp
	<a href="viewemp.php" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete Employee</a>&nbsp&nbsp&nbsp
	<a href="update.php" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-pencil"></span> Update Employee</a>
	<hr>
	<br>

	<a href="insertitem.php">Insert Item details</a><br>
	<a href="updateitem.php">Update Item details</a><br>
	<a href="viewitem.php">View and delete Item details</a>

</div>
</body>
</html>