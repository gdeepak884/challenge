<?php
session_start();
if(empty($_SESSION['username']) and empty($_SESSION['number'])){
        header("Location: index.php");
        exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recovery Process</title>
        <meta name=”viewport” content=”width=device-width, initial-scale=1″>
	<link rel="stylesheet" href="style.css">
<style>
img.center {
    display: block;
    margin: 0 auto;
}
</style>
</head>
<body>
<h1 style="font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol; color: #333333; font-size: 24px;
    font-weight: 300;
    letter-spacing: -.5px; text-align: center; line-height: 1.5;">Reset your password</h1>
<br/>
	<div class="login-form" style="text-align: center;">
        <div class="login-page">
	<div class="form">
		<p style="color: white;">
		        Your username: <b style="color: white;"><?php echo $_SESSION['username'];?></b><br/>
			Your Temporary Password:  <b style="color: white;"><?php echo $_SESSION['update_password'];?></b>
		</p>
  <br/>
			<a style="background-color: black;
    width: 30%; text-align: center; color: #eff3f6; font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol; line-height: 23px;
" href="index.php">Return to login</a>   
</div>
       </div>
	</div>
</body>
</html>
<?php
session_unset();
session_destroy();
?>