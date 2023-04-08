<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Agenda-Cadastro</title>
</head>
<body>
    <h2>Agenda</h2><br><br><br>



<form action="add.php" method="post">
<div class="container-sm">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" name="n" placeholder="Nome">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="s" placeholder="Sobrenome">
        </div>
    </div><br><br>
    <div class="col-md-6">
        <input type="text" class="form-control" name="t" placeholder="Telefone"><br><br>
  </div>
</div>
<button id="bt" type="submit">Enviar</button>
</form>





</body>
</html>