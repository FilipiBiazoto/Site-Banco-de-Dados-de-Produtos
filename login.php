
<!doctype html>
<html lang="pt-br" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </head>
  <body >

<nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
      <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 justify-content-between">
          <li class="nav-item"><a class="nav-link" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
          </a></li>
          <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="cadastro_user.php">Cadastro</a></li>
            <svg class="bi" width="24" height="24"><use xlink:href="#cart"/></svg>
          </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $senha = test_input($_POST["senha"]);
  $email = test_input($_POST["email"]);


$email = test_input($_POST["email"]);
$senha = test_input($_POST["senha"]);

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

$sql = "SELECT * FROM tb_usuarios WHERE email = '".$email."' and senha = '".$senha."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Fez login";
  }
 else {
  echo "Nome e senha invalido";
}
$conn->close();
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<main class="form-signin w-100 m-auto">
    <br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1 class="h3 mb-3 fw-normal text-lg-center">Entre com seu cadastro</h1>
<br><br><br>
    <div class="form-floating col-md-6 col-sm-6 col-xs-12  ">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <br>
    <div class="form-floating col-md-6 col-sm-6 col-xs-12">
      <input required name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Senha</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Lembre-me
      </label>
    </div>
    <button col-md-6 col-sm-6 col-xs-12 class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
  </form>
</main>
  
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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

    </body>
</html>
