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
  <link rel="stylesheet" href="buystyle.css">
</head>
<body>

  <div class="content-wrapper bg-white">
      
  <div class="container ">
      <div class="row pad2 pt-5">
          <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/app.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Apple Salad</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $3</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/app3.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Baked Pinaple</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $5</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/app6.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Orange Tea</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $2</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/photo10.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Blueberry Curry</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $11</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
      </div>
    </div>
    <div class="container ">
      <div class="row pad2">
          <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/cook8.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Oats</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $4</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/cook7.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Mushroom Salad</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $7</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/cook2.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Lemon Tea</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $2</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/cook5.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Strawberry Cake</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $30</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
      </div>
    </div>
        <div class="container ">
      <div class="row pad2">
          <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/photo15.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Strawberry Cookies</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $5</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1 hh" src="images/pizza2.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Cheese Pizza</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $7</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/ice.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Ice Cream</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $2</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/breakfast3.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Pancake</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $3</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
      </div>
    </div>
    <div class="container ">
      <div class="row pad2">
          <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1 hh" src="images/breakfast7.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Swedish Bread<</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $5</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/breakfast10.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">French Pasta</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $12</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/cook9.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Chocolate Cupcake</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $9</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1 hh" src="images/cook17.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Caramel</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $3</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
      </div>
    </div>
      <div class="container ">
      <div class="row pad2 mt-2">
          <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/cook4.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Turkish Bread</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $2</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/cook6.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Broccoli Olive</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $7</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1 hh" src="images/photo3.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Strawberry Pastry</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $8</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1 hh" src="images/photo7.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Orange Pancake</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $5</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
      </div>
      </div>
      
      <div class="container ">
      <div class="row pad2 ">
          <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/photo13.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Orange</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $2</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/breakfast5.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Strawberry Custard</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $13</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/cook8.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Oats</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $2</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/photo6.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Meat Ball</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $32</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
      </div>
      </div>
      <div class="container pb-5 ">
      <div class="row pad2">
          <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1 hh" src="images/cook18.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Lemon Juice</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $2</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/cook4.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Turkish Bread</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $3</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/app6.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Orange Tea</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $2</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/photo13.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Orange </a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $4</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
      </div>
    </div>
    <div class="container pb-1">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="breakfast.php">2</a></li>
          <li class="page-item"><a class="page-link" href="appetizer.php">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>
    </div>
    
  
  </body>
  </html>

<?php
include('includes/footer.php');
?>

