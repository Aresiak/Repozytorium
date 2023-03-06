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
  
<?php include_once './component/navbar.php' ?>

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
    
      


    <?php include_once './component/ikonalogowanie.php' ?>
</div>
<div class="right-panel"> 
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $ksiazki = 'ksiazki';
  $sql = "SELECT COUNT($ksiazki) as count from autorzy";
  
  $result = mysqli_query($conn, $sql);
  $count = mysqli_fetch_assoc($result);
  echo $count['count'];
?>
    </div> 
    </section>
</body>
</html>