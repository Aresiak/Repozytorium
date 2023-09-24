<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekretariat</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="left">
        <h1>Akta Pracownicze</h1>
        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'firma');
        $num1 = "SELECT id,imie,nazwisko,adres,miasto,czyRODO,czyBadania FROM pracownicy WHERE id=2;";
        $num2 = mysqli_query($connect, $num1);
        while ($row = mysqli_fetch_array($num2)) {
            $rodo = ($row[5] == 1) ? 'podpisano' : 'niepodpisano';
            $badania = ($row[6] == 1) ? 'aktualne' : 'nieaktualne';

            echo "
            <h3>dane</h3>
            <p>$row[1] $row[2]</p>
            <hr/>
            <h3>adres</h3>
            <p>$row[3]</p>
            <p>$row[4]</p>
            <hr/>
            <p>RODO: $rodo</p>
            <p>Badania: $badania</p>";
        }

        $num1 = "SELECT COUNT(*) FROM pracownicy";
        $num2 = mysqli_query($connect, $num1);
        $row = mysqli_fetch_array($num2);
        echo "<hr/>
              <h3>Liczba zatrudnionych pracowników</h3>
              <p>$row[0]</p>";
        ?>
    </div>
    <div id="right">
    <?php
        $num1 = "SELECT id,imie,nazwisko FROM pracownicy WHERE id=2;";
        $num2 = mysqli_query($connect, $num1);
        while ($row = mysqli_fetch_array($num2)) {
            echo "<img src='$row[0].jpg' alt='pracownik'>
                  <h2>$row[1] $row[2]</h2>";
        }

        $num1 = "SELECT pracownicy.id, stanowiska.nazwa, stanowiska.opis FROM pracownicy, stanowiska WHERE pracownicy.stanowiska_id = stanowiska.id AND pracownicy.id = 2;";
        $num2 = mysqli_query($connect, $num1);
        while ($row = mysqli_fetch_array($num2)) {
            echo "<h4>$row[1]</h4>
                  <h5>$row[2]</h5>";
        }

        mysqli_close($connect);
        
        ?>
    </div>
    <div id="feet">
        Autorem aplikacji jest: 0000000000
        <ul>
            <li> Skontaktuj się</li>
            <li> Poznaj naszą firmę</li>
        </ul>
    </div>
</body>
</html>