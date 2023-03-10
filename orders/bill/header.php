<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nav bar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
   <div class="navbar-header">
      <a class="navbar-brand" href="#">Cafeteria</a>
    </div>
  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="../../employee/home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../">Add Order</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../bill/">Generate Bill</a>
    </li>
    
    <!-- Dropdown 
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
   -->
  </ul>
  <ul class="navbar-nav">
    <li><a class="nav-link" href="../../employee/profile.php?eid=<?php echo $_SESSION['eid'];?>"><span class="fa fa-user"></span></span> <?php echo $_SESSION['uname']; ?></a></li>
    <li><a class="nav-link" href="../../employee/logout.php"><span class="fa fa-sign-in"></span> Logout</a></li>
  </ul>

</nav>
<br>
</body>
</html>
