<?php
 

?>

<html>
<head>
    <meta charset="utf-8" />
    <title>About us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    include("header.php");
    ?>
<div class="container">

      <!-- Introduction Row -->
      <h1 >About Us
        <small>It's Nice to Meet You!</small>
      </h1>
      <p>We strive to provide the best experience to our guests. Our coffees are sourced from thousands of small coffee planters, who made us who we are today and we're glad to be a part of their lives. We opened our first cafe in 2022 at  Pune – the youth and the young at heart immediately took to the cafe, and it continues to be one of the most happening places in the city.Cafeteria to the youth is a “hangout” spot where they meet people, make conversations, and have a whole lot of fun over steaming cups of great coffee.</p>

      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Our Team</h2>
        </div>
        <div class="col-lg-3 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="emplogo.jpg" height="200" width="200" alt="">
          <h3>Asif Tamboli
            <small>Developer</small>
          </h3>
       
        </div>
        <div class="col-lg-3 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="emplogo.jpg" height="200" width="200" alt="">
          <h3>Ayushi Varkate
            <small>Developer</small>
          </h3>
        </div>
       
      </div>

    </div>

    <?php
    include("footer.php");
    ?>
  </body>
  </html>