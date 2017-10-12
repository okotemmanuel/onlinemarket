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
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }	
 

$idt =$_GET['idt'];
$idshop = $_GET['idshop'];


///////////////
$sqlsa="SELECT * FROM shops WHERE id='$idshop'";
$resultsa = mysqli_query($conn, $sqlsa);
$rowsa = mysqli_fetch_assoc($resultsa);
$sttl = $rowsa["stotal"];
$nw = $sttl + 1;
 $stmt = $conn->prepare("UPDATE shops SET stotal=? WHERE  id=?");
$stmt->bind_param("ss",$nw,$idshop);
$stmt->execute();
 
/////////
$sqlsal="SELECT * FROM categ WHERE id='$idt'";
$resultsal = mysqli_query($conn, $sqlsal);
$rowsl = mysqli_fetch_assoc($resultsal);
$stl = $rowsl["total"];
$new = $stl + 1;
 $stmt = $conn->prepare("UPDATE categ SET total=? WHERE  id=?");
$stmt->bind_param("ss",$new,$idt);
$stmt->execute();
//////////////////
	 $sqlkds="SELECT * FROM categ WHERE id='$idt'";
        $resultkds = mysqli_query($conn, $sqlkds);
		$rowkds = mysqli_fetch_assoc($resultkds);
		 $catdn = $rowkds["catname"];
		 
 $sqlfs="SELECT * FROM shops WHERE  id='$idshop' ";
$resultfs = mysqli_query($conn, $sqlfs);
$rowfs = mysqli_fetch_assoc($resultfs);
 $shopname = $rowfs["shopname"];
  $about = $rowfs["about"];
    $city = $rowfs["city"];
    $country = $rowfs["country"];
  $tel = $rowfs["tel"];
  $building = $rowfs["building"];
 
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
      <p><a style="color:white;font-size:25px;" class="" href="#">online market<br></a></p>
    
    <div>
      <ul class="nav navbar-nav" style="height:130px;overflow-y: scroll;width:1280px;margin-top:-30px;">

<?php echo '<br><li><a  href="onlinemarket.php">'.'<u >HOME</u>'.'</a></li>';	?>

      </ul>  
	 
	
    </div>
  </div>
</nav>
  
<div class="container" style="margin-top:-20px;">
  <h2><?php echo $shopname?></h2>
  <p><h4><?php echo 'country : '.$country.' , city :'.$city .' , building :' .$building.' , telephonenumber :'.$tel?></h4></p> 
<p><?php echo $about?></p>
<h3 style="color:green;"><?php echo $catdn ?></h3>

 <div class="row" style="margin-top:10px;margin-left:-50px;">
 
  </div>
 
   <div class="row" style="">
  <?php

 
 $sqls="SELECT * FROM item WHERE  categ='$idt' AND idshop='$idshop' ";
        $results = mysqli_query($conn, $sqls);
 		  if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($rows = mysqli_fetch_assoc($results)) {
	 $iditm = $rows["id"];
	$iname = $rows["iname"];
	$logo = $rows["photo"];
	$price = $rows["price"];
echo	
'<a href="onlineshop.php?idt='.$idt.' & idshop='.$idshop.'">'.	
'<div  class="col-lg-4 col-md-4 col-sm-4">'.	
'<div  class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="">'.
'<H4 style="color:;">'.$iname.'  -  '.'UGX '.' '.number_format($price) .'</H4>'.
								'</h3>
                            </div>
                            <div class="panel-body">'.
                           '<img class="img-responsive" src='.$logo.' style="height:250px;" /> '.
                            '</div>
							<div class="panel-footer">'.
                                '<h3>shop name :'.$shopname.'</h3>'.
                            '</div>
                        </div>	</div></a>';
				
				}}
 
 ?>

						 	</div>
	<br><h3>More Items</h3>
   <div class="row" style="">
  <?php


 $sqls="SELECT * FROM item WHERE idshop='$idshop' AND categ !='$idt' GROUP BY categ";
        $results = mysqli_query($conn, $sqls);
 		  if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($rows = mysqli_fetch_assoc($results)) {

	 $categ = $rows["categ"];
	 	$ilname = $rows["iname"];
	$loglo = $rows["photo"];
	
	 $sqlks="SELECT * FROM categ WHERE id='$categ'";
        $resultks = mysqli_query($conn, $sqlks);
		$rowks = mysqli_fetch_assoc($resultks);
		 $catn = $rowks["catname"];
		
	echo                   
'<a href="onlineshop.php?idt='.$categ.'&idshop='.$idshop.'">'.
 '<div class="col-lg-3 col-md-3 col-sm-3">'.
'<div class="panel panel-default" style="border-width:0px;">'.
 '<div class="panel-body">'.
'<p style="height:20px;"><h3>'.$catn .'</h3></p>'.
 '<img class="img-responsive" src='.$loglo.' style="" /> '.
'<a  href="">'.'<h3>'.'</h3>'.'</a>'.			  
	'</div>'.
                       
                    '</div>'.
				
                '</div>'.'</a>';
				
				}}
 
 ?>

						 	</div>
</div>
 
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  

</body>
</html>
