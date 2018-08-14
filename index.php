
<?php include("includes/header.php"); ?>
<?php
  if(isset($_POST['login'])) {
    $username = strip_tags($_POST['username']);
    $password = htmlentities($_POST['password']);
    $new_password = sha1($password);
    
    // select query
    $select_username_password_query = mysqli_query($con, "SELECT * FROM users WHERE username='". $username ."'");

    while($select_username_password = mysqli_fetch_assoc($select_username_password_query)) {
     echo $select_username_password['id'];
     if($select_username_password['username'] == '') {
       echo "Sorry, Please Try Again";
     } else {
      header("Location: home.php");
     }
    }
  }
?>
<form action="" method="POST">
  <div class="form-group">
    <center><div class="logo">
		Login
    </div></center><br>
    <input type="username" class="form-control" name="username" id="exampleInputUsername1" aria-describedby="usernameHelp" placeholder="username">
  
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
	  
  <button type="submit" class="btn btn-primary" name="login">login</button>
  <center><a href="register.php">Dont Have A Account Register</a></center>	
</form>

<?php include("includes/footer.php"); ?>