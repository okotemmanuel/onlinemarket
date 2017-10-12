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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <p><a style="color:white;font-size:25px;" class="" href="#">online market<br></a></p>
    
    <div>
      <ul class="nav navbar-nav" style="height:130px;overflow-y: scroll;width:1280px;margin-top:-20px;">
        <?php

$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }	
 
   $snameErr="";
 $sname="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if(empty($_POST['sname'])){
 $snameErr="name required";
 }
 else{
  $sname = $_POST['sname'];
      $idmain = $_POST['idmain'];
	
	$menucomp = 1;
$stmt = $conn->prepare("INSERT INTO categ(idsome,catname) VALUES (?,?)");
$stmt->bind_param("ss", $idmain,$sname);



// set parameters and execute

$stmt->execute();


$stmt->close();
 $conn->close();
	
	
	
	header("location:onlinemarketin.php");
	exit;
 }


}
 
?>
		
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
  <h3>Add item category</h3>
  <p> this is a sub category</p>  <div class="row">
 </div>
 
   <div class="row">
   <div class="col-lg-2 col-md-2 col-sm-2"></div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="panel panel-default" style="border-width:0px;">
                        
                        <div class="panel-body">
							
							
<form method="post"  AUTOCOMPLETE="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">             				
<div class="form-group">
<label>select main category</label>
 <select name="idmain" class="form-control">
	  <?php  
		
	  $sqls="SELECT * FROM categ WHERE  idsome='1' ";
        $results = mysqli_query($conn, $sqls);
		
	

  if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($rows = mysqli_fetch_assoc($results)) {

	$cat = $rows["catname"];
	$idtwe = $rows["id"];
 
	
	echo      '<option value='.$idtwe.'>'.$cat.'</option>';
	

   }
} else {

}
?>

                                            </select>
                                       </div> 				
	<div class="form-group">
    <input type="text" name="sname" class="form-control" placeholder="name of category below" value="<?php echo $sname;?>" autofocus><span class="error"> <?php echo $snameErr;?></span>
 </div>							
						
						
						
						
	
										 <input  class="btn btn-success" type="submit" name="submit" value="submit" ></input>
						
						</div>
                       
                    </div>
                </div>


				
				

		   </div>

</div>
 
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  

</body>
</html>
