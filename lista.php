<?php
session_start();
   if($_SESSION["nome"] == null) {
    header("location:login.php?x=Tentativa de invasão");
   }
   $nome = $_SESSION["nome"];
?>
<!doctype html>
<html lang="pt-br" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </head>
  <body >

  <?php
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

$sql = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["btnordemAZ"])){
      $sql = "SELECT * FROM tp_produtos ORDER BY nome";
    }
    if(isset($_POST["btnordemZA"])){
      $sql = "SELECT * FROM tp_produtos ORDER BY nome DESC";
    }
    if(isset($_POST["precoMa"])){
      $sql = "SELECT * FROM tp_produtos ORDER BY preco DESC";
    }
    if(isset($_POST["precoMe"])){
      $sql = "SELECT * FROM tp_produtos ORDER BY preco";
    }
    if(isset($_POST["buscar"])){
      if(!empty($_POST["busca"])){
        $palavra = $_POST["busca"];
        $sql = "SELECT * FROM tp_produtos WHERE nome LIKE '%$palavra%' ORDER BY nome";
      }
      else {
        $sql = "SELECT * FROM tp_produtos ORDER BY id DESC ";
      }
    }
}else {
  $sql = "SELECT * FROM tp_produtos ORDER BY id DESC ";
}
$result = $conn->query($sql);
?>


<nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
      <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 justify-content-between">
          <li class="nav-item"><a class="nav-link" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
          </a></li>
          <li class="nav-item"><a class="nav-link" href="#">Bem vindo: <?php echo $nome ?> </a></li>
          <li class="nav-item"><a class="nav-link" href="cadastro_pat2.php">Cadastrar Produto</a></li>
          <li class="nav-item"><a class="nav-link" href="cadastro_pat.php">Voltar</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
            <svg class="bi" width="24" height="24"><use xlink:href="#cart"/></svg>
          </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="container">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Filtros: <input class="btn btn-secondary m-1" type="submit" name="btnordemAZ" value="Ordem Alfabetica">
  <input class="btn btn-secondary m-1" type="submit" name="btnordemZA" value="Ordem Alfabetica Contrario">
  <input class="btn btn-secondary m-1" type="submit" name="precoMa" value="Preço Maior">
  <input class="btn btn-secondary m-1" type="submit" name="precoMe" value="Preço Menor">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <input class="btn btn-secondary" type="search" name="busca" placeholder="Palavra Chave"> <input class="btn btn-secondary" type="submit" name="buscar" value="Pesquisar">
</form>
</div>

<table class="table table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Identificação</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Origem</th>
      <th scope="col">Local Guardado</th>
    </tr>
  </thead>
  <tbody>
  <?php

    while($user_data = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$user_data['identificacao']."</td>";
    echo "<td>".$user_data['nome']."</td>";
    echo "<td>".$user_data['preco']."</td>";
    echo "<td>".$user_data['origem']."</td>";
    echo "<td>".$user_data['local_guardado']."</td>";
    }
  ?>  
  </tbody>
</table>


</table>


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
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>
