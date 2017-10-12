
 <!DOCTYPE html>
<?php
// Start the session
include_once 'con-config.php'; 
session_start(); 
?>

<html lang="en">
<head>

  <title>Online market</title>
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
   $pwdErr=$emailErr="";
$pwd=$email="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 if(empty($_POST['email'])){
  $emailErr="telephone number is required";
 }else{
 $emaill = $_POST['email'];
  $sqls="SELECT * FROM shops WHERE  tel='$emaill'";
$results = mysqli_query($conn, $sqls);
if (mysqli_num_rows($results)>0) {
    $email = $_POST['email'];
 }else{
  $emailErr="telephone number is not in database pleas signup"; 
 }}
 
 if(empty($_POST['pwd'])){
  $pwdErr="password required";
 }else{
 $pwdd = $_POST['pwd'];
  $sqls="SELECT * FROM shops WHERE tel='$email' AND password='$pwdd'";
$results = mysqli_query($conn, $sqls);
  $rows = mysqli_fetch_assoc($results);
  $idsh = $rows["id"];
if (mysqli_num_rows($results)>0) {
    $pwd = $_POST['pwd'];
 }else{
  $pwdErr="password is incorrect"; 
 }}

 
if(!empty($email) && !empty($pwd)){

  $_SESSION['email'] =$email ; 
 $_SESSION['pwd'] =$pwd ; 
  $_SESSION['idsh'] =$idsh ; 
header("location:onlinemarketin.php");
	exit;
 }

// set parameters and execute

	
	
	
	

}


?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <p><a style="color:white;font-size:25px;" class="" href="#">Online market<br></a></p>
    
    <div>
      <ul class="nav navbar-nav" style="height:130px;overflow-y: scroll;width:1280px;margin-top:-20px;">
<?php include 'bignav.php'?>
		
	
      </ul>  
	 
	  
	        <ul class="nav navbar-nav" style="margin-top:-10px;height:70px;overflow-y: scroll;width:1280px;">
<?php include 'smallnav.php'?>
      </ul>
	  
	  
      
    </div>
  </div>
</nav>
  
  
<div class="container">
  <h3>login to your shop</h3>
  <p> </p>  <div class="row">
 </div>
 
   <div class="row">
   <div class="col-lg-2 col-md-2 col-sm-2"></div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="panel panel-default" style="border-width:0px;">
                        
                        <div class="panel-body">
	<form method="post"  AUTOCOMPLETE="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                                  
  				
	<div class="form-group">
    <input AUTOCOMPLETE="off" class="form-control" placeholder="telephone number" name="email" type="text" value="<?php echo $email;?>" autofocus><span class="error"> <?php echo $emailErr;?></span>

	</div>	
<div class="form-group">
    <input AUTOCOMPLETE="off" class="form-control" placeholder="password" name="pwd" type="password" value="<?php echo $pwd;?>" autofocus><span class="error"> <?php echo $pwdErr;?></span>

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
