<?php

//1.create a database connection
$connection = mysqli_connect("localhost", "root", "");
if(!$connection){
die("Database connection failed:".mysqli_error($connection));
}

//2.select a database to use
$db_select = mysqli_select_db($connection,"IT583");
if(!$db_select){
die("Database selection failed:".mysqli_error($db_select));
}
?>