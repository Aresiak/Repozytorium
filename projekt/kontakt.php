<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once './component/sqlconnect.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Kontaktowy</title>
    <link rel="stylesheet" href="./projekt.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    
    </head>
<body>
  <style>
.contact-container {
	display: flex;
	flex-wrap: wrap;
	margin: 50px;
	justify-content: center;
	justify-items: center;
	align-content: center;
}

.contact-info {
	flex: 1 1 300px;
	margin-right: 20px;
	margin-bottom: 20px;
	background-color: rgb(166, 162, 162);
	padding: 10px;
	box-shadow: 0 0 20px #4a4242;
	
}

.contact-icon {
	display: flex;
	justify-content: center;
	align-items: center;
	margin-bottom: 10px;
	
}

.contact-icon img {
	width: 50px;
	height: 50px;
}

.contact-details h3 {
	font-size: 20px;
	margin: 0 0 10px 0;
}

.contact-details p {
	font-size: 16px;
	margin:0 ;
}
/*formularz kontaktowy*/
* {
	box-sizing: border-box;
}

.formularz{
	margin: auto;
    margin-top: 0%;
    width: 30%;
    background-color: rgb(206, 202, 202);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
    text-align: center;;
	
}
	.formularz label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
	    .formularz	textarea {
			resize: none;
		}
		.formularz char-counter {
			margin-top: 5px;
			font-style: italic;
		}
		.formularz error {
			color: red;
			font-weight: bold;
		}
		.formularz_tekst h1{
			margin-bottom:20px;
			text-align: center;
		   
		}
		input[type="text"], input[type="message"] {
			width: 50%;
			padding: 10px;
			margin: 10px 0;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
			text-align: center;
		}
	</style>
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
	
	<div class="formularz_tekst">
	<?php 


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