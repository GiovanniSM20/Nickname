<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>Nickname - Contato</title>
	<link rel="shortcut icon" href="lib/images/favicon.jpeg" />

    <link rel="stylesheet" href="lib/css/materialize.min.css" />
    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <link rel="stylesheet" href="lib/css/geral.css" />
    <link rel="stylesheet" href="lib/css/contact.css" />
  </head>
  <body>
    <?=get_header() ?>
    <div id="main">
      <h1 id="section-title">Contato</h1>
      <div id="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2>Você pode tentar: </h2>
        <p>Enviar um e-mail para nós: <strong>email@mail.com</strong>;</p>
        <p>Enviar uma mensagem para nosso WhatsApp: <strong>(99) 9 9999-9999</strong>;</p>
        <p>Ou, se preferir, pode utilizar o formulário de contato abaixo. Lembre-se que <strong>todos</strong> os campos são de preenchimento obrigatório.</p>
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input id="name" type="text" class="validate input-field">
              <label for="name">Nome</label>
            </div>
        </form>
      </div>
    </div>
    <script src="lib/js/jquery.js"></script>
    <script src="lib/js/materialize.min.js"></script>
    <script src="lib/js/scripts.js"></script>
  </body>
</html>
