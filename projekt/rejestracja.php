<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja Biblioteka</title>
    <link rel="stylesheet" href="./projekt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <style>
	body {
    background-color: rgb(166, 162, 162);
  }
  .register-panel-tekst h2{
    margin-bottom:20px;
    width:100%;
    text-align: center;
   position:absolute;
   }
  .register-panel {
    margin: auto;
    margin-top: 5%;
    width: 30%;
    background-color: rgb(206, 202, 202);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
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
    color: rgb(72, 71, 71);
    
  }
  .material-icons {
    margin-right:95%;
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 24px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -webkit-font-smoothing: antialiased;
    
  }
  .material-icons a{
    text-decoration: none;
    color: rgb(71, 68, 68);
  }
  
  .material-icons:hover {
    cursor: pointer;
    color: #666;
  }
	</style>
<?php include_once './component/navbar.php' ?>

	<?php include_once './component/sqlconnect.php'?>
  
	<div class="register-panel-tekst">




	
<?php
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