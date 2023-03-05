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
  
    <header>
    <nav class="navbar">
  <div class="logo">
    <a href="#">Książki u Boguśki</a>
  </div>
  <div class="search-box">
  <form action="wyniki_wyszukiwania.php" method="post">
  <input type="search" name="search" placeholder="Wpisz autora...">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
  </div>
  <ul class="nav-links">
  <li><a href="projekt.php">Strona Główna</a></li>
    <li><a href="#">O nas</a></li>
    <li><a href="kontakt.php">Kontakt</a></li>
  </ul>
</nav>
  </div>
</header>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$login = $_POST["login"];
	$password = $_POST["password"];
	$email = $_POST["email"];

	
	if (!empty($login) && !empty($password) && !empty($email)) {
		
		$sql = "SELECT * FROM loginy WHERE login='$login' OR email='$email'";
		$result = $conn->query($sql);

		if ($result->num_rows == 0) {
			
			$sql = "INSERT INTO loginy (login, password, email)
			VALUES ('$login', '$password', '$email')";

			if ($conn->query($sql) === TRUE) {
				
				header("Location: loginpanel.php");
    exit();

				echo "Rejestracja przebiegła pomyślnie. Przekierowanie na stronę logowania...";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		} else {
			echo "Login lub email już istnieją w bazie.";
		}
	} else {
		echo "Wypełnij wszystkie pola.";
	}
}

?>

	<div class="register-panel">
		<form action="loginpanel.php" method="post">
			<h2>Rejestracja</h2>
			<label for="login">Login:</label>
			<input type="text" name="login" required>
			<label for="password">Hasło:</label>
			<input type="password" name="password" required>
			<label for="email">Email:</label>
			<input type="email" name="email" required>
			<a href="loginpanel.php"><i class="material-icons">arrow_back</i></a><input type="submit" value="Zarejestruj">
		</form>
	</div>
        
</body>
</html>