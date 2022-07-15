<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo/estilo.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>MEADOTE</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">MEADOTE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quemsomos.php">Quem somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato.php">Contato</a>
              </li>
            </ul>
            <div id="logo">
            <a href="login.php" class="btn btn-success">Login</a>
            <a href="#" class="btn btn-danger">Cadastre-se</a>
            </div>
        </div>
        </div>  
      </nav>
    <main>
        <h1>Quero adotar</h1>
        <p>Preencha esse formulario para dar sequencia no processo de adoção.</p>
    <div class="d-flex justify-content-center">
    <form id="form2" method="post" action="">
    <?php
   include("verifica.php");
   $objeto = new Mensagem;
   $objeto->recebeMensagem();
   ?>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required name="nomeCompleto">
            <label for="floatingInput">Nome Completo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required name="email"> 
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="tel" class="form-control" id="floatingInput" placeholder="name@example.com" required name="telefone">
            <label for="floatingInput">Telefone</label>
        </div>
        <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 80px" required name="msg"></textarea>
        <label for="floatingTextarea2">Fale um pouco sobre você.</label>
        </div>
        <input type="submit" value="Enviar" class="btn btn-success" id="btnEnviar" name="btnEnviar">
        <input type="reset" value="Limpar" class="btn btn-danger" id="btnLimpar" name="btnLimpar">
    </form>
    </div>
    </main>
    <div class="row align-items-end">
    <div class="col">
    <footer>
      &copy;MEADOTE-2022
    </footer>
    </div>
</body>
</html>