<?php	



	$ferryid=$_GET['ferryid'];
	include ('database.php');

	$query="delete from ferrydetails where ferryid='".$ferryid."'";
	$res=mysqli_query($con,$query);
	
	if($res){
		header("Location:uploaddetails.php");
	}else{
		echo"ERROR!!"; 
	}

?>