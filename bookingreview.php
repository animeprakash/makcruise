<?php
			ini_set('display_errors', 0); 
            include("database.php");
			$ferrynumber=$_POST['ferryid'];
			$ferryname=$_POST['ferryname'];
			$fromaddress=$_POST['fromaddress'];
			$toaddress=$_POST['toaddress'];
			$traveldate=$_POST['traveldate'];
			$numseats=$_POST['numseats'];
			$infants=$_POST['infants'];
			$rate=$_POST['rate'];
			$ratename=$_POST['ratename'];
			$fromtime=$_POST['fromtime'];
			$passengername=$_POST['passengername'];
			$age=$_POST['age'];
			$gender=$_POST['gender'];
			$contactname=$_POST['contactname'];
			$emailid=$_POST['emailid'];
			$mobile=$_POST['mobile'];
			
			$data = array();
			for ($i = 0; $i < count($passengername); $i++) {
				$data[] = array(
					'count'=>$i+1,
					'passengername'=>$passengername[$i],
					'age' => $age[$i],
					'gender'=>$gender[$i]
				);
			}
			
			foreach ($data as $row) {
				$q="create table if not exists passengerdetails(passengerid int not null auto_increment primary key,title varchar(100),passengername varchar(100),age int,gender varchar(100),nationality varchar(100),contactname varchar(100),emailid varchar(200),mobile long,ferrynumber int)";
				mysqli_query($con, $q);
				
				$sqlquery = "INSERT INTO passengerdetails (title,passengername,age,gender,nationality,contactname,emailid,mobile,ferrynumber) VALUES ('{$row['title']}', '{$row['passengername']}','{$row['age']}', '{$row['gender']}', '{$row['nationality']}','".$contactname."' ,'".$emailid."','".$mobile."','".$ferrynumber."')";
				mysqli_query($con, $sqlquery);
			}
			
        if(isset($_POST["getticket"])) {
				$passengername=$_POST['passengername'];
				$age=$_POST['age'];
				$gender=$_POST['gender'];
				$contactname=$_POST['contactname'];
				$emailid=$_POST['emailid'];
				$mobile=$_POST['mobile'];		
				$ferryname=$_POST['ferryname'];
				$rate=$_POST['rate'];
				$fromaddress=$_POST['fromaddress'];
				$toaddress=$_POST['toaddress'];
				
				$data = array();
				for ($i = 0; $i < count($passengername); $i++) {
					$data[] = array(
						'count'=>$i+1,
						'passengername'=>$passengername[$i],
						'age' => $age[$i],
						'gender'=>$gender[$i]
					);
				}				
								
				$implodeInner = function ($da) {
					return implode(' ', $da);
				};				
				$implodedArray = implode(',.', array_map($implodeInner, $data));
				$st=str_replace(".", "\n",$implodedArray );
				$str="Dear sir/Mam,Please find the Your Passenger details below.\n\n".$st."\n\nContact Name: ".$contactname."\nEmail Id: ".$emailid."\nMobile: ".$mobile."\n\nFerry Name: ".$ferryname."\nFrom: ".$fromaddress."\nTo: ".$toaddress."\nRate: Rs.".$rate;
				$url="https://wa.me/8489941840/?text=".urlencode($str);	
				header("Location:".$url);			
		}
?>	
<html>
<head>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<style>
@media only screen and (min-device-width :600px) {
.sec{
	margin-top:0%;
	margin-bottom:2%;
	padding:2% 0% 1% 0%;
}
.logosize{
	width:130px;
	padding:10px;
	margin-left:40px;
}
.navbar-nav{
	width:63%;
	margin-left:37%;
}
.nav-link{
	width:20%;
	font-size:85%;
	font-weight:bold;
}
.nav-link:hover{
	color:#0dcaf0;
	width:20%;
	font-size:85%;
	font-weight:bold;
}
.contain{
	border:1px solid lightgray;	
	border-radius:0px;
	margin:2% 15%;
	width:70%;	
}
.reviewdetails{
	border:1px solid lightgray;	
	border-radius:0px;
	margin:3% 3% 0% 3%;
	width:94%;
}
.paraheader{
	border:0px solid lightgray;	
	border-radius:0px;
	margin:3% 3% 0% 3%;
	width:94%;
}
.pad{
	padding:2% .5% 2% 0.5%;
}
.gpay{
	width:200px;
	height:auto;
}
}
</style>
<style>
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
.col-sm-2{
	width:100%;
}
.col-sm-4{
	width:100%;
}

