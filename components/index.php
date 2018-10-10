
<!DOCTYPE html>

<html>
<head>
	<title> Cafeteria </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 
</head>	
<style>
.fixed-bg {
    background-image: url("images/cafe.jpg");
    min-height: 500px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
	<body class="fixed-bg">
		
	  <?php
	  	include("header.php");
	  	include("carousal.php");
	  	include("menu.php");
	  	/*
	  	include("bevreges.php");
	  	include("coffe.php");
	  	include("sandwitch.php");
	  	include("pastry.php");*/
	  	
	  	include("footer.php");
	  ?>
      
  
             
  
</div>

</body>

</html>    



