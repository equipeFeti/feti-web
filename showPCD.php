<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles/style.css" />
  <link rel="stylesheet" href="./styles/medias.css" />
  <script src="https://kit.fontawesome.com/710ee36645.js" crossorigin="anonymous"></script>
  <link href="assets/logo.png" rel="icon" />
  <title>PCD'S</title>
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

    <main id="main-bt" class="main-showPCD">
      <div class="pcd-register-title">
        <h1>Conheça os PCD'S cadastrados no nosso banco de talentos</h1>
      </div>
      <div class="pcd-list">
        <?php
          require 'conexao.php';
        
          //Send CV 

          $formatoCurriculo = "pdf";

          $pcd_info_class = "pcd-info";
         
          $sql = "select * FROM pcd";
          $sqlCount = "select count id FROM pcd";

          $dados = $conn->query( $sql);
          $count = mysqli_num_rows($dados);

          
          if ($count == null) {
            echo
             "<h1 class="."anyPCD".">Ooops ! Parece que nenhum PCD foi cadastrado ainda :/ </h1>";
          }


          while ($linha = mysqli_fetch_assoc($dados)) {
            $nome = $linha['nome'];    
            $idade = $linha['idade'];    
            $email = $linha['email'];
            $cel = $linha['cel'];
            $curriculoName = $linha['cv_name'];
            
            
            echo 
            "<div class=$pcd_info_class>
              <div>
                <h1> $nome, $idade anos</h1>
                <h3>Email: $email</h3>
                <h3>Cel: $cel</h3>
              </div>
              <div class="."download-button-wrapper".">
                <a href="."./uploads/$curriculoName" ." class="."btn"." download=".$curriculoName ."> <button class="."btn-cv"."><i class="."fa fa-download"."></i> Download CV</button> </a>
              </div>
           </div>";
        }

        mysqli_close($conn);
        ?>
      </div>
    </main>
    <script src="script.js"></script>
</body>

</html>