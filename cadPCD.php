<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cadpcd.css">
  <title>Cadastro</title>
</head>

<body>
  <?php

  include 'conexao.php';

  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $cel = $_POST['cel'];

  $sql = "INSERT INTO `pcd`(`nome`, `idade`, `email`, `cel`) VALUES ('$name','$age','$email','$cel')";
  ?>

  <div class="main-register-bd">
    <?php

      $link = "index.html";
      $class = "return-box";

      if (mysqli_query($conn, $sql)) {
      echo "<div class=" .$class. ">
      <h1>Pronto, você foi cadastrado !</h1>
      <p>Você pode esperar alguma empresa te contatar ou esperar as próxima inscrições da iniciação profissional !</p>
    
      <a href=". $link ."><button>Voltar</button></a>
      </div>";
      } else {
      echo "<div class=" .$class. ">
      <h1>Ooops ! Parece que houve um problema</h1>
      <p>Você pode tentar novamente clicando no botão de voltar</p>
    
      <a href=". $link ."><button>Voltar</button></a>
      </div>";
      }
      
      mysqli_close($conn);
    ?>
  </div>
</body>

</html>