.ferryimage{
	height:200px;
}
.nav-link{
	font-size:85%;
	font-weight:bold;
}
.nav-link:hover{
	color:#0dcaf0;
	font-size:85%;
	font-weight:bold;
}
.navbar-toggler{
	margin-left:-30%;
}
.active{
	background-color:black;
	color:white;
}
.logosize{
	width:70%;
	margin-left:-18%;
}
.contain{
	border:0px solid lightgray;	
	border-radius:0px;
	margin:2% 0%;
	width:100%;	
}
.reviewdetails{
	border:1px solid lightgray;	
	border-radius:0px;
	margin:3% 3% 0% 3%;
	width:94%;
}
.paraheader{
	border:0px solid lightgray;	
	border-radius:0px;
	margin:3% 3% 0% 3%;
	width:94%;
}
.gpay{
	width:100%;
	height:auto;
}
}
</style>
<style>

</style>

<script type="text/javascript">

let submitBtn = document.getElementById('submit'); 

submitBtn.addEventListener('click', (event) => {  
	event.preventDefault(); 
 
	let from = document.getElementById('from').value;  
	let to = document.getElementById('to').value; 
	let traveldate = document.getElementById('traveldate').value;
	let numseats= document.getElementById('numseats').value;
	let infants = document.getElementById('infants').value; 
 
	$.post('indexform.php', { 

		from : from ,
		to  : to,
		traveldate: traveldate,
		numseats : numseats,
		infants : infants
	}, (response) => { 
		console.log(response); 
	}); 
});


</script>

</head>
<body >
    <div class=" bg-info px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height:50px;">
                    <small class="me-3 text-dark" style="font-size:14px;"><i class="fa fa-map-marker-alt me-2"></i>Wilson, KS 67490</small>
                    <small class="ml-3 text-dark" style="font-size:14px;"><i class="fa fa-envelope-open me-2"></i>test@test.com</small>                    
					<small class="me-3 text-dark" style="font-size:14px;margin-left:10px;"><i class="fa fa-phone-alt me-2"></i>24/7 Customer Support</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
					<a class="btn btn-sm  text-dark me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></i></a>
                    <a class="btn btn-sm  text-dark me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm  text-dark me-2" href=""><i class='fab fa-github'></i></a>
                    <a class="btn btn-sm  text-dark me-2" href=""><i class="fab fa-bitbucket"></i></a></div>
            </div>
        </div>
    </div>
  <!-- Navbar & Carousel Start -->
    <div class=" position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-5 py-3 py-lg-0">
            <div class="navbar-brand p-0">
                <h5 class="m-0"><img src="logo-1.jpg" class="logosize"> </h5>
            </div>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" style="margin-top:-20px;">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="https://www.makcruise.com/" class="nav-item nav-link">HOME</a>
                    <a href="indexform.php" class="nav-item nav-link text-info">FERRY&nbsp;TICKETS</a>
                    <a href="https://www.makcruise.com/about/" class="nav-item nav-link ">ABOUT</a>
                    <a href="https://www.makcruise.com/gallery/" class="nav-item nav-link ">GALLERY</a>
					<a href="https://www.makcruise.com/contact/" class="nav-item nav-link ">CONTACTS</a>
					
                </div>               
            </div>
        </nav>

    </div>


