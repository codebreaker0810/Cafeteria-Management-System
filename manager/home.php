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
<div class="container">   
    <h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2>
               <!-- <div class="col-sm-6">
                    <h4 align="right"><a href="logout.php">LogOut</a></h4>
					</div>
						-->	
	<br><br>
	
	<a href="insertemp.php" class="btn btn-lg btn-primary"><span class="fa fa-user"></span> ADD Employee</a>&nbsp&nbsp&nbsp
	<a href="update.php" class="btn btn-lg btn-warning"><span class="fa fa-pencil"></span> Update Employee</a>&nbsp&nbsp&nbsp
	<a href="viewemp.php" class="btn btn-lg btn-danger"><span class="fa fa-trash"></span> Delete Employee</a>
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
     			 <small class="text-white">Last updated 3 mins ago</small>
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
            </div>
        </div>
         <div class="col-sm-4 py-2">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <h3 class="card-title">Delete Item</h3>
                    <p class="card-text">Delete the Item details.</p>
                    <a href="#" class="btn btn-outline-light">Delete</a>
                </div>
                <div class="card-footer">
     			 <small class="text-white">Last updated 3 mins ago</small>
   			    </div>
            </div>
        </div>
   
  
</div>
</div>
</body>
</html>