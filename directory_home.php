<?php 
session_start();
include("include/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Directory Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    
    
  <style type="text/css">
      *,body,html{padding: 0; margin: 0;}
 body { 
  background: url(images/) no-repeat center center fixed; 
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
<div class=""  style="width:80%; margin:auto; padding:0px; margin-top:150px; ">
<div class="container-fluid" style="width:100%; width:auto;">
    <div class="row text-center">
        <div class="col-sm-12">
            <form action="create_directory.php" method="post">
            <label>Enter folder Name: &nbsp;</label><input type="text" name="folder_name" style=" height:40px; width:400px;" />&nbsp;&nbsp;
                
            <br><br>
                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create In: &nbsp;</label><select name="directory_name" id="option" style=" height:40px; width:400px;">
                    <option>Select Root folder</option>
                <?php      
                    $file_path = "C:/xampp/htdocs/IT583/folder_container/";
            $folders = opendir($file_path) or die("failed to open folder!");
            
            while($item = readdir($folders)){
                if($item=="." || $item == "..")
                    continue;
          
            
                  echo '<option value="'.$item.'" id = "option">'.$item.'</option>' ; 
                
            }
            closedir($folders);
            ?>
                                     
                    </select><br><br>
                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="submit" value="Create Folder" name="submit" style=" height:40px; width:200px;"/>
            </form>   
        </div>
    </div>
    
   <!-- <div class="row">
        <div class="col-sm-12">
            <?php 
            $file_path = "C:/xampp/htdocs/IT583/container";
            $folders = opendir($file_path) or die("failed to open folder!");
            
            while($item = readdir($folders)){
                if($item=="." || $item == "..")
                    continue;
            ?>
            
                <a href="Gimba/<?php echo $item; ?>"  target="_blank"><?php  echo $item; ?></a><br>
              
            <?php    
            }
            closedir($folders);
            ?>
        </div>
    </div>-->
</div>
</div>    

</body>
</html>

