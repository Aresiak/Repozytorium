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

<?php include_once './component/sqlconnect.php'


?>
<div class="login-panel">
		<h2>Panel logowania</h2>
		<form action="logowanie.php" method="post">
			<label for="login">Login:</label><br>
			<input type="text" id="login" name="login" required><br>
			<label for="haslo">Hasło:</label><br>
			<input type="password" id="haslo" name="haslo" required><br>
			<input type="submit" value="Zaloguj się">
		</form>
		<p>Nie masz konta? <a href="rejestracja.php">Zarejestruj się</a></p>
	</div>

</body>
</html>