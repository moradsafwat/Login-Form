<?php
	//$pinCode = rand(1000,9999);
	session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
{
	// assign variables
	$user  = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

	// Random pin Code
	$pinCode = rand(1000,9999);
	// session_start();
	$_SESSION['pinCode'] = $pinCode;
	$_SESSION['username'] = $user;
	$_SESSION['email'] = $email;

	// This is array for errors
	$formError = array();

	if(strlen($user) <= 4 ){
		$formError[] = 'UserName Must Be Larger Than <strong> 4 </strong> Characters';
	}

	//Send into email Pin code if no errors [ mail(to, subject, message, headers, parameters) ]
   
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";
   	//$mail     = 'eng.meladhanna1010@gmail.com';
	
	if(empty($formError)){
		if(!mail($_SESSION['email'], 'LOGIN FORM TEST', ' Your PIN Code Is : '. $pinCode, $headers)){
			$formError[] = "Error in email, type in a correct email and try again!";
		}else{?>
			<script>
				window.location = 'pinCode.php';
			</script> <?php
		}
	};
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
						<p class="label-center"> Sign in to review your account </p>
					</div>		

					<div class="validate-input m-b-23">
						<input class="input-form" type="text" name="username" placeholder="Type your username" value="<?php if(isset($user)){echo $user ;} ?>" autocomplete="off" required >
					</div>

					<div class="validate-input m-b-23">
						<input class="input-form" type="email" name="email" placeholder="Enter Your Email"
						value="<?php if(isset($email)){echo $email ;} ?>" required>
					</div>
					
					<div class="text-right p-t-8 p-b-31"> </div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<input class="input-submit" type="submit" name="submit" 
							value="Sign in" required>
						</div>
					</div>
				</form>
				<!-- End Form -->

				<div class="text-center p-t-8 p-b-31"> 
					<p class="buttom1">Forgotten log in details</p>
					<p class="buttom">On Pay As You Go and registered yet ?</p>
					<p class="buttom1">Register now</p>
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
	
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>