<html lang="pt-br" data-bs-theme="auto">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
    
  </head>
  <body class="bg-body-tertiary">    

  <nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
      <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 justify-content-between">
          <li class="nav-item"><a class="nav-link" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
          </a></li>
          <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            <svg class="bi" width="24" height="24"><use xlink:href="#cart"/></svg>
          </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Cadastro</h2>
      <p class="lead">Preencha o formulario com seus dados para criar o cadastro em nosso sistema, depois faça o login para acessar o registro de patrimonio.</p>
    </div>

      <div class=" text-center">
        <h4 class="mb-3">Informaçoes pessoais</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="nome" class="form-label">Nome Completo<span class="text-body-secondary">(Obrigatorio)</span></label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="user" class="form-label">Nome de Usuario<span class="text-body-secondary">(Obrigatorio)</span></label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Obrigatorio)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="endereco" class="form-label">Endereço<span class="text-body-secondary">(Obrigatorio)</span></label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-4">
              <label for="genero" class="form-label">Genero</label>
              <select class="form-select" id="country" required>
                <option value="">Escolha</option>
                <option>Masculino</option>
                <option>Femenino</option>
                <option>Outro</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="telefone" class="form-label">telefone<span class="text-body-secondary">(Obrigatorio)</span></label>
              <input type="text" class="form-control" id="address" placeholder="(99)999999999" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-4">
              <label for="cpf" class="form-label">CPF ou CNPJ</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">
          <hr class="my-4">

          <h4 class="mb-3">Tipo de Cadastro</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Pessoa Fisica</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Pessoa Juridica</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-12">
              <label for="cc-name" class="form-label">Senha</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-body-secondary">Marque a senha, evite esqueçer</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>
            <div class="mb-3 col-md-12">
            <label for="formFile" class="form-label">Foto</label>
            <input class="form-control" type="file" id="formFile">
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
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