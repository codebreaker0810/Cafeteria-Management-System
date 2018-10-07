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
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
    <?php
	include("header.php");
	?>
<div class="container"><br><br>   
    <h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2>
               <!-- <div class="col-sm-6">
                    <h4 align="right"><a href="logout.php">LogOut</a></h4>
					</div>
						-->	
	<br><br>
	   <div class="row">

      <div class="col-sm-4 py-2">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h3 class="card-title">Insert Employee</h3>
                    <p class="card-text">Insert a new Employee details.</p>
                    <a href="insertemp.php" class="btn btn-outline-light">Add</a>
                </div>
                <div class="card-footer">
                 <small class="text-white">Click on button to insert</small>
                </div>
            </div>
        </div>
    <div class="col-sm-4 py-2">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h3 class="card-title">Update Employee</h3>
                    <p class="card-text">Update the Employee details.</p>
                    <a href="update.php" class="btn btn-outline-light">Update</a>
                </div>
                <div class="card-footer">
                 <small class="text-white">Click on button to update</small>
                </div>
            </div>
        </div>
         <div class="col-sm-4 py-2">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <h3 class="card-title">Delete Employee </h3>
                    <p class="card-text">View or Delete the Employee details.</p>
                    <a href="viewemp.php" class="btn btn-outline-light">Delete</a>
                </div>
                <div class="card-footer">
                 <small class="text-white">Click on button to delete</small>
                </div>
            </div>
        </div>
   
  
</div>


	<hr>
	<br>
	
	<div class="row">

	  <div class="col-sm-4 py-2">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h3 class="card-title">Insert Item</h3>
                    <p class="card-text">Insert a new Item details.</p>
                    <a href="insertitem.php" class="btn btn-outline-light">Add</a>
                </div>
                <div class="card-footer">
     			 <small class="text-white">Click on button to insert</small>
   			    </div>
            </div>
        </div>
	<div class="col-sm-4 py-2">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h3 class="card-title">Update Item</h3>
                    <p class="card-text">Update the Item details.</p>
                    <a href="updateitem.php" class="btn btn-outline-light">Update</a>
                </div>
                <div class="card-footer">
                 <small class="text-white">Click on button to update</small>
                </div>
            </div>
        </div>
         <div class="col-sm-4 py-2">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <h3 class="card-title">Delete Item</h3>
                    <p class="card-text">Delete or view the Item details.</p>
                    <a href="viewitem.php" class="btn btn-outline-light">Delete</a>
                </div>
                <div class="card-footer">
     			 <small class="text-white">Click on button to delete</small>
   			    </div>
            </div>
        </div>
   
  
</div>
</div>
<?php
	include("footer.php");
?>
</body>
</html>