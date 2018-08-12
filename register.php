<?php include("includes/header.php"); ?>
<?php
	if(isset($_POST['register'])) {
		$username = strip_tags($_POST['username']);
		$email = strip_tags($_POST['email']);
		$password = htmlentities($_POST['password']);

		$enPassword = sha1($password);
		//insert data into database
		$insert_user_query = mysqli_query($con, "INSERT INTO users VALUES('', '$username', '$email', '$enPassword')");

	}
?>
<form method="POST">
  <div class="form-group">
    <center><div class="logo">
		Register 
    </div></center><br>
    <input type="username" class="form-control" id="exampleInputUsername1" name="username" aria-describedby="usernameHelp" placeholder="username" required="required">
  
  </div>
  <div class="form-group">
    
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="email" required="required">
  
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required="required">
  </div>
	  
  <button type="submit" name="register" class="btn btn-primary">register</button>
  <center><a href="register.php">Have A Account Login</a></center>	
</form>


<?php include("includes/footer.php"); ?>