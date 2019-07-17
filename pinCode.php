<?php
	if(isset($_GET['code']))
	{
		//check if url upload This values 
		$k1 = $_GET['key1'];
		$k2 = $_GET['key2'];
		$k3 = $_GET['key3'];
		$k4 = $_GET['key4'];

		if(isset($_POST['submit']))
		{
			$pin1 = sha1($_POST['pin1']);
			$pin2 = sha1($_POST['pin2']);
			$pin3 = sha1($_POST['pin3']);
			$pin4 = sha1($_POST['pin4']);

			$formError = array();
			$message = array();

			if($k1 == $pin1 && $k2 == $pin2 && $k3 == $pin3 && $k4 == $pin4)
			{?> 
				<script>
		  			window.location = 'msgSucsses.php';
     			</script>
			<?php
			}else{
				$formError[] = "Oops Your PIN Code Is Not Valied ! <br> Please Try Again ";
			}		
		};   	

	};
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

				<form class="login100-form validate-form" 
					action="<?php echo $_SERVER['PHP_SELF'] ?>"
					method="post">
					<span class="login100-form-title p-b-49">
						MyO<sub>2</sub>
					</span>							
					<?php if(isset($formError)){
						foreach ($formError as $error){ ?>
						<div class="text-left p-t-8 p-b-31 alert alert-danger" role="alert">
								<?php echo $error . '<br>'; ?>
						</div>
					<?php } }; ?>
	
					<div class="text-center p-t-8 p-b-5">
						<p class="label-center2">Set a 4-digit PIN to keep your details safe :</p>
					</div>		

					<div class="validate-input m-b-23">
						<input class="input-pin" type="text" name="pin1" placeholder="*" autocomplete="off" required>

						<input class="input-pin" type="text" name="pin2" placeholder="*" autocomplete="off"
						required>

						<input class="input-pin" type="text" name="pin3" placeholder="*" autocomplete="off"
						required>

						<input class="input-pin" type="text" name="pin4" placeholder="*" autocomplete="off"required>

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
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>