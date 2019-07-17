<?php
	$pinCode = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	$pinRand = array_rand($pinCode, 4);
	$key1 = $pinCode[$pinRand[0]];
	$key2 = $pinCode[$pinRand[1]];
	$key3 = $pinCode[$pinRand[2]];
	$key4 = $pinCode[$pinRand[3]];

	$codee =  $key1 . $key2 . $key3 . $key4 . '<br>';
	echo $codee;
	echo sha1($key1 . $key2 . $key3 . $key4);
	
// Check if user coming from a request method

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
{
	// assign variables
	$user  = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

	//array random for pin code 
	





	// This is array for errors
	$formError = array();

	if(strlen($user) <= 4 ){
		$formError[] = 'UserName Must Be Larger Than <strong> 4 </strong> Characters';
	}

	//Send into email Pin code if no errors [ mail(to, subject, message, headers, parameters) ]
   
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";
	
	if(empty($formError)){
		/*if(!mail('moradsafwat666@gmail.com', 'LOGIN FORM TEST', 'welcome in my test login', $headers)){
			$formError[] = "Error in email, type in a correct email and try again!";
		}*/?>
		<script>
		  window.location = 'pinCode.php?code=<?= $codee;?>&key1=<?= sha1($key1);?>&key2=<?= sha1($key2);?>&key3=<?= sha1($key3);?>&key4=<?= sha1($key4);?>';
     	</script> <?php
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

				<div>
					<div class="buttom-icon">
						<i class="fa fa-users icons"></i>
						<div class="line"></div>
					</div>

					<div class="buttom-icon">
						<i class="fa fa-comment-o icons" aria-hidden="true"></i>
						<div class="line"></div>
					</div>

					<div class="buttom-icon">
						<i class="fa fa-comment-o icons" aria-hidden="true"></i>
					</div>
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