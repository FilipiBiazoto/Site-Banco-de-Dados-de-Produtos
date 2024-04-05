<?php
session_start();
   if($_SESSION["nome"] == null) {
    header("location:login.php?x=Tentativa de invasão");
   }

   $nome = $_SESSION["nome"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sair</title>
</head>
<body>
<?php
session_unset();
session_destroy();
header("location:index.php");
?>

</body>
</html>