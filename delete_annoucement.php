<?php session_start();?>
<?php include("include/connection.php");?>

<?php
 
  if(isset($_GET['id'])!="")
  {
  $id=$_GET['id'];
  $sql = "DELETE FROM annoucement WHERE id='$id'";
$query = mysqli_query($connection, $sql) or die(mysqli_error($connection));
  if($query)
  {
      header("Location:view_annoucement.php");
  }
  else
  {
      echo mysqli_error($connection);
  }
  }
  ob_end_flush();
?>
}
