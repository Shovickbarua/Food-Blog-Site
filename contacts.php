<?php

require_once('db/connection.php');

include('includes/header.php');
include('includes/menu.php');
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FOOD</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!--Shovick Style-->
  <link rel="stylesheet" href="contactstyle.css">
</head>
    <body>
    <div class="content-wrapper bg-white">
      <div class="container">
        <div class="row p-5">
          <div class="col-md-6 pr-3 ">
            <img class="img-fluid shad" src="images/photo7.jpg">
          </div>
          <div class="col-md-6 pl-3">
              <form method="POST" id="food" action="functions.php">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required>
              </div>
              <div class="form-group">
                <label for="com">Comment</label>
                <textarea class="form-control" id="com" name="com" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-secondary" name="contact" > Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  
    </body>
</html>

<?php
include('includes/footer.php');
?>