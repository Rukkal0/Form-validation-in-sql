<?php
$Email_address_error='';
$password_error='';
$username_error='';
if (isset($_POST['submit'])){
  if(empty($_POST['email'])){
    $Email_address_error='Enter ur email';
  }
  if(empty($_POST['password'])){
    $password_error='Enter your password';
  }
  if(empty($_POST['username'])){
  $username_error='Enter ur username';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-sm-6">
                <div class="text-success text-center mb-4">
                    <h1>Form:</h1>
                </div>
    <form action="../sql/add_data.php" method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="username" name="username" class="form-control" id="username">
    <div class="text-danger"><?php echo $username_error; ?></div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="text-danger"><?php echo $Email_address_error; ?></div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    <div class="text-danger"><?php echo $password_error; ?></div>
  </div>
  <button type="submit" name='submit' class="btn btn-primary">Submit</button>
    </form>
</body>
</html>