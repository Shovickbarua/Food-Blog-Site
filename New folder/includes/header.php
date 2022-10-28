
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
  <!-- Shovick style sheet-->
  <link rel="stylesheet" href="head_foot_style.css">
</head>

<body class="hold-transition sidebar-mini ">
  <div class="wrapper">
    <div class="">
      <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="about.php" class="nav-link">About US</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                  <a href="recipe.php" class="nav-link">Recipes</a>
                </li>
            <li class="nav-item d-none d-sm-inline-block">
                  <a href="contacts.php" class="nav-link">Contacts</a>
                </li>
            <li class="nav-item d-none d-sm-inline-block">
                  <a href="buy.php" class="nav-link">Buying Guide</a>
                </li>
            <li class="nav-item d-none d-sm-inline-block">
                  <a href="best.php" class="nav-link">Best Of US</a>
                </li>
            <li class="nav-item d-none d-sm-inline-block">
                  <a href="https://www.facebook.com/Food-Paradise-128442728644380" class="nav-link">Follow US</a>
                </li>
            
          <form method="POST" action="functions.php">
            <li class="nav-item d-none d-sm-inline-block ">
              <input type= "text"  placeholder="Email Address" name="email" size="21" required>
            </li>
            <li class="nav-item d-none d-sm-inline-block ">
                <button type ="submit" class=" btn nav-link" name="subs">Subscribe</button>
            </li>
          </form>

          <li class="nav-item d-none d-sm-inline-block ">
              <a href="signup.php" class="nav-link ">Register</a>
            </li>
          <li class="nav-item d-none d-sm-inline-block ">
              <a href="login_page.php" class="nav-link ">Log In</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block ">
              <a href="logout.php" class="nav-link ">Log Out</a>
            </li>
          </ul>
      </nav>
    </div>
  </div>
</body>
</html>