<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body{padding: 0px; margin: 0px;}
    #rectangle{width: 150px; height: 100px; color: #fff; float: left; font-size: 22px; background-color:#ccc; margin: 30px; text-shadow: 1px 1px 15px #000; border-radius: 20px; position: relative;}
    #rectangle p{position:absolute; left:70px; top:35px;}
</style>
  <title>Teaching Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/main.css" type="text/css" rel="stylesheet" >

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<?php include("include/header.php"); ?>

<div class="container"  style="width:80%; background-color:#fbfbfc; position:relative;  min-height:700px; margin:auto; padding:0px; margin-top:150px;  box-shadow: 1px 2px 4px rgba(0, 0, 0, .5); ">
<div class="row" >
    <div class="col-sm-3" >
        <h3 id="teaching_learning">Teaching Home</h3>
        <?php 
            $file_path = "C:/xampp/htdocs/IT583/folder_container/teaching/";
            $folders = opendir($file_path) or die("failed to open folder!");
            
            while($item = readdir($folders)){
                if($item=="." || $item == "..")
                    continue;
            ?>
            <div id="leftmenu"><a onclick="dropdownItems()"><?php  echo $item; ?></a><br>
            <div style="display:none;" id="couseDetail">
                <a href="#" >Download1</a><br>
                <a href="#" >Download2</a><br>
            </div>
            </div>
              
            <?php    
            }
            closedir($folders);
            ?>
    
        
     <script>
        function dropdownItems(){
            
           var x = document.getElementById("couseDetail");
            if(x.style.display =="none")
            {x.style.display = "block";}
            else{x.style.display="none";}
        }
        
        </script>
        
        
    </div>
     <div class="col-sm-9" style="border-left:solid thin #ccc; background-color:#fff;">    
    <div id="rectangle"><p>1</p></div>
    <div id="rectangle"><p>2</p></div>
    <div id="rectangle"><p>3</p></div>
    <div id="rectangle"><p>4</p></div>
    <div id="rectangle"><p>5</p></div>
    <div id="rectangle"><p>6</p></div>
    <div id="rectangle"><p>7</p></div>
    <div id="rectangle"><p>8</p></div>
    <div id="rectangle"><p>9</p></div>
    <div id="rectangle"><p>10</p></div>
    <div id="rectangle"><p>11</p></div>
    <div id="rectangle"><p>12</p></div>
    <div id="rectangle"><p>13</p></div>
    <div id="rectangle"><p>14</p></div>
    <div id="rectangle"><p>15</p></div>
    <div id="rectangle"><p>16</p></div>
    <div id="rectangle"><p>17</p></div>
    <div id="rectangle"><p>18</p></div>
    <div id="rectangle"><p>19</p></div>
    <div id="rectangle"><p>20</p></div>
    <div id="rectangle"><p>21</p></div>
    <div id="rectangle"><p>22</p></div>
    <div id="rectangle"><p>23</p></div>
    <div id="rectangle"><p>24</p></div>
    <div id="rectangle"><p>25</p></div>
    <div id="rectangle"><p>26</p></div>
    <div id="rectangle"><p>27</p></div>
    <div id="rectangle"><p>28</p></div>
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
