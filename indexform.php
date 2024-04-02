
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
	padding:2% 0% 2% 0%;
}
.sec2{
	padding:2% 0% 2% 0%;
	margin-top:0%;
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
.img-index{
	width:100%;
	height:auto;
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
.fs{
	font-size:14px;
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
	padding:3% 0% 3% 0%;
}
.sec2{
	padding:0% 0% 0% 0%;
	margin:-0% 0% 0 0%;
	background-color:#0dcaf0;
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
 .img-index{
	width:100%;
	height:auto;
}
.tb-width{
	box-shadow: 4px 4px 10px 4px rgb(218, 218, 218);
	border-radius:25px;	
	margin:2% 5%;
	width:90%;
}
.fs{
	font-size:14px;
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

<div class="sec bg-info">
	<div class="container-fluid">
		<div class="formfield">
			<form action="indexform.php" method="post"  class="needs-validation" id="ferryform" novalidate >
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
			<div class="row">
				<div class="col-12 col-lg-12 fs text-justify">
					* Infants, aged 0 to 1 years, are classified as such. The Makruzz infant fare is nil,
				</div>
				<div class="col-12 col-lg-12 fs mt-2 text-justify">
					<span style="color:red;">REFERENCE POINTS:-</span> 
				</div>
				<div class="col-12 col-lg-12 fs mt-2 text-justify">
					<ol type="1">
						<li>Note : Ferry schedules are subject to delays or changes in SHORT NOTICE by the Booking Agency. </li>
						<li>Avoid : Reserving ferry on the same date/day of your return journey from Port Blair i.e date of your flight departure.</li>
						<li>Advise : Contact booking agency the day before sailing to confirm the timings.
							<ol type="a">
								<li>Makruzz - 8001240006</li>
								<li class="text-justify">ITT MAJESTIC -
								@Andaman Paradise Holiday holds no liability for any damages arising from ferry
								cancellations, delays, rescheduling, or other reasons.<span style="font-weight:bold;text-decoration:underline;"> Our responsibility is confined to offering
								discounted prices and providing honest guidance.</span></li>
							</ol>
						</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	ini_set('display_errors', 0); 
		if($_POST['from']==FALSE ) { 
		if($_POST['fromaddress']==FALSE ){
?>

<section class="sec2 bg-info">
<div class="container-fluid bg-white">
	<div class="row">
		<div class="col-12 col-lg-3 my-3">	    
				<img src="img-1.png" class="img-index">
		</div>
		<div class="col-12 col-lg-3 my-3">	    
				<img src="img-2.png" class="img-index">
		</div>
		<div class="col-12 col-lg-3 my-3">	    
				<img src="img-3.png" class="img-index">
		</div>
		<div class="col-12 col-lg-3 my-3">	    
				<img src="img-4.png" class="img-index">
		</div>
	</div>
</div>
</section>

<div class="container mt-3">
	<div class="row">
		<div class="col-12 col-lg-12">
		<h4>VALUE PROPOSITION OF RESERVING FERRY TICKETS THROUGH @ANDAMAN PARADISE HOLIDAYS:</h4>
			<ol type="1">
				<li class="text-justify">Best Price, fair deals ensuring value for money.   </li>	
				<li class="text-justify">Safe, reliable and seamless payments and settlements through reliable API.   </li>	
				<li class="text-justify">Expert advice to choose your destination from several options.   </li>	
				<li class="text-justify">Ease of doing business and single window support. </li>	
				<li class="text-justify">Convenient and consistent quality of service.   </li>
			</ol>
		<div class="mb-2">
			<h4>Cancellation Policy</h4>
			<ul type="disc">
				<li>48 Hrs prior to departure - Rs100 + applicable taxes (Documentation Charges Per Ticket).</li>
				<li>24 Hrs prior to Departure - 50% + applicable taxes.</li>
				<li>Within 24 Hrs of Departure - No Refund.</li>
			</ul>
		</div>
		<div class="mb-2">
			<h4>Ticket Verification</h4>
			<p class="text-justify">One can validate their tickets, on completion of booking, by navigating to the
Official websites of Makruzz (<a href="https://www.makruzz.com/print_ticket" >https://www.makruzz.com/print_ticket</a>) where you can
enter the PNR for verification.</p>
		</div>
		</div>
	</div>
</div>
<div class="container mt-3">
	<div class="row text-center">
		<h4>Makruzz Tickets Discount</h4>
	    <table class="table table-bordered">
			<tr>
				<th>Class</th> <th >Sector</th> <th>Fare </th> <th>PSF </th> <th>GST </th> <th> Discount</th> <th>Saving Per Ticket </th>
			</tr>			
			<tr>
				<td>Premium </td> <td>Port Blair to Havelock</td><td>Rs. 1,725.00 </td> <td>Rs. 50.00</td> <td>0</td> <td>10%</td> <td>Rs. 172.50</td>
			</tr>			
			<tr>
				<td>Premium </td> <td>Havelock to Neil</td> <td>Rs. 1,600.00</td> <td>Rs. 50.00</td> <td>0</td> <td>10%</td> <td>Rs. 160.00</td>
			</tr>			
			<tr>
				<td>Premium </td> <td>Neil to Port Blair</td> <td>	Rs. 1,625.00</td> <td>Rs. 50.00</td> <td>0</td> <td>10%</td> <td>	Rs. 162.50</td>
			</tr>			
			<tr>
				<td>Deluxe </td> <td>Port Blair to Havelock</td> <td>Rs. 2,250.00</td> <td>Rs. 50.00</td> <td>0</td> <td>10%</td> <td>Rs. 225.00</td>
			</tr>			
			<tr>
				<td>Deluxe </td> <td>Havelock to Neil</td> <td>Rs. 1,875.00</td> <td>Rs. 50.00</td> <td>0</td> <td>10%</td> <td>Rs. 187.50</td>
			</tr>			
			<tr>
				<td>Deluxe </td> <td>Havelock to Neil</td> <td>Rs. 2,000.00</td> <td>Rs. 50.00</td> <td>0</td> <td>10%</td> <td>Rs. 200.00</td>
			</tr>			
			<tr>
				<td> Royal</td> <td>Port Blair to Havelock</td> <td>Rs. 3,100.00</td> <td>Rs. 50.00</td> <td>0</td> <td>10%</td> <td>Rs. 310.00</td>
			</tr>			
			<tr>
				<td>Royal </td> <td>Port Blair to Havelock</td> <td>Rs. 2,575.00</td> <td>Rs. 50.00</td> <td>0</td> <td>10%</td> <td>Rs. 257.50</td>
			</tr>			
			<tr>
				<td> Royal</td> <td>Neil to Port Blair</td> <td>Rs. 2,900.00</td> <td>Rs. 50.00</td> <td>0</td> <td>10%</td> <td>Rs. 290.00</td>
			</tr>

		</table>
	</div>
</div>

<div class="container mt-3">
	<div class="row text-center">
		<h4>Nautika Tickets Discount</h4>
	    <table class="table table-bordered">
			<tr>
				<th>Class</th> <th >Sector</th> <th>Fare </th> <th>PSF </th> <th>GST </th> <th> Discount</th> <th>Saving Per Ticket </th>
			</tr>			
			<tr>
				<td>Luxury</td> <td>Port Blair to Havelock</td><td>Rs. 1,700.00 </td> <td>Rs. 50.00</td> <td>0</td> <td>15%</td> <td>Rs. 255.00</td>
			</tr>			
			<tr>
				<td>Luxury </td> <td>Havelock to Neil</td> <td>Rs. 1,550.00</td> <td>Rs. 50.00</td> <td>0</td> <td>15%</td> <td>Rs. 232.50</td>
			</tr>			
			<tr>
				<td>Luxury </td> <td>Neil to Port Blair</td> <td>	Rs. 1,600.00</td> <td>Rs. 50.00</td> <td>0</td> <td>15%</td> <td>	Rs. 240.00</td>
			</tr>			
			<tr>
				<td>Royal </td> <td>Port Blair to Havelock</td> <td>Rs. 1,900.00</td> <td>Rs. 50.00</td> <td>0</td> <td>15%</td> <td>Rs. 285.00</td>
			</tr>			
			<tr>
				<td>Royal</td> <td>Havelock to Neil</td> <td>Rs. 1,750.00</td> <td>Rs. 50.00</td> <td>0</td> <td>15%</td> <td>Rs. 162.50</td>
			</tr>			
			<tr>
				<td>Royal</td> <td>Neil to Port Blair</td> <td>Rs. 1,800.00</td> <td>Rs. 50.00</td> <td>0</td> <td>15%</td> <td>Rs. 270.00</td>
			</tr>
		</table>
	</div>
</div>
<div class="container mt-3">
	<div class="row">
		<div class="col-12 col-lg-12">
		<h4>BOOKING INFORMATION </h4>
			<ul type="disc">
				<li class="text-justify">Passengers are requested to re-confirm their booking one day in advance.Contact Number: Tel: 03192-236677, 237788 M:+91-8001240006 (0900 hrs to 1700 hrs)</li>	
				<li class="text-justify">Deluxe and Royal Class tickets issued to people after 1800 hrs for the next day's departure will not be entitled to the snack box on board.</li>
				<li class="text-justify">Paid snacks are non-refundable if the tickets of Deluxe and Royal class have been cancelled after 1800 Hrs for the next day's departure.</li>
				<li class="text-justify">Please make sure the details are correct before booking your ticket.Correction of ‘Name’ is not permitted on the ticket once booked</li>
				<li class="text-justify">Tickets once rescheduled (with applicable rescheduling charges) will not be cancelled or refunded.</li>
				<li class="text-justify">Tickets are Non-Transferable and Non-Reroutable.</li>
				<li class="text-justify">Tickets are valid only till the date of travel prior to departure.</li>
				<li class="text-justify">Tickets for infants below 1 yrs of age are non-chargeable.</li>	
			</ul>
		<h4>BOARDING RULES</h4>
			<ul type="disc">
				<li class="text-justify">Passengers are not allowed to carry sharp articles like nail cutters, knives,explosives, inflammable goods, etc. in their handbags.</li>
				<li class="text-justify">Consuming LIQUOR & SMOKING is NOT ALLOWED onboard the vessel by LAW.</li>
				<li class="text-justify">Free Baggage Allowance is 25Kg as Registered Baggage.</li>
				<li class="text-justify">Pets and animals not allowed onboard the ferry.</li>
			</ul>	
		<h4>CHECK-IN-RULES</h4>
			<ul type="disc">
				<li class="text-justify">Report at the jetty an hour before departure.	</li>
				<li class="text-justify">A hard copy of the ticket is mandatory during check-in.	</li>	
				<li class="text-justify">Passengers should carry a PHOTO IDENTITY CARD at the time of Check-In.	</li>	
				<li class="text-justify">Check-in counter closes - 15 Mins Before Departure		</li>
				<li class="text-justify">Boarding Closes - 10 Mins Before Departure	</li>
				<li class="text-justify">The users also agree that it is their sole responsibility to ensure they are in
possession of all the valid documents such as identity proof, passport, visa, etc.
to undertake the travel with Ferries in Andaman. User agrees that Paradise
Andaman shall, in no way be held liable, in case of the travellers inability to
travel for not carrying valid travel documents.	</li>
			</ul>
		<h4 class="text-primary">ADDITIONAL CHARGES</h4>
			<ul type="disc">
				<li class="text-justify">PSF (Passenger Service Fee) of Rs 50 per person, per tickets, are applicable.	</li>	
				<li class="text-justify">Peak Season Supplement (From 1st Dec to 31st Jan every year) will be
charged Rs 100/- per person, per ticket, per sector, for all classes. (Not
applicable for infants and islanders)	</li>	
				<li class="text-justify">Extra copy of the ticket print out will be charged Rs 50/- if taken from the
Makruzz offices.
	</li>
			</ul>
		<h4 class="text-primary">LIABILITIES</h4>
			<ul type="disc">
				<li class="text-justify">Passengers will be responsible for their own belongings. Andaman Paradise
Holidays is not liable for any loss or damage caused to their belongings while on board.	</li>	
				<li class="text-justify">Cruise Operators reserves the right to cancel or change the published voyage
date and time for any official reason, in any manner or to any extent. We shall
bear no liability for any loss that passengers may suffer or any consequences
thereof, or in respect to any changes in schedule due to bad weather or
technical reasons. In this case, passengers can either claim full refund or can
reschedule their journey based on availability.	</li>	
				<li class="text-justify">The passenger hereby warrants and declares he/she, including any
accompanying children and/or babies does not suffer from any form of major
illness or ailments. The carrier shall not be responsible for any consequences of
whatsoever nature resulting from pre-carriage illness/ailments that may manifest
during carriage. The passenger undertakes to indemnify and hold the carrier
harmless from any such consequences.	</li>	
				<li class="text-justify">The ticket and the carriage of passenger hereunder shall be governed by Indian
law, and all disputes and claims (Including but not limited to claims arising out of
personal injury) and the carriage of passengers shall be referred to the
exclusive jurisdiction of the competent court in Port Blair, Andaman & Nicobar
Islands, India.</li>		
				<li class="text-justify">Andaman Paradise Holidays shall have no liability whatsoever for any injury or
illness arising or resulting from any cause not attributable to any act, neglect,
default on the part of the carrier and its crew members.	</li>		
			
			</ul>
		<p>By booking a ticket with Andaman Paradise Holidays, the passenger, hereby
confirms their acceptance of all the terms of service put forward by Paradise
Andaman against the use of their services by users.	</p>
		<h4>Frequently Asked Questions (FAQs)</h4>
			<ol type="1">
				<li><b>Where and when do I have to be at the harbour to catch the ferry before departure?</b>
					<ul type="disc">
						<li class="text-justify">Please note that the boarding point and timing information will be mentioned on
your cruise ticket. If you have already booked a ticket, you must reach the jetty 45
minutes before the actual departure for the ticket verification, security and luggage
checks. Please note that boarding closes 15 minutes prior to departure. In addition,
check with your ticket provider or Cruise customer care for any changes in the
scheduled timings.
</li>
					</ul>
				</li>
				<li><b>Can I upgrade my seats when onboard??</b>
					<ul type="disc">
						<li class="text-justify">If there is a vacancy, you may be upgraded based on the discretion of the management and with payment of nominal charges of upgradation.</li>
					</ul>
				</li>
				<li><b>How many bags am I allowed to carry onboard? How many kgs?</b>
					<ul type="disc">
						<li class="text-justify">There are certain restrictions on the weight of 15kgs luggage that you can carry with
you on the ferry. Heavy or large pieces of luggage are not allowed to be carried in
the passenger area. They will be put in the baggage hold and offloaded at the
destination. An additional charge of 100rs/kg will be charged in case of excess
luggage</li>
					</ul>
				</li>
				<li><b>What is the cancellation policy?</b>
					<ul type="disc">
						<li class="text-justify">
						If you wish to cancel your booking for any trip or entire PNR, then you need to login in our website with the PNR or directly call our reservation desk. Policy Charges are as follows:
						<ol type="1">
							<li>Cancellation before 48 Hrs Departure applicable charges [Taxable Amount + 25% of the Fare]</li>
							<li>Cancellation within 48-24 Hrs to Departure applicable charges [Taxable Amount + 50% of the Fare]</li>
							<li>Cancellation less than 24 Hrs to Departure – No Refund</li>
						</ol>
						</li>
					</ul>
				</li>
				<li><b>What things are NOT ALLOWED to be carried on the ship?</b>
					<ul type="disc">
						<li class="text-justify">The following are examples of items that guests are not allowed to bring on-board.
These and other similar items will be confiscated upon being found. Illegal drugs,
flammable liquids, explosives and dangerous chemicals, firearms & ammunition,
including realistic replicas, sharp objects, including knives and scissors, candles &
incense sticks (agarbattis), self-defence gear including handcuffs, pepper spray, night
sticks, flammable liquids and explosives, including lighter fluid and fireworks, HAM
radios, electrical extension cords and multi pin plugs
</li>
					</ul>
				</li>
				<li><b>How can I cancel my ticket?</b>
					<ul type="disc">
						<li class="text-justify">For any cancellations, drop a mail at <a href="mailto:contact@makcruise.com">contact@makcruise.com</a></li>
					</ul>
				</li>
				<li><b>Is there any Wi-Fi availability?</b>
					<ul type="disc">
						<li class="text-justify">There is no Wi-Fi. Internet access is as per availability of mobile network.</li>
					</ul>
				</li>
				<li><b>Are pregnant women and infants allowed on the ship?</b>
					<ul type="disc">
						<li class="text-justify">Women are allowed during pregnancy (based on the instructions given by their
doctors). Infants are allowed onboard but must be accompanied by an adult.</li>
					</ul>
				</li>
				<li><b>How will I know about the Safety and Evacuation Procedures?</b>
					<ul type="disc">
						<li class="text-justify">On boarding, you will be shown a video on Safety and Evacuation Procedures which
is mandatory. Also there are safety instructions at all points in the ship.</li>
					</ul>
				</li>
				<li><b>Are pets allowed onboard?</b>
					<ul type="disc">
						<li class="text-justify">Pets are not allowed on the ship.</li>
					</ul>
				</li>				
				<li><b>How is fire safety taken care of in the ship?</b>
					<ul type="disc">
						<li class="text-justify">Regulations regarding Fire Safety are strictly followed. Escape routes, fire protections
systems are in place. You will be given all the relevant information after boarding.
The crew is trained for procedures to be followed in case of emergency.</li>
					</ul>
				</li>
				<li><b>Are there enough life jackets in case of emergency?</b>
					<ul type="disc">
						<li class="text-justify">Yes. Our cruise is equipped with sufficient number of life jackets with instructions on
how to wear them. In case of emergency, the crew will also assist you in locating and
wearing the life jackets.
</li>
					</ul>
				</li>
				<li><b>Is help available onboard for medical emergency?</b>
					<ul type="disc">
						<li class="text-justify">All the crew onboard is trained for medical emergencies. However, you are advised to
carry your own medicines, take proper precautions and adhere to the safety norms
onboard.</li>
					</ul>
				</li>				
				<li><b>Is first aid available on the ship?</b>
					<ul type="disc">
						<li class="text-justify">Yes. The crew is trained in first aid. Kits are always available on each deck, reception
area and at the medical room.</li>
					</ul>
				</li>
				<li><b>Is smoking allowed on the ship?</b>
					<ul type="disc">
						<li class="text-justify">Smoking is strictly prohibited inside the cruise or any other areas inside the harbour.
Non adherence can even lead to prosecution.</li>
					</ul>
				</li>
				<li><b>What meals are included in my ticket?</b>
					<ul type="disc">
						<li class="text-justify">Yes, food is available onboard but for complimentary food packages, please check
with us before booking your tickets. Contact our customer support team in case of
any issue or doubt.</li>
					</ul>
				</li>
				<li><b>Can I bring some food and water with me?</b>
					<ul type="disc">
						<li class="text-justify">Outside food or drinks, including water, can be carried along. Dry snacks, finger
foods can be purchased in the cruise at snack kiosk.</li>
					</ul>
				</li>				
				<li><b>Can I Charter cruise?</b>
					<ul type="disc">
						<li class="text-justify">Yes, a prior booking has to be made. For further details contact our customer
support team in case of any issue or doubt.</li>
					</ul>
				</li>
				<li><b>Is there a CCTV camera on the ship?</b>
					<ul type="disc">
						<li class="text-justify">For everyone’s safety on-board, CCTV cameras are fitted on board the vessel and
surveillance is on 24/7.</li>
					</ul>
				</li>
				<li><b>Can I get a copy of my ticket if I lose it?</b>
					<ul type="disc">
						<li class="text-justify">If you lose your tickets, please try and inform cruise operators or your travel agent a
day in advance before the scheduled date of travelling or email us with the details of
the lost ticket. You can contact us using our helpline numbers +918001500075 for
any further assistance.
</li>
					</ul>
				</li>
				<li><b>What are the ferry timings?</b>
					<ul type="disc">
						<li class="text-justify">Please check the ferry schedule section on the website for more info.</li>
					</ul>
				</li>	
				<li><b>Will I have access to my luggage when onboard?</b>
					<ul type="disc">
						<li class="text-justify">No. Just like airlines, your luggage will be checked-in before embarking and given to
you while disembarking. However, you can carry your hand bag with you (1 per
person)</li>
					</ul>
				</li>
				<li><b>Can we carry alcohol to other Islands?</b>
					<ul type="disc">
						<li class="text-justify">Yes it is allowed but only one sealed bottle per person along with the purchasing
receipt. A large quantity will be confiscated by the CISF.</li>
					</ul>
				</li>
				<li><b>How can I verify my ticket's authenticity?</b>
					<ul type="disc">
						<li class="text-justify">You can verify it by visiting the official websites of Makruzz
(<a href="https://www.makruzz.com/print_ticket">https://www.makruzz.com/print_ticket</a>) and entering the PNR.</li>
					</ul>
				</li>
				<li><b>What additional benefits does Andaman Paradise Holidays offer when
booking tickets, aside from the attractive discounts?</b>
					<ul type="disc">
						<li class="text-justify">Both Makruzz and ITT Majestic provide excellent service, both during your journey
and in the lead-up to your travel date. When you book through Andaman Paradise
Holidays, you will get an extra benefits in water sports activities and car bookings at
Port Blair, Havelock, & Neil Islands apart from your bookings in the Andaman Islands,
if you need any assistants at other states we provide you, like Hotels, Cab services.</li>
						
						<li class="text-justify"><b> If you have any further questions or need additional information, please don't
hesitate to contact us via phone or WhatsApp at <a href="tel:+917695061377">7695061377</a> / <a href="tel:+917695061399">7695061399</a>.
We're here to assist you.</b></li>
					</ul>
				</li>	
			</ol>
		</div>
	</div>
</div>

		<?php } } ?>
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
<div class="container-fluid my-3">
	<div class="row">
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

<section class="container pasdetails my-3">
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
	

</body>
</html>