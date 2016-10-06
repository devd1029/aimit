<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div>
<div>
<h1 id="header">E-PATHSHALA</h1>
<form id="loginform" action="login_check.php" method="post" align="right">
		<input type="text" name="username" placeholder="USERNAME" id="username" /><br />
		<input type="password" name="password" id="password"  placeholder="PASSWORD" /><br />
        <label for="memorize">Remember</label><input type="checkbox" name="memorize" id="memorize" value="yes" />
        <div class="center">
	        <input type="submit" id="login" value="Login" /> <input type="button" id="signup" onclick="javascript:document.location='signup1.php';" value="Sign Up" />
        </div>
    </form>
</div>
<div>
<?php include"error1.php"; ?>
</div>

<div class="footer">
<?php
	include"footer.php";
?>
</div>
</div>

</body>
</html>