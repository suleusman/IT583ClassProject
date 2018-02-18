<?php 
session_start();
include("include/connection.php");
?>
<?php 
if(isset($_POST['sign_in'])){
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$oldpassword = mysqli_real_escape_string($connection, $_POST['oldpassword']);
	$newpassword = mysqli_real_escape_string($connection, $_POST['newpassword']);
    
	if(empty($username)){
        $error = "User Name cannot be empty";
    }else
    if(empty($oldpassword)){
        $error = "old password cannot be empty";
    }else
    if(empty($newpassword)){
        $error = "new password cannot be empty";
    }else{
	//Fetch user from database
	$sql = "SELECT * FROM admin_login WHERE password = '$oldpassword'";
	$query = mysqli_query($connection,$sql) or die(mysqli_error());
	$data = mysqli_fetch_array($query);
	if(mysqli_num_rows($query)== true){
        $sql1 ="UPDATE admin_login SET username = '$username', password = '$newpassword'";
        $query = mysqli_query($connection,$sql1) or die(mysqli_error());
        $error = "Record updated successfully";
	}else
	$error = "Invalid old Password";
  }  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Admin Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    
<title>Update Web Admin Login</title>
<style>

#input{ margin-bottom:40px; padding:20px;  box-sizing: border-box;}
</style>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link href="styles/css/main.css" type="text/css" rel="stylesheet" >
</head>

<body>
    <?php
	include("include/admin_header.php");
?>
<div class=""  style="width:500px; margin:auto; padding:0px; margin-top:10px; ">
<div class="container-fluid" style="width:100%; width:auto;">
    <div class="row text-center">
        <div class="col-sm-12">
  
<div style="margin:auto; font-weight:bold; max-width:500px; border:5px #fff solid; min-height:300px; border-radius:5px; background-color:#eee; padding-left:50px; padding-right:50px; padding-top:25px; margin-top:100px;">
    <h4 style="color:red;"><?php if(isset($error)){echo $error; }?></h4>
<form action="update_admin_login.php" method="post"  >
<div class="row" style="text-align:center;">
<h1 style=" font-size:28px; font-weight:bold; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; color:#531063;">Update Log In Info.</h1>
 	</div>
    <div class="form-group has-feedback">
  <input type="password"  name="oldpassword" placeholder="Enter Old Password"  class="form-control" />
    <span class="glyphicon glyphicon-lock form-control-feedback" style="color:#888;"></span>
  </div>
    <div class="form-group has-feedback">
  <input type="text"  name="username" placeholder="Enter New Username" class="form-control"/>
    <span class="glyphicon glyphicon-user form-control-feedback" style="color:#888;"></span>

   </div>
            
  <div class="form-group has-feedback">
  <input type="password"  name="newpassword" placeholder="Enter New Password"  class="form-control" />
    <span class="glyphicon glyphicon-lock form-control-feedback" style="color:#888;"></span>
  </div>
              
<div class="form-group"> <input  style="font-weight:normal; font-size:16px; background-color:#531063;" type="submit" value="Update Record" name="sign_in" class="btn btn-primary form-control" />
                </div>
</form>
</div>
</div>
</div>
        </div></div>

</body>
</html>