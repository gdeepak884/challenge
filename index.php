<?php
session_start();
if(empty($_SESSION['username'] && $_SESSION['password'])){
          header("Location: login/index.php");
          exit;
}
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">

        <title>Welcome</title>

        <meta name=”viewport” content=”width=device-width, initial-scale=1″>

	<link rel="stylesheet" href="./login/style.css">
<style>
.content {
text-align: center;
font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;

}
.logout {
margin: 49px;
padding-top: 0px;
text-align: right;
font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;

}

</style>

</head>

<body>

<h1 style="font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol; color: #333333; font-size: 24px;

    font-weight: 300;

    letter-spacing: -.5px; text-align: center; line-height: 1.5;">Welcome</h1>
    
    <p class="content"><i class="fa fa-user"></i> Hello, <?=$_SESSION['username']?></p>
    <p class="logout"><a href="login/logout.php"><i class="fa fa-sign-out"></i> Logout</a></p>
</body>
</html>