<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="./projekt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
  <div class="burger">
    <span>bogna</span>
    <span></span>
    <span></span>
  </div>
</nav>
  </div>
</header>
<section><div class="left-panel">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT imie, nazwisko, ksiazki, url_ksiazka FROM autorzy ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imie = $row["imie"] . " " . $row["nazwisko"];
    $ksiazki = $row["ksiazki"];
    $url_ksiazka = $row["url_ksiazka"];
    
  
    echo "<p><h2>Warte uwagi w </h2>";
    echo "<p><h2>wolnej chwili:</h2>Autor książki: ". $imie . "</p>";
    echo "<p>Nazwa książki: " . $ksiazki . "</p>";
    echo '<img src="' . $url_ksiazka . '" alt="Zdjęcie"/>';
   } 
   else {
    
    echo "Brak wyników.";
  }



    ?>
    </div>
</section>


</body>
</html>