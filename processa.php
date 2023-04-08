
<?php 
$nome =$_POST["n"];
$senha =$_POST["s"];


$servername = "localhost";
$username = "id19693905_alisson";
$password = "Ca_9404394043";
$db = "id19693905_contatos";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO Usuario (Usuario, Senha)
VALUES ('$nome', '$senha')";

if ($conn->query($sql) === TRUE) {
  echo '<script>window.location.replace("https://test124578.000webhostapp.com/Agenda/");</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();
?>
<script src="script.js"></script>