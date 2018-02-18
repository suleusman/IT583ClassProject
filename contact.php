<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Dr. Hamed Sallam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="css/main.css" rel="stylesheet" type="text/css">


</head>
<body>

<?php include("include/header.php"); ?>

<div class=" text-center" style="max-width:1000px; margin:auto; margin-top:135px; letter-spacing:1px; font-size:14px; line-height:2.1; color:#333; font-family: Verdana, Geneva, sans-serif;">
    <div class="row" style="text-align:center; display:block; border:thin solid #; margin-bottom:5px;">
    <div class="col-sm-12 form-group">
<h3><img  src="images/user.png" class="img-circle" width="150" height="150" style="border:thick solid #ddd; padding:10px;" /></h3>
      <h3 style="">Contact Dr. Hamed</h3>
    <div id="hr"><hr ></div><br />
  <p style="font-size:14px; text-align:justify;">
      <strong>Use the form below to Contact me and i will get back to you as soon as posible.</strong>
   </p>
         <hr style="width:100%;">
    </div>
    
    <form action="" method="post">
        
        <div class="col-sm-6 form-group">
          <input type="text" class="form-control" id="name" name="name" placeholder="Name"   style="border-color:#531063; padding:10px;">
        </div>
        
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email"  style="border-color:#531063;">
        </div>
        <div class="col-sm-12 form-group">
 
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="10" style="border-color:#531063;"></textarea>
      </div>
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" style="background-color:#531063; color:#fff;">Send</button>
        </div>
        </form>
    </div>
        
</div>
    







<div class="container" style="max-width:100%; width:auto; background:#531063; min-height:70px;">    
  <div class="row">
    <div class="col-sm-12">
    <?php
	include("include/footer.php");
	 ?>
    </div></div></div>
</body>
</html>
