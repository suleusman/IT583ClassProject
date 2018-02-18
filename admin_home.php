<?php 
session_start();
include("include/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    
    
  <style type="text/css">
      *,body,html{padding: 0; margin: 0;}
 body { 
  background: url(images/1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }
  
 </style>
</head>
<body>
<?php
	include("include/admin_header.php"); //Add the admin_header file to the page
?>
    
<h3 style='color:red; margin-top:200px; align:center;' >
    <?php

     if(isset($_GET['msg'])) //To prevent the echoing the value of $_GET[] when the admin home page load
         echo $_GET['msg']; //To didplay the status (success or not) of the file upload      
    
?>
    
</h3>
 <h3 style="color:red; margin-top:200px;"></h3>   

 
</body>
</html>


