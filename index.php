
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

<div class="container-fluid" id="c1">
    <h1>SEJA BEM-VINDO</h1>
</div><br>

<h2 id="t1">Login</h2><br><br><br>
<form action="index.php" method="post" onsubmit="submitForm(event)">
<div class="container-sm">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" name="n" placeholder="Usuário">
        </div><br><br>

        <div class="input-group mb-3">
            <input type="password" class="form-control" name="s" id="s" placeholder="Senha">
            <button type="button" class="btn btn-secondary" onclick="mostrarSenha()">Mostrar senha</button>
        </div>
    </div><br><br>
    <div class="container">
   
    <button id="bt1" type="submit" name="submit" class="btn btn-success">Login</button>
</div>
</div> 
</form>
<div class="container">
    <a href='https://test124578.000webhostapp.com/Agenda/cadastro.php'><button class="btn btn-warning btn-sm" id="bt2">Cadastre-se aqui</button></a>
</div>

<?php 
if(isset($_POST['submit'])){
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

$sql = "SELECT * FROM Usuario WHERE Usuario='$nome' AND Senha='$senha'; ";
$result = $conn->query($sql);

if($result->num_rows === 1){
    echo '<script>window.location.replace("https://test124578.000webhostapp.com/Agenda/salvar-contato.php");</script>';
} else {
    include 'erro.php';
    
}

$conn->close();
}
?>


<script src="script.js"></script>

</body>
</html>