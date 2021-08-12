<?php  include('app_logic.php'); ?>
<!DOCTYPE html>
<head>

	<meta charset="UTF-8">

        <title>Signup</title>

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

<h1 style="font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol; color: #333333; font-size: 24px;

    font-weight: 300;

    letter-spacing: -.5px; text-align: center; line-height: 1.5;">Signup</h1>

<br/>

<div class="login-page">

	<div class="form">
		<form class="login-form" method="POST">
                <?php include('messages.php'); ?>
		<input type="text" placeholder="Username" name="user_id"/>
		<input type="password" placeholder="Password" name="password"/>
		<input type="text" placeholder="Phone number" name="number"/>
		<button name="signup_user" class="login-btn">Signup</button>
                <p class="message">Already have account? <a href="./">Login now</a></p>
                 </form>
		</div>
	</div>
</body>

</html>