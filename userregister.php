<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  
<style>


<?php include 'formstyle.css'; ?>
</style>

</head>

<body onLoad="getLocation()">

<br>
<div class="container con_style" id="userlogin">
<br><br>
<form name="everyreg" id="everyr" method="post">
<h2>Registration</h2>
<hr>
<input type="text" class="form-control mb-4" name="name" id="nams" placeholder="Enter your name">
<div class="row">
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="email" id="em" placeholder="Enter your email address">
</div>
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="contact" id="cn" placeholder="Enter your contact number">
</div>
</div>
<input type="password" class="form-control mb-4" name="password1" id="passw1" placeholder="Enter your password">
<span onclick="myFunction()" id="eye" class="far fa-eye passcheck"></span>
<input type="password" class="form-control mb-4" name="password2" id="passw2" placeholder="Re-enter your password">
<span onclick="myFunction2()" id="eye" class="far fa-eye passcheck"></span>
<input type="hidden" name="lats" id="lats">
<input type="hidden" name="longs" id="longs">
<p id="error" class="text-center"></p>
<div class="row">
<div class="col-md-6">
<button type="submit" id="loginuser" name="act" value="log" class="btn btn-primary btn-block mb-4">Register</button>
</div>
<div class="col-md-6">
<a href="index.php" id="ext2"><button type="button" class="btn btn-danger btn-block">Cancel</button></a>
</div>
</div>
Already have an account?<a href="#">Login Here</a>

</form>

</div>




<script>

<?php include 'password.js'; ?>

</script>

</body>
</html>