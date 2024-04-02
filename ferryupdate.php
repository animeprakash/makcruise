<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["submit"])) {
            include("database.php");
			
			$ferryid=$_POST['ferryid'];
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
			
			$qq=" update ferrydetails set ferryname='".$ferryname."',ferryimage='".$ferryimage."',fromaddress='".$fromaddress."',toaddress='".$toaddress."',fromtime='".$fromtime."',totime='".$totime."',premiuminitialrate='".$premiuminitialrate."',premiumfinalrate='".$premiumfinalrate."',deluxinitialrate='".$deluxinitialrate."',deluxfinalrate='".$deluxfinalrate."',royalinitialrate='".$royalinitialrate."',royalfinalrate='".$royalfinalrate."' where ferryid='".$ferryid."'";

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

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
   font-family: "Lucida Console", "Courier New", monospace;
}
body {
   /* background: linear-gradient(to top, #c9c9ff 50%, #9090fa 90%) no-repeat; */
   
}
.container {
    margin: 20px auto;
}
.panel-heading {
    text-align: center;
    margin-bottom: 10px
}
#forgot {
    min-width: 100px;
    margin-left: auto;
    text-decoration: none
}

.form-inline label {
    padding-left: 10px;
    margin: 0;
    cursor: pointer
}

.btn.btn-primary {
    margin-top: 20px;
    border-radius: 15px
}

.panel {
    min-height: 380px;
    box-shadow: 20px 20px 80px rgb(218, 218, 218);
    border-radius: 12px
}

.input-field {
    border-radius: 5px;
    padding: 5px;
    display: flex;
    align-items: center;
    cursor: pointer;
    border: 1px solid #ddd;
    color: #4343ff
}

input[type='text'],
input[type='password'] {
    border: none;
    outline: none;
    box-shadow: none;
    width: 100%;
}
.fa-user{
	font-size:10px;
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
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
.scrolling{
	overflow-x:scroll;
	width:100%;
	margin:0% 10%;
}	
.panel{
	width:400px;
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

<?php
			ini_set('display_errors', 0); 
            include("database.php");
			
			$ferryid=$_GET['ferryid'];
			
				$query="select * from ferrydetails where ferryid='".$ferryid."'";
				$result= mysqli_query($con, $query);

			
			while($row= mysqli_fetch_assoc($result)) {
?>
<div class="container">
    <div class="row">
	<center>
	<div class="scrolling">
        <div class="col-lg-5 col-md-7 ">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h4 class="pt-2 font-weight-bold">Update Ferry Details</h4>
                </div>
                <div class="panel-body p-3">
                    <form action="ferryupdate.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="ferryid" value="<?php echo $row['ferryid'];?>">
                        <div class="form-group py-2">
                            <input type="input" class="form-control" name="ferryname" placeholder="Enter Ferry Name" required value="<?php echo $row['ferryname'];?>"> 
                        </div>
                        <div class="form-group py-2">
                            <input type="file" class="form-control" name="ferryimage" placeholder="Select Image File" required> 
                        </div>
	                    <div class="form-group py-2">
							<select class="form-control" name="fromaddress" required>
								<option selected value="<?php echo $row['fromaddress'];?>" ><?php echo $row['fromaddress'];?></option>
								<option value="Port Blair">Port Blair</option>
								<option value="Havelock">Havelock</option>
								<option value="Neil">Neil</option>
							</select>
                        </div>	
	                    <div class="form-group py-2">
							<select class="form-control" name="toaddress" required>
								<option selected value="<?php echo $row['toaddress'];?>" ><?php echo $row['toaddress'];?></option>
								<option value="Havelock">Havelock</option>
								<option value="Port Blair">Port Blair</option>
								<option value="Neil">Neil</option>
							</select>
                        </div>							
                        <div class="form-group py-2">
                            <input type="text" onfocus = "(this.type = 'time')" name="fromtime" placeholder="From Time" class="form-control" required style="border:1px solid black;" value="<?php echo $row['fromtime'];?>" >
                        </div>
                        <div class="form-group py-2">
                            <input type="text" onfocus = "(this.type = 'time')" name="totime" placeholder="To Time" class="form-control" required style="border:1px solid black;" value="<?php echo $row['totime'];?>" >
                        </div>
						<div class="row">
							<div class="col-sm-4" style="margin-top:7px;float:left;">
								Premium
							</div>
							<div class="col-sm-4">
								<input type="text" name="premiuminitialrate" class="form-control"  placeholder="Initial Rate" style="border:1px solid black;" value="<?php echo $row['premiuminitialrate'];?>" >
							</div>
							<div class="col-sm-4">
								<input type="text" name="premiumfinalrate" class="form-control" placeholder="Final Rate" style="border:1px solid black;" value="<?php echo $row['premiumfinalrate'];?>">
							</div>
						</div>
						<div class="row pt-1">
							<div class="col-sm-4" style="margin-top:7px;">
								Delux
							</div>
							<div class="col-sm-4">
								<input type="text" name="deluxinitialrate" class="form-control"  placeholder="Initial Rate" style="border:1px solid black;" value="<?php echo $row['deluxinitialrate'];?>">
							</div>
							<div class="col-sm-4">
								<input type="text" name="deluxfinalrate" class="form-control" placeholder="Final Rate" style="border:1px solid black;" value="<?php echo $row['deluxfinalrate'];?>">
							</div>
						</div>	
						<div class="row pt-1">
							<div class="col-sm-4" style="margin-top:7px;">
								Royal
							</div>
							<div class="col-sm-4">
								<input type="text" name="royalinitialrate" class="form-control"  placeholder="Initial Rate" style="border:1px solid black;" value="<?php echo $row['royalinitialrate'];?>">
							</div>
							<div class="col-sm-4">
								<input type="text" name="royalfinalrate" class="form-control" placeholder="Final Rate" style="border:1px solid black;" value="<?php echo $row['royalfinalrate'];?>">
							</div>
						</div>						
                        <div class=""><input type="submit" name="submit" value="SUBMIT" class="btn btn-primary w-100" ></div>
				   </form>
                </div>
                <div class="mx-3 my-2 py-2 bordert">
                </div>
            </div>
        </div>
	</div>
	</center>
    </div>
</div>
<?php 
}
?>
</section>
</body>
</html>