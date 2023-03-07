<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="./projekt.css">
    <link rel="stylesheet" href="./kontakt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    
    </head>
<body>
  
<?php include_once './component/navbar.php' ?>

<section>
  <div class="contact-container">
		<div class="contact-info">
			<div class="contact-icon">
            <div class="icon"><i class="fa fa-phone"></i></div>
			</div>
			<div class="contact-details">
				<h3>Położenie biblioteki</h3>
				<p>ul. górna 10<br>
				12-322 Kolonia</p>
			</div>
		</div>
		
		<div class="contact-info">
			<div class="contact-icon">
            <div class="icon"><i class="fa fa-envelope"></i></div>
			</div>
			<div class="contact-details">
				<h3>Numer telefonu</h3>
				<p>+48 123 456 789</p>
			</div>
		</div>
		
		<div class="contact-info">
			<div class="contact-icon">
            <div class="icon"><i class="fa fa-map"></i></div>
			</div>
			<div class="contact-details">
				<h3>Adres email</h3>
                <a href="mailto:biblioteka@example.com">
				<p>kontakt@biblioteka.pl</p>
</a>
        
			</div>
		</div>
	</div>

	<style>
	
	</style>
	
	<div class="formularz_tekst">
	<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($name) && !empty($message)) {
      $date = date('Y-m-d H:i:s');
      $sql = "INSERT INTO panelkontaktowy (name, message, date) VALUES ('$name', '$message', '$date')";

      if ($conn->query($sql) === TRUE) {
        echo "<h1>Wiadomość została wysłana.</h1>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    } else {
      echo 'Proszę wypełnić wszystkie pola.';
    }
  }



?>
</div>
<script>
		
		function countChars() {
			var maxLength = 150;
			var currentLength = document.getElementById("message").value.length;
			var charsLeft = maxLength - currentLength;

			document.getElementById("chars-left").innerHTML = charsLeft;
		}
	</script>

</div>
<div class="formularz">
	<h1>Panel kontaktowy</h1>
	<form method="POST">
	<label for="name">Imię:</label>
		<input type="text" id="name" name="name" required>

		<label for="message">Wiadomość:</label>
		<textarea id="message" name="message" maxlength="150" onkeyup="countChars()" required></textarea>
		<div id="char-count">Pozostało <span id="chars-left">150</span> znaków</div>

		<input type="submit" value="Wyślij">
	</form>
	</form>
	</div>
<?php include_once './component/ikonalogowanie.php' ?>
</body>
</html>