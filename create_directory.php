<?php 
session_start();
if(isset($_POST["submit"])){
 $dir = $_POST["folder_name"];
$rootfolder = $_POST['directory_name'];
 mkdir("folder_container/$rootfolder/$dir", 777, true);
    
 header("location:directory_home.php");  
}
?>