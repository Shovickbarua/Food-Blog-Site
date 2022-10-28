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
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!--Shovick Style-->
  <link rel="stylesheet" href="recstyle.css">
</head>
<body>
    <div class="content-wrapper bg-white">
      <div class="container pt-5 ">
        <div class="row ml-2 pad">
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/burger2.jpg" >
              <p>
              <h4 class="col"><a href="recipe2.php" >Bbq Burger</a></h4>
              </p>
              <p class="pl-2 text-muted">
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1 lt" src="images/cook10.jpg" >
              <p>
              <h4 class="col"><a href="recipe2.php" >Strawberry Cookie</a></h4>
              </p>
              <p class="pl-2 text-muted">
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/cupcake.jpg" >
              <p>
              <h4 class="col"><a href="recipe2.php" >creamy Cupcake</a></h4>
              </p>
              <p class="pl-2 text-muted">
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
              <h4 class="col"><a href="recipe2.php" >French pasta</a></h4>
              </p>
              <p class="pl-2 text-muted">
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              </p>
            </div>
        </div>
      </div>
      <div class="container ">
        <div class="row ml-2 pad">
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/lunch.jpg" >
              <p>
              <h4 class="col"><a href="recipe2.php" >Shrimp Curry</a></h4>
              </p>
              <p class="pl-2 text-muted">
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/cook11.jpg" >
              <p>
              <h4 class="col"><a href="recipe2.php" >Spinach Pasta</a></h4>
              </p>
              <p class="pl-2 text-muted">
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/cook16.jpg" >
              <p>
              <h4 class="col"><a href="recipe2.php" >Suger Free Biscuit</a></h4>
              </p>
              <p class="pl-2 text-muted">
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
            </div>
            <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/app2.jpg" >
              <p>
              <h4 class="col"><a href="recipe2.php" >Meat Blaster Meal</a></h4>
              </p>
              <p class="pl-2 text-muted">
             
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              </p>
            </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-5 pad2">
          <div class="col-md-6">
              <img class="img-fluid pho shad" src="images/photo12.jpg" >
          </div>
          <div class="col-md-6 ">
          <p class="">
            <h1 class="col2">Add Recipe</h1>
            <p class="bod"></p>
          </P>
          <form method="POST" id="food" action="functions.php" >
              <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="recName">Recipe Name</label>
                <input type="name" class="form-control" id="recName" name="recName" placeholder="Recipe Name" required>
              </div>
              <div class="form-group">
                <label for="des">Description</label>
                <textarea class="form-control" id="des" name="des" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-secondary" name="submit" >Submit</button>
            </form>
          </div>
        </div>
      </div>
       
      <div class="container ">
      <div class="row pad3">
          <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/photo13.jpg" >
              <p>
              <h4 class="col "><a href="recipe2.php">Orange</a></h4>
              </p>
              <p class="pl-2">
        
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC  </br>
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
              <h4 class="col "><a href="recipe2.php">Oats</a></h4>
              </p>
              <p class="pl-2">
          
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC  </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1 hh" src="images/cook17.jpg"  >
              <p>
              <h4 class="col "><a href="recipe2.php">Caramel</a></h4>
              </p>
              <p class="pl-2">
           
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC  </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1 hh" src="images/photo3.jpg"  >
              <p>
              <h4 class="col "><a href="recipe2.php">Strawberry Pastry</a></h4>
              </p>
              <p class="pl-2">
            
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
      <div class="row pad3">
          <div class="col-md-3 d-inline-block p-3 ">
              <img class="img-fluid photo1" src="images/photo15.jpg" >
              <p>
              <h4 class="col "><a href="recipe2.php">Starwberry Cookies</a></h4>
              </p>
              <p class="pl-2">
           
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC  </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/breakfast3.jpg" >
              <p>
              <h4 class="col "><a href="recipe2.php">Pancake</a></h4>
              </p>
              <p class="pl-2">
         
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC  </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/app3.jpg"  >
              <p>
              <h4 class="col "><a href="recipe2.php">Baked Pinaple</a></h4>
              </p>
              <p class="pl-2">
            
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC  </br>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              </p>
          </div>
          <div class="col-md-3 d-inline-block p-3 ">
            <img class="img-fluid photo1" src="images/photo5.jpg"  >
              <p>
              <h4 class="col "><a href="recipe2.php">Salmon Curry</a></h4>
              </p>
              <p class="pl-2">
          
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
      <div class="container pb-5">
        <div class="row mt-5 pad2">
          <div class="col-md-6">
              <img class="img-fluid pho shad" src="images/cook18.jpg" >
          </div>
          <div class="col-md-6 ">
          <p class="">
            <h1 class="col2">Ask For A Recipe</h1>
            <p class="bod"></p>
          </P>
          <form method="POST" id="food" action="functions.php" >
              <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="recName">Recipe Name</label>
                <input type="name" class="form-control" id="recName" name="recName" placeholder="Recipe Name" required>
              </div>
              <button type="submit" class="btn btn-secondary" name="btn" >Submit</button>
            </form>
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


