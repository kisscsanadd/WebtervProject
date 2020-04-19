<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Bejelentkezés</title>
	<link rel="stylesheet" type="text/css" href="../css/mainStyle.css" />
	<link rel="stylesheet" type="text/css" href="../css/login-reg-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/printStyle.css" />
	<link href="../pictures/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
	<header>
	</header>
	
    <nav class="nav">
        <ul>
			<li><a href="main.php">Főoldal</a></li>
			<li><a href="registration.php">Regisztráció</a></li>
			<li class="current"><a href="#">Bejelentkezés</a></li>
			<li class="about"><a href="about.php">Rólunk</a></li>
			<li class="productsWidth">
				<a href="#">Termékek</a>
				<ul class="productsWidth">
					<li><a href="protein.php">Fehérjék</a></li>
					<li><a href="vitamin.php">Vitaminok</a></li>
				</ul>
			</li>
			<li class="about"><a href="contact.php">Kapcsolat</a></li>
			<li><a href="bmi.php">BMI</a></li>
			<li><a href="workout.php">Edzésterv</a></li>
		</ul>
    </nav>
	
	<main>
		<h2>Bejelentkezés</h2>

		<form action="login.php" method="post">
			<div id="imgcontainer">
				<img src="../pictures/loginAvatar.jpg" alt="Avatar" id="avatar">
			</div>

			<div class="logRegFooterContainer">
				<label for="username"><b>Felhasználónév</b></label>
				<input type="text" placeholder="Add meg a felhasználóneved" id="username" required>

				<label for="pw"><b>Jelszó</b></label>
				<input type="password" placeholder="Add meg a jelszavad" id="pw" required>

				<button type="submit">Bejelentkezés</button>
				<label>
					<input type="checkbox" checked="checked" name="remember"> Jegyezz meg
				</label>
			</div>

			<div class="logRegFooterContainer" style="background-color:#b0dffa">
				<button onclick="location.href = 'main.php';" type="button" id="cancelbtn">Vissza</button>
				<span><a id="forgetpw" href="#">Elfelejtetted a jelszavad?</a></span>
			</div>
		</form>
	</main>

	<footer>
		<label id="running"><span>Ez egy táplálékkiegészítőket áruló webshop. 
		Készítette: Kiss Csanád & Szirbik Péter</span>
		</label>
	</footer>
</body>
</html>