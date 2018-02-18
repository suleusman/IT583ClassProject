<?php 
session_start();
include("include/connection.php");
?>

<?php
      $sql = "SELECT date, content FROM annoucement";
      $result = mysqli_query($connection, $sql);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin View Annoucement Page</title>
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
    
<div style="max-width:1000px; margin:auto; margin-top:150px; letter-spacing:1px; font-size:14px; line-height:2.1; color:#333; font-family: Verdana, Geneva, sans-serif;">
    <div class="row" style="display:block; border:thin solid #; margin:5px;">
    <div class="col-sm-12 form-group">
      <h3 class="text-center">List of Annoucement</h3>
<table width="100%" border="1" cellpadding="10" class="table-responsive">
    <thead>
<tr style="color:#fff; background-color:#531063;">
<th style="text-align:center">S/No.</th>
<th style="text-align:center">Date</th>
<th width="" style="text-align:center">Annoucement</th>
<th width="" style="text-align:center">Edit</th>
<th width="" style="text-align:center">Remove</th>
        </tr>
</thead>
<tbody>
<?php
    $no = 1;
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
while($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['date'];?></td>
<td align="center"><?php echo $row['content'];?></td>
<td> <a href="#?id=<?php echo $row[id];?> " target="_new"> Update</a></td>
<td><a href="delete_annoucement.php?id=<?php echo $row[id];?>" target="_new" onclick="return confirm("Are you sure you wish to delete this Record?")" > Delete </a>
	</td>
<?php
    $no++;
}
}
?>
</tbody>
</table>
    </div>
    </div>
        
</div>
    
 
</body>
</html>

