<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Cadastro</title>
</head>

<body>
  <?php

  require 'conexao.php';
 

  $curriculo = $_FILES['curriculo'];
  $isCurriculoExtensionRight = true;


  $extensao =  explode('.', $curriculo['name']);

  if ($extensao[1] != 'pdf') {
  $isCurriculoExtensionRight = false;
  };


  $name = $_POST['name'];
  $curriculoName = str_replace(' ', '', 'curriculo_'.$name.'.pdf'); 
  $age = $_POST['age'];
  $email = $_POST['email'];
  $cel = $_POST['cel'];

  $sql = "INSERT INTO `pcd`(`nome`, `idade`, `email`, `cel`,`cv_name`) VALUES ('$name','$age','$email','$cel', '$curriculoName')";
  
  ?>

  <div class="main-register-bd">
    <?php

      $link = "index.php";
      $errorLink = "cadastroPCD.html";
      $class = "return-box";

      if ($isCurriculoExtensionRight) {
        if (mysqli_query($conn, $sql) && move_uploaded_file($curriculo['tmp_name'], 'uploads/'.$curriculoName)) {
          
          echo 
          "<div class=" .$class. ">
            <h1>Pronto, você foi cadastrado !</h1>
            <p>Você pode esperar alguma empresa te contatar ou esperar as próxima inscrições da iniciação profissional !</p>
        
            <a href=". $link ."><button>Voltar</button></a>
          </div>";
    
          } else {
          echo 
          "<div class=" .$class. ">
            <h1>Ooops ! Parece que houve um problema</h1>
            <p>Lembre-se de que o formato do currículo deve ser em PDF</p>
        
            <a href=". $errorLink ."><button>Voltar</button></a>
          </div>";
          }
          
          
      } else {
       
          echo 
          "<div class=" .$class. ">
            <h1>Ooops ! Parece que houve um problema</h1>
            <p>Lembre-se de que o formato do currículo deve ser em PDF</p>
        
            <a href=". $errorLink ."><button>Voltar</button></a>
          </div>";
          }
          
          mysqli_close($conn);
    ?>
  </div>
</body>

</html>