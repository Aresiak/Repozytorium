<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="./projekt.css">
    <link rel="stylesheet" href="./loginpanel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
  
<?php include_once './component/navbar.php' ?>
<div class="login-panel">
        <form method="post">
		<h2>Panel logowania</h2>
		
			<label for="email">Email:</label><br>
			<input type="text" id="email" name="email"><br>
			<label for="password">Hasło:</label><br>
			<input type="password" id="password" name="passwod"><br>
			<input type="submit" value="Zaloguj się">
			<a href="loginpanel.php">
</a>
		</form>
		<p>Nie masz konta? <a href="rejestracja.php">Zarejestruj się</a></p>
	</div>
	<?php include_once './component/sqlconnect.php' ?>
<?php


?>


</body>
</html>