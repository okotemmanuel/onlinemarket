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
<?php

$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
 $idtw = $_GET['idt'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 $namecErr= $aboutErr= $priceErr= $successErr= $photErr ="";
 $namec=$price=$about=$phot="";
$idf= $idtw;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $tel = $_SESSION['email']; 
 $pwd = $_SESSION['pwd']; 
 if(empty($tel)&& empty($pwd)){
 header("location:login.php");
	exit;
 }else{
    $sqls="SELECT * FROM shops WHERE  tel= '$tel' AND password='$pwd' LIMIT 1";
        $results = mysqli_query($conn, $sqls);
  $rows = mysqli_fetch_assoc($results);
  $idshop = $rows["id"];
  
  
  
 $idtf = $_POST['idf'];
	
	 	 if (empty($_POST["namec"])) {
     $namecErr = "item name  is required";
   } 
	 else{
	 	  $namec = $_POST['namec'];
	 }
  
  	 	
		if (empty($_POST["about"])) {
     $aboutErr = "about your company is required";
	 
   } 
	 else{
	 	$about = $_POST['about'];
	 }
	 
	 		if (empty($_POST["price"])) {
     $priceErr = "price is required";
	 
   } 
 
elseif (preg_match("/^[a-zA-Z ]*$/",$_POST["price"])) {
     $priceErr = "price is should not have commas";
	 
   } 
	 else{
	$price = $_POST['price'];
	 }

		


	$menucomp = 1;
$random_digit=rand(0000,9999);
$target_dir = "uploads/";
$target_file = $target_dir . $random_digit.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $photErr= "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $photErr= "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    $photErr= "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000000) {
    $photErr= "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
   $photErr= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $photErr= "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}
 else {
 	 if (!empty($about) && !empty($namec) && !empty($price)) {	
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $photErr= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	 	
$stmt = $conn->prepare("INSERT INTO item(idshop,categ,iname,photo,price) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss",$idshop,$idtf,$namec,$target_file,$price);
	
$stmt->execute();


$stmt->close();
 $conn->close();

	
	header("location:onlinemarketin.php?idt=$idtf");
	exit;

}

}

}
 	


}
}






?>


<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
     <p><a style="color:white;font-size:25px;" class="" href="#">Online market<br></a></p>
    
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
  <h3> </h3>
   <?php 
   /*$sqles="SELECT * FROM categ WHERE  id= '$idtt' LIMIT 1";
        $resultes = mysqli_query($conn, $sqles);
		$rowes = mysqli_fetch_assoc($resultes);
		$caet = $rowes["catname"];*/
 $idtw = $_GET['idt'];
    $sqls="SELECT * FROM categ WHERE  id= '$idtw' LIMIT 1";
        $results = mysqli_query($conn, $sqls);
  $rows = mysqli_fetch_assoc($results);
  $caet = $rows["catname"];
  $idtt = $rows["id"];	
		
		
		echo  '<h4>'.'are u sure u want to add ur item to category:'.$caet.'</h4>';
		echo '<h5>'.'(if no,click on the category u want ,then click add item)'.'</h5>';
	   
  ?>
  
  <p> </p>  
  
  
  
  
  <div class="row">
 </div>
 
   <div class="row">
   <div class="col-lg-2 col-md-2 col-sm-2"></div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="panel panel-default" style="border-width:0px;">
                        
                        <div class="panel-body">
<form method="post"  enctype="multipart/form-data" AUTOCOMPLETE="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
     
                                  
				<span class="error"> <?php echo $successErr;?></span>
						    <div class="form-group">
                                            <input AUTOCOMPLETE="off" class="form-control" placeholder="Name of item" name="namec" type="text" value="<?php echo $namec;?>" autofocus></input><span class="error"> <?php echo $namecErr;?></span>
                                          
								
								</input>
									   </div>
						 <div class="form-group">
                                            <input AUTOCOMPLETE="off" class="form-control" name="price" type="NUMBER" placeholder="  price   e.g   (  '200000' )" value="<?php echo $price;?>" autofocus></input><span class="error"> <?php echo $priceErr;?></span> 
                                        </div>
				<div class="form-group">
                                            <input AUTOCOMPLETE="off" class="form-control" name="idf" type="hidden" placeholder="website url" value="<?php echo $idtw;?>" autofocus></input>
                                        </div>		 
                            <p>
							  <div class="form-group">
                                            <label>about your website</label>
                                            <textarea AUTOCOMPLETE="off" class="form-control" name="about" type="text" rows="3" value="<?php echo $about;?>" autofocus><?php echo $about;?></textarea><span class="error"> <?php echo $aboutErr;?></span>
                                        </div>
							
							
							
							</p>
                        					
								
						
 <div class="form-group">
<label>photo of the item</label>
 <input type="file" name="fileToUpload" type="file" autofocus><span class="error"></span> </input>
 </div>
  	
									
 <input  class="btn btn-success" type="submit" name="submit" value="submit" ></input>
						
						</form>
                       
                    </div>
                </div>


				
				

		   </div>

</div>
 
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  

</body>
</html>
