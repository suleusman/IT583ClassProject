<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teaching File Upload Home</title>
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
<div class=""  style="width:500px; margin:auto; padding:0px; margin-top:150px; ">
<div class="container-fluid" style="width:100%; width:auto;">
    <div class="row text-center">
        <div class="col-sm-12">
            <form action="file_upload.php" method="post" enctype="multipart/form-data">
                <h2><?php
                    
                    ?></h2>
                <h3>Select file to upload</h3><br>
                <h3><input type="file" name="fileToUpload" id="fileToUpload" class="form-control"></h3>
                <h3>
                    <select name="folder_name" id="option">
                    <option>Select Research folder</option>
                <?php 
                        $folderName = "research";
                    $file_path = "C:/xampp/htdocs/IT583/folder_container//$folderName//";
            $folders = opendir($file_path) or die("failed to open folder!");
                        
            $_SESSION['folderName'] = $folderName; 
                        
            while($item = readdir($folders)){
                if($item=="." || $item == "..")
                    continue;
          
            
                  echo '<option value="'.$item.'" id = "option">'.$item.'</option>' ; 
                
            }
            closedir($folders);
            ?>
                                     
                    </select>
                </h3><br>
               
               <h3 style="margin:auto; float:right;"><input type="submit" value="Upload File" name="submit" class="form-control" style="background-color:#531063; color:#fff; width:200px;"></h3>
</form>  
        </div>
    </div>
   
</div>
</div>    

</body>
</html>

