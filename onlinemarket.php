
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
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <p><a style="color:white;font-size:25px;" class="" href="#">Online market<br></a></p>
    
    <div>
      <ul class="nav navbar-nav" style="height:150px;overflow-y: scroll;width:1280px;margin-top:-20px;">
<?php include 'bignav.php'?>
		
	
      </ul>  
	  
	
	  
	        <ul class="nav navbar-nav" style="margin-top:-10px;height:70px;overflow-y: scroll;width:1280px;">
<?php include 'smallnav.php'?>
      </ul>
	  
	  
      
    </div>
  </div>
</nav>
 <div class="col-lg-12">
<a href='login.php'><button type="button" class="btn btn-primary align-right">
login to your shop
</button></a><span style="width:100px;"></span>
<a href='add.php'><button type="button" class="btn btn-success align-right">
add new shop</button></a><span style="width:100px;"></span><br>
           </div><br><br><br>
       <div class="form-group">  <div class="col-lg-2 col-md-2 col-sm-2">
	                
						
                                     <form method="post"  AUTOCOMPLETE="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                                         
										  <select name="country" class="form-control">

	<option value="world">Kampala  city</option>
				  <option value=" Bwebajja"> Bwebajja  </option>
					<option value="Abayitababiri">Abayitababiri </option>
					<option value="Bbunga">Bbunga  </option>
					<option value="Bugolobi">Bugolobi </option>
					<option value="Bukasa">Bukasa </option>
					<option value="Bukoto">Bukoto </option>
					<option value="Bulenga">Bulenga </option>
					<option value="Bunamwaya">Bunamwaya  </option>
					<option value="Bunga">Bunga </option>
					<option value="Bunga-Kawuku">Bunga-Kawuku </option>
					<option value="Butabika">Butabika </option>
					<option value="Buwaate">Buwaate </option>
					<option value="Buwate">Buwate </option>
					<option value="Buziga road">Buziga road </option>
					<option value="BUZIGA">BUZIGA </option>
					<option value="Bwebajja">Bwebajja </option>
					<option value="Bweyogerere">Bweyogerere </option>
					<option value="Entebbe kajjansi">Entebbe kajjansi </option>
					<option value="Entebbe">Entebbe </option>
					<option value="Gayaza">Gayaza </option>
					<option value="Ggaba">Ggaba </option>
					<option value="Kabalagala">Kabalagala </option>
					<option value="Kabuusu">Kabuusu  </option>
					<option value="Kajjansi">Kajjansi  </option>
					<option value="Kalangala">Kalangala  </option>
					<option value="Kampala">Kampala  </option>
					<option value="Kamwokya">Kamwokya  </option>
					<option value="Kansanga">Kansanga </option>
					<option value="Kasanga">Kasanga   </option>
					<option value="Kasangati">Kasangati  </option>
					<option value="Katabi">Katabi  </option>
					<option value="Kawanda">Kawanda </option>
					<option value="Kawempe">Kawempe  </option>
					<option value="Kawuku Entebbe">Kawuku Entebbe  </option>
					<option value="Kibuye">Kibuye </option>
					<option value="Kigungu">Kigungu  </option>
					<option value="Kiira">Kiira  </option>
					<option value="Kira">Kira  </option>
					<option value="Kireka">Kireka  </option>
					<option value="Kirinya">Kirinya </option>
					<option value="kisaasi kyanja">kisaasi kyanja </option>
					<option value="Kisaasi">Kisaasi </option>
					<option value="Kisasi">Kisasi </option>
					<option value="Kisubi">Kisubi </option>
					<option value="Kisugu">Kisugu </option>
					<option value="Kitante">Kitante  </option>
					<option value="Kitebi">Kitebi </option>
					<option value="Kiteezi">Kiteezi</option>
					<option value="Kitende">Kitende </option>
					<option value="Kitinda">Kitinda  </option>
					<option value="Kitintale">Kitintale </option>
					<option value="Kiwafu  Muyenga">Kiwafu  Muyenga </option>
					<option value="Kiwafu">Kiwafu </option>
					<option value="Kiwanga">Kiwanga </option>
					<option value="Kiwatule">Kiwatule  </option>
					<option value="Kololo">Kololo </option>
					<option value="Konge">Konge </option>
					<option value="Kulambilo">Kulambilo </option>
					<option value="Kulambiro">Kulambiro </option>
					<option value="Kungu">Kungu</option>
					<option value="Kyaliwajjala">Kyaliwajjala </option>
					<option value="Kyambogo">Kyambogo</option>
					<option value="Kyanja">Kyanja</option>
					<option value="Kyebando">Kyebando</option>
					<option value="Lower Naguru">Lower Naguru  </option>
					<option value="Lubowa">Lubowa  </option>
					<option value="Lugala">Lugala </option>
					<option value="Lugogo">Lugogo </option>
					<option value="Lungujja">Lungujja </option>
					<option value="Luteete">Luteete </option>
					<option value="Luziira">Luziira  </option>
					<option value="Luzira">Luzira  </option>
					<option value="Lweza">Lweza  </option>
					<option value="Makindye">Makindye </option>
					<option value="Masanafu">Masanafu   </option>
					<option value="Mawanda road">Mawanda road  </option>
					<option value="Mbalwa">Mbalwa  </option>
					<option value="Mbuya">Mbuya </option>
					<option value="Mengo">Mengo </option>
					<option value="Mpala">Mpala </option>
					<option value="Mpelerwe">Mpelerwe </option>
					<option value="Mpererwe">Mpererwe  </option>
					<option value="Mulago">Mulago</option>
					<option value="Munyonyo">Munyonyo</option>
					<option value="Mutundwe">Mutundwe </option>
					<option value="Mutungo hill">Mutungo hill</option>
					<option value="Mutungo">Mutungo </option>
					<option value="Muyenga  Bukasa">Muyenga  Bukasa </option>
					<option value="Muyenga Bukasa">Muyenga Bukasa </option>
					<option value="Muyenga">Muyenga  </option>
					<option value="Naalya">Naalya   </option>
					<option value="Naguru">Naguru</option>
					<option value="Najjanankumbi">Najjanankumbi </option>
					<option value="Najjeera">Najjeera </option>
					<option value="Najjera">Najjera  </option>
					<option value="Nakasero">Nakasero </option>
					<option value="Nakwero">Nakwero</option>
					<option value="Nalumunye">Nalumunye </option>
					<option value="Naly">Naly   </option>
					<option value="Nalya">Nalya  </option>
					<option value="Namanve">Namanve  </option>
					<option value="Namirembe">Namirembe </option>
					<option value="Namugongo">Namugongo </option>
					<option value="Namugongo Mbalwa">Namugongo Mbalwa   </option>
					<option value="Namugongo Sonde">Namugongo Sonde  </option>
					<option value="Namugongo">Namugongo</option>
					<option value="Namulanda">Namulanda   </option>
					<option value="Namuwongo">Namuwongo  </option>
					<option value="Nansana">Nansana  </option>
					<option value="Ndejje">Ndejje </option>
					<option value="Nkumba">Nkumba  </option>
					<option value="Nsambya">Nsambya </option>
					<option value="Ntinda stretcher">Ntinda stretcher   </option>
					<option value="Ntinda">Ntinda  </option>
					<option value="Rubaga">Rubaga  </option>
					<option value="Salaama">Salaama </option>
					<option value="Seeta">Seeta </option>
					<option value="Seguku katale">Seguku katale </option>
					<option value="Seguku">Seguku </option>
					<option value="Sonde">Sonde </option>
					<option value="Wakiso">Wakiso </option>
					<option value="wandegeya">wandegeya </option>
					<option value="Zana">Zana </option>
					<option value="Zzana">Zzana </option>

				<option value="KAMPALA BOGOLOBI">------------------</option>
				
				 <option value="GULU">GULU</option>
                <option value="MUKONO">MUKONO</option>
				 <option value="Masaka">Masaka</option>
				<option value="Kasese">Kasese</option>
				<option value="Hoima">Hoima</option>
				<option value="Mbarara">Mbarara</option>
				<option value="Lira">Lira</option>tion>
                                            </select>
											</div>
