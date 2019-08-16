<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width",initial-scale=1>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <title>library management system</title>
	 <link rel="stylesheet" type="text/css" href="../css/index.css">
	 <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php
	$usernameerr=$passworderr="";
	$password=$username="";
	$_POST["username"]="Joshua@gmail.com";
	$_POST["password"]="desire89";
	if ($_POST["username"]!="Joshua") {
		$usernameerr= "wrong username";
	}
	else
		{
			$username=$_POST["username"];
		}
	if ($_POST["password"]!="desire89") {
		echo "the password is incorrect";
	}
	else
		{
			$password=$_POST["password"];
		}
	?>
	<center><div class="header">
		<ul>
			<li><a href="../index.html">HOME</a></li>
			<li><a href="../register.html">Register</a></li>
			<li><a href="../user.html">Userlog in</a></li>
			<li><a href="admin.php">Admin</a></li>	  
		</ul>
	</div></center>
	<form action="../bavailable.html" method="post" name="RegForm" onsubmit="return valform()">
		<div class="form-group">
			<h1>LOG IN</h1>
			<label for="Username">username</label>
			<input type="Email" id="Username" required="True" class="form-control" placeholder="username" name="username">
			<span><?php echo $usernameerr?></span><br><br>
			<label for="password">password</label>
			<input type="password" required="True" class="form-control" id="password" placeholder="enter password" minlength=8>	
		</div>
		<div class="form-group">
			<label class="form-check-label"><input type="checkbox">Remember me</label>
		</div>
		<button class="submit" class="btn btn-primary">sign in</button>
	</form>
	<footer class="page-footer font-small blue">
	<div class="footer-copyright text-center py-3">© 2019 Copyright: bramtechs.com
  </div>
</footer>

</body>
</html>