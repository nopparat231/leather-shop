

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
  </head>
  <body>
  <br>
 <?php
 error_reporting(0);
error_reporting(E_ERROR | E_PARSE);
 
 include('test2navbar.php');?>
 <!--start show  product-->
 <div class="container">
 	<div class="row">
    	<!-- categories-->
    	<div class="col-md-3">
        	<?php include('category2.php'); ?>
        </div>
      <div class="col-md-9">
           <?php  include('prd-detail.php');?>
        </div>
       
        
    </div>
</div>
 <!-- product-->
        
 <!--end show  product-->
 
 
 
 
 
  </body>
</html>
<?php include('f.php');?>