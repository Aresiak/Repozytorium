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
<?php include_once './component/sqlconnect.php' ?>
<?php
session_start();
if(isset($_COOKIE["user_id"])) {
	echo"<h2>Jesteś już zalogowany</h2>";
}
if (!empty($_POST["email"]) && !empty($_POST["password"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];
	$sql = "SELECT * FROM loginy WHERE email='$email' AND password='$password'";

	$result = $conn->query($sql);

	if ($result->num_rows == 1) {
		$row = $result->fetch_assoc();
		$_SESSION["user_id"] = $row['user_id'];
		setcookie("user_id", $row['user_id'], time()+36000, "/");
		header("Location: program.php"); 
		exit();
	} else {
		echo "<h2>Nieprawidłowy login lub hasło.</h2>";
	}
}
?>

</div>
<div class="login-panel">
	<form method="post">
		<h2>Logowanie</h2>
		<label for="email">Email:</label>
		<input type="text" name="Email">
		<label for="password">Hasło:</label>
		<input type="password" name="password">
		<input type="submit" value="Zaloguj" name="submit">
	</form>
	<a href="rejestracja.php">Nie masz konta? Zarejestruj się.</a>
</div>



</body>
</html>