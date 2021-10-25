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

    <main id="main-bt" class="main-showEmpresas">
      <div class="form-title">
        <h1>Empresas Cadastradas</h1>
      </div>
      <form action="" class="form" method="POST">
        <div class="input-group search">
          <div class="search-box">

            <input type="text" name="search" id="search">

            <div class="input-group radio-group search-group">
              <label class="ativa-label">Ativa</label>
              <div class="ativa-box">
                <div class="align-input">
                  <label for="nao">Sim</label>
                  <input type="radio" name="ativa" id="nao" value="sim">
                </div>
                <div class="align-input">
                  <label for="sim">Não</label>
                  <input type="radio" name="ativa" id="sim" value="nao">
                </div>
              </div>

            </div>

          </div>
          <button type="submit" class="btn search-btn">Buscar</button>
          <button type="submit" class="btn search-btn">
            < </i>
          </button>
      </form>

  </div>

  <div class="pcd-list">
    <?php
          require 'conexao.php';
          
          $pcd_info_class = "empresas-info";
          // Busca

          if (isset($_POST['search'])) {
            $busca = $_POST['search'];

            $sql = "SELECT * FROM empresas_cadastradas WHERE Nome LIKE '%$busca%'";
            

            if (isset($_POST['ativa'])) {
              $_POST["ativa"] === 'sim' ? $ativa = '1' : $ativa = '0';
              $sql = "SELECT * FROM empresas_cadastradas WHERE Nome LIKE '%$busca%' AND ativa=$ativa";
            }

            
            $dados = $empresas_cadastradas_conn->query($sql);
            $count = mysqli_num_rows($dados);
            echo "$count resultados encontrados";
         
            while ($linha = mysqli_fetch_assoc($dados)) {
              $nome = $linha['Nome'];    
              $responsavel = $linha['responsavel'];    
              $cel = $linha['celular'];
              $ativa = $linha['ativa'];
              $id = $linha['id'];
              
  
              $ativa ? $isChecked = 'sim': $isChecked = 'não';
              
              
              echo 
              "<div class=$pcd_info_class>
                <div>
                  <h1> $id, $nome</h1>
                  <h3> Responsável: $responsavel </h3>
                  <h3>Está ativa: $isChecked</h3>
                  <h3>Cel: $cel</h3>
                  <a href='empresaUpdate.php?user=$id' class='btn btn-edit'>Editar</a>
                </div>
               
             </div>";
            }
          } else {
         
          $sql = "select * FROM empresas_cadastradas";
          $sqlCount = "select count id FROM empresas_cadastradas";

          $dados = $empresas_cadastradas_conn->query( $sql);
          $count = mysqli_num_rows($dados);

          
          if ($count == null) {
            echo
             "<h1 class="."anyPCD"."> Ooops ! Parece que nenhuma empresa foi cadastrada ainda :/ </h1>";
          }


          while ($linha = mysqli_fetch_assoc($dados)) {
            $nome = $linha['Nome'];    
            $responsavel = $linha['responsavel'];    
            $cel = $linha['celular'];
            $ativa = $linha['ativa'];
            $id = $linha['id'];
            

            $ativa ? $isChecked = 'sim': $isChecked = 'não';
            
            
            echo 
            "<div class=$pcd_info_class>
              <div>
                <h1> $id, $nome</h1>
                <h3> $responsavel </h3>
                <h3>Está ativa: $isChecked</h3>
                <h3>Cel: $cel</h3>
                <a href='empresaUpdate.php?user=$id' class='btn btn-edit'>Editar</a>
              </div>
             
           </div>";
        }

        mysqli_close($empresas_cadastradas_conn);
        
      }
        ?>
  </div>
  </main>
  <script src="script.js"></script>
</body>

</html>