$(function(){
  $('.show').on("click", function(){
    var form = "#form-"+$(this).data('box');
    $('form').fadeOut('fast', function(){
      $(form).fadeIn('fast');
    });
  });

  $('#form-login').on("submit", function(){
    var email = $('#email-login').val();
    var senha = $('#senha-login').val();
    if(email == "" || senha == ""){
      showMessageForm("Preencha todos os campos!", "error");
    }else{
      $.ajax({
        type: "post",
        url: "application/functions/ajax.php",
        data: {
          email: email,
          senha: senha,
          typeRequest: "login"
        },
        success: function(data){
          console.log(data);
          if(data == 1){

            window.location='dashboard';

          }else{
            showMessageForm(data, "error");
          }
        },
        error: function(){
          showMessageForm("Algo deu errado, verifique sua conexão com a internet e tente novamente.", "error");
        }
      });
    }
  });

  $('#form-register').on("submit", function(){
    var nome = $('#nome-register').val();
    var email = $('#email-register').val();
    var senha = $('#senha-register').val();
    var rSenha = $('#rSenha-register').val();
    var filter = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(nome == "" || email == "" || senha == ""){
      showMessageForm("Preencha todos os campos!", "error");
    }else if(filter.test(email) == false){
      showMessageForm("O e-mail informado é inválido!", "error");
    }else if(senha != rSenha){
      showMessageForm("As senhas não conferem!", "error");
    }else{
      $.ajax({
        type: "post",
        url: "application/functions/ajax.php",
        data: {
          nome: nome,
          email: email,
          senha: senha,
          rSenha: rSenha,
          typeRequest: "register"
        },
        success: function(data){
          if(data == 1){
            showMessageForm("Você foi cadastrado com sucesso, mas deve acessar seu e-mail para confirmar sua conta.", "success");
          }else{
            showMessageForm(data, "error");
          }
        },
        error: function(){
          showMessageForm("Algo deu errado, verifique sua conexão com a internet e tente novamente.", "error");
        }
      });
    }
  });
});
