<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Register Page</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

 
  </head>
  <body>
    <div class="col-lg-5 col-lg-offset-2">
    <h1>Registration Page!</h1>

    <p> Fill In the detail to register</p>

    <?php if(isset($_SESSION['sucess'])) { ?>

        <div class="alert alert-sucess">  <?php echo $_SESSION['success']; ?> </div>

        <?php echo validation_errors('<div class="alert alert-danger">','</div'); ?>

    <form action=" " method="POST">


    
        <div class="form-group">
          <label for username" >Firstname:</label>
          <input class="form-control" name="first_name" id="first_name" type="text">
        </div>

        <div class="form-group">
          <label for last_name" >Last Name:</label>
          <input class="form-control" name="last_name" id="last_name" type="text">
        </div>

        <div class="form-group">
          <label for username" >Username:</label>
          <input class="form-control" name="username" id="username" type="text">
        </div>

        <div class="form-group">
          <label for password" >Password:</label>
          <input class="form-control" name="password" id="password" type="password">
        </div>

        <div class="form-group">
          <label for repassword" >Repassword:</label>
          <input class="form-control" name="repassword" id="repassword" type="password">
        </div>

         <div class="form-group">
          <label for email" >Email:</label>
          <input class="form-control" name="email" id="username" type="text">
        </div>

        <div class="form-group">
          <label for address" >Address:</label>
          <input class="form-control" name="address" id="address" type="text">
        </div>

        <div class="form-group">
          <label for mobile_no" >Mobile No:</label>
          <input class="form-control" name="mobile_no" id="mobile_no" type="text">
        </div>

        <div class="text-center">
            <button class="btn btn-primary" name="register"> Register </button>
        </div>           

        
    </div>    
  </form>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>