<?php
  require_once("../class/DB.class.php");
  $db = new DB;
  session_start();

  //Percore todas as variaveis que forem passadas por post e get e convet as entidades html
  foreach ($_POST as $key => $value){$_POST[$key] = htmlentities(strip_tags(addslashes($value)), ENT_QUOTES);}
  foreach ($_GET as $key => $value){$_GET[$key] = htmlentities(strip_tags(addslashes($value)), ENT_QUOTES);}

  $typeRequest = (isset($_POST['typeRequest'])) ? $_POST['typeRequest'] : "undefined";
  switch($typeRequest){
    case "contact":
      $nome = (isset($_POST['nome'])) ? $_POST['nome'] : "";
      $email = (isset($_POST['email'])) ? $_POST['email'] : "";
      $assunto = (isset($_POST['assunto'])) ? $_POST['assunto'] : "Sem assunto";
      $mensagem = (isset($_POST['mensagem'])) ? $_POST['mensagem'] : "";
      if(empty($nome) OR empty($email) OR empty($mensagem)){
        return "Preencha todos os campos!";
      }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return "O e-mail informado é inválido!";
      }else{
        $sql = $db->con()->prepare("INSERT INTO nick_contato (nome, email, assunto, mensagem) VALUES (:nome, :email, :assunto, :mensagem)");
        $sql->bindValue("nome", $nome);
        $sql->bindValue("email", $email);
        $sql->bindValue("assunto", $assunto);
        $sql->bindValue("mensagem", $mensagem);
        echo ($sql->execute()) ? "1" : "Algo deu errado ao enviar seu formulário de contato, tente enviar-nos um e-mail manualmente para: contato@nickname.com.br";
      }
    break;
    case "login":
      $email = (isset($_POST['email'])) ? $_POST['email'] : "";
      $senha = (isset($_POST['senha'])) ? $_POST['senha'] : "";
      if(empty($email) OR empty($senha)){
        return "Preencha todos os campos!";
      }else{
        $sql = $db->con()->prepare("SELECT email, senha FROM nick_usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();
        if($sql->rowCount() == 1){
          $_SESSION['nick_email'] = $email;
          $_SESSION['nick_senha'] = $senha;
          echo "1";
        }else{
          return "E-mail e/ou senha inválidos.";
        }
      }
    break;
    case "register":
      $nome = (isset($_POST['nome'])) ? $_POST['nome'] : "";
      $email = (isset($_POST['email'])) ? $_POST['email'] : "";
      $senha = (isset($_POST['senha'])) ? $_POST['senha'] : "";
      $rSenha = (isset($_POST['rSenha'])) ? $_POST['rSenha'] : "";
      $domainEmail = explode("@", $email);
      if(empty($nome) OR empty($email) OR empty($senha) OR empty($rSenha)){
        return "Preencha todos os campos!";
      }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return "O e-mail informado é inválido!";
      }else if($senha != $rSenha){
        return "As senhas não conferem!";
      }else if(strlen($nome) > 60){
        return "O nome informado é muito extenso.";
      }else if(strlen($nome) < 5){
        return "O nome informado é muito pequeno.";
      }else if(strlen($email) > 50){
        return "O e-mail informado é muito extenso.";
      }else if(strlen($senha) > 20){
        return "A senha informada é muito extensa.";
      }else if(strlen($senha) < 8){
        return "A senha informada é muito pequena.";
      }else{
        $sqlE = $db->con()->prepare("SELECT email FROM nick_usuarios WHERE email = :email");
        $sqlE->bindValue("email", $email);
        $sqlE->execute();
        if($sqlE->rowCount() > 0){
          return "O e-mail já consta em nosso banco de dados.";
        }else{
          $sql = $db->con()->prepare("INSERT INTO nick_usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
          $sql->bindValue("nome", $nome);
          $sql->bindValue("email", $email);
          $sql->bindValue("senha", $senha);
          echo ($sql->execute()) ? "1" : "Algo deu errado ao registrá-lo, tente novamente mais tarde.";
        }
      }
    break;
    default:
      return "Algo deu errado, tente novamente mais tarde.";
    break;
  }
