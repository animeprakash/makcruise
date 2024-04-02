
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
.ferryimage{
	height:200px;
}
.container-fluid{
	margin:0% 8.33%;
	width:83.33%;
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
label{
	top:10px;
	margin-left:0px;
	float:left;
}
::placeholder{
	font-size:20px;
}
.search{
	border:1px solid black;
	color:white;
	font-size:17px;
	border-radius:5px;
	padding:8px 20px;
	margin-top:25px;
}
.formfield{
	background-color:white;
	padding:3%;
	border-radius:10px;
}
.activeclass{
	color:white;
	background-color:#198754;
}
.activeclass2{
	color:#198754;
	background-color:white;
	border:1px solid #198754;
}
.pasdetails{
	border:1px solid lightgray;	
	border-radius:10px;
	margin:0% 8.33%;
	width:83.33%;
}
.box-shadow{
    box-shadow: 10px 10px 40px 10px rgb(218, 218, 218);
}
.reviewbutton{
	width:30%;
}
.index-image{
	width:100%;
	height:180px;
}
.p-n1 {
  padding:-5px;
}
.tb-width{
	width:20%;
}
.tb-shadow{
	box-shadow: 4px 4px 10px 4px rgb(218, 218, 218);
	border-radius:25px;
}
.tb-boxshadow{
	box-shadow: 4px 4px 20px 4px rgb(218, 218, 218);
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
.col-sm-8{
	width:100%;
}
.col-summary{
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
.sec{
	margin-top:0%;
	margin-bottom:2%;
	padding:2% 0% .5% 0%;
}
.form-control-lg{
	height:20px;
}
label{
	top:10px;
	font-size:15px;
	margin-left:0px;
	float:left;
}
::placeholder{
	font-size:20px;
}
.search{
	width:100%;
	border:1px solid #198754;
	color:white;
	font-size:17px;
	border-radius:5px;
	padding:8px 20px;
	margin:25px 0 25px 0;
}
.formfield{
	background-color:white;
	padding:3%;
	border-radius:10px;
}
.activeclass{
	color:white;
	background-color:#198754;
}
.activeclass2{
	color:#198754;
	background-color:white;
	border:1px solid #198754;
}
.pasdetails {
	border:1px solid lightgray;	
	border-radius:10px;
	margin:1% 2.5%;
	width:95%;
}
.reviewbutton{
	width:100%;
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
 .index-image{
	width:100%;
	height:180px;
}
.tb-width{
	box-shadow: 4px 4px 10px 4px rgb(218, 218, 218);
	border-radius:25px;	
	margin:2% 5%;
	width:90%;
}
}
</style>
<style>

</style>
<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
				
</script>
<script>
				const tomorrow = (long = false) => {
				  let t = new Date();
				  t.setDate(t.getDate() + 1);
				  const ret = `${t.getFullYear()}-${String(t.getMonth() + 1).padStart(2, '0')}-${String(
					t.getDate()
				  ).padStart(2, '0')}`;
				  return !long ? ret : `${ret}T00:00:00`;
				};

				document.addEventListener('DOMContentLoaded', function() { 
				var input = document.getElementById('traveldate');
				var tomorrow = new Date(); 
				tomorrow.setDate(tomorrow.getDate() + 1); 
				var tomorrowString = tomorrow.toISOString().split('T')[0];
				input.value = tomorrowString; }); 
</script>

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
<section class="sec bg-info">
	<div class="container-fluid">
	<form action="indexform.php" method="post"  class="needs-validation formfield" id="ferryform" novalidate >
	  <div class="row">
		<div class="col-sm-2 ">
			<label>From</label>
			<select class="form-control form-control-lg" name="from" id="from" >
				<option selected value="Port Blair">Port Blair</option>
				<option value="Havelock">Havelock</option>
				<option value="Neil">Neil</option>
			</select>
		</div>
		<div class="col-sm-2 ">
			<label>To</label>
			<select class="form-control form-control-lg"  name="to" id="to">
				<option value="Havelock" selected>Havelock</option>
				<option value="Port Blair">Port Blair</option>
				<option value="Neil">Neil</option>
			</select>
		</div>
		<div class="col-sm-2">
			<label>Travel Date</label>
			<input type="date" class="form-control form-control-lg " name="traveldate" id="traveldate">
		</div>
		<div class="col-sm-2">
			<label>No.&nbsp;of&nbsp;Persons/Seats</label>
			<input type="text" class="form-control form-control-lg " name="numseats" id="numseats" value="2" pattern="^[0-9]{0,10}$">
		</div>
		<div class="col-sm-2">
			<label>Infants</label>
			<input type="number" class="form-control form-control-lg " name="infants" id="infants" value="0" pattern="^[0-9]{0,10}$">
		</div>
		
		<div class="col-sm-2">
			<input type="submit" class="search btn-success col-sm-12" name="submit" id="submit" value="Search">
		</div>
	  </div>
	</form>
	</div>
</section>
<script>
				$(document).ready(function() {
				$(".ratebutton").click(function(){
				var str=$(this).attr("value");
				//alert(strvalue);
				//document.getElementById('rate').value=str;
				$("form input[name=rate]").val(str);				
				});
				});		

				$(document).ready(function() {
				$(".ratebutton").click(function(){
				var strname=$(this).attr("name");
				$("form input[name=ratename]").val(strname);
				//alert(strname);
				//document.getElementById('ratename').value=strname;
				});
				});				
</script>
<script>
			/*	$(document).ready(function() {
					$(".ratebutton").on("click", function() {
						$(this).toggleClass("activeclass");
					});
				});
			*/	
				
			$(document).ready(function() {
			  var selected = null;
			  $('.ratebutton').on('click', function() {

				if (this === selected) {
				  $(this).removeClass('activeclass');
				  $(this).addClass('activeclass2');
				  
				  selected = null;
				  if (selected == null) {					
					$(selected).removeClass('activeclass2');
					$(this).addClass('activeclass');
				  }				  
				} else {
				  if (selected !== null) {
					
					$(selected).removeClass('activeclass');
					$(this).addClass('activeclass2');
				  }
				  $(this).addClass('activeclass');
				  $(this).removeClass('activeclass2');
				  selected = this;
				}
			  });
			});	
</script>
<script type="text/javascript">

let submitBtn = document.getElementsByClassName('bookbutton'); 

submitBtn.addEventListener('click', (event) => {  
	event.preventDefault(); 

	$.post('indexform.php', { 
		
		ferryid : ferryid ,
		ferryname : ferryname ,
		fromaddress : fromaddress ,
		toaddress  : toaddress,
		traveldate: traveldate,
		numseats : numseats,
		infants : infants,
		rate : rate ,
		ratename : ratename,
		fromtime : fromtime
	}, (response) => { 
		console.log(response); 
	}); 
});

</script>
<div class="container-fluid">
	<div class="row mt-2 mb-2">
<?php
			ini_set('display_errors', 0); 
            include("database.php");
			
			$from=$_POST['from'];
			$to=$_POST['to'];
			$traveldate=$_POST['traveldate'];
			$numseats=$_POST['numseats'];
			$infants=$_POST['infants'];
			$strvalue=$_COOKIE['str'];
		//	if(isset($_POST["from"]) && isset($_POST["to"])) 
		//	{
				$query="select * from ferrydetails where fromaddress='".$from."' and toaddress='".$to."' ";
				$result= mysqli_query($con, $query);
		//	}
		/*	else{
				$query="select * from ferrydetails where fromaddress='Port Blair' and toaddress='Havelock'";
				$result= mysqli_query($con, $query);
			}
		*/	
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
					<h5 class="card-title text-center"> <?php echo $traveldate ;?></h5>
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
					<div class="text-center">
						<form action="indexform.php" method="post">
							<input type="hidden" name="ferryid" value="<?php echo $row['ferryid'];?>">
							<input type="hidden" name="ferryname" value="<?php echo $row['ferryname'];?>">
							<input type="hidden" name="fromaddress" value="<?php echo $row['fromaddress'];?>">
							<input type="hidden" name="toaddress"  value="<?php echo $row['toaddress'];?>">
							<input type="hidden" name="traveldate"  value="<?php echo $traveldate;?>">
							<input type="hidden" name="numseats"  value="<?php echo $numseats;?>">
							<input type="hidden" name="infants"  value="<?php echo $infants;?>">
							<input type="hidden" name="rate" id="rate">
							<input type="hidden" name="ratename" id="ratename" >
							<input type="hidden" name="fromtime"  value="<?php echo $row['fromtime'];?>">
							<button id="bookbutton" class="btn btn-success text-center bookbutton" value="Book Now" onclick="duplicateField()" >Book Now</button>
						</form>
					</div>
				  </div>
				</div>			
			</div>
				
<?php
			}
?>
		</div>
</div>

<script>
$(function(){
  MakeElementsWithDifferentId();
  cloneDivision();
});
</script>

<?php
			ini_set('display_errors', 0); 
            include("database.php");
			
			$ferryid=$_POST['ferryid'];
			$ferryname=$_POST['ferryname'];
			$fromaddress=$_POST['fromaddress'];
			$toaddress=$_POST['toaddress'];
			$traveldate=$_POST['traveldate'];
			$numseats=$_POST['numseats'];
			$infants=$_POST['infants'];
			$rate=$_POST['rate'];
			$ratename=$_POST['ratename'];
			$fromtime=$_POST['fromtime'];

			
		//	$querytwo="select * from ferrydetails where fromaddress='".$fromaddress."' and toaddress='".$toaddress."' and fromtime='".$fromtime."' limit 5";
		//	$resulttwo= mysqli_query($con, $querytwo);
		//	while($data= mysqli_fetch_assoc($resulttwo)) {
			
		if($ferryid==TRUE){
?>	
<script>		
function MakeElementsWithDifferentId() {
		//var num=4;
        for (var i = 2; i <= <?php echo $numseats; ?>; i++) {
            var original = document.getElementById('repeat');
            var clone = original.cloneNode(true);
            //var cl=clone.querySelectorAll('[id="#"]')[0].id ="#"+i;
			//	clone.querySelectorAll('[id="passengername"]')[0].id ="passengername"+i;
            // clone.querySelectorAll('[id="age"]')[0].id ="age"+i;
            original.parentNode.appendChild(clone);
		clone.getElementsByClassName("count")[0].textContent = i;			
        }
    }
</script>

<section class="container pasdetails">
	<div class="row">
		<div class="col-sm-8 mt-4 mb-4">
			<h3 class="card-title">Passenger Details</h3>
			<p>Please furnish full names precisely as they are displayed on identification cards to prevent any issues during security checks.</p>
		
		<form action="bookingreview.php" method="post" >
			<div class="row" >
				<div id="repeat" class="row">
					<h6 class="mt-3 col-12 d-flex">Passenger&nbsp;#<div class="count">1</div></h6>
					<div class="row" >
						<div class="col-4 col-lg-2">
							<label>Title</label>
							<select class="form-control " name="title[]" id="title" required>
								<option selected value="Mr">Mr</option>
								<option value="Mrs">Mrs</option>
								<option value="Miss">Miss</option>
								<option value="Master">Master</option>
								<option value="Dr">Dr</option>
							</select>				
						</div>
						<div class="col-8 col-lg-4">
							<label>Name</label>						
							<input type="text" id="passengername" name="passengername[]" class="form-control " required>
						</div>

						<div class="col-4 col-lg-2">
							<label>Age</label>							
							<input type="text" id="age" name="age[]" class="form-control " required pattern="^[0-9]{0,10}$">
						</div>
						<div class="col-4 col-lg-2">
							<label>Gender</label>	
							<select class="form-control " name="gender[]" id="gender" required>
								<option selected value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Transgender">Transgender</option>
							</select>	
						</div>
						<div class="col-4 col-lg-2">
							<label>Nationality</label>	
							<input type="text" id="nationality" name="nationality[]" value="Indian" class="form-control" required>
						</div>
					</div>

				</div>
			</div>
			<h3 class="card-title">Contact Details</h3>
			<div class="row">			
							<div class="col-sm-4">
								<label>Name</label>
								<input type="text" id="contactname" name="contactname"  class="form-control col-sm-4" required>
							</div>
							<div class="col-sm-4">
								<label>Email Id</label>
								<input type="email" id="emailid" name="emailid"  class="form-control col-sm-4" required>
							</div>
							<div class="col-sm-4">
								<label>Mobile</label>
								<input type="text" id="mobile" name="mobile"  class="form-control col-sm-4" required pattern="^[0-9]{10}$">
							</div>
			</div>
			<div class="text-center mt-4">
							<input type="hidden" name="ferryid"  class="form-control" required value="<?php echo $ferryid; ?>" >
							<input type="hidden" name="ferryname"  class="form-control" required value="<?php echo $ferryname; ?>" >
							<input type="hidden" name="fromaddress" value="<?php echo $fromaddress;?>">
							<input type="hidden" name="toaddress"  value="<?php echo $toaddress;?>">
							<input type="hidden" name="traveldate"  value="<?php echo $traveldate;?>">
							<input type="hidden" name="numseats"  value="<?php echo $numseats;?>">
							<input type="hidden" name="infants"  value="<?php echo $infants;?>">
							<input type="hidden" name="rate" value="<?php echo $rate;?>">
							<input type="hidden" name="ratename" value="<?php echo $ratename;?>" >
							<input type="hidden" name="fromtime"  value="<?php echo $fromtime;?>">
					<input type="submit" name="passengersubmit" id="passengersubmit" class="bg-success btn text-white reviewbutton" value="Next: Review and Book Now" >
			</div>
		</form>
		</div>
<?php 
			$qrysql="select * from ferrydetails where ferryid='".$ferryid."' ";
			$ressql= mysqli_query($con, $qrysql);
			while($sqlrow= mysqli_fetch_assoc($ressql)) {
				
?>		
		<div class="col card m-2 col-summary">
			<h5 class="card-title text-center mt-2">Book Summary</h5> <hr>
			<div class="row m-3">
				<span class="mb-2">Travel Date : <?php echo $traveldate;?></span><hr>
				<span class="mb-2">From <?php echo $fromaddress;?> to <?php echo $toaddress;?></span><hr>
				<span class="mb-2">Departure Time : <?php echo $fromtime;?> </span><hr>
		<?php 
				if($sqlrow['premiumfinalrate']== $rate){
		?>
				<span class="mb-2">Class Selected : Premium </span><hr>
				<span class="mb-2">Passengers : <?php echo $numseats;?> </span><hr>
				<span class="mb-2">Infants : <?php echo $infants;?> </span><hr>
				<span class="mb-2">Fare : Rs.<?php echo number_format((float)($sqlrow['premiuminitialrate']-50), 2, '.', ''); ?> </span><hr>
				<span class="mb-2">After Discount : Rs. <?php echo $rate;?> </span><hr>
				<span class="mb-2">Infant Fare : Rs. 0.00 </span><hr>
				<span class="mb-2">Total : <del>Rs.<?php echo number_format((float)($sqlrow['premiuminitialrate']*$numseats), 2, '.', ''); ?></del> Rs. <?php echo number_format((float)($rate*$numseats), 2, '.', ''); ?></span><hr>
				<span class="mb-2"><b>Savings : Rs. <?php echo number_format((float)($sqlrow['premiuminitialrate']*$numseats)-($rate*$numseats), 2, '.', '') ; ?></b></span>
		<?php }
				if($sqlrow['deluxfinalrate']== $rate){
		?>
				<span class="mb-2">Class Selected : Delux </span><hr>
				<span class="mb-2">Passengers : <?php echo $numseats;?> </span><hr>
				<span class="mb-2">Infants : <?php echo $infants;?> </span><hr>
				<span class="mb-2">Fare : Rs. <?php echo number_format((float)($sqlrow['deluxinitialrate']-50), 2, '.', ''); ?></span><hr>
				<span class="mb-2">After Discount : Rs. <?php echo $rate;?></span><hr>
				<span class="mb-2">Infant Fare : Rs. 0.00 </span><hr>
				<span class="mb-2">Total : <del>Rs.<?php echo number_format((float)($sqlrow['deluxinitialrate']*$numseats), 2, '.', ''); ?></del> Rs. <?php echo number_format((float)($rate*$numseats), 2, '.', ''); ?></span><hr>
				<span class="mb-2"><b>Savings : Rs. <?php echo number_format((float)($sqlrow['deluxinitialrate']*$numseats)-($rate*$numseats), 2, '.', '') ; ?></b></span>
		<?php }
				if($sqlrow['royalfinalrate']== $rate){
		?>
				<span class="mb-2">Class Selected : Royal</span><hr>
				<span class="mb-2">Passengers : <?php echo $numseats;?> </span><hr>
				<span class="mb-2">Infants : <?php echo $infants;?> </span><hr>
				<span class="mb-2">Fare : Rs. <?php echo number_format((float)($sqlrow['royalinitialrate']-50), 2, '.', ''); ?></span><hr>
				<span class="mb-2">After Discount : Rs. <?php echo $rate;?></span><hr>
				<span class="mb-2">Infant Fare : Rs. 0.00 </span><hr>
				<span class="mb-2">Total : <del>Rs.<?php echo number_format((float)($sqlrow['royalinitialrate']*$numseats), 2, '.', ''); ?></del> Rs. <?php echo number_format((float)($rate*$numseats), 2, '.', ''); ?></span><hr>
				<span class="mb-2"><b>Savings : Rs. <?php echo number_format((float)($sqlrow['royalinitialrate']*$numseats)-($rate*$numseats), 2, '.', '') ; ?></b></span>
		<?php }
		?>
			</div>
		</div>
<?php }  ?>
	</div>
</section>
<?php
			}
?>			
<div class="container">
	<div class="row mb-2">
		<div class="col-12 col-lg-3 mt-2 mb-3">
			<div class="container border border-1 px-0">
				<div class="row">
					<div class="col-12 col-lg-12">
						<img src="greenocean.png" class="index-image" >	
					</div>
					<div class="offset-1  offset-lg-1 col-10 col-lg-10 ">
						<h4>Green Ocean</h4>
						ANDHAMAN   <hr>
					</div>
					<div class="offset-1  offset-lg-1 col-10 col-lg-10 text-justify ml-2 mr-2">
						Green Ocean Ferry in Andaman is a modern and high-speed monohull vessel between the islands of Port Blair, Havelock and Neil. This is quite similar to the Government ferry and is also affordable.
									<br><br><hr>
					</div>
					<div class="offset-1  offset-lg-1 col-10 col-lg-10  mb-4">
							<a  href="#" class="btn bg-info text-white rounded-pill">CHECK IT</a>
					</div>				
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-3 mt-2 mb-3">
			<div class="container border border-1 px-0">
				<div class="row">
					<div class="col-12 col-lg-12">
						<img src="makruzz.png" class="index-image" >	
					</div>
					<div class="offset-1  offset-lg-1 col-10 col-lg-10 ">
						<h4>Makruzz</h4>
						ANDHAMAN   <hr>
					</div>
					<div class="offset-1  offset-lg-1 col-10 col-lg-10 text-justify ml-2 mr-2">
					Makruzz is a high-speed catamaran type ferry operating from Port Blair to havelock island and neil island. The speed and comfort of the ferry makes it an ideal choice for transportation between the islands.
									<hr>
					</div>
					<div class="offset-1  offset-lg-1 col-10 col-lg-10  mb-4">
							<a  href="#" class="btn bg-success text-white rounded-pill">CHECK IT</a>
					</div>				
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-3 mt-2 mb-3">
			<div class="container border border-1 px-0">
				<div class="row">
					<div class="col-12 col-lg-12">
						<img src="iitmajestic.png" class="index-image" >	
					</div>
					<div class="offset-1  offset-lg-1 col-10 col-lg-10 ">
						<h4>IIT Majestic</h4>
						ANDHAMAN   <hr>
					</div>
					<div class="offset-1  offset-lg-1 col-10 col-lg-10 text-justify ml-2 mr-2">
				ITT Majestic has launched just recently in 2019. This cruise is fast and offers rich experience to travellers going from one island to the other. ITT Majestic operates from Port Blair to Swaraj Dweep Island.
									<br><br><br><hr>
					</div>
					<div class="offset-1  offset-lg-1 col-10 col-lg-10  mb-4">
							<a  href="#" class="btn bg-danger text-white rounded-pill">CHECK IT</a>
					</div>				
				</div>
			</div>
		</div>		
		<div class="col-12 col-lg-3 mt-2 mb-3">
			<div class="container border border-1 px-0">
				<div class="row">
					<div class="col-12 col-lg-12">
						<img src="nautika.png" class="index-image" >	
					</div>
					<div class="offset-1  offset-lg-1 col-10 col-lg-10 ">
						<h4>Nautika</h4>
						ANDHAMAN   <hr>
					</div>
					<div class="offset-1  offset-lg-1 col-10 col-lg-10 text-justify ml-2 mr-2">
					Youngest and newly built catamaran is all set to join the SeaLink fleet in 2022. Nautika is a 33-meter long passenger ship with two completely air conditioned decks with a passenger capacity of 285.
									<br><br><br><hr>
					</div>
					<div class="offset-1  offset-lg-1 col-10 col-lg-10  mb-4">
							<a  href="#" class="btn bg-success text-white rounded-pill">CHECK IT</a>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container my-3">
		<div class="col-12 col-lg-12 text-center">
					<h4><b>MAKRUZZ SCHEDULE AND TRIP</b></h4>
					<h6>SCHEDULE OPEN FOR 04 JULY 2022- 30 APRIL 2023</h6>
					<h6>(MORE SCHEDULE COMING SOON)</h6>
		</div>		
	<div class="row tb-shadow">

		<div class="col-12 tb-width">
			 <div class="col-12 col-lg-12 mt-2 btn btn-white shadow-lg rounded-pill"><b>Ship</b></div>
			 <ul type="disc" class="mt-3">
				<li class="text-primary ft">Makruzz 1</li>
				<li class="text-primary ft">Makruzz 1</li>
				<li class="text-primary ft">Makruzz 1</li>
				<li class="text-primary ft">Makruzz 1</li>
				<li class="text-primary ft">Makruzz 1</li>
			 </ul>
		</div >
		<div class="col-12 tb-width tb-boxshadow">
			 <div class="col-12 col-lg-12 mt-2 btn btn-white shadow-lg rounded-pill"><b>From</b> </div>
			 <ul type="disc" class="mt-3">
				<li class="text-dark ft">Port Blair</li>
				<li class="text-dark ft">Port Blair</li>
				<li class="text-dark ft">Swaraj&nbsp;Dweep&nbsp;(Havelock)</li>
				<li class="text-dark ft">Swaraj&nbsp;Dweep&nbsp;(Havelock)</li>
				<li class="text-dark ft">Swaraj&nbsp;Dweep&nbsp;(Neil)</li>
			 </ul>
		</div >
		<div class="col-12 tb-width tb-boxshadow">
			 <div class="col-12 col-lg-12 mt-2 btn btn-white shadow-lg rounded-pill"><b>To</b></div>
			 <ul type="disc" class="mt-3">
				<li class="text-dark ft">Swaraj&nbsp;Dweep&nbsp;(Havelock)</li>
				<li class="text-dark ft">Swaraj&nbsp;Dweep&nbsp;(Havelock)</li>
				<li class="text-dark ft">Port Blair</li>
				<li class="text-dark ft">Swaraj&nbsp;Dweep&nbsp;(Neil)</li>
				<li class="text-dark ft">Port Blair</li>
			 </ul>
		</div >
		<div class="col-12 tb-width tb-boxshadow">
			 <div class="col-12 col-lg-12 mt-2 btn btn-white shadow-lg rounded-pill"><b>Departure Time</b> </div>
			 <ul type="disc" class="mt-3">
				<li class="text-primary ft">08:00 HRS</li>
				<li class="text-primary ft">14:00 HRS</li>
				<li class="text-primary ft">16:00 HRS</li>
				<li class="text-primary ft">11:00 HRS</li>
				<li class="text-primary ft">12:45 HRS</li>
			 </ul>
		</div >
		<div class="col-12 tb-width ">
			 <div class="col-12 col-lg-12 mt-2 btn btn-white shadow-lg rounded-pill"><b>Arrival Time</b> </div>
			 <ul type="disc" class="mt-3">
				<li class="text-dark ft">09:15 HRS</li>
				<li class="text-dark ft">15:30 HRS</li>
				<li class="text-dark ft">17:30 HRS</li>
				<li class="text-dark ft">12:00 HRS</li>
				<li class="text-dark ft">13:30 HRS</li>
			 </ul>
		</div >
	</div>
</div>

</body>
</html>