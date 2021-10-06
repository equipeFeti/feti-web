
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./styles/medias.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link href="assets/logo.png" rel="icon" />
    <script
      src="https://kit.fontawesome.com/710ee36645.js"
      crossorigin="anonymous"
    ></script>
    <title>Admin</title>
  </head>

  <body>
    <div class="loading">
      <img src="./assets/logo.png" alt="carregando..." />
    </div>

    <div class="content" style="visibility: hidden">
      <header>
        <div class="header-wrapper">
          <div hrfe class="logo-wrapper">
            <a href="index.html">
              <img src="./assets/logo.png" alt="feti" id="logo" />
            </a>
          </div>
          <div class="hamburguer-menu">
            <span class="hamb-lines"></span>
            <span class="hamb-lines"></span>
            <span class="hamb-lines"></span>
          </div>
          <div class="menu-wrapper">
            <ul class="menu-wrapper-ul">
              <a href="index.html">
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
            </ul>
          </div>
        </div>
      </header>
      <main class="admin-wrapper">
        <div class="admin-logo">
            <img src="assets/logo1.png" id="logo-admin">
        </div>

        <div class="admin-form-wrapper">
          <form action="admin.php" method="POST" class="admin-form">
            <div class="input-group">

              <label for="name">Usuário</label>
              <input
                type="text"
                id="user"
                name="name"
                placeholder="Coloque seu usuário aqui"
              />
            </div>

            <div class="input-group">
              <label for="age">Senha</label>
              <input
                type="password"
                id="password"
                name="age"
                placeholder="Coloque a senha aqui"
              />
            </div>

            <button class="admin-send-btn btn">Entrar</button>

          </form>

          
          
          
          
          
          
        </div>
      </main>
    </div>
  </body>
  <script src="script.js"></script>
</html>