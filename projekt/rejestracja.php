<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="./rejestracja.css">
    <link rel="stylesheet" href="./projekt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  
<?php include_once './component/navbar.php' ?>

	<?php include_once './component/sqlconnect.php'?>
  
	<div class="register-panel-tekst">




	
<?php
session_start();
if(isset($_COOKIE["user_id"])) {
}
if (!empty($_POST["login"]) && !empty($_POST["password"]) && !empty($_POST["email"])) {
	$login = $_POST["login"];
	$password = $_POST["password"];
	$email = $_POST["email"]; 
	$role="user";
	$sql = "SELECT * FROM loginy WHERE login='$login' OR email='$email'";

	$result = $conn->query($sql);

	if ($result->num_rows == 0) {
		$user_id = uniqid('user'); 
		$sql = "INSERT INTO loginy (login, password, email, user_id, role)
	 			VALUES ('$login', '$password', '$email', '$user_id', '$role')";

	 	if ($conn->query($sql) === TRUE) {
			setcookie("user_id", $login, time()+36000, "/");
			echo "Rejestracja przebiegła pomyślnie. Przekierowanie na stronę logowania...";
			header("Location: loginpanel.php");
			sleep(2);
		exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	} else {
		echo "<h2>Login lub email już istnieją w bazie.</h2>";
	}
} else {
	echo "<h2>Wypełnij wszystkie pola.</h2>";
}
?>

</div>
<div class="register-panel">
<a href="loginpanel.php"><i class="material-icons">arrow_back</i></a>
	<form method="post">
		<h2>Rejestracja</h2>
		<label for="login">Login:</label>
		<input type="text" name="login">
		<label for="password">Hasło:</label>
		<input type="password" name="password">
		<label for="email">Email:</label>
		<input type="email" name="email">
		<a href="loginpanel.php"></a>
		<input type="submit" value="Zarejestruj" name="submit">
	</form>
</div>
        
</body>
</html>