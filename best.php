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
  <!-- Shovick Style-->
  <link rel="stylesheet" href="buystyle.css">
</head>
<body>

  <div class="content-wrapper bg-white">
      
  <div class="container pl-4">
      <div class="row pt-5 pad">
          <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/ice.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Strawberry Icecream</a></h4>
              </p>
              <p class="pl-2 tt">
              <span class="textplus"><b>Price: $2</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC  </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/background.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Fruit Curry</a></h4>
              </p>
              <p class="pl-2 tt">
              <span class="textplus"><b>Price: $20</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/app7.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Mango Juice</a></h4>
              </p>
              <p class="pl-2 tt">
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
            <img class="img-fluid photo1" src="images/breakfast3.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Fruit Custard</a></h4>
              </p>
              <p class="pl-2 tt">
              <span class="textplus"><b>Price: $7</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC  </br>
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
              <img class="img-fluid photo1" src="images/cook9.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Chocolate cupcake</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $7</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC  </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/photo6.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Meat Ball</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $25</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC  </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1 hh" src="images/pizza2.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Cheese Pizza</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $9</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC  </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/photo10.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Fruit Curry</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $5</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC  </br>
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
              <img class="img-fluid photo1" src="images/app.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Apple Salad</a></h4>
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
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/app6.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Orange Tea</a></h4>
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
            <img class="img-fluid photo1" src="images/cook7.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Mushroom Salad</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $8</b></span></br>
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
              <img class="img-fluid photo1 hh" src="images/photo3.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Strawberry Pastry</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $9</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/cook8.jpg" >
              <p>
              <h4 class="col "><a href="buy2.php">Oats</a></h4>
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
            <img class="img-fluid photo1" src="images/cook6.jpg"  >
              <p>
              <h4 class="col "><a href="buy2.php">Broccoli Olive</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $6</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
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
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
      </div>
    </div>
    <div class="container pb-5 pl-3 pr-3">
        <div class="row mt-5 pad2">
          <div class="col-md-6  ">
            <p>
              <h4 class="col2">Turkish Meat Platter</h4>
              <p class="bod"></p>
            </P>
            <p class="mt-3 tt">
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.making this the first true generator on the Internet.  
              </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </p>
            <p>
              <a href="recipe2.php" class="btn btn-secondary  pl-3 pr-3">Recipe</a>
          </p>
          </div>
          <div class="col-md-6 p-2">
              <img class="img-fluid shad" src="images/photo.jpg" >
          </div>
        </div>
        <div class="row pad2">
          <div class="col-md-6">
            <p>
              <h4 class="col2">Beef Bacon Omlet</h4>
              <p class="bod"></p>
            </P>
            <p class="mt-3 tt">
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.making this the first true generator on the Internet. 
              </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </p>
            <p>
             <a href="recipe2.php" class="btn btn-secondary  pl-3 pr-3">Recipe</a>
          </p>
          </div>
          <div class="col-md-6 p-2">
              <img class="img-fluid shad" src="images/photo17.jpg" >
          </div>
        </div>
        <div class="row pad2">
          <div class="col-md-6">
            <p>
              <h4 class="col2">Chocolate Egg</h4>
              <p class="bod"></p>
            </P>
            <p class="mt-3 tt">
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.making this the first true generator on the Internet.   
              </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </p>
            <p>
            <a href="recipe2.php" class="btn btn-secondary  pl-3 pr-3">Recipe</a>
          </p>
          </div>
          <div class="col-md-6 p-2">
              <img class="img-fluid shad" src="images/photo16.jpg" >
          </div>
        </div>  
        </div>
        <div class="container ">
        <div class="row ml-2 pad">
          <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/sweet5.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Cream Biscuit</a></h4>
              </p>
              <p class="pl-2 text-muted tt">
              <span class="textplus"><b>Price: $8</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/burger.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Cheesy Blast Burger</a></h4>
              </p>
              <p class="pl-2 text-muted tt">
              <span class="textplus"><b>Price: $20</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/pasta.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Prawn Pasta</a></h4>
              </p>
              <p class="pl-2 text-muted tt">
              <span class="textplus"><b>Price: $30</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/lunch.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" > Chili Crab </a></h4>
              </p>
              <p class="pl-2 text-muted tt">
              <span class="textplus"><b>Price: $40</b></span></br>
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
        <div class="row  pad2">
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/pizza.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Peparoni Pizza</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $40</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/photo8.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Beef Burger</a></h4>
              </p>
              <p class="pl-2">
              <span class="textplus"><b>Price: $25</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/sweet2.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Sweet Balls Candy</a></h4>
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
              <img class="img-fluid photo1" src="images/photo11.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Strawberry pastry</a></h4>
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
        <div class="row ml-2 pl-3 pr-3">
        <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/pizza3.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Bbq Pizza</a></h4>
              </p>
              <p class="pl-2 text-muted tt">
              <span class="textplus"><b>Price: $15</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/sweet3.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Dounut</a></h4>
              </p>
              <p class="pl-2 text-muted tt">
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
              <img class="img-fluid photo1" src="images/pasta3.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Olive Pasta</a></h4>
              </p>
              <p class="pl-2 text-muted tt">
              <span class="textplus"><b>Price: $30</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/photo.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Deep Dish Platter</a></h4>
              </p>
              <p class="pl-2 text-muted tt">
              <span class="textplus"><b>Price: $40</b></span></br>
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
        <div class="row  pad2  pt-5">
        <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/lunch2.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Vegetable Curry</a></h4>
              </p>
              <p class="pl-2 text-muted tt">
              <span class="textplus"><b>Price: $20</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/pasta2.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Prawn Pasta</a></h4>
              </p>
              <p class="pl-2 text-muted tt">
              <span class="textplus"><b>Price: $10</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/photo9.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Beef Smoke</a></h4>
              </p>
              <p class="pl-2 text-muted tt">
              <span class="textplus"><b>Price: $40</b></span></br>
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/pizza4.jpg" >
              <p>
              <h4 class="col"><a href="buy2.php" >Chicken Pizza</a></h4>
              </p>
              <p class="pl-2 text-muted tt">
              <span class="textplus"><b>Price: $40</b></span></br>
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
      <div class="container pl-3 pb-5">
        <div class="row mt-5 pad2">
          <div class="col-md-6  ">
            <p>
              <h4 class="col2">Waffle</h4>
              <p class="bod"></p>
            </P>
            <p class="mt-3 tt">
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.making this the first true generator on the Internet.  
              </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </p>
            <p>
              <a href="recipe2.php" class="btn btn-secondary  pl-3 pr-3">Recipe</a>
          </p>
          </div>
          <div class="col-md-6 p-2">
              <img class="img-fluid shad" src="images/breakfast9.jpg" >
          </div>
        </div>
        <div class="row pad2">
          <div class="col-md-6">
            <p>
              <h4 class="col2">Egg Bacon</h4>
              <p class="bod"></p>
            </P>
            <p class="mt-3 tt">
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.making this the first true generator on the Internet. 
              </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </p>
            <p>
             <a href="recipe2.php" class="btn btn-secondary  pl-3 pr-3">Recipe</a>
          </p>
          </div>
          <div class="col-md-6 p-2">
              <img class="img-fluid shad" src="images/background3.jpg" >
          </div>
        </div>
        <div class="row pad2">
          <div class="col-md-6">
            <p>
              <h4 class="col2">Fruit Custard</h4>
              <p class="bod"></p>
            </P>
            <p class="mt-3 tt">
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.making this the first true generator on the Internet.   
              </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </p>
            <p>
            <a href="recipe2.php" class="btn btn-secondary  pl-3 pr-3">Recipe</a>
          </p>
          </div>
          <div class="col-md-6 p-2">
              <img class="img-fluid shad" src="images/breakfast.jpg" >
          </div>
        </div>  
        </div>
      
  
    </div>
    
  
  </body>
  </html>

<?php
include('includes/footer.php');
?>

