<?php
  require 'conexao.php';
  $idEmpresa = $_GET['user'];

  $sql = "SELECT * FROM `empresas_cadastradas` WHERE id=$idEmpresa";
  $result = $empresas_cadastradas_conn->query($sql);
  $row = $result->fetch_row();
  $nome = $row[1];
  $responsavel = $row[2];
  $celular = $row[3];
  $ativa = $row[4];

  if(isset($_POST['nome'])) {
      $nome = $_POST['nome'];
      $responsavel = $_POST['responsavel'];
      $celular = $_POST['cel'];
      $ativa = $_POST['ativa'];

      echo $nome, $responsavel, $celular, $ativa;

      $ativa === 'sim' ? $ativa = 1 : $ativa = 0;
      echo $ativa;


      $sql = "UPDATE `empresas_cadastradas` SET `Nome`='$nome',`responsavel`='$responsavel',`celular`='$celular',`ativa`=$ativa WHERE `id`=$idEmpresa";
      $query = $empresas_cadastradas_conn->query($sql);

      if ($query) {
        header("Location: showEmpresas.php");
      } else {
        echo 'false';
      }
  }
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles/style.css" />
  <link rel="stylesheet" href="./styles/medias.css" />
  <link href="assets/logo.png" rel="icon" />
  <title>Cadastro PCD</title>
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
            <a href="index.php"><li class="after">Home</li></a>
            <a href="sobreNos.html"><li class="after">Sobre Nós</li></a>
            <a href="contact.html"><li class="after">Contato</li></a>
            <a href="editais.html"><li>Editais</li></a>
            <a href="regimentos.html"><li>Legislação</li></a>
            <a href="cadastroPCD.html"><li>Banco de talentos PCD</li></a>
          </ul>
        </div>
      </div>
    </header>

      <div class="alarm-box" style=" position: absolute; right: -999px; transition: all 0.5s;">
        <p>Preencha todos os campos</p>
      </div>
    
    <main id="main-bt">
      <div class="form-title">
        <h1>Altere os dados de <?php echo $nome?></h1>
        <h2>Dados originais</h2>
        <h2>Nome: <?php echo $nome?></h2>
        <h2>Responsável: <?php echo $responsavel?></h2>
        <h2>Celular: <?php echo $celular?></h2>
        <h2>Ativa: <?php 
        if($ativa) {
          echo "sim";
          } else {
          echo "não";
        }?>
        </h2>
      </div>

      <div class="form">
        <form action="" method="POST"class="form">
          <div class="input-group">
            <label for="name">Nome</label>
            <input type="text" id="name"name="nome"placeholder="ex: EmpresaXYZ"  title="Insira seu nome completo"required>
          </div>

          <div class="input-group">
            <label for="age">Responsável</label>
            <input type="text" id="responsavel"name="responsavel"placeholder="Roberto Silva" min="14" required>
          </div>
          
          <div class="input-group">
            <label for="cel">Celular</label>
            <input type="text" id="cel"name="cel"placeholder="ex: (34) 99999-9999" required>
          </div>

          
          <div class="input-group radio-group">
            <label class="ativa-label">Ativa</label>
            <div class="ativa-box">
            <div class="align-input">
            <label for="nao">Sim</label>
            <input type="radio" name="ativa" id="nao" value="sim">
            </div>
            <div class="align-input">
            <label for="sim">Não</label>
            <input type="radio" name="ativa" id="sim"value="nao">
            </div>
            </div>
          </div>


          <button class="register-form-btn btn">Enviar</button>
          <a href="showEmpresas.php"><button type="button" class= "register-form-btn btn">Voltar</button></a>
        </form>
      </div>
    </main>
  </div>
  <script src="script.js"></script>
</body>
</html>