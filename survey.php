<?php
session_start();
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- To be removed CSS File -->
    <!-- Custom styles for this template-->
    <link href="../../../../hostels/hostel/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../../hostels/hostel/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../hostels/hostel/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<title>NG-CDF Teso North</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="../assets/jquery/jquery-3.3.1.min.js"></script>
	<script>



	$(document).ready(function(){
		$("#details").hide();
		$("#myBtn").click(function(){
	    	$("#details").toggle(800)
	  });
	});
	</script>
</head>
<body style="background: #012">
	<div class="container">
		<div class="navbar fixed-top" style="background-color: #000;">
			<div class="section-title pt-2">
				<h2 class="text-success"><i class="fa fa-edit"></i> Public Forum</h2>
			    <p class="text-light">NG-CDF Teso North</p>
			</div>
		</div>
		<!-- Online Poll section -->
		<div class="" style="font-family: monospace; font-weight: bolder; margin: 80px auto;">
			<div class="row">
				<div class="col-md-12 mb-2 mt-2">
					<div class="card h-100 py-2 text-uppercase" style="border-left: 4px groove; border-radius:12px; whitesmoke; background: rgba(0, 0, 0, 0.9);">
						<div class="col-auto text-center">
							<center><label class="text-grey-800 text-primary font-weight-bold"  style="font-size:16px;">The Big Question: </label><br>
							<i class="fa text-center h1 font-weight-bold" style="color:white; font-size: 30px;	">Between Dam project and Sewage project, which project should be taken first?</i></center>
						</div>
						<div class="col-auto" style="font-size: 12px;">
							<center><p id="details" class="text-warning"><span class="text-danger">Dam Project:</span> Bla Bla Bla BlaBla BlaBla BlaBla BlaBla Bla <br>
							<span class="text-danger">Sewage Project: </span> kjnc cdsd cdscds cc dsccs cdsds </p>
							<button id="myBtn" class="btn btn-warning bg-transparent text-warning fa fa-eye">See Details</button></center>
						</div>
						<form action=" " method="POST">
						<div class="col-auto text-center p-2 text-info form-group" style="font-size: 18px">
							<input type="Radio" class="mb-2 mt-2" name="option1" value="Dam Project"> Dam Project <br>
							<span class="font-weight-bold text-danger">OR</span> <br>
							<input type="Radio" class="mb-2" name="option1" value="Fish Pond"> Sewage Project <br><hr>
							<a type="submit" href="results.php" name="vote" style="border-radius: 12px;" class="btn bg-transparent w-50 p-2 btn-primary text-primary">Submit</a>
						</div></form>
						<hr class="bg-dark">
						<div class="col-auto text-lowercase">
							<span class="text-light "><?php date('Y-m-d'); ?></span>
							<a class="float-right text-info">Need Help?</a>
						</div>
					</div>	
				</div>
				<!-- End of Online Poll Section -->

	</div>
	<?php include('btm_nav.php'); ?>
<?php 
if (isset($_POST['vote'])){
	$ans = $_POST['option1'];
	echo $ans;
} ?>
<script type="text/javascript" src="main.js"></script>
</body>
</html>