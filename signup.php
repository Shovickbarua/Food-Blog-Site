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
</head>
<body>
  <div class="content-wrapper bg-white">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sign Up</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        <form method="POST" id="myForm" action="functions.php" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="fName"> First Name<font style="color:red">*</font></label>
                        <input type="text" class="form-control" id="fName" placeholder="First Name" name="fName" required>
                        
                    </div>
                    <div class="form-group col-md-4">
                        <label for="lName">Last Name<font style="color:red">*</font></label>
                        <input type="text" class="form-control" id="lName" placeholder="Last Name" name="lName" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email<font style="color:red">*</font></label>
                        <input type="text" class="form-control" id="email" placeholder="email" name="email" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="pNum">Mobile<font style="color:red">*</font></label>
                        <input type="text" class="form-control" id="mobile" name="mobile" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="password">Password<font style="color:red">*</font></label>
                        <input type="password" class="form-control" id="pass" name="pass" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="password">Confirm Password<font style="color:red">*</font></label>
                        <input type="password" class="form-control" id="cpass" name="cpass" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="adress" name="address" rows="2"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="gender">Select Gender<font style="color:red">*</font></label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="">--Select Gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dob">Date Of Birth<font style="color:red">*</font></label>
                        <input type="date" class="form-control singledatepicker" id="dob" name="dob" autocomplete="off" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="image">Image Upload</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary btn-sm" name="signup">Save</button>
                    </div>
                </div>
                </form>
      </div>
    </div>
  </div>
 </body>
 </html>



<?php
include('includes/footer.php');
?>


