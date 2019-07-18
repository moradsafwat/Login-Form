<?php
	session_start();
	$pinCode = $_SESSION['pinCode'];
	//echo $pinCode;
	if(!isset($_SESSION['pinCode']))
	{
		?> 
			<script>
				window.location = 'index.php';
			</script>
		<?php 
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pin Code</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/utill.css">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

				<!-- Start Form -->

				<form class="login100-form validate-form" method="post" id="verify">
					<span class="login100-form-title p-b-49">
						MyO<sub>2</sub>
					</span>
												
					<div class="text-left p-t-8 p-b-31 alert alert-danger hidden" id="err" role="alert">
					</div>
	
					<div class="text-center p-t-8 p-b-5">
						<p class="label-center2">Set a 4-digit PIN to keep your details safe :</p>
					</div>		

					<div class="validate-input m-b-23">
						<input class="input-pin" type="text" id="pin1" maxlength="1" placeholder="*"  autocomplete="off" required>

						<input class="input-pin" type="text" id="pin2" maxlength="1" placeholder="*" autocomplete="off"
						required>

						<input class="input-pin" type="text" id="pin3" maxlength="1" placeholder="*" autocomplete="off"
						required>

						<input class="input-pin" type="text" id="pin4" maxlength="1" placeholder="*" autocomplete="off"required>

					</div>					

					<div class="text-right p-t-8 p-b-31"> </div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<input class="input-submit" type="submit" name="submit" 
							value="Submit">
						</div>
					</div>

				</form>
				<!-- End Form -->
				<div class="text-center p-t-8 p-b-31"> 
					<p class="buttom1">Privacy policy</p>
				</div>

				<div class="div-buttom">
					<div class="buttom-icon">
						<i class="fa fa-users icons"></i>
						<p class="title">O2 Community</p>
						<div class="line"></div>
					</div>

					<div class="buttom-icon">
						<i class="fa fa-comment-o icons" aria-hidden="true"></i>
						<p class="title">O2 Gurus</p>
						<div class="line"></div>
					</div>

					<div class="buttom-icon">
						<i class="icons">O<sub>2</sub></i>
						<p class="title">More from O2</p>

					</div>
				</div>

			</div>
		</div>
	</div>

	

	<div id="dropDownSelect1"></div>
	
	<script src="js/jquery.min.js"></script>
	<script>
		$(document).ready(function () {
			$("#verify").on('submit', function(event){
				event.preventDefault();
				if('<?= $pinCode ?>' == ($("#pin1").val() + '' + $("#pin2").val() + '' +$("#pin3").val() + '' + $("#pin4").val()))
					window.location = 'msgSucsses.php';
				else{
					$("#err").removeClass("hidden");
					$("#err").html("Oops Your PIN Code Is Not Valied ! <br> Please Try Again ");
				}
			})
		});
	</script>
</body>
</html>