<section class="container contain" >

	<div class="row reviewdetails">
		<div class="col-lg-3 pad">
			Vessel Name: <?php echo $ferryname; ?>
		</div>
		<div class="col-lg-3 pad">
			Class: <?php 
			if($ratename=="premiumfinalrate"){			
			  ?>  Premium<?php }
			else if($ratename=="deluxfinalrate"){			
			?>  Delux<?php }
			if($ratename=="royalfinalrate"){			
			  ?>  Royal<?php
			}		
			?>
		</div>
		<div class="col-lg-3 pad">
			Travelling From: <?php echo $fromaddress; ?>
		</div>
		<div class="col-lg-3 pad">
			Travelling To: <?php echo $toaddress; ?>
		</div>
	</div>

	<div class="row reviewdetails">
		<div class="col-lg-3 pad">
			Travel Date: <?php echo $traveldate; ?>
		</div>
		<div class="col-lg-3 pad">
			Travel Time: <?php echo $fromtime; ?>
		</div>
		<div class="col-lg-3 pad">
			No.&nbsp;of&nbsp;persons: <?php echo $numseats; ?>
		</div>
		<div class="col-lg-3 pad">
			Infants: <?php echo $infants; ?>
		</div>
	</div>
	
	<div class="row paraheader">
		<div class="col-lg-12 text-center"><h3 class="pashead">Passenger Details </h3></div>
<?php 
			foreach ($data as $row) {
?>	
		<div class="col-lg-3 pad col-12 p-2">
			Passenger #<?php echo $row['count']; ?>
		</div>
		<div class="col-lg-3 pad col-4 p-2">
			<?php echo $row['passengername']; ?>
		</div>
		<div class="col-lg-3 pad col-4 p-2">
			<?php echo $row['age']; ?>
		</div>
		<div class="col-lg-3 pad col-4 p-2">
			<?php echo $row['gender']; ?>
		</div>
<?php } ?>
	</div>
	
	
	<div class="row paraheader">
	<div class="col-lg-12 text-center"><h3 class="pashead">Contact Details </h3></div>
		<div class="col-lg-4 pt-2 pb-2">
			Your Name: <?php echo $contactname; ?>
		</div>
		<div class="col-lg-4 pt-2 pb-2">
			Emaild Id: <?php echo $emailid; ?>
		</div>
		<div class="col-lg-4 pt-2 pb-2">
			Phone: <?php echo $mobile; ?>
		</div>
	</div>
	<div class="row paraheader">
		<div class="row">
		<div class=" col-lg-8 col-12 ">
			<p class="text-left">For seat selection, you will receive an email from Makruzz at least 48 hours before departure.</p>
			<div class="text-center">
			<b> Total Amount: Rs.<?php echo number_format((float)($rate*$numseats), 2, '.', ''); ?> </b>
			<form action="bookingreview.php" method="post" class="p-3">
<?php 
			foreach ($data as $row) {
?>
					<input type="hidden" name="passengername[]" value="<?php echo $row['passengername'];?>">
					<input type="hidden" name="age[]" value="<?php echo $row['age'];?>">
					<input type="hidden" name="gender[]" value="<?php echo $row['gender'];?>">
<?php } ?>
					<input type="hidden" name="contactname" value="<?php echo $contactname;?>">
					<input type="hidden" name="emailid" value="<?php echo $emailid;?>">
					<input type="hidden" name="mobile" value="<?php echo $mobile;?>">
					<input type="hidden" name="ferryname" value="<?php echo $ferryname;?>">
					<input type="hidden" name="fromaddress" value="<?php echo $fromaddress;?>">
					<input type="hidden" name="toaddress" value="<?php echo $toaddress;?>">
					<input type="hidden" name="rate" value="<?php echo $rate*$numseats;?>">
					<input type="submit" name="getticket" id="getsubmit"  class="bg-success btn text-white reviewbutton" value="Get Ticket" >	
			</form>
			</div>
		</div>
		<div class="col-lg-4 col-12 float-right" >
			<img src="gpay.jpg" class="gpay m-2">
		</div>
		</div>
	</div>
</section>
</body>
</html>