<?php 
session_start();
include("include/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">

</script>
  <title>Dr. Ahmed Salam - Minnesota State University, Mankato</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main.css" type="text/css"  />

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php include("include/header.php")?>

<div class=""  style="width:80%; margin:auto; padding:0px; margin-top:80px;  box-shadow: 1px 2px 4px rgba(0, 0, 0, .5); ">
<div class="container-fluid text-center" style="width:100%; width:auto;">
    <div class="row text-center">
    <div class="col-sm-12">
    
  <?php include("include/rotator.php")?>

      </div>
    </div>
  </div>

<!-- Container (About Section) -->
<div class="container" style="margin:15px; position:relative; min-height:500px;">    
  <div class="row">
    <div class="col-sm-8" id="about">
    
      <h4 style="margin:0; padding:0;">Dr. Hamed Sallam</h4><hr  style=" background-color:#8500D8; height:2px;"/>
      <p style=" padding:10px; ">
      <img src="images/test.jpg"  align="left" alt="Dr. Hamed" style=""/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad		 minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad		 minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    
  <div class="col-sm-4" id="announcement">
  <h4 style="margin-bottom:5px; padding:0; text-align:center;  ">Annoucement</h4>
    
      <?php
    echo "<ul>";
      $sql = "SELECT date, content FROM annoucement";
      $result = mysqli_query($connection, $sql);

     if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<li> " . $row["content"]. "<br><b>". $row["date"]. "</b></li><br>";
    }
     } else {
    echo "0 results";
     }
        echo "</ul>";
      ?>

    </div>
  </div>
</div>

    
    
    <div class=" " style="max-width:100%; margin: auto; background-color:#fff; padding-bottom:20px; ">    
  <div class="row" style="padding-top:20px;">
    <div class="col-sm-4 text-center" >
      <a href="#demo" data-toggle="collapse" class="glyphiclink">
      <span class="glyphicon glyphicon-blackboard img-circle glyphic" aria-hidden="true" ></span>  
        <p><strong>Education</strong></p>
      </a> 
      <div id="demo" class="collapse">
       <p style="padding:5px; color:#333; letter-spacing:1px; font-size:14px; text-align:justify; line-height:2.1;">
       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad		 minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>

      </div>
    </div>
    <div class="col-sm-4 text-center">
      <a href="#demo2" data-toggle="collapse" class="glyphiclink">
      <span class="glyphicon glyphicon-map-marker img-circle glyphic" aria-hidden="true"></span> 
          <p><strong>Office Location</strong></p>
      </a>
      <div id="demo2" class="collapse">
        <p style="padding:5px; color:#333; letter-spacing:1px; font-size:14px; text-align:justify; line-height:2.1;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad		 minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>

      </div>
    </div>
    <div class="col-sm-4 text-center">
      <a href="#demo3" data-toggle="collapse" class="glyphiclink">
      <span class="glyphicon glyphicon-time img-circle glyphic" aria-hidden="true"></span> 
          <p><strong>Office Hour</strong></p>
      </a>
      <div id="demo3" class="collapse">
        <p style="padding:5px; color:#333; letter-spacing:1px; font-size:14px; text-align:justify; line-height:2.1;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad		 minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>

      </div>
    </div>
  </div>
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
