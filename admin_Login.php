<?php 
session_start();
include("include/connection.php");
?>
<?php 
if(isset($_POST['sign_in'])){
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);
    
	if(empty($username)){
        $error = "User Name cannot be empty";
    }else
    if(empty($password)){
        $error = "password cannot be empty";
    }else{
	//Fetch user from database
	$sql = "SELECT * FROM admin_login WHERE username = '$username' AND password = '$password' LIMIT 1";
	$query = mysqli_query($connection,$sql) or die(mysqli_error());
	$data = mysqli_fetch_array($query);
	
	if(mysqli_num_rows($query)== true){
		$_SESSION['username'] = $username;
		header("location:admin_home.php");	
	}else
	$_SESSION['username']='';
	$_SESSION['password']='';
	$error = "Invalid Username and Password";
  }  
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Admin Login</title>
<style>
body { 
  background: url(images/1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

#input{ margin-bottom:40px; padding:20px;  box-sizing: border-box;}
</style>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link href="styles/css/main.css" type="text/css" rel="stylesheet" >
</head>

<body>
<div class="container" style="margin:auto; width:100%; position:relative;">
<div class="col-sm-12">
<div style="margin:auto; font-weight:bold; max-width:500px; border:5px #fff solid; min-height:300px; border-radius:5px; background-color:#eee; padding-left:50px; padding-right:50px; padding-top:25px; margin-top:100px;">
    <h4 style="color:red;"><?php if(isset($error)){echo $error; }?></h4>
<form action="admin_Login.php" method="post"  >
<div class="row" style="text-align:center;">
<h1 style=" font-size:28px; font-weight:bold; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; color:#531063;">Admin Log In </h1>
 	</div>
    <div class="form-group has-feedback"><h5 style="color:red;">
  <input type="text"  name="username" placeholder="Enter Username" class="form-control"/>
      <span class="glyphicon glyphicon-user form-control-feedback" style="color:#888;"></span>

   </div>
            
  <div class="form-group has-feedback"><h5 style="color:red;">
  <input type="password"  name="password" placeholder="Enter Password"  class="form-control" />
    <span class="glyphicon glyphicon-lock form-control-feedback" style="color:#888;"></span>
  </div>
              
<div class="form-group"> <input  style="font-weight:bolder; font-size:16px; background-color:#531063;" type="submit" value="Sign In" name="sign_in" class="btn btn-primary form-control" />
                </div>
</form>
</div>
</div>
</div>

</body>
</html>