<input type="hidden" name="categg" class="form-control" value="<?php echo $idt;?>" autofocus>

<div class="col-lg-2 col-md-2 col-sm-2">	  
<div class="form-group align-right">
<input type="number" name="price" class="form-control" placeholder="PRICE in UGX" value="<?php 
 echo $pprice;?>" autofocus>

</div>	</div>


<div class="col-lg-5 col-md-5 col-sm-5">	  
<div class="form-group align-right">
<input type="text" name="webna" class="form-control" placeholder="NAME OF SHOP /" value="<?php echo $webna;?>" autofocus>
</div>	
						
	</div>					
  <div class="col-lg-3 col-md-3 col-sm-3">
	 <input  class="btn btn-success" style="width:130px;" type="submit" name="submit" value="search" ></input></div>
										</form>				
                                   </div>

 <?php 
$sqls="SELECT * FROM categ WHERE  id= '$idt' ";
$results = mysqli_query($conn, $sqls);
if (mysqli_num_rows($results) > 0){
$rows = mysqli_fetch_assoc($results);
$cateer = $rows["catname"];}
?>   								   
<div class="col-lg-12 col-md-12 col-sm-12">									   
									   <?php 


									   $webna=$country="";				 
						 
	if(empty($_POST['webna']) && empty($_POST['country']) ){
	if($_SESSION['loc']=='world'){
 $sqls="SELECT * FROM item WHERE  categ='$idt' GROUP BY idshop";
        $results = mysqli_query($conn, $sqls);
 echo '<h4>Shops that sell ,'. $cateer.' ,location :'.$_SESSION['loc'].' , price :'.'ANY CURRENCY'.'<h5>(to change currency change ur location)</h5></h4>';		 

		if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($rows = mysqli_fetch_assoc($results)) {
	$idshop = $rows["idshop"];
	$iname = $rows["iname"];
	$logo = $rows["photo"];
	$price = $rows["price"];
	
 $sqlls="SELECT * FROM shops WHERE  id='$idshop'";
 $resultls = mysqli_query($conn, $sqlls);
 if (mysqli_num_rows($resultls) > 0) {
 $rowls = mysqli_fetch_assoc($resultls);
 $shopname = $rowls["shopname"];
	
		echo 
'<a href="onlineshop.php?idt='.$idt.' & idshop='.$idshop.'">'.	
'<div  class="col-lg-4 col-md-4 col-sm-4">'.	
'<div  class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="">'.
'<H4 style="color:;">'.$iname.'  -  '.'UGX '.' '.number_format($price) .'</H4>'.
								'</h3>
                            </div>
                            <div style="height:250px;overflow-y:scroll" class="panel-body">'.
                           '<img class="img-responsive" src='.$logo.'  /> '.
                            '</div>
							<div class="panel-footer">'.
                                '<h3>shop name :'.$shopname.'</h3>'.
                            '</div>
                        </div>	</div></a>';
 
 }}		}		 
						 
	
	 
}else{
 $sqls="SELECT * FROM item WHERE  categ='$idt' GROUP BY idshop";
        $results = mysqli_query($conn, $sqls);
 echo '<h4>Shops that sell ,'. $cateer.' , price :'.$_SESSION['loc'].'</h5></h4>';		 	
		if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($rows = mysqli_fetch_assoc($results)) {
	$idshop = $rows["idshop"];
	$iname = $rows["iname"];
	$logo = $rows["photo"];
	$price = $rows["price"];
	$locc = $_SESSION['loc'];
	
 $sqlls="SELECT * FROM shops WHERE  id='$idshop' AND country='$locc'";
 $resultls = mysqli_query($conn, $sqlls);
 if (mysqli_num_rows($resultls) > 0) {
 $rowls = mysqli_fetch_assoc($resultls);
 $shopname = $rowls["shopname"];
	
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
 
 }}		}

}	 
///post	
	}
	else{
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 $webna= $_POST['webna'];
	 
	 $pprice= $_POST['price'];
	 $p = preg_replace('/[A-Za-z]+/', '', $pprice);
	 $p =  str_replace(",","",$p);
	 $country= $_POST['country'];
	 $idtss= $_POST['categg'];
	$_SESSION['idt'] = $idtss;
	$idts = $_SESSION['idt'];
	$_SESSION['loc'] = $country;

$sqls="SELECT * FROM categ WHERE  id= '$idts' ";
$results = mysqli_query($conn, $sqls);
if (mysqli_num_rows($results) > 0){
$rows = mysqli_fetch_assoc($results);
$cateer = $rows["catname"];

	if($country=='world'){
	$sqls="SELECT * FROM shops WHERE  shopname LIKE '%".$webna."%' OR city LIKE '%".$webna."%' OR building LIKE '%".$webna."%' ";
	$results = mysqli_query($conn, $sqls);
	 echo '<h4>Shops that sell ,'. $cateer.' ,location :'.$_SESSION['loc'].' , price :'.$p.'</h5></h4>';		 

	if (mysqli_num_rows($results) > 0) {
    // output data of each row
  while($rowfs = mysqli_fetch_assoc($results)) {
	 $shopname = $rowfs["shopname"];
	 $idshop = $rowfs["id"];
if(empty($price)){	  
$sqlgs="SELECT * FROM item WHERE  categ='$idts' AND idshop='$idshop'";
$resultgs = mysqli_query($conn, $sqlgs);}
else{
$sqlgs="SELECT * FROM item WHERE  categ='$idts' AND idshop='$idshop' AND price <='200000'";
$resultgs = mysqli_query($conn, $sqlgs);
} 

if (mysqli_num_rows($resultgs) > 0) {
$rowgs = mysqli_fetch_assoc($resultgs);		
$iname = $rowgs["iname"];
$logo = $rowgs["photo"];
$price = $rowgs["price"];
	
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

 
 
 
 }
 }		
 }		 
						 
	



}
	
	
	////world
	else {
	$sqls="SELECT * FROM shops WHERE  shopname LIKE '%".$webna."%' AND country LIKE '%".$country."%'  OR city LIKE '%".$webna."%' AND country LIKE '%".$country."%' OR building LIKE '%".$webna."%' AND country LIKE '%".$country."%'";
	        $results = mysqli_query($conn, $sqls);
 echo '<h4>Shops that sell ,'. $cateer.' , price :'.$_SESSION['loc'].' CURRENCY'.'<h5>(to change currency change ur location)</h5></h4>';		 	
	
if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($rowfs = mysqli_fetch_assoc($results)) {
	 $shopname = $rowfs["shopname"];
	 $idshop = $rowfs["id"];
	  
if(empty($price)){	  
$sqlgs="SELECT * FROM item WHERE  categ='$idts' AND idshop='$idshop'";
$resultgs = mysqli_query($conn, $sqlgs);}
else{
$sqlgs="SELECT * FROM item WHERE  categ='$idts' AND idshop='$idshop' AND price <='$p'";
$resultgs = mysqli_query($conn, $sqlgs);
} 



if (mysqli_num_rows($resultgs) > 0) {
$rowgs = mysqli_fetch_assoc($resultgs);		
$iname = $rowgs["iname"];
$logo = $rowgs["photo"];
$price = $rowgs["price"];
	
		echo 
'1<a href="onlineshop.php?idt='.$idt.' & idshop='.$idshop.'">'.	
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
 
 
 }}		}		 
						 
	

	
	
	}					 
						 
	
}	
	
	
	}}
	
	
						 
						
						 
						 ?>	

 					 

</div>



									
									   </html>