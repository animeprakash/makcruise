<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["submit"])) {
            include("database.php");

            $ferryname=$_POST['ferryname'];

			$target_dir = mkdir("uploads");
			$target_dir = "uploads/";
			$ferryimage=$_FILES["ferryimage"]["name"];
			$target_file = $target_dir . basename($_FILES["ferryimage"]["name"]);
			move_uploaded_file($_FILES["ferryimage"]["tmp_name"], $target_file);
			
			$fromaddress=$_POST['fromaddress'];
			$toaddress=$_POST['toaddress'];
			$fromtime=$_POST['fromtime'];
			$totime=$_POST['totime'];
			$premiuminitialrate=$_POST['premiuminitialrate'];
			$premiumfinalrate=$_POST['premiumfinalrate'];
			$deluxinitialrate=$_POST['deluxinitialrate'];
			$deluxfinalrate=$_POST['deluxfinalrate'];
			$royalinitialrate=$_POST['royalinitialrate'];
			$royalfinalrate=$_POST['royalfinalrate'];
			
			$q="create table if not exists ferrydetails (ferryid int not null auto_increment primary key,ferryname varchar(100),ferryimage blob,fromaddress varchar(100),toaddress varchar(100),fromtime time,totime time,premiuminitialrate float,premiumfinalrate float,deluxinitialrate float,deluxfinalrate float,royalinitialrate float,royalfinalrate float,ferryon datetime not null default now())ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
			$qq="insert into ferrydetails(ferryname,ferryimage,fromaddress,toaddress,fromtime,totime,premiuminitialrate,premiumfinalrate,deluxinitialrate,deluxfinalrate,royalinitialrate,royalfinalrate)values('".$ferryname."','".$ferryimage."','".$fromaddress."','".$toaddress."','".$fromtime."','".$totime."','".$premiuminitialrate."','".$premiumfinalrate."','".$deluxinitialrate."','".$deluxfinalrate."','".$royalinitialrate."','".$royalfinalrate."')";
			mysqli_query($con,$q);
			mysqli_query($con,$qq);	

			header("Location:uploaddetails.php");
        }
?>

<html lang="en" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
<style>
@media only screen and (min-device-width :600px) {
.ferryimage{
	height:200px;
}
::-webkit-scrollbar {
	width: 3px;
	height:3px;
	background-color:white;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
::-webkit-scrollbar-thumb {
  background:#5D3FD3; 
  border-radius: 10px;
}
.container {
  position: relative;
}

.bannername{
  position: absolute;
  right:5px;
  top:170px;
  font-size: 18px;
  color:white;
  font-weight:bold;
  
}
}
}
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
.ferryimage{
	height:200px;
}
.container {
  position: relative;
}

.bannername{
  position: absolute;
  right:5px;
  top:170px;
  font-size: 18px;
  color:white;
  font-weight:bold;
  
}
.scrolling{
	overflow-x:scroll;
	width:100%;
	margin:0% 10%;
}	
::-webkit-scrollbar {
	width: 3px;
	height:3px;
	background-color:white;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
::-webkit-scrollbar-thumb {
  background:#5D3FD3; 
  border-radius: 10px;
}
}
<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
				}
				

</script>


</style>
</head>
<body >

<?php include("sidebar.php");?>

<section class="home">
<div class="container">
	<div class="row mt-2 mb-2">
<?php
			ini_set('display_errors', 0); 
            include("database.php");
			
			$from=$_POST['from'];
			$to=$_POST['to'];
			$traveldate=$_POST['traveldate'];
			$numseats=$_POST['numseats'];
			$infants=$_POST['infants'];
			if(isset($_POST["from"]) && isset($_POST["to"])) 
			{
				$query="select * from ferrydetails where fromaddress='".$from."' and toaddress='".$to."' ";
				$result= mysqli_query($con, $query);
			}
			else{
				$query="select * from ferrydetails";
				$result= mysqli_query($con, $query);
			}
			
			while($row= mysqli_fetch_assoc($result)) {
				$image="uploads/".$row['ferryimage'];
?>			

			<div class="col-sm-4 " >
				<div class="card box-shadow" >
					<div class="container px-0" >
					  <img src="<?php echo $image; ?>" class="ferryimage px-0" alt="ferryimage" style="width:100%;">
					  <div class="bannername" > <?php echo  $row['ferryname'];?></div>
					</div>
				  <div class="card-body">
					<div class="row">
						<div class="col-4">
							<?php echo $row['fromtime']; ?> 
							<?php echo $row['fromaddress']; ?><br>						
						</div>
						<div class="col-4">
						
						</div>
						<div class="col-4">
							<?php echo $row['totime']; ?>						
							<?php echo $row['toaddress']; ?> <br>						
						</div>
					</div>
					<div class="row">
						<button class="col card m-1 ratebutton activeclass2" name="premiumfinalrate" value="<?php echo number_format((float)$row['premiumfinalrate'], 2, '.', ''); ?>" >
							<h6 class="text-center">Premium</h6>
							<del>Rs.<?php echo number_format((float)$row['premiuminitialrate'], 2, '.', ''); ?> </del>
							Rs.<?php echo number_format((float)$row['premiumfinalrate'], 2, '.', ''); ?>							
						</button>
						<button class="col card m-1 ratebutton activeclass2" name="deluxfinalrate" value="<?php echo number_format((float)$row['deluxfinalrate'], 2, '.', ''); ?>">
							<h6 class="text-center">Delux</h6>
							<del>Rs.<?php echo number_format((float)$row['deluxinitialrate'], 2, '.', ''); ?> </del>
							Rs.<?php echo number_format((float)$row['deluxfinalrate'], 2, '.', ''); ?>						
						</button>
						<button class="col card m-1 ratebutton activeclass2" name="royalfinalrate" value="<?php echo number_format((float)$row['royalfinalrate'], 2, '.', ''); ?>">
							<h6 class="text-center">Royal</h6>
							<del>Rs.<?php echo number_format((float)$row['royalinitialrate'], 2, '.', ''); ?> </del>
							Rs.<?php echo number_format((float)$row['royalfinalrate'], 2, '.', ''); ?>						
						</button>
					</div>
					<div class="row">
						<a href="ferryupdate.php?ferryid=<?php echo $row["ferryid"];?>"  class="col-6 btn bg-success text-white">Update</a>
						<a href="ferrydelete.php?ferryid=<?php echo $row["ferryid"];?>"  class="col-6 btn bg-danger text-white">Delete</a>					
					</div>
				  </div>
				</div>			
			</div>
				
<?php
			}
?>
		</div>
</div>
</section>
</body>
</html>