<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel </title>
    <link rel="stylesheet" href="./projekt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-+uDmivQZZEZfDRm1XmWnNNmKpBdOM1q20pxssIB51DxUVC0EhY1Oq3euK+s9rx6LJS+kgQOpyzZ5wOEB5EG5dw==" crossorigin="anonymous" />
		
</head>
<body>
<style>
table {
  border-collapse: collapse;
  width: 98%;
  margin: 0 1%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: gray;
  color: white;
}

.message-info {
  display: none;
}

.message-link {
  cursor: pointer;
  color: #337ab7;
}

.delete-link {
  color: red;
  margin-left: 10px;
}

tr:hover .message-info {
  display: block;
}
.message {
  background-color: rgb(166, 162, 162);
  color: white;
  font-size: 22px;
  margin: 20px auto;
  max-width: 600px;
  padding: 10px;
  text-align: center;
}

</style>
<?php include_once './component/navbar.php' ?>
<?php include_once './component/sqlconnect.php' ?>
<?php
if (isset($_GET['delete']) && !empty($_GET['delete'])) {
  $delete_id = $_GET['delete'];
  $delete_query = mysqli_query($conn, "DELETE FROM panelkontaktowy WHERE id='$delete_id'");
  if ($delete_query) {
    $message = "Wiadomość została usunięta.";
  } else {
    $message = "Wystąpił błąd podczas usuwania wiadomości.";
  }
}

// pobranie danych z bazy danych
$result = mysqli_query($conn, "SELECT id, name, message, date FROM panelkontaktowy");

// wyświetlenie danych na stronie internetowej
echo "<table>";
echo "<tr><th>Name</th><th>Message</th><th>Date</th><th>Action</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row['name']."</td>";
  echo "<td>" . $row['message'] . "</td>";
  echo "<div class='message-info'><p><strong>Message:</strong> ".$row['message']."</p>";
  echo "<p><strong>Date:</strong> ".$row['date']."</p>";
  echo "<a href='?delete=".$row['id']."' class='delete-link'>Delete</a></div>";
  echo "</td>";
  echo "<td>".$row['date']."</td>";
  echo "<td><a href='?delete=".$row['id']."' class='delete-link'>Delete</a></td>";
  echo "</tr>";
}
echo "</table>";
if (!empty($message)) {
    echo '<div class="message">' . $message . '</div>';
  }
// zamknięcie połączenia z bazą danych
mysqli_close($conn);
?>

<?php include_once './component/ikonalogowanie.php' ?>
</body>
</html>