<?php
		
$webna=$country="";	
if(empty($_SESSION['loc'])){
$_SESSION['loc'] = 'world';
}else{
$country =$_SESSION['loc']; }
$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }	if(empty($_GET['idt']) ||  empty($_GET['idtt'])||  empty($country) ){
		$idt =3;
		$idtt =1;
		$country ='world';
		}else{
		
	$idtt =$_GET['idtt'];
	$idt =$_GET['idt'];
	$country =$_SESSION['loc']; 
		}
  $sqls="SELECT * FROM categ WHERE  idsome= '$idtt' ORDER BY total DESC";
        $results = mysqli_query($conn, $sqls);
	
echo '<br><li><a  href="onlinemarketin.php">'.'<u >HOME</u>'.'</a></li>';	
	

  if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($rows = mysqli_fetch_assoc($results)) {

	$catr = $rows["catname"];
	$idtw = $rows["id"];
	$idts = $rows["idsome"];

	
	echo    '<li>'.'<a href="onlinemarketin.php?idt='.$idtw.'&idtt='.$idts.'">'.$catr.'</a>'.'</li>';
	

   }
} else {

}

?>