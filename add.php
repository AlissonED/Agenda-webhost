<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Agenda</title>
</head>
<body>
    
<h2>Lista de contatos</h2>
<div id="div"><br><br>
<?php 
$nome =$_POST["n"];
$sobrenome =$_POST["s"];
$telefone =$_POST["t"];


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


$sql = "INSERT INTO Agenda (Nome, Sobrenome, Telefone)
VALUES ('$nome', '$sobrenome', '$telefone')";

if ($conn->query($sql) === TRUE) {
  echo "Novo cadastro feito com êxito";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT ID, Nome, Sobrenome, Telefone FROM Agenda";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - Nome: " . $row["Nome"]. " - Sobrenome: " . $row["Sobrenome"]. " - Telefone: " .$row["Telefone"]. "<br>";
  }
} else {
  echo "A consulta retornou 0 resultados";
}


$conn->close();
?><br><br><br>
<a href="https://test124578.000webhostapp.com/Agenda/"><button>Cadastrar novo usuário</button></a><br><br>
</div>




</body>
</html>



