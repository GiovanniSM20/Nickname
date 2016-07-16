<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Nickname - Contato</title>
	<link rel="shortcut icon" href="lib/images/favicon.jpeg" />

    <link rel="stylesheet" href="lib/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="lib/css/geral.css" />
    <link rel="stylesheet" href="lib/css/contact.css" />
  </head>
  <body>
    <?=get_header() ?>
    <div id="main">

      <div id="content">
        <form action="javascript:void()" id="form-contact" method="post" class="col s12">
          <div id="message"></div>
          <div class="row">
            <div class="input-field col s6">
              <input id="nome" type="text" class="validate input-field" required="required">
              <label for="nome">Nome</label>
            </div>
            <div class="input-field col s6">
              <input id="email" type="email" class="validate input-field" required="required">
              <label for="email">E-mail</label>
            </div>
            <div class="input-field col s6">
              <input id="assunto" type="text" class="validate input-field">
              <label for="assunto">Assunto</label>
            </div>
            <div class="input-field col s12">
              <textarea id="mensagem" class="materialize-textarea validate" placeholder="Seja breve e objetivo." required="required"></textarea>
              <label for="mensagem">Mensagem</label>
            </div>
            <input type="submit" id="submit" class="btn" value="Enviar" />

			    </div>
        </form>
      </div>
    </div>
    <script src="lib/js/jquery.js"></script>
    <script src="lib/js/materialize.min.js"></script>
    <script src="lib/js/scripts.js"></script>
    <script src="lib/js/contact.js"></script>
  </body>
</html>
