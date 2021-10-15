<?php


include('conexao.php');

if(isset($_POST['user']) || isset($_POST['password'])){
    if(strlen($_POST['user']) == 0){
      echo"Preencha seu email";
    }else if(strlen($_POST['password']) == 0){
      echo"Preencha sua senha";
    }
    else{
  
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
        
        if($_SESSION['isAdmin'] ){
            header("Location:painel_admin.php");

        }else{
            header("Location: painel_empresas.php");
        }
        
        
      }else{
          header("Location:admin.php");
      }
      
    }
  }
  
?>



