<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Nickname - Login/Register</title>

    <link rel="shortcut icon" href="lib/images/favicon.jpeg" />
    <link rel="stylesheet" href="lib/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="lib/css/geral.css" />
    <link rel="stylesheet" href="lib/css/auth.css" />
  </head>
  <body>
    <?=get_header()?>
    <div id="main">
      <div id="content">
        <form action="javascript:void()" id="form-login" method="post" class="col s12">
          <div class="input-field col s12">
            <input id="email-login" type="email" class="validate" />
            <label for="email-login">Seu e-mail</label>
          </div>
          <div class="input-field col s12">
            <input id="senha-login" type="password" class="validate" />
            <label for="senha-login">Sua senha</label>
          </div>
          <input type="submit" id="submit" class="btn" value="Entrar" /><span class="show" data-box="register">Não possuo conta.</span>
        </form>
        <form action="javascript:void()" id="form-register" method="post" class="col s12">
          <div id="message"></div>
          <div class="row">
            <div class="input-field col s12">
              <input id="nome-register" type="text" class="validate" />
              <label for="nome">Seu nome</label>
            </div>
            <div class="input-field col s12">
              <input id="email-register" type="email" class="validate" />
              <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
              <input id="senha-register" type="password" class="validate" />
              <label for="senha-register">Senha</label>
            </div>
            <div class="input-field col s12">
              <input id="rSenha-register" type="password" class="validate" />
              <label for="rSenha-register">Repita a Senha</label>
            </div>
          </div>
          <input type="submit" id="submit" class="btn" value="Registrar" /><span class="show" data-box="login">Já possuo conta.</span>
        </form>
      </div>
    </div>
    <script src="lib/js/jquery.js"></script>
    <script src="lib/js/materialize.min.js"></script>
    <script src="lib/js/scripts.js"></script>
    <script src="lib/js/auth.js"></script>
  </body>
</html>
