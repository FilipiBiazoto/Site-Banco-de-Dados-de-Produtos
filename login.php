<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

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

<div  class="p-3 mb-2 bg-primary text-white text-lg-center">Acesso ao sistema</div>

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
</body>
</html>