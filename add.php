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
<?php

$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 
 $namecErr= $wurlErr= $aboutErr=$countryErr=$emailErr=$passErr=$buildErr=$cityErr=$successErr ="";
 $namec=$about=$country=$email=$city=$pass=$build="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	 if (empty($_POST["email"])) {
     $emailErr = "telephone number is required";
	 
   } 
	 else{
	  $emaill = $_POST['email'];
  $sqls="SELECT * FROM shops WHERE  tel='$emaill'";
$results = mysqli_query($conn, $sqls);
if (mysqli_num_rows($results)>0) {
     $emailErr="telephone number already exits"; 
 }else{
 $email = $_POST['email'];
 }}
	 
	 
	 	 if (empty($_POST["namec"])) {
     $namecErr = "shop name  is required";
	 
   } 
	 else{
	 	  $namec = $_POST['namec'];
	 }


  	 	
		if (empty($_POST["about"])) {
     $aboutErr = "about your shop is required";
   } 
	 else{
	 	$about = $_POST['about'];
	 }
	 
	 		if (empty($_POST["country"])) {
     $countryErr = "country is required";
	 
   } 
	 else{
	$country = $_POST['country'];
	 }
	if (empty($_POST["psswd"])) {
     $passErr = "pasword is required";	 
   } 
	 else{
	$pass = $_POST['psswd'];
	 }
	

 	 if (!empty($pass) && !empty($country) && !empty($about) && !empty($namec) && !empty($email)) {	 	
// set parameters and execute

$stmt = $conn->prepare("INSERT INTO shops(shopname,about,country,tel,password) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss",$namec,$about,$country,$email,$pass);
	

   $successErr = "ur website successfully added";

// set parameters and execute

$stmt->execute();


$stmt->close();
 $conn->close();

header("location:login.php");
exit;

}
}








?>


<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
     <p><a style="color:white;font-size:25px;" class="" href="#">online market<br></a></p>
    
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
  <h3> </h3>

  <h4>Add your shop</h4>
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
                                            <input AUTOCOMPLETE="off" class="form-control" placeholder="Name of shop" name="namec" type="text" value="<?php echo $namec;?>" autofocus></input><span class="error"> <?php echo $namecErr;?></span>

				
									   </div>
				
				 
                            <p>
							  <div class="form-group">
                                            <label>about your shop</label>
                                            <textarea AUTOCOMPLETE="off" class="form-control" name="about" type="text" rows="3" value="<?php echo $about;?>" autofocus><?php echo $about;?></textarea><span class="error"> <?php echo $aboutErr;?></span>
                                       
										</div>
							
							
							
							</p>
                        					
<div class="form-group">
<label>Location</label>
 <select name="country" type="text" class="form-control">
 <option value="KAMPALA">KAMPALA</option>
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

				<option value="kampala">------------------</option>
				
				 <option value="GULU">GULU</option>
                <option value="MUKONO">MUKONO</option>
				 <option value="Masaka">Masaka</option>
				<option value="Kasese">Kasese</option>
				<option value="Hoima">Hoima</option>
				<option value="Mbarara">Mbarara</option>
				<option value="Lira">Lira</option>
                                            </select>
                                       </div> 				
						
						
				<div>	  
  		 <label>for future updates</label>
      <input class="form-control" name="email" type="text" placeholder="telephone number" value="<?php echo $email;?>" autofocus><span class="error"> <?php echo $emailErr;?></span> </input> 
        </div>

				<div class="form-group">
               <input class="form-control" name="psswd" type="password" placeholder="password" value="<?php echo $pass;?>" autofocus></input> <span class="error"> <?php echo $passErr;?></span> 
               </div>						
												
										
 <input  class="btn btn-success" type="submit" name="submit" value="submit" ></input>
						
						</form>
                       
                    </div>
                </div>


				
				

		   </div>

</div>
 
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  

</body>
</html>
