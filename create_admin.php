<?php 
session_start();
include("include/connection.php");
?>
<?php 
if(isset($_POST['sign_in'])){
	$firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	$retypepassword = mysqli_real_escape_string($connection, $_POST['retypepassword']);
    
	if(empty($firstname)){
        $error = "First Name cannot be empty";
    }else
    if(empty($lastname)){
        $error = "Last Name cannot be empty";
    }else
    if(empty($username)){
        $error = "Username cannot be empty";
    }else
    if(empty($password)){
        $error = "password cannot be empty";
    }else
    if(empty($retypepassword)){
        $error = "Retype password is require";
    }else 
    if($password != $retypepassword){
        $error = "Passwords did not match";
    }else{
	//Fetch user from database
	$sql = "INSERT INTO  admin_login(firstname, lastname, username, password)  VALUES('$firstname', '$lastname', '$username', '$password')";
	$query = mysqli_query($connection,$sql) or die(mysqli_error());
        $error = "New Admin Created successfully";
	}
  }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Craete Admin Login Page</title>
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
    <div class="row">
        <div class="col-sm-12">
  
<div style="margin:auto; font-weight:bold; max-width:700px; border:5px #fff solid; min-height:300px; border-radius:5px; background-color:#eee; padding-left:50px; padding-right:50px; padding-top:25px; margin-top:100px;">
    <h4 style="color:red;"><?php if(isset($error)){echo $error; }?></h4>
<form action="create_admin.php" method="post"  >
<div class="row" style="text-align:center;">
<h1 style=" font-size:28px; font-weight:bold; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; color:#531063;">New Admin.</h1>
 	</div>
    <div class="form-group has-feedback">
        <label>First Name:</label>
  <input type="text"  name="firstname" placeholder="" class="form-control"/>
    <span class="glyphicon glyphicon-user form-control-feedback" style="color:#888;"></span>

   </div>
        <div class="form-group has-feedback">
            <label>Last Name:&nbsp;&nbsp;&nbsp;</label>
  <input type="text"  name="lastname" placeholder="" class="form-control"/>
    <span class="glyphicon glyphicon-user form-control-feedback" style="color:#888;"></span>

   </div>
    <div class="form-group has-feedback">
            <label>Username:&nbsp;&nbsp;&nbsp;</label>
  <input type="text"  name="username" placeholder="" class="form-control"/>
    <span class="glyphicon glyphicon-user form-control-feedback" style="color:#888;"></span>

   </div>
    <div class="form-group has-feedback">
  <label>Password:&nbsp;&nbsp;&nbsp;</label><input type="password"  name="password" placeholder=""  class="form-control" />
    <span class="glyphicon glyphicon-lock form-control-feedback" style="color:#888;"></span>
  </div>
        
  <div class="form-group has-feedback">
  <label>Retype Password:&nbsp;&nbsp;&nbsp;</label><input type="password"  name="retypepassword" placeholder=""  class="form-control" />
    <span class="glyphicon glyphicon-lock form-control-feedback" style="color:#888;"></span>
  </div>
              
<div class="form-group"> <input  style="font-weight:normal; font-size:16px; background-color:#531063;" type="submit" value="Create" name="sign_in" class="btn btn-primary form-control" />
                </div>
</form>
</div>
</div>
</div>
        </div></div>

</body>
</html>