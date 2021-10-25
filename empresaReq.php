<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles/style.css" />
  <link rel="stylesheet" href="./styles/medias.css" />
  <script src="https://kit.fontawesome.com/710ee36645.js" crossorigin="anonymous"></script>
  <link href="assets/logo.png" rel="icon" />
  <title>Entre em contato</title>
</head>

<body style=" overflow-x: hidden;">
  <div class="loading">
    <img src="./assets/logo.png" alt="carregando...">
  </div>
  <div class="content" style="visibility: hidden;">
    <header>
      <div class="header-wrapper">
        <div class="logo-wrapper">
          <a href="index.php"> <img src="./assets/logo.png" alt="feti" id="logo" /></a>
        </div>
        <div class="hamburguer-menu">
          <span class="hamb-lines"></span>
          <span class="hamb-lines"></span>
          <span class="hamb-lines"></span>
        </div>
        <div class="menu-wrapper">
          <ul class="menu-wrapper-ul">
            <a href="index.php">
              <li class="after">Home</li>
            </a>
            <a href="sobreNos.html">
              <li class="after">Sobre Nós</li>
            </a>
            <a href="contact.html">
              <li class="after">Contato</li>
            </a>
            <a href="editais.html">
              <li>Editais</li>
            </a>
            <a href="regimentos.html">
              <li>Legislação</li>
            </a>
            <a href="bancoTalentos.html">
              <li>Banco de talentos</li>
            </a>
          </ul>
        </div>
      </div>
    </header>

    <main id="main-bt">
    

      <div class="form-title">
        <h1>Sou uma empresa!</h1>
        <p>Nos informe o que precisa e aguarde contato!</p>
      </div>

        <div class="form">
        <form action="cadEmpresaInfo.php" method="POST"class="pcd-register-form">
          <div class="input-group">
            <label for="name">Nome</label>
            <input type="text" id="name"name="name"placeholder="ex: EmpresaXYZ"  title="Insira seu nome completo"required>
          </div>

          <div class="input-group">
            <label for="age">Assunto</label>
            <input type="text" id="assunto"name="assunto"placeholder="ex: Contratação de aprendizes" required>
          </div>

          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email"name="email"placeholder="ex: empresaxyz@gmail.com" required>
          </div>

          <div class="input-group">
            <label for="cel">Celular</label>
            <input type="text" id="cel"name="cel"placeholder="ex: (34) 99999-9999" required>
          </div>

          <div class="input-group">
            <label for="msg">Mensagem</label>
            <textarea name="msg" id="msg" cols="30" rows="5" placeholder="ex: Quero contratar 2 aprendizes..."></textarea>
          </div>

          <button class="register-form-btn btn">Enviar</button>
          <a href="bancoTalentos.html"><button type="button" class= "register-form-btn btn">Voltar</button></a>
        </form>
        </div>
      
    </main>
    <script src="script.js"></script>
</body>

</html>