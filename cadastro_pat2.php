<?php
session_start();
   if($_SESSION["nome"] == null) {
    header("location:login.php?x=Tentativa de invasão");
   }
   $nome = $_SESSION["nome"];
?>
<html lang="pt-br" data-bs-theme="auto">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro Produto</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
    
  </head>
  <body class="bg-body-tertiary"> 
    
    <?php
$nome = $email = $genero = $telefone = $cpf = $endereco = $tipo = $senha = $foto = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nome = $_POST["nome"];
  $preco = $_POST["preco"];
  $origem = $_POST["origem"];
  $identificacao = $_POST["identificacao"];
  $endereco = $_POST["endereco"];
  $nomer = $_POST["nomer"];
  $telefone = $_POST["telefone"];
  $foto = $_POST["foto"];

  if (true) {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "banco_patrimonio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `tp_produtos`(`nome`, `preco`, `origem`, `identificacao`, `local_guardado`, `nomereg`, `telefone`, `foto`) 
        VALUES ('$nome','$preco','$origem','$identificacao','$endereco','$nomer','$telefone','$foto')";

if ($conn->query($sql) === TRUE) {
  echo "Cadastrado com sucesso";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
}
?>

  <nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
      <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 justify-content-between">
          <li class="nav-item"><a class="nav-link" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
          </a></li>
          <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="cadastro_pat.php">Voltar</a></li>
          <svg class="bi" width="24" height="24"><use xlink:href="#cart"/></svg>
          </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="container">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="imagens/img.png" alt="" width="77" height="77">
      <h2>Cadastro</h2>
      <p class="lead">Preencha corretamente os dados do produto.</p>
    </div>

      <div class=" text-center">
        <h4 class="mb-3">Informaçoes</h4>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="row g-3">
            <div class="col-sm-6">
            <label for="nome">Nome do produto</label>
            <input type="text" class="form-control" id="nome" placeholder="" name="nome">
            </div>

            <div class="col-sm-6">
              
            <label for="user">Preço</label>
            <input type="text" class="form-control" id="preco" placeholder="" name="preco">
              
            </div>

            <div class="col-12">
            <label for="email">Origem</label>
            <input type="text" class="form-control" id="origem" placeholder="" name="origem">
            </div>

            <div class="col-12">
            <label for="endereco">Local em que esta o produto</label>
            <input type="text" class="form-control" id="endereco" placeholder="" name="endereco">
            </div>

            <div class="col-md-4">
            <label for="telefone">Identificação do produto</label>
            <input type="text" class="form-control" id="identificacao" placeholder="" name="identificacao">
            </div>

            <div class="col-md-4">
            <label for="cpf">Telefone</label>
            <input type="text" class="form-control" id="telefone" placeholder="" name="telefone">
          </div>

            <div class="col-md-4">
            <label for="cpf">Nome de quem esta registrando</label>
            <input type="text" class="form-control" id="nomer" placeholder="" name="nomer">
          </div>

          

          <hr class="my-4">

            <div class="mb-3 col-md-12">
            <label  for="formFile" class="form-label">Foto</label>
            <input name="foto" class="form-control" type="file" id="foto">
            </div>
          </div>

          <hr class="my-4">

          <input col-md-6 col-sm-6 col-xs-12 class="btn btn-primary w-100 py-2" type="submit" name="enviar" value="Cadastrar Produto">
        </form>
      </div>
    </div>
  </main>

  <footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="20"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-body-secondary">&copy; 2024–2024</small>
    </div>
    <div class="col-6 col-md">
      <h5>Inicio</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="#">Pagina Incial</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Informaçoes</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Registro</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="cadastro_user.php">Cadastro</a></li>
        <li><a class="link-secondary text-decoration-none" href="login.php">Login</a></li>
       
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Contato</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="sobre.php">Filipi Biazoto</a></li>
        <li><a class="link-secondary text-decoration-none" href="https://www.sou.unipinhal.edu.br/">Unipinhal</a></li>
        <li><a class="link-secondary text-decoration-none" href="sobre.php"> Mat Progamação 2</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Sobre</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="sobre.php">Sobre o site</a></li>
      </ul>
    </div>
  </div>
</footer>
</html>