<?php
$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 
$webna=$country="";	
if(empty($_SESSION['loc'])){
$_SESSION['loc'] = 'world';
}else{
$country =$_SESSION['loc']; }

if(empty($_GET['idt'])){
if(empty($_SESSION['idt'])){
$idtt =1;
  $sqls="SELECT * FROM categ WHERE  idsome= '$idtt' ORDER BY total DESC LIMIT 1";
        $results = mysqli_query($conn, $sqls);
		$rows = mysqli_fetch_assoc($results);
$idt = $rows["id"];		

}else{
$idt = $_SESSION['idt'];
}
}else{
$idtt =$_GET['idtt'];			
$idt =$_GET['idt'];
$_SESSION['idt'] = $idt; 
}

	if(empty($_GET['idtt'])||  empty($country)){
		$idtt =1;
		$country ='world';
		}else{	
	$country =$_SESSION['loc']; 	
		}
  $sqls="SELECT * FROM categ WHERE  idsome= '$idtt' ORDER BY total DESC";
        $results = mysqli_query($conn, $sqls);
	
echo '<br><li style="margin-top:-20px;"><a  href="onlinemarket.php">'.'<u >HOME</u>'.'</a></li>';	
	

  if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($rows = mysqli_fetch_assoc($results)) {

	$catr = $rows["catname"];
	$idtw = $rows["id"];
	$idts = $rows["idsome"];

	
	echo    '<li style="margin-top:-20px;">'.'<a href="onlinemarket.php?idt='.$idtw.'&idtt='.$idts.'">'.$catr.'</a>'.'</li>';
	

   }
} else {

}

?>