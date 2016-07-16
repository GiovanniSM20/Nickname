<?php
  require_once("../class/DB.class.php");
  $db = new DB;
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
    default:
      return "Algo deu errado, tente novamente mais tarde.";
    break;
  }
