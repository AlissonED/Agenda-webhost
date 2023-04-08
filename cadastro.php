<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
	<title>Cadastro</title>
</head>
<body>
<div class="container-fluid" id="c1">
    <h1>Cadastrar novo usuário</h1>
</div><br>



    <br><br><br><br>
<form action="processa.php" method="POST">
<div  class="container-sm">
    <div class="row" >
        <div class="col">
            <input type="text" class="form-control" name="n" placeholder="Usuário">
        </div><br><br>

        <div class="input-group mb-3">
            <input type="password" class="form-control" name="s" id="s" onkeypress="return enviar(event)" placeholder="Senha">
            <button type="button" class="btn btn-secondary" onclick="mostrarSenha()">Mostrar senha</button>
        </div>
    </div><br><br>
    <div class="container">
   
    <button id="bt1" type="submit" class="btn btn-success">Cadastrar</button>
</div>
</div> 

</form>

<script src="script.js"></script>

</body>
</html>