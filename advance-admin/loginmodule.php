 <html>
<head>
	<meta charset="utf-8">
		<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
	 <div class="main">
		<div class="login-form">
			<h1>Member Login</h1>
					<div class="head">
						<img src="main/login.png" alt=""/>
					</div>
				<form action="conn/login_check.php" method="post">
						<input type="Button" class="close" value="X" onclick="document.getElementById('main').style.visibility='hidden'">
						<input type="text" class="text" name="regnum" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" >
						<input type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
						<div class="submit">
							<input type="submit" value="LOGIN" >
					</div>	
					<p><a href="#">Forgot Password ?</a></p>
					<input type="button" Value="Join Us" name="butn" class="sign" >
				</form>
				
			</div>
		</div>
</body>
