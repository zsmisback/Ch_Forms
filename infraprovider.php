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

<body>

<br>
<div class="container con_style" id="infrastructurediv">
<br><br>
<form name="infrastructure" id="infras" method="post">
<h2>Infrastructure registration</h2>
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
<input type="text" class="form-control mb-4" name="infname" id="infn" placeholder="Enter your infrastructures name">
<input type="text" class="form-control mb-4" name="infaddress" id="infad" placeholder="Enter your infrastructures address">
<textarea class="form-control mb-4" rows="5" name="infsummary" id="infsu" placeholder="Add a summary about your infrastructure"></textarea>
Select your opening and closing details:
<br><br>
<div class="row">

 <div class="col-md-3">
 <div class="form-group">
      
      <select class="form-control custom-select" name="openingday" id="opday">
	    <option value="openingdays" selected>Opening</option>
        <option value="Sun">Sunday</option>
        <option value="Mon">Monday</option>
        <option value="Tue">Tuesday</option>
		<option value="Wed">Wednesday</option>
        <option value="Apr">Thursday</option>
		<option value="May">Friday</option>
        <option value="Jun">Saturday</option>
		</select>
	  </div>
	  <p id="error6"></p>
</div>
 <div class="col-md-3">
 <div class="form-group">
      
      <select class="form-control custom-select" name="closingday" id="clday">
	    <option value="closing" selected>Closing</option>
        <option value="Sun">Sunday</option>
        <option value="Mon">Monday</option>
        <option value="Tue">Tuesday</option>
		<option value="Wed">Wednesday</option>
        <option value="Apr">Thursday</option>
		<option value="May">Friday</option>
        <option value="Jun">Saturday</option>
		</select>
	  </div>
	  <p id="error6"></p>
</div>
<div class="col-md-3">
 <div class="form-group">
       <label for="optime">Opening time</label>
      <input type="time" id="optime" name="openingtime"/>
	  </div>	
	  <p id="error7"></p>
</div>	
<div class="col-md-3">
<div class="form-group">
<label for="cltime">Closing time</label>
<input type="time" id="cltime" name="closingtime"/>
</div>
<p id="error8"></p> 
</div>  
</div>	
<div class="custom-file mb-4">
      <input type="file" class="custom-file-input" id="customFile" name="filename">
      <label class="custom-file-label" for="customFile">Add your infrastructure images (Max:12)</label>
    </div>
<div class="custom-file mb-4">
      <input type="file" class="custom-file-input" id="customFile2" name="filename2">
      <label class="custom-file-label" for="customFile2">Add your infrastructures documents</label>
    </div>
	
	Select the sport facilities that you provide:
	<br><br>
	<input type="checkbox" id="crick" name="cricket" value="cricket">
  <label for="crick">Cricket</label><br>
  <input type="checkbox" id="footb" name="football" value="football">
  <label for="footb">Football</label><br>
  <input type="checkbox" id="basketb" name="basketball" value="basketball">
  <label for="basketb">Basketball</label><br><br>
<input type="password" class="form-control mb-4" name="password1" id="passw1" placeholder="Enter your password">
<span onclick="myFunction()" id="eye" class="far fa-eye passcheck"></span>
<input type="password" class="form-control mb-4" name="password2" id="passw2" placeholder="Re-enter your password">
<span onclick="myFunction2()" id="eye" class="far fa-eye passcheck"></span>

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



<script src="ckeditor.js"></script>
<script>
$(document).ready(function(){
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

<?php include 'password.js'; ?>

});
</script>

</body>
</html>