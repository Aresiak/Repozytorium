<!DOCTYPE html>
<html lang="en">
	
<head>
<?php include_once './component/sqlconnect.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie Biblioteka</title>
    <link rel="stylesheet" href="./projekt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
  <style>
	body {
    background-color: rgb(166, 162, 162);
  }
  
  .login-panel {
    margin: auto;
    margin-top: 10%;
    width: 30%;
    background-color: rgb(206, 202, 202);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
    text-align: center;
  }
  .login-panel h2{
    margin-bottom:20px;
    text-align: center;
  }
  input[type="text"], input[type="password"], input[type="email"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }
  
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }
  
  a {
    text-decoration: none;
    color: #4CAF50;
  }
	</style>
<?php include_once './component/navbar.php' ?>
<?php

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
	Nie masz konta?
	<a href="rejestracja.php"> Zarejestruj się.</a>
</div>



</body>
</html>