<?php


include('conexao.php');

$user_error;
$pass_error;

if(isset($_POST['user']) || isset($_POST['password'])){
    

    $user = $conn_login->real_escape_string($_POST['user']);
    $senha = $conn_login->real_escape_string($_POST['password']);
     
    
    $sql_code = "SELECT * FROM id WHERE usuario = '$user' AND senha = '$senha'";

    $query = $conn_login->query($sql_code) or die("falha a execução do código SQL:" . $conn_login->error);

    $quant_row = $query->num_rows;

    if($quant_row == 1 ){
      $user = $query->fetch_assoc();

      if(!isset($_SESSION)){
        session_start();
      }
      $_SESSION['user'] = $user['usuario'];
      $_SESSION['senha'] = $user['senha'];
      $_SESSION['isAdmin'] = $user['isAdmin'];
      
      
      header("Location:painel_admin.php");
    
    }
    else
    {
        $user_error = " <div class ='error'> Dados não encontrados </div> ";
    }
    
     
}
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./styles/medias.css" />
    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="error.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="assets/logo.png" rel="icon" />
    <script src="https://kit.fontawesome.com/710ee36645.js" crossorigin="anonymous"></script>
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
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="admin-form">
                    <div class="input-group">
                        <?php if (isset($user_error)) {
                            echo $user_error;
                        };?>
                        <label for="user">Usuário</label>
                        <input type="text" id="user" name="user" placeholder="Coloque seu usuário aqui" />
                    </div>
                    <div class="input-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" placeholder="Coloque a senha aqui" />
                    </div>

                    <button class="admin-send-btn btn">Entrar</button>
                </form>
            </div>
        </main>
    </div>
</body>
<script src="script.js"></script>

</html>