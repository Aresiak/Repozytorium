<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Baza danych o pracownikach</title>
  <link rel="stylesheet" href="./firma.css">
</head>
<body>
  <div class="container">

    <div class="banner">
     <h1> Baza danych o pracownikach </h1>
    </div>

    <div class="left-panel"><h2>Informatycy poniżej roku 1975</h2>
      <table>
        <tr>
          <th>
            Imie
          </th>
          <th>
            Nazwisko  
          </th>
          <th>
            Pensja
          </th>
        </tr>
        <?php

          $host="localhost";
          $user = "root";
          $password = "";
          $dbname = "firma";

          
          $conn = mysqli_connect($host, $user, $password, $dbname);

          $select = mysqli_query($conn,"SELECT * FROM `informatycy` ORDER BY `pensja` DESC;"); //baza danych inf

          while ($display=mysqli_fetch_assoc($select)){
          echo'
          <tr> 
            <td>'.$display["imie"].'</td>
            <td>'.$display["nazwisko"].'</td>
            <td>'.$display["pensja"].'</td>
          </tr>
          ';


          }

        ?>
      </table>
    </div>

<div class="right-panel"> 
  <div class ="dane_sekretarek_container">
      <h2>Sekretarki firmy "Omega"</h2>
      <div class = "dane_sekretarek">
        <?php
          $i=1;
          $select = mysqli_query($conn,"SELECT `imie`, `nazwisko`, `pensja` FROM `sekretarki`");
          while($display_dane_sekretarek = mysqli_fetch_assoc ($select)) {
            echo $i++.'. '.$display_dane_sekretarek["imie"].' '.$display_dane_sekretarek["nazwisko"]."<br>";
          
          }
      
          ?>
      </div>
    </div>
  <hr>  
  <div class="pensja_sekretarek_container">
    <div class = "pensja_sekretarek">
      <?php
        $select = mysqli_query($conn,"SELECT `imie`, `nazwisko`, `pensja` FROM `sekretarki` order by `pensja` DESC;");
        $display_dane_sekretarek = mysqli_fetch_assoc ($select);
        echo '<h4>Najwyższa pensja wynosi: '.$display_dane_sekretarek["pensja"].  ' zł</h4><br>';

        $select = mysqli_query($conn,"SELECT `imie`, `nazwisko`, `pensja` FROM `sekretarki` order by `pensja` ;");
        $display_dane_sekretarek = mysqli_fetch_assoc ($select);
        echo'<h4>Najniższa pensja wynosi: '.$display_dane_sekretarek["pensja"].  ' zł</h4><br>';

        $select = mysqli_query($conn,"SELECT FORMAT(AVG(`pensja`),'N2') as  pensja_AVG FROM `sekretarki` ");
        $display_dane_sekretarek = mysqli_fetch_assoc ($select);
        echo'<h4>Średnia pensja wynosi: '.$display_dane_sekretarek["pensja_AVG"].  ' zł</h4><br>';
        ?>
    </div>
  </div>
</div>

<div class="footer">Autor: 0000000000000000</div>
</body>
</html>


