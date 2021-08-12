<?php  include('app_logic.php'); ?>
<?php
session_start();
if(!empty($_SESSION['username'] && $_SESSION['password'])){
          header("Location: ../index.php");
          exit;
}
?>
<!DOCTYPE html>
<head>

	<meta charset="UTF-8">

        <title>Login</title>

        <meta name=”viewport” content=”width=device-width, initial-scale=1″>

	<link rel="stylesheet" href="style.css">
<style>

img.center {

    display: block;

    margin: 0 auto;

}

a {

font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;

}

</style>

</head>

<body>

<div class="login-form" action="index.php" method="POST">
<h1 style="font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol; color: #333333; font-size: 24px;

    font-weight: 300;

    letter-spacing: -.5px; text-align: center; line-height: 1.5;">Signin</h1>

<br/>

<div class="login-page">

	<div class="form">

		<form class="register-form" method="POST">

                        <?php include('messages.php'); ?>

			<input type="text" placeholder="Username" name="username"/>
			<input type="text" placeholder="Phone number" name="number"/>

			<button name="reset-password" class="login-btn">Next</button>

			<p class="message">Already Reseted?&nbsp;&nbsp;<a href="#">Login</a></p>

		</form>

		<form class="login-form" method="POST">

                <?php include('messages.php'); ?>

		<input type="text" placeholder="Username" name="user_id"/>

		<input type="password" placeholder="Password" name="password"/>
		<input type="checkbox" name="remember" id="remember"/>
		<label for="remember-me" style="color: #fff" >Remember me</label>
		<button name="login_user" class="login-btn">Login</button>
                <p class="message"><a href="#">Find my account</a></p>
                <p class="signup_message">Still not registered? <a href="signup.php">Signup now</a></p>

                 </form>

         </form>

		</div>

	</div>



		<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>

		<script>

			$('.message a').click(function(){

			$('form').animate({height: "toggle", opacity: "toggle"}, "slow");

		});

		</script>

</body>

</html>