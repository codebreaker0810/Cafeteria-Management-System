<?php
 
 session_start();
 if(!isset($_SESSION['eid'])){
	header('location:login.php');
	
 }
?>

<html>
 <head>
	<title></title>
	
</head>
<body>
	<?php
	include("header.php");
	?>
	<div class="container">	
	<h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2>
</div>
</body>
</html>	