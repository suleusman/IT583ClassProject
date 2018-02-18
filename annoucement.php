<?php 
session_start();
include("include/connection.php");
?>
<?php 
if(isset($_POST['add'])){
	$date =  mysqli_real_escape_string($connection, $_POST['date']);
	$content = mysqli_real_escape_string($connection, $_POST['content']);
    
	if(empty($date)){
        $error = "Date cannot be empty";
    }else
    if(empty($content)){
        $error = "Content cannot be empty";
    }else{
	//Fetch user from database
        $sql = "INSERT INTO annoucement (date, content) VALUES (STR_TO_DATE('$date', '%m/%d/%Y'), '$content')";
        if (mysqli_query($connection, $sql)) {
        $error= "New annoucement added successfully";
        } else {
        $error= "Error: " . $sql . "<br>" . mysqli_error($connection);
}
  }  
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Annoucement Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="css/main.css" rel="stylesheet" type="text/css">
  
    <style type="text/css">
 body { 
  background: url(images/.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }
  
 </style>
</head>
<body>
<?php
	include("include/admin_header.php");
?>
    
<div style="max-width:600px; margin:auto; margin-top:150px; letter-spacing:1px; font-size:14px; line-height:2.1; color:#333; font-family: Verdana, Geneva, sans-serif;">
    <div class="row" style="display:block; border:thin solid #; margin:5px;">
    <div class="col-sm-12 form-group">
      <h3 class="text-center">Create Annoucement</h3>
<br />
  <p style="font-size:14px; text-align:justify;">
      <strong>Use the form below to create annoucement.</strong>
   </p>
         <hr style="width:100%;">
    </div>
         <p style="color:red;"><?php if(isset($error)){echo $error;}?></p>
    <form action="" method="post">
        
        <div class="col-sm-6 form-group">
            <label>Date</label>
          <input type="text" class="form-control" id="date" name="date" placeholder="mm/dd/yyyy"   style="border-color:#531063;">
        </div>
        <div class="col-sm-12 form-group">
        <label>Content</label>
      <textarea class="form-control" id="content" name="content" placeholder="Enter full annoucement..." rows="10" style="border-color:#531063;"></textarea>
      </div>
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" name="add" style="background-color:#531063; color:#fff;">Add</button>
        </div>
        </form>
    </div>
        
</div>
    
 
</body>
</html>

