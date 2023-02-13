<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteka internetowa</title>
  <link rel="stylesheet" href="./book1.css">
</head>
<body>

 <div class="article">

    <div class="header">
      <div class="banner">
        <h1> Biblioteka internetowa </h1>
      </div>
    </div>  
    <div id="gorna">
    
        <form action="" method="POST"> 
            <label for="authorlist">Wybierz autora:</label>
            <select id="authorlist" name="authorlist">
              
              <?php
              
                $servername="localhost";
                $username="root";
                $password="";
                $dbname="biblioteka";

                $conn = mysqli_connect($servername,$username,$password,$dbname);
            
                $sql ="Select DISTINCT imie,nazwisko FROM autorzy"; 
                $result = mysqli_query($conn,$sql);
                while($display_result=mysqli_fetch_assoc($result)){
                echo '<option value="'.$display_result['imie'].'">'.$display_result['imie'] .' ' . $display_result['nazwisko'].'</option>';
                };

        

              ?>
              
          </select>
        <input type="submit" value="Zatwierdź">
        </form>
    </div>
    <div id="dolna">
      <h3>Dostępne książki autora: </h3>
        <?php
        
        //autor
        $post_biblioteka_autorzy = $_POST["authorlist"];
        $sql ="Select nazwisko FROM autorzy WHERE imie = '$post_biblioteka_autorzy'"; 
        $result = mysqli_query($conn,$sql);
        $display_result=mysqli_fetch_assoc($result);
        echo '<h3>'.$post_biblioteka_autorzy.' '.$display_result["nazwisko"]."</h3><br>";

        //ksiazki
        $sql ="Select książka , cena from autorzy WHERE imie = '$post_biblioteka_autorzy';";
        $result = mysqli_query($conn,$sql);
        while($display_result=mysqli_fetch_assoc($result)){
          echo '<h3>'.$display_result["książka"].'</h3> - cena za wypożyczenie '.$display_result['cena'].' zł <br>';
          
        }
        ?>
      
    </div>

  </div>
  </body>
</html>