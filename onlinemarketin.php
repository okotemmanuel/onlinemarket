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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
      <p><a style="color:white;font-size:25px;" class="" href="#">online market<br></a></p>
    
    <div>
      <ul class="nav navbar-nav" style="height:130px;overflow-y: scroll;width:1280px;margin-top:-30px;">

<?php include 'bignavin.php'?>

      </ul>  
	 
	  <ul class="nav navbar-nav navbar-right" style="margin-top:-10px;">
        <li ><a href="categm.php"><span class="glyphicon glyphicon-plus"></span><span style="color:yellow;"> add  category</span></a></li>
	  </ul>
	  
	        <ul class="nav navbar-nav" style="margin-top:-10px;height:70px;overflow-y: scroll;width:1280px;">
<?php include 'smallnavin.php'?>
      </ul>
	  
	  
      <ul class="nav navbar-nav navbar-right" style="margin-top:-20px;">
        <li><a href="categb.php"><span class="glyphicon glyphicon-plus"></span> <span style="color:yellow;"> add  category</span></a></li>

      
	  </ul>
    </div>
  </div>
</nav>
  <?php
    $sqls="SELECT * FROM categ WHERE  id= '$idt' LIMIT 1";
        $results = mysqli_query($conn, $sqls);
  $rows = mysqli_fetch_assoc($results);
  $catr = $rows["catname"];
  $idtt = $rows["id"];
  ?>
<div class="container" style="margin-top:-20px;">
  <h3>ITEMS <?PHP echo' below :'.$catr?></h3>
  <p></p> 
<a href='logout.php'><button type="button" class="btn btn-primary align-right">logout</button></a><span style="width:100px;"></span>
<br>
 <?php
 echo '<a href="additem.php?idt='.$idtt.'">'.'<button type="button" class="btn btn-success align-right">'.'add your item below :'.$catr.'</button>'.'</a>';
?>

 <div class="row" style="margin-top:10px;margin-left:-50px;">
 <?php
 if(empty($_SESSION['idsh'])){
 header("location:logout.php");
	exit;
 }
 else{
 $idshop= $_SESSION['idsh'];}
 
 $sqls="SELECT * FROM item WHERE  categ='$idt' AND idshop='$idshop'";
        $results = mysqli_query($conn, $sqls);
 		  if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($rows = mysqli_fetch_assoc($results)) {

	 $iditm = $rows["id"];
	$iname = $rows["iname"];
	$logo = $rows["photo"];
	$price = $rows["price"];
	
	echo                    '<div class="col-lg-4 col-md-4 col-sm-4">'.
                    '<div class="panel panel-default" style="border-width:0px;">'.
                        
                        '<div class="panel-body">'.
	
	'<p style="height:50px;">'.$iname.'  '.$price .'</p>'.
        	  '<img class="img-responsive" src='.$logo.' style="" /> '.
'<a  href="">'.'<h3>'.'</h3>'.'</a>'.			  
	'</div>'.
                       
                    '</div>'.
				
                '</div>';}}
 
 ?>
 
    
</div>
</body>
</html>
