<html>
	<head>
		<!-- common settings -->
		<?php include_once('head.html'); ?>
		<!-- page specific settings -->
		<title>Este Frauen | Login</title>
		<link rel="stylesheet" type="text/css" href="css/login.css"/>
	</head>
	<body>
		<!-- header -->
		<?php include_once('header.html'); ?>
		<!-- content der Seite -->
		<div class="space"></div>
		<div class="content">
			<form name="login" method="post" action="home.php">
				<p>Username: <input type="text" name="username" onclick="" value="username"/></p>
				<p>Passwort:  <input type="password" name="password" value="password"/></p>
				<input type="submit" value="Anmelden"/>
				<input type="reset" value="Abbrechen"/><br/>
			</form>
		</div>
		<!-- footer -->
		<?php include_once('footer.html'); ?>
	</body>
</html>
