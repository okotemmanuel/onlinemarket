     <?php 
	 $sqles="SELECT * FROM categ WHERE  id= '$idt' ";
        $resultes = mysqli_query($conn, $sqles);
		$rowes = mysqli_fetch_assoc($resultes);
		$caet = $rowes["catname"];
		echo  '<h4>'.'<a href="#">'.'categories below :'.$caet.'</a>'.'</h4>';
	   ?>
	  <?php
	  
		
		
	  $sqls="SELECT * FROM categ WHERE  idsome= '$idt' AND idsome!='1' ";
        $results = mysqli_query($conn, $sqls);
		
	

  if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($rows = mysqli_fetch_assoc($results)) {

	$cat = $rows["catname"];
	$idtwe = $rows["id"];
 	$idts = $rows["idsome"];
	
	echo      
	'<li style="margin-top:-10px;">'.'<a href="onlinemarketin.php?idt='.$idtwe.' & idtt='.$idts.'">'.$cat.'</a>'.'</li>';
	

   }
} else {

}
?>