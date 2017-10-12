
 <!DOCTYPE html>
<?php
// Start the session
include_once 'con-config.php'; 
session_start(); 
?>

<html lang="en">
<head>

  <title>online market</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="pan/bootstrap.min.css">
  <script src="pan/jquery.min.js"></script>
  <script src="pan/bootstrap.min.js"></script>
</head>
<body>
<?php

$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
  $catErr="";
 $cat="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if(empty($_POST['cat'])){
  $catErr="name required";
 }else{
    $cat = $_POST['cat'];
 }
 
	$menucomp = 1;
$stmt = $conn->prepare("INSERT INTO categ(idsome,catname) VALUES (?,?)");
$stmt->bind_param("ss", $menucomp,$cat);



// set parameters and execute

$stmt->execute();


$stmt->close();
 $conn->close();
	
	
	
	header("location:onlinemarketin.php");
	exit;

}


?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <p><a style="color:white;font-size:25px;" class="" href="#">online market<br></a></p>
    
    <div>
      <ul class="nav navbar-nav" style="height:130px;overflow-y: scroll;width:1280px;margin-top:-20px;">
<?php include 'bignavin.php'?>
		
	
      </ul>  
	  
	  <ul class="nav navbar-nav navbar-right" style="margin-top:-10px;">
        <li><a href="categm.php"><span class="glyphicon glyphicon-plus"></span> add  category</a></li>
	  </ul>
	  
	        <ul class="nav navbar-nav" style="margin-top:-10px;height:70px;overflow-y: scroll;width:1280px;">
<?php include 'smallnavin.php'?>
      </ul>
	  
	  
      <ul class="nav navbar-nav navbar-right" style="margin-top:-20px;">
        <li><a href="categb.php"><span class="glyphicon glyphicon-plus"></span> add  category</a></li>

      
	  </ul>
    </div>
  </div>
</nav>
  
  
<div class="container">
  <h3>Add category of your item</h3>
  <p>this is amain category</p>  <div class="row">
 </div>
 
   <div class="row">
   <div class="col-lg-2 col-md-2 col-sm-2"></div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="panel panel-default" style="border-width:0px;">
                        
                        <div class="panel-body">
	<form method="post"  AUTOCOMPLETE="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                                  
  				
	<div class="form-group">
    <input AUTOCOMPLETE="off" class="form-control" placeholder="name of category" name="cat" type="text" value="<?php echo $cat;?>" autofocus><span class="error"> <?php echo $catErr;?></span>

	</div>							
						
						
						
													 <input  class="btn btn-success" type="submit" name="submit" value="submit" ></input>
						
						</form>
                       
                    </div>
                </div>


		   </div>
		   <div>
	   
		   </div>

</div>
 
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  

</body>
</html>
